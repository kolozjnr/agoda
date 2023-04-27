<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','order_com','order_desc','order_status','order_price','order_no','order_processing','order_file', 'order_qty','oder_photo'];
}
