<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public static function hasAnyExcept($expected, $real) {

        foreach ($real as $itr) {
            if($itr !== '_token' && !in_array($itr, $expected))
                return true;
        }

        return false;
    }
}
