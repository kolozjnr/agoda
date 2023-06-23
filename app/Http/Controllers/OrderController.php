<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders')
        ->where([
            //["subscription_status", "=", "Active"],
            ["order_status", "=", "0"],
            ["order_qty", ">", "0"]])->limit('1')->inRandomOrder()->get();

            return view("user.show-orders", compact("orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add-order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //store order
        
        
        $order = $request->all();

        if($image = $request->file('order_file')){
            $destination = 'orders';
            $profileImage = 'orders/'.date('YmdHis'). "." . $image->getClientOriginalExtension();
            $image->move(public_path('orders'), $profileImage);
            $order['order_file'] = $profileImage;
        }
//dd($order);
        
        //f($request->file('order_file')){
        //     $user_id = Auth::user()->id;
        //     // $fileName = time().'_'.$request->file->getClientOriginalName();
        //     // $filePath = $request->file('file')->storeAs('orders', $fileName, 'public');

        //     // $order->order_file = time().'_'.$request->file->getClientOriginalName();
        //     // $order->order_file = '/storage/' . $filePath;
            
        //     $order->user_id = $user_id;
        //     //$order->order_name = $request->name;
        //     $order->order_desc = $request->order_desc;
        //     //$post->loc = "Not Relevant";
        //     $order->order_no = $rand;
        //     //$order->name = $request->name;
        //     $order->order_price = $request->price;
        //     $order->order_status = "0";
        //     $order->order_qty = $request->qty;
        //    //$post->state = $request->state;
        //    // $post->lga = $request->lga;
        //     $order->order_com = $request->commission;
        //     dd($request);
    
            order::create($order);
            return back()->with('success', 'Task Created Successfully');
           // return response()->json(['success'=>'Successfully uploaded.']);
       // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateorinsert(Request $request){
        $id = Auth::user()->id;
        $check_task = User::where('id', $id)->select('task_completed','balance','lock_status','trial_balance','current_level','reset_status', 'hold_user')->first();
        //dd($check_task->balance);
        $hold_status = $check_task->hold_user;
        $currentBalance = $check_task->balance;
        $updatedBalance = $currentBalance + ($currentBalance * 0.000035);
        $earn = $currentBalance * 0.00035;
        
        $currentTrialBalance = $check_task->trial_balance;
        $updatedTrialBalance = $currentTrialBalance * 0.00035;
        $justdoit = 0.4;
        //$justreset = 0.01;

        //Reset Balance
        //reset balance
        $resetBalance = $check_task->trial_balance;
        $updatedResetBalance = $resetBalance * 0.0009;
        //dd($updatedTrialBalance);
        //dd($updatedBalance);
        if($check_task->current_level == 0){
            if($check_task->lock_status == 1){
                return back()->with('warning', 'Kindly Upgrade to next Level for more Orders');
            }elseif($check_task->task_completed >= 38){
                return back()->with('warning', 'You have exceeded your task limit, Kindly withdraw your current balance and upgrade to next Level for more Orders');
            }elseif($check_task->task_completed>= $hold_status){
                return back()->with('error','You need to fund your account to continue submitting orders');
            }elseif($check_task->reset_status == 1){
                //dd($check_task->reset_status);
                $user = User::findOrFail($id);

                $user->increment('task_completed');
                $user->balance = $user->balance + $updatedResetBalance;
                $user->earnings = $user->earnings + $updatedResetBalance;
                //dd($updatedTrialBalance);
                $user->save();

                $order_id = $request->order_id;
                DB::table('orders')
            ->where('id', $order_id)
            ->update([
                'order_qty' => DB::raw('order_qty -1'),
                //'next_task' => DB::raw('current_task + 1')
            ]);
    
    
                //return response()->json(['success'=>'Successfully updated.']);
                return redirect('/task')->with('success', "Order Succesfully Submitted");

            }else{
            
                $user = User::findOrFail($id);

                $user->increment('task_completed');
                $user->balance = $user->balance + $justdoit;
                $user->earnings = $user->balance + $justdoit;
                //dd($updatedTrialBalance);
                $user->save();

                $order_id = $request->order_id;
                DB::table('orders')
            ->where('id', $order_id)
            ->update([
                'order_qty' => DB::raw('order_qty -1'),
                //'next_task' => DB::raw('current_task + 1')
            ]);
    
    
                //return response()->json(['success'=>'Successfully updated.']);
                return redirect('/task')->with('success', "Order Succesfully Submitted");
            }
        }
        else
        {
            if($check_task->lock_status == 1){
                return back()->with('warning', 'Kindly Upgrade to next Level for more Orders');
            }elseif($check_task->task_completed >= 38){
                return back()->with('warning', 'You have exceeded your task limit, Kindly withdraw your current balance and upgrade to next Level for more Orders');
            }else{
            
                DB::table('users')
                ->where('id', $id)
                ->update([
                    'task_completed' => DB::raw('task_completed +1'),
                    'balance' => $updatedBalance,
                    'earnings' => DB::raw('earnings + ' . $earn)
                ]);
                    //dd($earn);
                $order_id = $request->order_id;
                DB::table('orders')
            ->where('id', $order_id)
            ->update([
                'order_qty' => DB::raw('order_qty -1'),
                //'next_task' => DB::raw('current_task + 1')
            ]);


                //return response()->json(['success'=>'Successfully updated.']);
                return redirect('/task')->with('success', "Order Succesfully Submitted");
            }
        }
    }
}
