<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static $ADMIN_LEVEL = 'admin';
    public static $FINANCE_LEVEL = 'finance';
    public static $REPORT_LEVEL = 'report';
    public static $EDITOR_LEVEL = 'editor';
    public static $NEWS_LEVEL = 'news';
    public static $USER_LEVEL = 'user';


    public static $NOT_ACTIVATE = 'init';
    public static $ACTIVE = 'active';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'level',
        'password',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function purchases() {
        return $this->hasMany(Purchase::class);
    }

    public function scopeActive($query) {
        return $query->where('status', '=', User::$ACTIVE);
    }

    public function offs() {
        return $this->hasMany(Off::class);
    }
}
