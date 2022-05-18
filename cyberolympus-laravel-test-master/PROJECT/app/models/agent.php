<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = "agent";
    protected $primaryKey = "id";

    protected $fillable = ['store_name'];

    public function order()
    {
        return $this->hasMany('App\Order', 'id');
    }
}