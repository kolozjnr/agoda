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

    public function postAccount(Request $request){
        $id = auth()->user()->id;
        dd($request);
        $email = $request->email;
        $fname = $request->fname;
        $phone_number = $request->phone_number;
        $user = User::where('id', $id)
        ->update(['fname'=>$fname, 'email'=>$email, 'phone_number'=>$phone_number]);
        return back()->with('success', 'Profile Updated Successfully');
    }

    public function task(){
        $id = auth()->user()->id;

        $bals = User::where('id', $id)->select('balance','referral_bonus','current_level')->first();
        $bal = $bals->balance;
        $ref_bonus = $bals->referral_bonus;
        $task = 0;
        $totalTask = $bals->current_level;
        
        return view("user.task", compact("bal","ref_bonus","totalTask"));
    }

    public function wallet(){
        $user_id = auth()->user()->id;
        $associateWallet = Wallet::where('user_id', $user_id)->count(); 
        
        $wallets = Wallet::where('user_id', $user_id)->get(); 

        //dd($wallets);
        return view("user.wallet-bind", compact('associateWallet', 'wallets'));
    }

    public function postWallet(Request $request){
        $user_id = auth()->user()->id;
        $user = Wallet::where('user_id', $user_id)->count();
        if($user >0){
            return redirect('wallet')->with("error", "Wallet Already Binded, Contact Support for any Issues");
        }
        else{
            $wallet = $request->all();

            Wallet::create($wallet);
    
            return redirect('wallet')->with("success", "Wallet bind Successfull");
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
        $getbal = User::where('id', $user)->select(['balance','withdraw_type'])->first();
        
            //dd($getbal->balance);
        if($getbal->withdraw_type === $request->pin){
        
            if($getbal.'.00' < $request->amount){
                return redirect('wallet')->with('error', 'Your Balance is less than the Amount you want to Withdraw');
            }
            elseif($getbal.'.00' > $request->amount){
            $data = $request->all();

            Withdraw::create($data);

            return redirect('wallet')->with('success', 'withdrawal Successfully placed');
            }
        }else{
            return redirect('wallet')->with('error', 'Wrong Withdraw Pin');
        }
    }

    public function support(){
        return view('user.support');
    }

    public function withdrawal_approval(){
        $users = Withdraw::where('status', 1)->get();
        return view('user.withdrawal_approval', compact('users'));
    }
    public function approve_withdraw(Request $request, $id){
        $data = Withdraw::find($id);
        $user = User::where('id', $data->user_id)->get();
        foreach($user as $item){
            if($data->amount > $item->balance){
                return back()->with('error', 'Amount Withdrawn is Greater than Total amount User has left');
            }
            $newBal = intval($item->balance) - intval($data->amount);
            //dd($data->amount, $item->balance);
        $update_data = Withdraw::where('id', $data->id)->update(['status' => 0]);
        $update_user = User::where('id', $data->user_id)->update(['balance' => $newBal]);
        }
        //dd($user);
        //dd($data->user_id);
        return back()->with('success', 'Withdrawal Approve Successfully');
    }
    
}
