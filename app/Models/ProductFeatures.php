<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeatures extends Model
{
    use HasFactory;
    
    protected $table = 'product_feature';

    protected $fillable = [
        'id',
        'sub_category_feature_id',
        'product_id',
        'value'
    ];

    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class);
    }
    
    public function subCategoryFeature() {
        return $this->belongsTo(SubCategoryFeatures::class);
    }
}
