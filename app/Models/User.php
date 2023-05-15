<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Wallet;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
//LaratrustUserTrait
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'accno',
        'accname',
        'address',
        'phone_number',
        'country',
        'coin_type',
        'coin_network',
        'status',
        'withdrawal_type',
        'balance',
        'dp',
        'role',
        'uname',
        'wallet_adddress',
        'bankname',
        'task_completed',
        'current_level',
        'referral_code',
        'referral_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['referral_link'];

        public function generateReferralCode()
    {
        $code = Str::random(8);
        while (User::where('referral_code', $code)->exists()) {
            $code = Str::random(8);
        }
        $this->referral_code = $code;
        $this->save();
        return $code;
    }
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referral_id', 'id');
    }


    public function referrals()
    {
        return $this->hasMany(User::class, 'referral_id', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->referral_code]);
    }

    public function wallet(){
        return $this->hasOne(Wallet::class);
    }
    public function withdraw(){
        return $this->hasOne(Withraw::class);
    }
}
