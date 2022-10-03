@extends('admin.layouts.create')

@section('title')
{{ isset($item) ? 'ویرایش محصول' : 'افزودن محصول' }}
@stop

@section('form')

    @if(isset($item))
        <div class="flex center">
            <img width="200px" src="{{ $item['img'] }}" />
        </div>
    @endif

    <form id="myForm" action="{{ isset($item) ? route('product.update', ['product' => $item['id']]) : route('product.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="flex flex-col center gap10" style="margin: 10px">
            
            <input {{ isset($item) ? '' : 'required' }} type="file" name="img_file" id="imgInp">

            <div>
                <label for="name">نام</label>
                <input required value="{{ isset($item) ? $item['name'] : '' }}" type="text" name="name" id="name" />
            </div>
            
            <div>
                <label for="description">توضیح محصول</label>
                <textarea required name="description" id="description">{{ isset($item) ? $item['description'] : '' }}</textarea>
            </div>

            <div>
                <label for="alt">تگ alt</label>
                <input value="{{ isset($item) ? $item['alt'] : '' }}" type="text" placeholder="این فیلد اختیاری است" name="alt" id="alt" />
            </div>

            <div>
                <label for="price">قیمت</label>
                <input required {{ isset($item) ? '' : 'required' }} value="{{ isset($item) ? $item['price'] : '' }}" type="number" name="price" id="price" />
            </div>
            
            <div>
                <label for="available_count">تعداد موجودی</label>
                <input required value="{{ isset($item) ? $item['available_count'] : '' }}" type="number" name="available_count" id="available_count" />
            </div>
            
            <div>
                <label for="off">تخفیف</label>
                <input value="{{ isset($item) ? $item['off'] : '' }}" type="number" name="off" id="off" />
            </div>

            <div>
                <label for="sub_category_id">دسته موردنظر</label>
                <select name="sub_category_id" id="sub_category_id">
                    @foreach($subCategories as $subCategory)
                        <option {{ isset($item) && $item['sub_category_id'] == $subCategory['id'] ? 'selected' : '' }} value="{{$subCategory['id']}}">{{$subCategory['name']}}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="brand_id">برند موردنظر</label>
                <select name="brand_id" id="brand_id">
                    @foreach($brands as $brand)
                        <option {{ isset($item) && $item['brand_id'] == $brand['id'] ? 'selected' : '' }} value="{{$brand['id']}}">{{$brand['name']}}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="priority">اولویت</label>
                <input value="{{ isset($item) ? $item['priority'] : '' }}" type="number" required name="priority" id="priority" />
            </div>

            <div>
                <label for="visibility">وضعیت نمایش</label>
                <select name="visibility" id="visibility">
                    <option {{ isset($item) && !$item['visibility'] ? 'selected' : '' }} value="0">مخفی</option>
                    <option {{ isset($item) && $item['visibility'] ? 'selected' : '' }} value="1">نمایش</option>
                </select>
            </div>
            
            <div>
                <label for="is_in_top_list">آیا جز محصولات برتر است؟</label>
                <select name="is_in_top_list" id="is_in_top_list">
                    <option {{ isset($item) && !$item['is_in_top_list'] ? 'selected' : '' }} value="0">خیر</option>
                    <option {{ isset($item) && $item['is_in_top_list'] ? 'selected' : '' }} value="1">بله</option>
                </select>
            </div>

        </div>


        <div class="flex center gap10">
            <span onclick="document.location.href = '{{ route('product.index') }}'" class="btn btn-danger">بازگشت</span>
            <input value="ذخیره" type="submit" class="btn green" id="saveBtn" />
        </div>

    </form>
@stop