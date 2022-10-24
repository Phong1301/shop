<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'name',
        'description',
        'price',
        'image',
        'qty'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
