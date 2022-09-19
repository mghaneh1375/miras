@extends('admin.layouts.structure')

@section('header')
    @parent
@stop

@section('content')

    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="sparkline8-list shadow-reset mg-tb-30">
            <div class="sparkline8-hd">
                <div class="main-sparkline8-hd">
                    <h1>مدیریت دسته ها</h1>
                </div>
            </div>

            <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">

                <div id="mainContainer" class="page-content" style="margin-top: 5%; margin: 50px; direction: rtl">

                    <div class="row">
                        <div class="flex center">
                            <button onclick="document.location.href = '{{ route('category.add') }}'" class="btn btn-success">افزودن مورد جدید</button>
                        </div>
                        <div class="col-xs-12">
                            @foreach($categories as $category)
                                <div style="min-height: 250px" class="column col-xs-12 col-lg-6 myContainer" id="item_{{ $category['id'] }}">
                                    <img src="{{$category['img']}}" alt="{{ $category['alt'] }}" style="width:100%; height: 100%">
                                    <div class="overlay">
                                        <div class="opBox" id="opBox_{{ $category['id'] }}">
                                            <h3 style="color: white">{{ $category['name'] }}</h3>
                                            <button class="btn btn-primary" onclick="">مشاهده اطلاعات</button>
                                            <button class="btn btn-danger" onclick="removeModal('item', {{$category['id']}}, '{{ route('category.remove', ['category' => $category['id']]) }}')">حذف</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>

@stop