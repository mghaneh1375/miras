<?php

namespace App\Http\Controllers;

use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user() != null && 
            (
                $request->user()->level == User::$ADMIN_LEVEL ||
                $request->user()->level == User::$EDITOR_LEVEL 
            )
        ) {
            $items = BannerResource::collection(Banner::all())->toArray($request);
            return view('admin.banner.list', compact('items'));
        }

        return BannerResource::collection(Banner::all())->additional(['status' => 'ok']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = [
            'alt' => 'nullable|string|min:2',
            'href' => 'nullable|string|url',
            'image_file' => 'required|image',
            'section' => ['required', Rule::in(['home', 'detail', 'list'])]
        ];
        
        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            abort(401);

        $request->validate($validator);

        $request['img'] = $request->image_file->store('public/banner');
        $request['img'] = str_replace('public/banner/', '', $request['img']);
        
        Banner::create($request->toArray());
        return Redirect::route('banner.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner, Request $request)
    {
        return view('admin.banner.create', ['item' => BannerResource::make($banner)->toArray($request)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validator = [
            'alt' => 'nullable|string|min:2',
            'href' => 'nullable|url',
            'image_file' => 'nullable|image',
            'section' => ['nullable', Rule::in(['home', 'detail', 'list'])]
        ];
        
        if(self::hasAnyExcept(array_keys($validator), $request->keys()))
            abort(401);

        $request->validate($validator);

        if($request->has('image_file')) {
            $filename = $request->image_file->store('public/banner');
            $filename = str_replace('public/banner/', '', $filename);

            if(file_exists(__DIR__ . '/../../../public/storage/banner/' . $banner->img))
                unlink(__DIR__ . '/../../../public/storage/banner/' . $banner->img);
            
            $banner->img = $filename;
        }

        $banner->href = $request->has('href') ? $request['href'] : $banner->href;
        $banner->alt = $request->has('alt') ? $request['alt'] : $banner->alt;
        $banner->section = $request->has('section') ? $request['section'] : $banner->section;

        $banner->save();
        return Redirect::route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if(file_exists(__DIR__ . '/../../../public/storage/banner/' . $banner->img))
            unlink(__DIR__ . '/../../../public/storage/banner/' . $banner->img);

        $banner->delete();
        return response()->json(['status' => 'ok']);
    }
}
