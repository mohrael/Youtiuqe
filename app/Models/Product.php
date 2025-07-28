<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    //
    protected $fillable=['productName','description','price','category_id','image'];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
    return $this->belongsTo(Category::class);
    }


}
