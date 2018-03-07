<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public static function getAllById($id) {
        return static::where('product_id', $id)->get();
    }
}
