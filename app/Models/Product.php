<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    
    protected $fillable = [
        'id',
        'name',
        'img',
        'price',
        'description',
        'available_count',
        'is_in_top_list',
        'visibility',
        'off',
        'priority',
        'brand_id',
        'sub_category_id'
    ];
    
    public $timestamps = false;

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    
    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function galleries() {
        return $this->hasMany('galleries');
    }

    public function scopeVisible($query) {
        return $query->where('visibility', true);
    }
    
    public function scopeTop($query) {
        return $query->where('is_in_top_list', true);
    }

    public function features() {
        return $this->hasMany(ProductFeatures::class)
            ->join('sub_category_feature', 'sub_category_feature.id', '=', 'product_feature.sub_category_feature_id')
            ->select('sub_category_feature.name', 'product_feature.value')
            ->get();
    }
}
