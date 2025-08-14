<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['title', 'price', 'tag_id' , 'brand_id', 'category_id', 'img']; // Add 'img' here


    public function Brand() {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function Category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function Tag() {
        return $this->belongsTo(Tag::class, 'tag_id' , 'id');
    }


}
