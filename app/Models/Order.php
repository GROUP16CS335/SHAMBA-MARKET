<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_detail(){

        return $this->hasOne(OrderDetails::class);
    }

    /*public function order_item(){
        return $this->hasMany(OderItem::class);
    }*/

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class,'order_product')->withPivot('qty');
    }

}
