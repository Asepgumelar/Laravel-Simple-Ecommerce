<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
