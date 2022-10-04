<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryDigest;
use App\Http\Resources\ProductDigest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SellerResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->user() != null && (
            $request->user()->level == User::$ADMIN_LEVEL ||
            $request->user()->level == User::$EDITOR_LEVEL
        )) {
            return view('admin.product.list', [
                'items' => ProductDigest::collection(Product::all())->toArray($request)
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $categories = Category::all();
        $arr = [];
        foreach($categories as $cat) {
            if($cat->sub()->count() > 0)
                continue;
            array_push($arr, $cat);
        }

        return view('admin.product.create', [
            'brands' => BrandResource::collection(Brand::all())->toArray($request),
            'sellers' => SellerResource::collection(Seller::all())->toArray($request),
            'categories' => CategoryDigest::collection($arr)->toArray($request),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('seller_id') && $request['seller_id'] == -1)
            $request['seller_id'] = null;

        $validator = [
            'name' => 'required|string|min:2',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'seller_id' => 'nullable|exists:sellers,id',
            'description' => 'required|string|min:2',
            'digest' => 'nullable|string|min:2',
            'keywords' => 'nullable|string|min:2',
            'tags' => 'nullable|string|min:2',
            'price' => 'required|integer|min:0',
            // 'off' => 'nullable|integer|min:0',
            // 'available_count' => 'required|integer|min:0',
            'priority' => 'required|integer|min:0',
            'is_in_top_list' => 'required|boolean',
            'visibility' => 'required|boolean',
            'img_file' => 'required|image',
            'alt' => 'nullable|string|min:2',
        ];

        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            return abort(401);

        $request->validate($validator);

        $filename = $request->img_file->store('public/products');
        $filename = str_replace('public/products', '', $filename);

        $request['img'] = $filename;
        Product::create($request->toArray());

        return Redirect::route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Request $request)
    {
        
        $categories = Category::all();
        $arr = [];
        foreach($categories as $cat) {
            if($cat->sub()->count() > 0)
                continue;
            array_push($arr, $cat);
        }

        return view('admin.product.create', [
            'item' => ProductResource::make($product)->toArray($request),
            'brands' => BrandResource::collection(Brand::all())->toArray($request),
            'sellers' => SellerResource::collection(Seller::all())->toArray($request),
            'categories' => CategoryDigest::collection($arr)->toArray($request),
        ]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = [
            'name' => 'nullable|string|min:2',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'description' => 'nullable|string|min:2',
            'price' => 'nullable|integer|min:0',
            'off' => 'nullable|integer|min:0',
            'available_count' => 'nullable|integer|min:0',
            'priority' => 'nullable|integer|min:0',
            'is_in_top_list' => 'nullable|boolean',
            'visibility' => 'nullable|boolean',
            'img_file' => 'nullable|image',
            'alt' => 'nullable|string|min:2',
        ];
        
        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            return abort(401);

        $request->validate($validator);

        if($request->has('img_file')) {
         
            $filename = $request->img_file->store('public/products');
            $filename = str_replace('public/products', '', $filename);   

            if(file_exists(__DIR__ . '/../../../public/storage/products/' . $product->img))
                unlink(__DIR__ . '/../../../public/storage/products/' . $product->img);

            $product->img = $filename;
        }

        foreach($request->keys() as $key) {
            if($key == '_token' || $key == 'img_file')
                continue;
            $product[$key] = $request[$key];
        }

        $product->save();
        return Redirect::route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
