<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLockController extends Controller
{
    // public function index()
    // {
    //     $users = User::all();

    //     return view('user.lock-users', compact('users'));
    // }



    // public function getlocked(Request $request, string $id)
    // {
    //     $update = User::find($id);
    //     $update->update([
    //         'lock_status' => '1',
    //     ]);
       
    //     return back()->with('success', 'User locked out');
    // }

    
    // public function unlock(Request $request, string $id)
    // {
    //     $update = User::find($id);
    //     // $update->update([
    //     //     'lock_status' => '0',
    //     // ]);
    //     $update->lock_status = '1';
    //     $update->save();
    //     return back()->with('success', 'User Unlocked');
    // }
}
