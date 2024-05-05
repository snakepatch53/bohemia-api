<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
    ];

    protected $appends = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image == null) return asset("storage/app/public/img/food.png");
        return asset("storage/app/public/img_foods/" . $this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
