<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.brand.list', ['items' => BrandResource::collection(Brand::all())->toArray($request)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'logo_file' => 'nullable|image',
            'alt' => 'nullable|string|min:2'
        ]);

        if($request->has('logo_file')) {
           $request->logo = $request->logo_file->store('public/brands');
           $request->logo = str_replace('public/brands', '', $request->logo);
        }

        Brand::create($request->toArray());
        return Redirect::route('brand.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'nullable|string',
            'logo_file' => 'nullable|image',
            'alt' => 'nullable|string|min:2'
        ]);

        if($request->has('logo_file')) {
           $filename = $request->logo_file->store('public/brands');
           $filename = str_replace('public/brands', '', $filename);
           if($brand->logo != null &&
                file_exists(__DIR__ . '/../../../public/storage/brands/' . $brand->logo)
            ) {
                unlink(__DIR__ . '/../../../public/storage/brands/' . $brand->logo);
            }
        }

        $brand->save();
        return response()->json(['status' => 'ok']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $deleted = $brand->delete();
        if($deleted && $brand->logo != null && 
            file_exists(__DIR__ . '/../../../public/storage/brands/' . $brand->logo)
        )
            unlink(__DIR__ . '/../../../public/storage/brands/' . $brand->logo);

        if($deleted)
            return response()->json(['status' => 'ok']);
        
        return response()->json(['status' => 'nok', 'msg' => 'لطفا ابتدا محصولاتی که از این برند استفاده می کنند را حذف نمایید.']);
    }
}
