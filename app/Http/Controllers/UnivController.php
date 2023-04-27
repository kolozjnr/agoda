<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    public function index(){
        return view("user.index");
    }

    public function account(){
        return view("user.account");
    }

    public function task(){
        return view("user.task");
    }

    public function wallet(){
        return view("user.wallet-bind");
    }
    public function level(){
        return view("user.level");
    }

    public function event(){
        return view("user.event");
    }
    public function topup(){
        return view("user.top-up");
    }
}
