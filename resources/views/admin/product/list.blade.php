@extends('admin.layouts.list')

@section('title')
مدیریت محصولات
@stop

@section('createNew')
'{{ route('product.create') }}'
@stop

@section('backBtn')
    <button onclick="$('#addBatchModal').removeClass('hidden')" class="btn btn-success">افزودن دسته ای</button>
@stop

@section('items')

<center style="margin-top: 20px">
    
    @if(isset($errors) && $errors != null && count($errors) > 0)
        @foreach ($errors as $error)
            <div>{{$error}}</div>
        @endforeach
    @else

        <h3 style="text-align: right">
            جست و جو پیشرفته
            <span data-status="close" style="cursor: pointer" id="toggleProSearchBtn" class="glyphicon glyphicon-chevron-down"></span>
        </h3>
        
        <div id="pro_search" class="flex gap30 margin20 flex-wrap hidden">
            <div class="flex gap10 center">
                <label class="width-auto" for="visibilityFilter">وضعیت نمایش</label>
                <select id="visibilityFilter">
                    <option value="all">همه</option>
                    <option {{ isset($visibilityFilter) && $visibilityFilter ? 'selected' : '' }} value="1">نمایش</option>
                    <option {{ isset($visibilityFilter) && !$visibilityFilter ? 'selected' : '' }} value="0">غیر نمایش</option>
                </select>
            </div>

            <div class="flex gap10 center">
                <label class="width-auto" for="categoryFilter">دسته</label>
                <select id="categoryFilter">
                    <option value="all">همه</option>
                    @foreach ($categories as $category)
                        <option {{ isset($categoryFilter) && $categoryFilter == $category['id'] ? 'selected' : '' }} value="1">{{ $category['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap10 center">
                <label class="width-auto" for="sellerFilter">فروشنده</label>
                <select id="sellerFilter">
                    <option value="all">همه</option>
                    @foreach ($sellers as $seller)
                        <option {{ isset($sellerFilter) && $sellerFilter == $seller['id'] ? 'selected' : '' }} value="{{ $seller['id'] }}">{{ $seller['name'] }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex gap10 center">
                <label class="width-auto" for="brandFilter">برند</label>
                <select id="brandFilter">
                    <option value="all">همه</option>
                    @foreach ($brands as $brand)
                        <option {{ isset($brandFilter) && $brandFilter == $brand['id'] ? 'selected' : '' }} value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap10 center">
                <label class="width-auto" for="isInTopListFilter">محصولات برتر</label>
                <select id="isInTopListFilter">
                    <option value="all">همه</option>
                    <option {{ isset($isInTopListFilter) && $isInTopListFilter ? 'selected' : '' }} value="1">بله</option>
                    <option {{ isset($isInTopListFilter) && !$isInTopListFilter ? 'selected' : '' }} value="0">خیر</option>
                </select>
            </div>
            
            <div class="flex gap10 center">
                <label class="width-auto" for="minFilter">حداقل تعداد موجودی</label>
                <input type="number" value="{{ isset($minFilter) ? $minFilter : '' }}" id="minFilter" />
            </div>
            
            <div class="flex gap10 center">
                <label class="width-auto" for="maxFilter">حداکثر تعداد موجودی</label>
                <input type="number" value="{{ isset($maxFilter) ? $maxFilter : '' }}" id="maxFilter" />
            </div>
            
            <div class="flex gap10 center">
                <label class="width-auto" for="orderBy">مرتب سازی بر اساس</label>
                <select id="orderBy">
                    <option {{ isset($orderBy) && $orderBy == 'createdAt' ? 'selected' : '' }} value="createdAt">زمان ایجاد</option>
                    <option {{ isset($orderBy) && $orderBy == 'rate' ? 'selected' : '' }} value="rate">محبوبیت</option>
                    <option {{ isset($orderBy) && $orderBy == 'seen' ? 'selected' : '' }} value="seen">بازدید</option>
                </select>
            </div>
            
            <div class="flex gap10 center">
                <label class="width-auto" for="orderByType">نوع مرتب سازی</label>
                <select id="orderByType">
                    <option {{ isset($orderByType) && $orderByType == 'asc' ? 'selected' : '' }} value="asc">صعودی</option>
                    <option {{ isset($orderByType) && $orderByType == 'desc' ? 'selected' : '' }} value="desc">نزولی</option>
                </select>
            </div>

            <div>
                <button onclick="excel()" class="btn btn-success">دریافت گزارش اکسل</button>
                <button onclick="filter()" class="btn btn-success">اعمال فیلتر</button>
            </div>
            
        </div>
        <table>
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عملیات</th>
                    <th>نام</th>
                    <th>قیمت</th>
                    <th>امتیاز</th>
                    <th>تعداد موجودی</th>
                    <th>آیا جز محصولات برتر است؟</th>
                    <th>وضعیت نمایش</th>
                    <th>اولویت</th>
                    <th>تعداد بازدید</th>
                    <th>برند</th>
                    <th>دسته مربوطه</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($items as $item)
                    <tr id="item_{{ $item['id'] }}">
                        <td>{{ $i++ }}</td>
                        <td>
                            <div class="flex flex-col gap10">
                                <div class="flex gap10">
                                    <button data-toggle='tooltip' title="ویرایش" onclick="document.location.href = '{{ route('product.edit', ['product' => $item['id']]) }}'" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button>
                                    <button data-toggle='tooltip' title="مدیریت ویژگی ها" onclick="document.location.href = '{{ route('product.productFeature.index', ['product' => $item['id']]) }}'" class="btn btn-info"><span class="glyphicon glyphicon-list"></span></button>
                                    <button data-toggle='tooltip' title="مدیریت گالری" onclick="document.location.href = '{{ route('product.productGallery.index', ['product' => $item['id']]) }}'" class="btn btn-warning"><span class="glyphicon glyphicon-camera"></span></button>
                                </div>
                                <div class="flex gap10">
                                    <button data-toggle='tooltip' title="مدیریت تخفیف" onclick="document.location.href = '{{ route('product.off', ['product' => $item['id']]) }}'" class="btn btn-default"><span class="glyphicon glyphicon-usd"></span></button>
                                    <button data-toggle='tooltip' title="خریداران" onclick="document.location.href = '{{ route('product.productGallery.index', ['product' => $item['id']]) }}'" class="btn btn-success"><span class="glyphicon glyphicon-user"></span></button>
                                    <button onclick="removeModal('item', {{$item['id']}}, '{{ route('product.destroy', ['product' => $item['id']]) }}')" data-toggle='tooltip' title="حذف" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                </div>
                                <div class="flex gap10">
                                    <button data-toggle='tooltip' title="مدیریت نظرات" onclick="document.location.href = '{{ route('product.comment.index', ['product' => $item['id']]) }}'" class="btn btn-purple"><span class="glyphicon glyphicon-comment"></span></button>
                                </div>
                            </div>
                            
                        </td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['rate'] == null ? 'امتیازی ثبت نشده است' : $item['rate'] }}</td>
                        <td>
                            <div class="flex gap10">
                                <input style="width: 40px" type="number" value="{{ $item['available_count'] }}" id="available_count_{{ $item['id'] }}" />
                                <button data-id={{ $item['id'] }} class="saveBtn btn btn-primary">ثبت تغییر</button>
                            </div>
                        </td>
                        <td>{{ $item['is_in_top_list'] ? "بله" : "خیر" }}</td>
                        <td>
                            <p id="visibility_text_{{ $item['id'] }}">{{ $item['visibility'] ? "نمایش" : "عدم نمایش"}}</p>
                            @if($item['visibility'])
                                <button class="btn btn-danger changeVisibilityBtn" data-value='0' data-id='{{ $item['id'] }}' id="visibility_invisible_{{ $item['id'] }}">تغییر وضعیت به عدم نمایش</button>
                                <button class="hidden btn btn-primary changeVisibilityBtn" data-value='1' data-id='{{ $item['id'] }}' id="visibility_visible_{{ $item['id'] }}">تغییر وضعیت به نمایش</button>    
                            @else
                                <button class="hidden btn btn-danger changeVisibilityBtn" data-value='0' data-id='{{ $item['id'] }}' id="visibility_invisible_{{ $item['id'] }}">تغییر وضعیت به عدم نمایش</button>
                                <button class="btn btn-primary changeVisibilityBtn" data-value='1' data-id='{{ $item['id'] }}' id="visibility_visible_{{ $item['id'] }}">تغییر وضعیت به نمایش</button>    
                            @endif
                        </td>
                        <td>{{ $item['priority'] }}</td>
                        <td>{{ $item['seen'] }}</td>
                        <td>{{ $item['brand'] }}</td>
                        <td>{{ $item['category'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $links !!}
    @endif
    
</center>

<script src="{{ asset('admin-panel/js/pro_search.js') }}"></script>

    <script>
        
        $(document).ready(function() {

            $(".saveBtn").on('click', function() {
                save($(this).attr('data-id'));
            });

            $('.changeVisibilityBtn').on('click', function() {
                changeVisibility($(this).attr('data-id'), $(this).attr('data-value'));
            });

            function save(productId) {
                $.ajax({
                    type: 'post',
                    url: '{{ route('product.updateAvailableCount') }}' + '/' + productId,
                    data: {
                        'available_count': $("#available_count_" + productId).val()
                    },
                    success: function(res) {

                        if(res.status === "ok") {
                            alert("عملیات موردنظر با موفقیت انجام شد.");
                        }
                        else {
                            alert(res.msg);
                        }
                    }
                });
            }

            function changeVisibility(productId, newStatus) {
                $.ajax({
                    type: 'post',
                    url: '{{ route('product.changeVisibility') }}' + '/' + productId,
                    data: {
                        'visibility': newStatus
                    },
                    success: function(res) {

                        if(res.status === "ok") {
                            if(newStatus == 1) {
                                $("#visibility_invisible_" + productId).removeClass('hidden');
                                $("#visibility_visible_" + productId).addClass('hidden');
                                $("#visibility_text_" + productId).text('نمایش');
                            }
                            else {
                                $("#visibility_invisible_" + productId).addClass('hidden');
                                $("#visibility_visible_" + productId).removeClass('hidden');
                                $("#visibility_text_" + productId).text('عدم نمایش');
                            }
                            alert("عملیات موردنظر با موفقیت انجام شد.");
                        }
                        else {
                            alert(res.msg);
                        }
                    }
                });
            }
        });

    </script>

    <script>

        function buildQuery() {
            
            let query = new URLSearchParams();
            
            let visibility = $("#visibilityFilter").val();
            let isInTopList = $("#isInTopListFilter").val();
            let brand = $("#brandFilter").val();
            let max = $("#maxFilter").val();
            let min = $("#minFilter").val();
            let orderBy = $("#orderBy").val();
            let orderByType = $("#orderByType").val();

            if(visibility !== 'all')
                query.append('visibility', visibility);
                
            if(isInTopList !== 'all')
                query.append('isInTopList', isInTopList);
                
            if(brand !== 'all')
                query.append('brand', brand);
                
            if(max !== '')
                query.append('max', max);
                
            if(min !== '')
                query.append('min', min);

            query.append('orderBy', orderBy);
            query.append('orderByType', orderByType);

            return query;
        }

        function filter() {
            document.location.href = '{{ route('product.index') }}' + '?' + buildQuery().toString();
        }
        
        function excel() {
            window.open('{{ route('product.excel') }}' + '?' + buildQuery().toString(), '_blank');
        }

    </script>

    
    <div id="addBatchModal" class="modal hidden">
        <div class="modal-content" style="width: 70% !important">
            <input type="hidden" value="" id="slideId" name="id">
            <input type="hidden" value="delete" name="kind">
            
            <form method="post" action="{{ route('product.addBatch') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <center style="margin: 10px">
                    <h3>لطفا فایل اکسل را مطابق فایل نمونه بارگزاری نمایید.</h3>
                    <div style="margin: 10px">
                        <a href="{{ asset('products.xlsx') }}" target="_blank" download>دانلود فایل نمونه</a>
                    </div>
                    <input type="file" name="file" />
                </center>
                <div class="flex center gap10">
                    <input type="submit" value="افزودن" class="btn green"  style="margin-right: 5px; margin-bottom: 3%">
                    <input type="button" value="انصراف" class="btn green"  style="margin-bottom: 3%; margin-left: 5px;" onclick="$('#addBatchModal').addClass('hidden')">
                </div>
            </form>
        </div>
    </div>

@stop
