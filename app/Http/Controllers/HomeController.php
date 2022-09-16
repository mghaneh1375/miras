<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function uploadImg(Request $request) {

        $request->validate([
            'upload' => 'required|image'
        ]);

        $filename = $request->upload->save('public/ck');
        $filename = str_replace('public/ck', '', $filename);

        return response()->json(['status' => 'ok', 'url' => asset('storage/ck/' . $filename)]);
    }
}
