<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function list(Request $request) {

        if($request->user() != null && $request->user()->level == User::$ADMIN_LEVEL)
            $cats = Category::all();
        else
            $cats = Category::visible()->get();

        return view('admin.category.list', ['categories' => CategoryResource::collection($cats)->toArray($request)]);
        
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|string|min:1',
            'img_file' => 'required|image',
            'visibility' => 'nullable|boolean',
            'priority' => 'required|integer',
            'alt' => 'nullable|string|min:1'
        ]);

        $filename = $request->img_file->store('public/categories');
        $filename = str_replace('public/categories', '', $filename);

        $request['img'] = $filename;
        Category::create($request->toArray());
        return Redirect::route('category.list');
    }

    public function remove(Category $category) {

        $subCats = $category->subCategories();
        $controller = new SubCategoryController();
        foreach($subCats as $itr) {
            $controller->remove($itr);
        }

        if(file_exists(__DIR__ . '/../../../public/storage/categories/' . $category->img))
            unlink(__DIR__ . '/../../../public/storage/categories/' . $category->img);

        $category->delete();
        return response()->json(['status' => 'ok']);
    }
}
