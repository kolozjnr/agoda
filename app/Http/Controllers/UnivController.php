<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\account;
use App\Models\Withdraw;
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
        //$user = auth()->user()->id;
        $associateWallet = Wallet::with('user')->count(); 
        
        $wallets = Wallet::with('user')->get(); 

        //dd($wallets);
        return view("user.wallet-bind", compact('associateWallet', 'wallets'));
    }

    public function postWallet(Request $request){
        $user = User::with('user')->count();
        if($user >0){
            return redirect('wallet')->with("error", "You already have a Binded Card");
        }
        else{
            $wallet = $request->all();

            Wallet::create($wallet);
    
            return redirect('wallet')->with("success", "Wallet bind Successful");
        }
        
    }
    public function level(){
        $user = auth()->user()->id;
        //dd($user);
        $levels = User::where('id', $user)->get();
       
        return view("user.level", compact('levels'));
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
        //dd($deposit);

        account::create($deposit);

        $details = [
            'title' => 'New Wallet Deposit',
            'body' => 'A new user Deposit',
        ];
        Mail::to('babayendonchi@gmail.com')->send(new DepositMail($details));
        return response()->json(['success'=>'Successfully uploaded.']);
    }

    public function withdraw(Request $request){
        $user = auth()->user()->id;
        $getbal = User::where('id', $user)->select('balance')->first();
        //dd($request->amount);
        if($getbal.'.00' < $request->amount){
            return redirect('wallet')->with('error', 'Your Balance is less than the Amount you want to Withdraw');
        }
        elseif($getbal.'.00' > $request->amount){
        $data = $request->all();

        Withdraw::create($data);

        return redirect('wallet')->with('success', 'withdrawal Successfully placed');
        }
    }
    
}
