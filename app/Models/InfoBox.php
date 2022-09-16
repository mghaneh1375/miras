<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoBox extends Model
{
    use HasFactory;
    
    protected $table = 'info_box';
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'img_large',
        'img_mid',
        'img_small',
        'href',
        'alt',
        'collapse_from'
    ];
}
