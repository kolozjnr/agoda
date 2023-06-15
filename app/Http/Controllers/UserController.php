<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('user.all-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = User::find($id);
        $update->update([
            'current_level' => DB::raw('current_level +1'),
        ]);
        return back()->with('success', 'User level upgraded to next level');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getBanned(Request $request, string $id)
    {
        $update = User::find($id);
        $update->lock_status = '1';
        $update->save();
       
        return back()->with('success', 'User locked out');
    }
    
    
    public function release(Request $request, string $id)
    {
        $update = User::find($id);
       
        $update->lock_status = '0';
        $update->save();
        return back()->with('success', 'User Unlocked');
    }

    public function recharge(Request $request, string $id)
    {
        $update = User::find($id);
       
        $update->balance = $request->topUp;
        //dd($request->topUp);
        $update->save();
        return back()->with('success', 'Recharge Successfull');
    }

    public function reset(Request $request, string $id){
        $reset = User::find($id);

        $reset->task_completed = '0';

        $reset->save();
        return back()->with('success', 'Task reset Succesfully');
    }
   

    public function getSecurity(){
        return view("user.security");
    }
    public function postSecurity(Request $request){
        $id = auth()->user()->id;
        $user = User::where('id', $id)->select(['password','withdraw_type'])->first();

        $password = Hash::make($request->password);
        if($password === $user->password){
            if($request->pin === $request->confirm_pin){
                $pin = $request->pin;

                $insetPin = new User;
                $insetPin->withdraw_type = $pin;
                $user->save();
                
            }
            else{
                return back()->with("error","Your pin did not match your Confirm Pin");
            }
        }
        else{
            return back()->with("error","Your password did not match your Login Password");
        }

    }
}
