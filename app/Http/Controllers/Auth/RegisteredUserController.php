<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'trial_balance' => '228',
            'task_completed' => '1',
            'balance' => '0',
            'current_level' => '0',
            //'withdraw_type' => '0000',
            'password' => Hash::make($request->password),
        ]);
        //dd($user);
        if ($request->input('referral_code')) {
            $referralUser = User::where('referral_code', $request->input('referral_code'))->first();
            if ($referralUser) {
                $user->referrer_id = $referralUser->id;

                $refree_id = $referralUser->id;
                DB::table('users')
                ->where('id', $refree_id)
                ->update([
                    'referral_bonus' => DB::raw('referral_bonus +10'),
                    //'next_task' => DB::raw('current_task + 1')
                ]);
                $user->referral_bonus = "0";
            }else{
                return back()->with('error', 'This Referral Code "'.$request->input('referral_code').'" does not Exist, Kindly check it and try again');
            }
        }
    
        $user->generateReferralCode();
        $user->addRole('superadministrator');

        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
