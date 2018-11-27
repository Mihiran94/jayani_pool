<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PoolDesign extends Model
{

    protected $fillable = ['title','description','area','depth','cost','image','category_id'];

    public function category(){
        $this->belongsTo(Category::class);
    }
}
