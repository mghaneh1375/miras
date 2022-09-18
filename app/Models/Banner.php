<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'img',
        'href',
        'alt',
        'section'
    ];
}
