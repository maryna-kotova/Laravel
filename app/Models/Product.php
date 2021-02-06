<?php

namespace App\Models;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function getImgAttribute($value)
    {
        return $value ? $value : '/images/noimage.png'; 
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'id');
        //модель, назв столб с внешним ключем, назв столбца с текущей модели, назв столбца связанной модели
    }
    
    public function reviews()
    {
        return  $this->hasMany(Review::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new ProductScope);
    }

    public function scopeRecommended($query)
    {
        $query->where('recommended', 1);
    }

    public function scopeLatest($query)
    {
        $query->orderByDesc('created_at');
    }
}