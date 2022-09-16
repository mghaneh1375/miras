@extends('admin.layouts.structure')

@section('header')
    @parent

    <style>

        #myForm > div > div {
            width: calc(100% - 20px);
        }

        #myForm > div > div:not(.editor) {
            display: flex;
        }

        #myForm > div > div > label {
            width: 150px;
        }

        #myForm > div > div > textarea,
        #myForm > div > div > input,
        #myForm > div > div > select {
            width: calc(100% - 170px);
        }

    </style>

@stop

@section('content')

    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="sparkline8-list shadow-reset mg-tb-30">
            <div class="sparkline8-hd">
                <div class="main-sparkline8-hd">
                    <h1>{{ isset($category) ? 'ویرایش دسته' : 'افزودن دسته' }}</h1>
                </div>
            </div>

            <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">

                <div id="mainContainer" class="page-content" style="margin-top: 5%; direction: rtl">

                    <div class="row">

                        <div class="col-xs-12" style="padding: 0">
                            @if(isset($category))
                                <div class="flex center">
                                    <img width="200px" src="{{ $category->img }}" />
                                </div>
                            @endif
                            <div style="margin-top: 10px;">
                                <form id="myForm" action="{{ isset($category) ? route('category.doUpdate', ['category' => $category->id]) : route('category.store')}}" method="post" 
                                 enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="flex flex-col center gap10" style="margin: 10px">
                                        <input {{ isset($category) ? '' : 'required' }} type="file" name="img_file" id="imgInp">
                                        <div>
                                            <label for="priority">اولویت</label>
                                            <input value="{{ isset($category) ? $category->priority : '' }}" type="number" required name="priority" id="priority" />
                                        </div>
                                        <div>
                                            <label for="alt">تگ alt</label>
                                            <input value="{{ isset($category) ? $category->alt : '' }}" type="text" placeholder="این فیلد اختیاری است" name="alt" id="alt" />
                                        </div>
                                            
                                        <div>
                                            <label for="title">عنوان</label>
                                            <input value="{{ isset($category) ? $category->title : '' }}" type="text" name="name" id="title"/>
                                        </div>

                                        @if(isset($category))
                                            <div>
                                                <label for="visibility">وضعیت نمایش</label>
                                                <select name="visibility" id="visibility">
                                                    <option {{ !$category->visibility ? 'selected' : '' }} value="0">مخفی</option>
                                                    <option {{ $category->visibility ? 'selected' : '' }} value="1">نمایش</option>
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                        

                                    <div class="flex center gap10">
                                        <span onclick="document.location.href = '{{ route('category.list') }}'" class="btn btn-danger">بازگشت</span>
                                        <input value="ذخیره" type="submit" class="btn green" id="saveBtn" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>

@stop