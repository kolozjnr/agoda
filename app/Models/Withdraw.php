<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'wallet', 'network', 'address', 'status', 'type', 'approved_by','amount'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
