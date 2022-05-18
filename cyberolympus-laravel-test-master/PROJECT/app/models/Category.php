<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "product_category";
    protected $primaryKey = "id";

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany('App\Product', 'id');
    }
}