
@extends('layouts.structure')
@section('content')
            <main class="page-content">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-md-0 mb-4">
                        <div class="ui-sticky ui-sticky-top">
                            <div class="profile-user-info py-3 ui-box bg-white">
                                <div class="profile-detail">
                                    <div class="d-flex align-items-center">
                                        <div class="profile-avatar me-3"><img
                                                src="./theme-assets/images/avatar/default.png" alt="avatar">
                                        </div>
                                        <div class="profile-info">
                                            <a href="#" class="text-decoration-none text-dark fw-bold mb-2">جلال بهرامی
                                                راد</a>
                                            <div class="text-muted fs-7 fw-bold">۰۹xxxxxxxxx</div>
                                        </div>
                                    </div>
                                    <div class="user-options">
                                        <ul>
                                            <li>
                                                <span class="label">کیف پول</span>
                                                <span class="detail">
                                                    <span class="d-block">۰ <span
                                                            class="currency fs-7 fw-bold">تومان</span></span>
                                                    <a href="#"
                                                        class="link border-bottom-0 text-info fs-7 fw-bold">افزایش
                                                        موجودی <i class="ri-arrow-left-s-line"></i></a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">باشگاه مشتریان</span>
                                                <span class="detail">
                                                    <span class="d-block">۰ <span
                                                            class="score text-muted fs-7">امتیاز</span></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav nav-items-with-icon flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-file-list-3-line"></i>
                                            سفارش
                                            های من</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-heart-3-line"></i> لیست
                                            ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-chat-1-line"></i>
                                            نظرات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-map-pin-line"></i> نشانی
                                            ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-gift-line"></i> کارت های
                                            هدیه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-notification-line"></i>
                                            پیغام ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-time-line"></i> بازدید
                                            های
                                            اخیر</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-user-line"></i> اطلاعات
                                            حساب</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-link-icon ri-logout-box-r-line"></i>
                                            خروج</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="alert alert-warning alert-dismissible fade show mb-5" role="alert">
                            <div>
                                سفارش شما در انتظار پرداخت است. برای جلوگیری از لغو سفارش، لطفا پرداخت را انجام دهید.
                                <a href="#" class="btn btn-sm btn-primary mx-3">سفارش های من</a>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ui-box bg-white mb-5">
                                    <div class="ui-box-title">لیست آخرین علاقمندی ها</div>
                                    <div class="ui-box-content">
                                        <div class="product-list">
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">هدفون بی سیم سامسونگ مدل
                                                        Galaxy
                                                        Buds
                                                        Live
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">2,110,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"
                                                                data-remodal-target="remove-from-favorite-modal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">گوشی موبایل اپل مدل
                                                        iPhone 13
                                                        A2634
                                                        دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">28,250,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"
                                                                data-remodal-target="remove-from-favorite-modal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">دوربین دیجیتال کانن مدل
                                                        EOS
                                                        4000D به
                                                        همراه لنز 18-55 میلی متر DC III
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">12,110,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"
                                                                data-remodal-target="remove-from-favorite-modal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ui-box bg-white mb-5">
                                    <div class="ui-box-title">آخرین بازدیدهای شما</div>
                                    <div class="ui-box-content">
                                        <div class="product-list">
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">هدفون بی سیم سامسونگ مدل
                                                        Galaxy
                                                        Buds
                                                        Live
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">2,110,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">گوشی موبایل اپل مدل
                                                        iPhone 13
                                                        A2634
                                                        دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">28,250,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                            <!-- start of product-list-item -->
                                            <div class="product-list-item">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="./theme-assets/images/carts/03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="detail">
                                                    <a href="#" class="title fs-7 fw-bold mb-2">دوربین دیجیتال کانن مدل
                                                        EOS
                                                        4000D به
                                                        همراه لنز 18-55 میلی متر DC III
                                                    </a>
                                                    <div class="price fa-num">
                                                        <span class="fw-bold">12,110,000</span>
                                                        <span class="currency">تومان</span>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="btn btn-circle btn-outline-light"><i
                                                                class="ri-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of product-list-item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="ui-box bg-white mb-5">
                                    <div class="ui-box-title">لیست آخرین سفارشها</div>
                                    <div class="ui-box-content">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>شماره سفارش</th>
                                                        <th>تاریخ ثبت سفارش</th>
                                                        <th>مبلغ قابل پرداخت</th>
                                                        <th>مبلغ کل</th>
                                                        <th>عملیات پرداخت</th>
                                                        <th>جزییات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fa-num">1</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-success rounded-pill fs-7">پرداخت
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fa-num">2</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-danger rounded-pill fs-7">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fa-num">3</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-danger rounded-pill fs-7">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fa-num">4</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-info rounded-pill fs-7">در انتظار
                                                                پرداخت</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fa-num">5</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-danger rounded-pill fs-7">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fa-num">6</td>
                                                        <td class="font-en fw-bold">DKC-244424454</td>
                                                        <td class="fa-num text-muted">۲۵ دی ۱۴۰۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۰</td>
                                                        <td class="fa-num fs-6 fw-bold">۴۱,۵۴۰,۰۰۰ <span
                                                                class="currency">تومان</span></td>
                                                        <td><span class="badge bg-danger rounded-pill fs-7">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-outline-light">جزئیات <i
                                                                    class="ri-arrow-left-s-fill"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start of remove-from-favorite-modal -->
            <div class="remodal remodal-xs" data-remodal-id="remove-from-favorite-modal"
                data-remodal-options="hashTracking: false">
                <div class="remodal-header">
                    <button data-remodal-action="close" class="remodal-close"></button>
                </div>
                <div class="remodal-content">
                    <div class="text-muted fs-7 fw-bold mb-3">
                        آیا مطمئنید که این محصول از لیست مورد علاقه شما حذف شود؟
                    </div>
                </div>
                <div class="remodal-footer">
                    <button data-remodal-action="cancel" class="btn btn-sm btn-outline-light px-3 me-2">خیر</button>
                    <button class="btn btn-sm btn-primary px-3">بله</button>
                </div>
            </div>
            <!-- end of remove-from-favorite-modal -->
        </main>
@stop

@section('footer')
    @parent
@stop

@section('extraJS')
    @parent
    <script src="{{ asset('theme-assets/js/theme.js') }}"></script>
    <script src="{{ asset('theme-assets/js/custom.js') }}"></script>
@stop