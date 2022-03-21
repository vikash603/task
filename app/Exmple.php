<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exmple extends Model
{
    protected $table="exmple";

    public function product()
    {
        return $this->hasMany(Product::class,'exmple_id','id');
    }
}
