<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function getWithdrawal()
    {
        $user = auth()->user()->id;
        $details = Withdraw::where('user_id', $user)->get();
        return view("user.details", compact('details'));
    }
}
