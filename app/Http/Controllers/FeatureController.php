<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Models\Category;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category, Request $request)
    {
        return view('admin.category.features.list', [
            'items' => FeatureResource::collection($category->features)->toArray($request),
            'categoryId' => $category->id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category, string $err = null)
    {
        return view('admin.category.features.create', [
            'categoryId' => $category->id,
            'err' => $err
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category $category, Request $request)
    {
        if($category->sub()->count() > 0)
            return $this->create($category, 'دسته انتخاب شده دارای زیردسته است.');

        $validator = [
            'name' => 'required|string|min:2',
            'unit' => 'nullable|string|min:2',
            'show_in_top' => 'nullable|boolean',
            'effect_on_price' => 'nullable|boolean',
            'effect_on_available_count' => 'nullable|boolean',
            'answer_type' => ['required', Rule::in(['number', 'text', 'longtext', 'multi_choice'])],
            'choices' => 'nullable|string|min:3',
            'priority' => 'required|integer|min:1'
        ];

        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            abort(401);

        $request->validate($validator);

        if($request['answer_type'] == 'multi_choice' && !$request->has('choices'))
            return $this->create($category, 'لطفا گزینه های پاسخ را مشخص نمایید.');
            
        if($request['answer_type'] != 'multi_choice' && $request->has('choices'))
            return $this->create($category, 'پارامترهای ورودی معتبر نمی باشند.');

        Feature::create($request->toArray());
        return Redirect::route('category.features.index', ['category' => $category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        if($feature->productFeatures()->count() > 0)
            return response()->json(
                [
                    'status' => 'nok',
                    'msg' => 'محصولاتی از این ویژگی استفاده می کنند و امکان حذف آن وجود ندارد.'
                ]
            );

        $feature->delete();
        return response()->json(['status' => 'ok']);
    }
}
