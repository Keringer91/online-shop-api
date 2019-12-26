<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function shop() 
    {
        return $this->belongsTo(Shop::class);
    }
}
