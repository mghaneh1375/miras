<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryDigest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryVeryDigest;
use App\Http\Resources\ProductDigestUser;
use App\Imports\CategoryImport;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class CategoryController extends Controller
{

    public function get_top_categories_products(Request $request)
    {
        $categories = Category::topProducts()->get();
        $arr = [];

        foreach($categories as $category) {
            
            $products = $category->products;
            if(count($products) == 0)
                continue;

            $items = ProductDigestUser::collection($products)->toArray($request);
            array_push($arr, [
                'id' => $category->id,
                'name' => $category->name,
                'products' => $items
            ]);
        }

        return response()->json([
            'status' => 'ok',
            'data' => $arr
        ]);
    }

    public function uploadCategories(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        $import = new CategoryImport;
        $import->import($request->file);
        $errors = [];

        foreach ($import->failures() as $failure) {
            array_push($errors, "row " . $failure->row() . ' ' . $failure->errors()[0]);
        }
        
        if(count($errors) > 0)
            return view('admin.category.list')->with(compact('errors'));

        return redirect()->route('category.index');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = CategoryVeryDigest::collection(Category::all())->toArray($request);
        return view('admin.category.create', compact('categories'));
    }

    public function getTopCategoriesProducts()
    {
        $cats = Category::topProducts()->get();
        $products = [];

        foreach($cats as $cat) {
            
            $subs = $cat->sub()->get();

            while(count($subs) > 0) {

            }

        }

    }

    public function edit(Category $category, Request $request, string $err = null) {
        
        $categories = Category::all();
        $arr = [];
        foreach($categories as $cat) {
            if($cat->products()->count() > 0)
                continue;
            array_push($arr, $cat);
        }

        return view('admin.category.create', [
            'item' => CategoryResource::make($category)->toArray($request),
            'categories' => CategoryVeryDigest::collection($arr)->toArray($request),
            'err' => $err
        ]);

    }

    public function show(Category $category) {
        
        if(!$category->visibility)
            return abort(401);

        // return response()->json(
        //     [
        //         'data' => CategoryDigest::collection($cats)->toArray($request),
        //         'status' => 'ok'
        //     ]
        // );
    }

    public function sub(Category $category, Request $request) {
        return view('admin.category.list', [
                'categories' => CategoryDigest::collection($category->sub()->get())->toArray($request),
                'name' => $category->name,
                'hasProduct' => $category->products()->count() > 0,
                'isHead' => $category->parent_id == null,
                'parent_id' => $category->parent_id == null ? -1 : $category->parent_id,
            ]
        );
    }

    public function index(Request $request) {

        if($request->user() != null && 
            (
                $request->user()->level == User::$ADMIN_LEVEL ||
                $request->user()->level == User::$EDITOR_LEVEL
            )
        ) {
            return view('admin.category.list', [
                'categories' => CategoryDigest::collection(Category::head()->get())->toArray($request),
                'name' => '',
                'isHead' => true,
            ]);
        }

        $cats = Category::visible()->top()->get();
        $menuCats = Category::visible()->head()->get();

        return response()->json(
            [
                'data' => [
                    "top" => CategoryDigest::collection($cats)->toArray($request),
                    "menu" => CategoryDigest::collection($menuCats)->toArray($request),
                ],
                'status' => 'ok'
            ]
        );
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|string|min:1',
            'img_file' => 'nullable|image',
            'visibility' => 'nullable|boolean',
            'priority' => 'required|integer',
            'alt' => 'nullable|string|min:1'
        ]);

        $filename = $request->img_file->store('public/categories');
        $filename = str_replace('public/categories/', '', $filename);

        $request['img'] = $filename;
        Category::create($request->toArray());
        return Redirect::route('category.list');
    }

    
    public function update(Category $category, Request $request) {
        
        $validator = [
            'name' => 'nullable|string|min:1',
            'image_file' => 'nullable|image',
            'visibility' => 'nullable|boolean',
            'priority' => 'nullable|integer|min:1',
            'alt' => 'nullable|string|min:1',
            'keywords' => 'nullable|string|min:1',
            'tags' => 'nullable|string|min:1',
            'digest' => 'nullable|string|min:1',
            'parent_id' => 'nullable|exists:categories,id',
            'show_in_first_page' => 'nullable|boolean',
            'show_items_in_first_page' => 'nullable|boolean',
        ];

        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            return abort(401);
        if(empty($request['parent_id']))
            unset($request['parent_id']);
        
        $request->validate($validator);

        if($request->has('parent_id')) {
            $cat = Category::whereId($request['parent_id'])->first();
            if($cat->products()->count() > 0)
                return $this->edit($category, $request, '.دسته بالادستی موردنظر دارای محصول است');

            $category->parent_id = $request['parent_id'];
        }
        else
            $category->parent_id = null;

        if($request->has('image_file')) {
            $filename = $request->image_file->store('public/categories');
            $filename = str_replace('public/categories/', '', $filename);
            
            if($category->img != null && file_exists(__DIR__ . '/../../../public/storage/categories/' . $category->img))
                unlink(__DIR__ . '/../../../public/storage/categories/' . $category->img);
            
            $category->img = $filename;
        }

        foreach($request->keys() as $str) {
            
            if($str == "_token" || $str == "image_file")
                continue;

            $category[$str] = $request[$str];
        }

        $category->save();

        return Redirect::route('category.index');
    }

    public function destroy(Category $category) {

        if($category->products()->count() > 0)
            return response()->json(['status' => 'nok', 'msg' => 'لطفا ابتدا محصولات این دسته را حذف نمایید']);

        if($category->img != null && file_exists(__DIR__ . '/../../../public/storage/categories/' . $category->img))
            unlink(__DIR__ . '/../../../public/storage/categories/' . $category->img);

        $category->delete();
        return response()->json(['status' => 'ok']);
    }
}
