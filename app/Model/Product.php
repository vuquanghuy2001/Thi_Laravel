<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $guarded = [];

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }
}
