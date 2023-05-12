<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\account;
use App\Mail\DepositMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function postWallet(Request $request){
        $wallet = $request->all();

        Wallet::create($wallet);

        return redirect('/')->with("success", "Wallet bind Successful");
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
    public function topupsubmit(Request $req){
        $amount = $req->query("amount");
        $wallet = $req->query("wallet");
        return view("user.top-up-submit", compact("wallet", "amount"));
    }

    public function deposit(Request $request){
        $user = auth()->user()->name;

        $deposit = $request->all();

        if($image = $request->file('file')){
            $destination = 'orders';
            $profileImage = 'public/orders/'.date('YmdHis'). "." . $image->getClientOriginalExtension();
            $image->move(public_path('orders'), $profileImage);
            $deposit['order_file'] = $profileImage;
        }
        dd($deposit);

        account::create($deposit);

        $details = [
            'title' => 'New Wallet Deposit',
            'body' => 'A new user Deposit',
        ];
        Mail::to('babayendonchi@gmail.com')->send(new DepositMail($details));
        return response()->json(['success'=>'Successfully uploaded.']);
    }
    
}
