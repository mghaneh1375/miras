<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryFeatures extends Model
{
    use HasFactory;
    
    protected $table = 'sub_category_feature';

    protected $fillable = [
        'id',
        'sub_category_id',
        'name'
    ];

    public $timestamps = false;

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }
}
