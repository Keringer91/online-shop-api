<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Manager;
use App\Comment;

class Shop extends Model
{
    protected $guarded = ['id'];

    public function manager()
    {
        return $this->belongsTo(Manager::class,'manager_id');
    }

    public function comment() 
    {
        return $this->hasMany(Comment::class);
    }

    public static function search($term)
    {
        return Shop::where('name','LIKE', "%{$term}%")
                        ->orderBy('name')
                        ->get();
    }
}
