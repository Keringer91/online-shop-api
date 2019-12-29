<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;

class Manager extends Model
{
    protected $guarded = ['id'];

    public function shop()
    {
        return $this->hasOne(Shop::class,'manager_id');
    }

    public static function search($term)
    {
        return Manager::where('first_name', 'LIKE', "%{$term}%")
                        ->orWhere('last_name', 'LIKE', "%{$term}%")
                        ->orderBy('last_name')
                        ->paginate(10);
    }
}
