<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->belongsToMany(Oder::class,'order_product')->withPivot('qty');
    }



    protected $fillable = ["name", "file_path", "created_at", "updated_at"];

}
