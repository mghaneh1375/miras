@extends('admin.layouts.list')

@section('title')
مدیریت گالری
@stop

@section('createNew')
'{{ route('product.productGallery.create', ['product' => $productId]) }}'
@stop

@section('items')
    @foreach($items as $item)
        <div class="col-xs-12 col-lg-3" id="item_{{ $item['id'] }}">
            <img src="{{$item['img']}}" alt="{{ $item['alt'] }}" style="width:100%; height: 100%">
            <div class="flex space-between">
                <button class="btn btn-danger" onclick="removeModal('item', {{$item['id']}}, '{{ route('productGallery.destroy', ['productGallery' => $item['id']]) }}')">حذف</button>
            </div>
        </div>
    @endforeach
@stop
