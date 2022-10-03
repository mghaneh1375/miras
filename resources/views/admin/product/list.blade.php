@extends('admin.layouts.list')

@section('title')
مدیریت محصولات
@stop

@section('createNew')
'{{ route('product.create') }}'
@stop

@section('items')
<center style="margin-top: 20px">
    <table>
        <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>قیمت</th>
                <th>تعداد موجودی</th>
                <th>آیا جز محصولات برتر است؟</th>
                <th>وضعیت نمایش</th>
                <th>اولویت</th>
                <th>برند</th>
                <th>دسته مربوطه</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($items as $item)
                <tr id="item_{{ $item['id'] }}">
                    <td>{{ $i++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['available_count'] }}</td>
                    <td>{{ $item['is_in_top_list'] ? "بله" : "خیر" }}</td>
                    <td>{{ $item['visibility'] ? "نمایش" : "عدم نمایش"}}</td>
                    <td>{{ $item['priority'] }}</td>
                    <td>{{ $item['brand'] }}</td>
                    <td>{{ $item['subCategory'] }}</td>
                    <td>
                        <button onclick="document.location.href = '{{ route('product.edit', ['product' => $item['id']]) }}'" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button>
                        <button onclick="document.location.href = '{{ route('product.productFeature.index', ['product' => $item['id']]) }}'" class="btn btn-info"><span class="glyphicon glyphicon-list"></span></button>
                        <button onclick="document.location.href = '{{ route('product.productGallery.index', ['product' => $item['id']]) }}'" class="btn btn-warning"><span class="glyphicon glyphicon-camera"></span></button>
                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
