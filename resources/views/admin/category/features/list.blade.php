@extends('admin.layouts.list')

@section('title')
مدیریت ویژگی ها
@stop

@section('createNew')
'{{ route('category.features.create', ['category' => $categoryId]) }}'
@stop

@section('items')
<table>
        <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($items as $item)
        
                <tr id="item_{{ $item['id'] }}">
                    <td>{{ $i }}</td>
                    <td>{{ $item['name'] }}</td>
                </tr>
                
                <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
@stop
