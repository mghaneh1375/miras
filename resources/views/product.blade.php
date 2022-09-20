@extends('layouts.structure')
@section('content')
<div class="container">
        <main class="page-content">
            <div class="container">
                <!-- start of breadcrumb -->
                <nav class="mb-5" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#">کالای دیجیتال</a></li>
                        <li class="breadcrumb-item"><a href="#">موبایل</a></li>
                        <li class="breadcrumb-item"><a href="#">گوشی موبایل</a></li>
                    </ol>
                </nav>
                <!-- end of breadcrumb -->
                <!-- start of product-detail-container -->
                <div class="product-detail-container mb-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 mb-md-0 mb-4">
                            <div class="ui-sticky ui-sticky-top">
                                <!-- start of product-gallery -->
                                <div class="product-gallery">
                                    <div class="product-options">
                                        <ul>
                                            <!-- 
                                                Add this class to enable the option => 'added'.
                                                for example :
                                                <li><a href="#" class="added"><i class="ri-heart-3-fill"></i></a></li>
                                            -->
                                            <li><a href="#"><i class="ri-heart-3-fill"></i></a></li>
                                            <li><a href="#" data-remodal-target="share-modal"><i
                                                        class="ri-share-forward-fill"></i></a></li>
                                            <li><a href="#" data-remodal-target="notification-modal"><i
                                                        class="ri-notification-fill"></i></a></li>
                                            <li><a href="#"><i class="ri-line-chart-fill"></i></a></li>
                                            <li><a href="#"><i class="ri-scales-3-fill"></i></a></li>
                                            <li><a href="#"><i class="ri-play-list-add-fill"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="gallery-img-container">
                                        <div class="gallery-img">
                                            <img src="./theme-assets/images/gallery/main.jpg" class="zoom-img" alt="">
                                        </div>
                                        <div class="gallery-thumbs">
                                            <ul>
                                                <li data-fancybox="gallery-a"
                                                    data-src="./theme-assets/images/gallery/01.png"><img
                                                        src="./theme-assets/images/gallery/01.png" alt=""></li>
                                                <li data-fancybox="gallery-a"
                                                    data-src="./theme-assets/images/gallery/02.png"><img
                                                        src="./theme-assets/images/gallery/02.png" alt=""></li>
                                                <li data-fancybox="gallery-a"
                                                    data-src="./theme-assets/images/gallery/03.png"><img
                                                        src="./theme-assets/images/gallery/03.png" alt=""></li>
                                                <li data-fancybox="gallery-a"
                                                    data-src="./theme-assets/images/gallery/04.png"><img
                                                        src="./theme-assets/images/gallery/04.png" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of product-gallery -->
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-7 mb-lg-0 mb-4">
                            <!-- start of breadcrumb -->
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">اپل</a></li>
                                    <li class="breadcrumb-item"><a href="#">گوشی موبایل اپل</a></li>
                                </ol>
                            </nav>
                            <!-- end of breadcrumb -->
                            <!-- start of product-detail -->
                            <h2 class="product-title">گوشی موبایل اپل مدل iPhone 13 A2634 دو سیم کارت ظرفیت 128
                                گیگابایت و رم 4 گیگابایت</h2>
                            <div class="product-en mb-3">
                                <span>Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</span>
                            </div>
                            <div class="product-user-suggestion mb-2">
                                <i class="ri-thumb-up-fill text-success me-1"></i>
                                <span class="fs-7 me-2">۷۹٪ (۱۷۰ نفر) از خریداران، این کالا را پیشنهاد کرده
                                    اند.</span>
                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="خریداران کالا با انتخاب یکی از گزینه‌های پیشنهاد یا عدم پیشنهاد، تجربه خرید خود را با کاربران به اشتراک می‌گذارند."><i
                                        class="ri-information-line"></i></span>
                            </div>
                            <div class="product-user-meta fa-num mb-4">
                                <span class="product-users-rating">
                                    <i class="ri-star-fill icon me-1"></i>
                                    <span class="fw-bold me-1">4.4</span>
                                    <span class="text-muted fs-7">(742)</span>
                                </span>
                                <span class="divider"></span>
                                <a href="#" class="link border-bottom-0 fs-7">۶۳۷ دیدگاه کاربران</a>
                                <span class="divider"></span>
                                <a href="#" class="link border-bottom-0 fs-7">۴۰۵ پرسش و پاسخ</a>
                            </div>
                            <div class="product-variants-container mb-3">
                                <div class="product-variant-selected-container">
                                    <span class="product-variant-selected-label">رنگ:</span>
                                    <span class="product-variant-selected">آبی</span>
                                </div>
                                <div class="product-variants">
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input" name="productColor"
                                                id="productColor01" checked>
                                            <label for="productColor01" class="custom-radio-circle-label"
                                                data-variant-label="آبی">
                                                <span class="color" style="background-color: #2196f3;"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="آبی"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input" name="productColor"
                                                id="productColor02">
                                            <label for="productColor02" class="custom-radio-circle-label"
                                                data-variant-label="سفید">
                                                <span class="color" style="background-color: #fff;"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="سفید"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input" name="productColor"
                                                id="productColor03">
                                            <label for="productColor03" class="custom-radio-circle-label"
                                                data-variant-label="صورتی">
                                                <span class="color" style="background-color: #ff80ab;"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="صورتی"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-text mb-3" style="height: 95px;">
                                <div class="expandable-text_text">
                                    <div class="product-params">
                                        <ul>
                                            <li>
                                                <span class="label">حافظه داخلی:</span>
                                                <span class="title">128 گیگابایت</span>
                                            </li>
                                            <li>
                                                <span class="label">مقدار RAM:</span>
                                                <span class="title">چهار گیگابایت</span>
                                            </li>
                                            <li>
                                                <span class="label">بازه‌ی اندازه صفحه نمایش:</span>
                                                <span class="title">6.0 اینچ و بزرگتر</span>
                                            </li>
                                            <li>
                                                <span class="label">شبکه های ارتباطی:</span>
                                                <span class="title">2G، 3G، 4G، 5G</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="expandable-text-expand-btn">
                                    <span class="show-more">
                                        بیشتر بخوانید <i class="ri-arrow-down-s-line"></i>
                                    </span>
                                    <span class="show-less d-none">
                                        بستن <i class="ri-arrow-up-s-line"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="product-additional-info-container mb-3">
                                <span class="icon">
                                    <i class="ri-information-line"></i>
                                </span>
                                <div class="product-additional-info">
                                    <p>هشدار سامانه همتا: در صورت انجام معامله، از فروشنده کد فعالسازی را
                                        گرفته
                                        و حتما در حضور ایشان، دستگاه را از طریق #7777*، برای سیمکارت خود
                                        فعالسازی نمایید. آموزش تصویری در آدرس اینترنتی hmti.ir/06</p>
                                    <p>امکان برگشت کالا در گروه موبایل با دلیل "انصراف از خرید" تنها در
                                        صورتی
                                        مورد قبول است که پلمپ کالا باز نشده باشد.</p>
                                </div>
                            </div>
                            <div class="widget p-0">
                                <div class="widget-content widget--free-shipping">
                                    <div class="free-shipping--detail">
                                        <div class="title d-flex align-items-center"><i class="ri-truck-fill me-1"></i>
                                            ارسال رایگان سفارش
                                        </div>
                                        <div class="subtitle">سفارش‌های بالای ۳۰۰ هزار تومان</div>
                                    </div>
                                    <div class="free-shipping--banner">
                                        <img src="./theme-assets/images/theme/free-shipping--banner.png"
                                            alt="ارسال رایگان سفارش">
                                    </div>
                                </div>
                            </div>
                            <!-- end of product-detail -->
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- start of product-seller-info -->
                            <div class="product-seller-info ui-box">
                                <div class="seller-info-changeable">
                                    <div class="product-seller-counter">
                                        <span class="label">فروشنده</span>
                                        <a href="#" class="anchor-link link border-bottom-0 fs-7 fa-num">4
                                            فروشنده
                                            دیگر</a>
                                    </div>
                                    <div class="product-seller-row">
                                        <div class="product-seller-row-icon">
                                            <!-- <i class="ri-store-3-fill"></i> -->
                                            <img src="./theme-assets/images/seller-logo-small.svg" alt="">
                                        </div>
                                        <div class="product-seller-row-detail">
                                            <div class="product-seller-name mb-1">یکتاکالا</div>
                                            <div class="seller-final-score-container">
                                                <div class="seller-rate-container">
                                                    <span class="seller-rate fa-num">۸۸.۴٪</span>
                                                    <span class="label">رضایت خریداران</span>
                                                    <span class="divider"></span>
                                                    <span class="label">عملکرد</span>
                                                    <span class="seller-final-score">عالی</span>
                                                </div>
                                            </div>
                                            <a href="#" class="seller-info-link"></a>
                                        </div>
                                    </div>
                                    <div class="product-seller-row">
                                        <div class="product-seller-row-icon">
                                            <i class="ri-shield-check-fill"></i>
                                        </div>
                                        <div class="product-seller-row-detail">
                                            <div class="product-seller-row-detail-title">گارانتی ۱۸ ماهه</div>
                                        </div>
                                    </div>
                                    <div class="product-seller-row product-seller-row--clickable">
                                        <div class="product-seller-row-icon">
                                            <i class="ri-checkbox-multiple-fill"></i>
                                        </div>
                                        <div class="product-seller-row-detail">
                                            <div class="product-seller-row-detail-title">موجود در انبار</div>
                                            <div class="product-seller-row-detail-subtitle"><i></i> آماده ارسال</div>
                                        </div>
                                    </div>
                                    <div class="product-seller-row">
                                        <div class="product-seller-row-icon">
                                            <i class="ri-copper-coin-fill text-warning"></i>
                                        </div>
                                        <div class="product-seller-row-detail">
                                            <div class="product-seller-row-detail-title">۱۵۰ امتیاز
                                                در باشگاه مشتریان
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-seller-row product-seller-row--price">
                                        <div class="product-seller-row--price-now fa-num">
                                            <span class="price">28,250,000</span>
                                            <span class="currency">تومان</span>
                                        </div>
                                    </div>
                                    <div class="product-seller-row product-remaining-in-stock">
                                        <span>تنها <span class="mx-2">۱</span> عدد در انبار باقیست - پیش از
                                            اتمام بخرید</span>
                                    </div>
                                </div>
                                <div class="product-seller--add-to-cart">
                                    <a href="#" class="btn btn-primary w-100" data-toast data-toast-type="success"
                                        data-toast-color="green" data-toast-position="topRight"
                                        data-toast-icon="ri-check-fill" data-toast-title="موفق!"
                                        data-toast-message="به سبد اضافه شد!">
                                        افزودن به سبد خرید
                                    </a>
                                </div>
                            </div>
                            <!-- end of product-seller-info -->
                        </div>
                    </div>
                </div>
                <!-- end of product-detail-container -->
                <!-- start of box -->
                <div class="ui-box bg-white mb-5">
                    <div class="ui-box-title">لیست فروشندگان این کالا</div>
                    <div class="ui-box-content">
                        <!-- start of suppliers-items -->
                        <div class="suppliers-items">
                            <!-- start of suppliers-item -->
                            <div class="suppliers-item">
                                <div class="suppliers-item-col suppliers-item-col--info">
                                    <div class="suppliers-seller-icon">
                                        <img src="./theme-assets/images/seller-logo-small.svg" alt="">
                                    </div>
                                    <div class="suppliers-seller-info">
                                        <div class="suppliers-seller-name fw-bold">یکتاکالا</div>
                                        <div class="suppliers-seller-rate fs-7">
                                            <span class="text-success fw-bold fa-num">92%</span>
                                            <span class="text-muted">رضایت خریداران</span>
                                            <span class="text-muted">|</span>
                                            <span class="text-muted">عملکرد</span>
                                            <span class="text-success fw-bold">عالی</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--conditions">
                                    <div class="suppliers-item-sender">
                                        <i class="ri-truck-line"></i>
                                        <span class="text-dark">ارسال یکتاکالا</span>
                                    </div>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--guarantee">
                                    <i class="ri-shield-check-line"></i>
                                    <span class="text-dark fa-num">گارانتی 18 ماهه</span>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--price">
                                    <span class="price-now fa-num">26,500,000</span>
                                    <span class="currency">تومان</span>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--action">
                                    <a href="#" class="btn btn-sm btn-outline-primary fw-bold px-4">افزودن به سبد</a>
                                </div>
                            </div>
                            <!-- end of suppliers-item -->
                            <!-- start of suppliers-item -->
                            <div class="suppliers-item">
                                <div class="suppliers-item-col suppliers-item-col--info">
                                    <div class="suppliers-seller-icon">
                                        <img src="./theme-assets/images/seller-logo-small.svg" alt="">
                                    </div>
                                    <div class="suppliers-seller-info">
                                        <div class="suppliers-seller-name fw-bold">یکتاکالا</div>
                                        <div class="suppliers-seller-rate fs-7">
                                            <span class="text-success fw-bold fa-num">92%</span>
                                            <span class="text-muted">رضایت خریداران</span>
                                            <span class="text-muted">|</span>
                                            <span class="text-muted">عملکرد</span>
                                            <span class="text-success fw-bold">عالی</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--conditions">
                                    <div class="suppliers-item-sender">
                                        <i class="ri-truck-line"></i>
                                        <span class="text-dark">ارسال یکتاکالا</span>
                                    </div>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--guarantee">
                                    <i class="ri-shield-check-line"></i>
                                    <span class="text-dark fa-num">گارانتی 18 ماهه</span>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--price">
                                    <span class="price-now fa-num">26,500,000</span>
                                    <span class="currency">تومان</span>
                                </div>
                                <div class="suppliers-item-col suppliers-item-col--action">
                                    <a href="#" class="btn btn-sm btn-outline-primary fw-bold px-4">افزودن به سبد</a>
                                </div>
                            </div>
                            <!-- end of suppliers-item -->
                        </div>
                        <!-- end of suppliers-items -->
                    </div>
                </div>
                <!-- end of box -->
                <!-- start of box -->
                <div class="ui-box mb-5">
                    <div class="ui-box-title">محصولات مشابه</div>
                    <div class="ui-box-content">
                        <!-- Slider main container -->
                        <div class="swiper product-swiper-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/01.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو سیم‌ کارت ظرفیت 128
                                                    گیگابایت و رم 4 گیگابایت</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #d4d4d4;"></span>
                                                <span class="color" style="background-color: #e86841;"></span>
                                                <span class="color" style="background-color: #b82c32;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <div class="d-flex align-items-center">
                                                    <del class="price-old">26,900,000</del>
                                                    <span class="discount ms-2">%2</span>
                                                </div>
                                                <span class="price-now">26,249,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/02.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE 2109119DG دو سیم‌ کارت
                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #4d5b63;"></span>
                                                <span class="color" style="background-color: #57415f;"></span>
                                                <span class="color" style="background-color: #984638;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">8,239,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/03.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10 pro M2101K6G دو سیم‌
                                                    کارت
                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #24476e;"></span>
                                                <span class="color" style="background-color: #12505b;"></span>
                                                <span class="color" style="background-color: #e4a793;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">7,599,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/04.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3 5G ظرفیت 256 گیگابایت
                                                    و
                                                    رم 8 گیگابایت</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #24476e;"></span>
                                                <span class="color" style="background-color: #12505b;"></span>
                                                <span class="color" style="background-color: #e4a793;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">22,499,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/05.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت
                                                    ظرفیت
                                                    256 گیگابایت</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #d4d4d4;"></span>
                                                <span class="color" style="background-color: #e86841;"></span>
                                                <span class="color" style="background-color: #b82c32;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">36,300,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/06.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G M2012K11G دو سیم‌ کارت
                                                    ظرفیت
                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #4d5b63;"></span>
                                                <span class="color" style="background-color: #57415f;"></span>
                                                <span class="color" style="background-color: #984638;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">16,199,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/07.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus دو سیم کارت ظرفیت 64
                                                    گیگابایت</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #24476e;"></span>
                                                <span class="color" style="background-color: #12505b;"></span>
                                                <span class="color" style="background-color: #e4a793;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <span class="price-now">12,890,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- start of product-card -->
                                    <div class="product-card">
                                        <div class="product-thumbnail">
                                            <a href="#">
                                                <img src="./theme-assets/images/products/08.jpg" alt="product title">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <h2 class="product-title">
                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20 5G SM-N981B/DS دو سیم
                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                            </h2>
                                            <div class="product-variant">
                                                <span class="color" style="background-color: #24476e;"></span>
                                                <span class="color" style="background-color: #12505b;"></span>
                                                <span class="color" style="background-color: #e4a793;"></span>
                                                <span>+</span>
                                            </div>
                                            <div class="product-price fa-num">
                                                <div class="d-flex align-items-center">
                                                    <del class="price-old">23,570,000</del>
                                                    <span class="discount ms-2">%3</span>
                                                </div>
                                                <span class="price-now">22,799,000 <span
                                                        class="currency">تومان</span></span>
                                            </div>
                                        </div>
                                        <div class="product-card-footer">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                <div class="product-actions">
                                                    <ul>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به سبد خرید"
                                                                aria-label="افزودن به سبد خرید"><i
                                                                    class="ri-shopping-cart-line"></i></a></li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="مشاهده سریع"
                                                                aria-label="مشاهده سریع"
                                                                data-remodal-target="quick-view-modal"><i
                                                                    class="ri-search-line"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="افزودن به علاقمندی"
                                                                aria-label="افزودن به علاقمندی"><i
                                                                    class="ri-heart-3-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-rating fa-num">
                                                    <i class="ri-star-fill star"></i>
                                                    <strong>۴.۴</strong>
                                                    <span>(۴۳۶)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of product-card -->
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <!-- end of box -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="ui-sticky ui-sticky-top mb-4">
                            <!-- start of product-tabs -->
                            <div class="product-tabs">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#scrollspyHeading1"
                                            data-scroll="scrollspyHeading1">نقد و بررسی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading2"
                                            data-scroll="scrollspyHeading2">بررسی تخصصی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading3"
                                            data-scroll="scrollspyHeading3">مشخصات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading4"
                                            data-scroll="scrollspyHeading4">دیدگاه کاربران</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading5"
                                            data-scroll="scrollspyHeading5">پرسش و پاسخ</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end of product-tabs -->
                        </div>
                        <!-- start of product-content-expert-summary -->
                        <div class="product-tab-content product-content-expert-summary tab-content border-bottom pb-2 mb-4"
                            id="scrollspyHeading1">
                            <div class="product-tab-title">
                                <h2>نقد و بررسی اجمالی</h2>
                                <h3 class="subtitle">Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</h3>
                            </div>
                            <div class="expandable-text pt-1" style="height: 250px;">
                                <div class="expandable-text_text">
                                    <p>
                                        گوشی موبایل «iPhone 13» پرچم‌دار جدید شرکت اپل است که با چند ویژگی جدید و دوربین
                                        دوگانه روانه بازار شده است. اپل برای ویژگی‌ها و طراحی کلی این گوشی از همان فرمول
                                        چند سال اخیرش استفاده کرده است. نمایشگر آیفون 13 به پنل Super Retina مجهز ‌شده
                                        است تا تصاویر بسیار مطلوبی را به کاربر عرضه کند. این نمایشگر رزولوشن بسیار
                                        بالایی دارد؛ به‌طوری‌که در اندازه­‌ی 6.1 اینچی‌اش، حدود 460 پیکسل را در هر اینچ
                                        جا داده است. امکان شارژ بی‌‌سیم باتری در این گوشی وجود دارد. روکش سرامیکی
                                        صفحه‌نمایش این گوشی می‌تواند انقلابی در محافظت به‌پا کند. این گوشی ضدآب و ضد
                                        گردوخاک است. بدنه­ زیبا iPhone 13 در مقابل خط‌‌وخش مقاومت زیادی دارد؛ پس خیالتان
                                        از این بابت که آب و گردوغبار به‌‌راحتی روی آیفون 13 تأثیر نمی‌‌گذارد، راحت باشد.
                                        علاوه‌براین لکه و چربی هم روی این صفحه‌نمایش باکیفیت تأثیر چندانی ندارند. تشخیص
                                        چهره با استفاده از دوربین جلو دیگر ویژگی است که در آیفون جدید اپل به کار گرفته
                                        شده است. قابلیت اتصال به شبکه­‌های 4G و 5G، بلوتوث نسخه‌ 5، نسخه­‌ 15 از iOS
                                        دیگر ویژگی‌های این گوشی هستند. ازنظر سخت‌‌افزاری هم این گوشی از تراشه­‌ی جدید
                                        A15 بهره می‌برد که دارای 15 میلیارد ترانزیستور است که دارای کنترل گرمای مطلوبی
                                        بوده که تا بتواند علاوه بر کارهای معمول، از قابلیت‌های جدید واقعیت مجازی که اپل
                                        این روزها روی آن تمرکز خاصی دارد، پشتیبانی کند. به گفته خود شرکت اپل این گوشی
                                        دارای سرعتی 50 برابر نسخه 12 خود است. پردازنده دارای ماژولار جدیدی است که مصرف
                                        باتری را بسیار پایین‌تر آورده است و شما دارای حفظ باتری بالاتری هستید. کیفیت
                                        نمایش شما در iPhone 13 دارای 120 هرتز است و کسفیت بالایی را شاهد خواهید بود. اپل
                                        در این سری از گوشی‌های iPhone خود پردازنده گرافیکی‌ای را قرار داده که از سری 12
                                        گوشی‌های خود 30 درصد سریع‌تر است و این نویدبخش آن است که شما می‌توانید بازی‌هایی
                                        را با گرافیک و MAP سنگین تر و بزرگ‌تر اجرا کنید. یکی از ویژگی‌هایی که در iPhone
                                        13 شاهد هستیم سیستم فیلمبرداری ProRes سینمایی آن است که می تواند انقلابی در
                                        فیلمبرداری گوشی‌های موبایل به‌راه انداخته باشد. این قابلیت می‌تواند نسبت به صورت
                                        روبرو بین افراد و یا بین فرد و اشیا فوکوس و بِلار داشته باشد.
                                    </p>
                                </div>
                                <div class="expandable-text-expand-btn justify-content-start text-sm">
                                    <span class="show-more active">
                                        ادامه مطلب <i class="ri-arrow-down-s-line ms-2"></i>
                                    </span>
                                    <span class="show-less d-none">
                                        مشاهده کمتر <i class="ri-arrow-up-s-line ms-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end of product-content-expert-summary -->
                        <!-- start of product-content-expert-articles -->
                        <div class="product-tab-content product-content-expert-articles tab-content border-bottom pb-2 mb-4"
                            id="scrollspyHeading2">
                            <div class="product-tab-title">
                                <h2>نقد و بررسی تخصصی</h2>
                                <h3 class="subtitle">Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</h3>
                            </div>
                            <div class="expandable-text pt-1" style="height: 840px;">
                                <div class="expandable-text_text">
                                    <h3>آیفون 13 مینی کوچک‌ترین عضو خانواده، اما قدرتمند</h3>
                                    <p>تا قبل از رونمایی گوشی‌های هوشمند خانواده آیفون 12، پرچمداران این شرکت در قالب دو
                                        یا سه گوشی‌هوشمند معرفی می‌شدند. تا اینکه آیفون 12 مینی نیز در کنار گوشی‌های
                                        هوشمند خانواده آیفون 12 معرفی شد. حال گوشی‌های هوشمند خانواده آیفون 13 به عنوان
                                        جدید‌ترین پرچمداران این شرکت روانه بازار شده‌اند و بار دیگر آیفون 13 مینی به
                                        عنوان کوچکترین عضو و البته ارزان قیمت‌ترین گوشی هوشمند خانواده آیفون 13 معرفی
                                        شد. اما قیمت ارزان تر این گوشی‌هوشمند به نسبت سایر اعضای این خانواده سبب نشده تا
                                        مشخصات قوی را با خود به‌همراه نداشته باشد و آیفون 13 مینی با بهره بردن از مشخصات
                                        فنی قدرتمند، توانایی رقابت با پرچمداران اندرویدی را به‌خوبی دارد.</p>
                                    <h3>طراحی و صفحه نمایش</h3>
                                    <p>در نگاه اول تفاوت چندانی در زمینه طراحی با سری قبلی پرچمداران این شرکت و به‌خصوص
                                        آیفون 12 مینی نمی‌بینیم. اپل با توجه به طراحی بسیار جذابی که برای گوشی‌های
                                        هوشمند خانواده آیفون 12 در نظر گرفته بود و بازخورد بسیار خوبی از سمت کاربران
                                        داشت، تصمیم گرفت تا طراحی مشابهی را برای گوشی‌های هوشمند خانواده آیفون 13 در نظر
                                        بگیرد. در نمای رو به رویی این بار ناچ کوچکتری به نسبت آیفون 12 مینی برای صفحه
                                        نمایش آیفون 13 مینی در نظر گرفته شده. در قسمت پشتی هم شاهد قرار گیری دو سنسور
                                        دوربین می‌باشیم که این بار چیدمان متفاوتی با نسل قبلی خود دارند. دو سنسور دوربین
                                        قسمت پشتی به همراه فلش LED با چیدمانی ضربدری در بریدگی مربعی شکلی کنار یکدیگر
                                        قرار گرفته‌اند. متریال بسیار با‌کیفیت این گوشی هوشمند نیز سبب شده تا از
                                        استاندارد IP68 نیز پشتیبانی کند. پس با این تفاسیر، آیفون 13 مینی توانایی
                                        قرار‌گیری در عمق 6 متری آب و مدت زمان 30 دقیقه‌ای را دارد. پس با خیال راحت از
                                        این گوشی‌هوشمند در شرایط جوی متفاوت و حتی تفریحات آبی همچون شنا هم استفاده کنید.
                                    </p>
                                    <img src="./theme-assets/images/product/01.jpg" alt="">
                                    <p>
                                        صفحه نمایش در نظر گرفته شده برای این گوشی‌هوشمند نیز هیچ تفاوتی با برادر
                                        بزرگترش، یعنی آیفون 12 ندارد و تنها از ابعاد کوچک‌تری بهره برده است. آیفون 13
                                        مینی به صفحه نمایشی 5.4 اینچی با رزولوشن 1080×2340 از نوع اولد و فناوری Super
                                        Retina XDR مجهز شده است. صفحه نمایشی که با توجه به تراکم پیکسلی 467ppi (پیکسل در
                                        هر اینچ) توانایی ارائه کیفیت بسیار عالی وخوبی را دارد. Scratch-resistant ceramic
                                        glass هم از صفحه نمایش این گوشی‌هوشمند در مقابل ضربات و افتادن‌های احتمالی
                                        محافظت می‌کند. از طرفی این صفحه نمایش توانایی ارائه حداکثر روشنایی 800 نیت (شمع
                                        در متر مربع) در حالت معمولی (typical) و حداکثر روشنایی 1200 نیت در حالت HDR را
                                        دارد. میزان روشنایی بسیار خوب در نظر گرفته شده برای صفحه‌نمایش سبب شده تا در
                                        شرایط نوری متنوع و حتی زیر تابش مستقیم نور خورشید هم شاهد وضوح تصویر بسیار عالی
                                        و با‌کیفیتی از این گوشی‌هوشمند باشیم.
                                    </p>
                                    <h3>دوربین مشابه با آیفون 13</h3>
                                    <p>
                                        نه تنها سنسور‌های دوربین در نظر گرفته شده برای این گوشی‌هوشمند تفاوتی با مدل
                                        آیفون 13 ندارد، بلکه از سنسور‌های دوربین تقریبا مشابهی با آیفون 12 مینی بهره
                                        برده است. اما بدون شک آیفون 13 مینی در این زمینه می‌تواند عملکرد بهتر و خروجی
                                        تصاویر بسیار با‌کیفیت‌تری را به نسبت آیفون 12 مینی ارائه کند. دلیل این اتفاق
                                        چیزی نیست جز پردازنده بسیار قدرتمند در نظر گرفته شده برای این گوشی‌هوشمند است.
                                        پردازنده قدرتمند، ISP یا همان پردازش تصویر قدرتمند‌تری را با خود به همراه دارد
                                        که تاثیر بسیار مهمی در کیفیت خروجی تصاویر می‌گذارد.
                                        یک سنسور دوربین اصلی با رزولوشن 12 مگاپیکسل، گشودگی دریچه دیافراگم f/1.6، فاصله
                                        کانونی 26 میلی متر از نوع عریض به‌همراه سنسور دوربین از نوع فوق عریض (ultra
                                        wide) با رزولوشن 12 مگاپیکسل، گشودگی دریچه دیافراگم f/2.4، زاویه دید 120 درجه و
                                        فاصله کانونی 13 میلی‌متر، سنسور‌های دوربین دوگانه آیفون 13 مینی را تشکیل
                                        می‌دهند. برای دوربین سلفی نیز، سنسور 12 مگاپیکسل از نوع عریض با گشودگی دریچه
                                        دیافراگم f/2.2 در نظر گرفته شده که توانایی ضبط ویدیو با کیفیت 4K و نرخ 60 فریم
                                        در ثانیه را هم دارد.
                                    </p>
                                    <img src="./theme-assets/images/product/02.jpg" alt="">
                                    <p>
                                        عملکرد سنسور دوربین اصلی 12 مگاپیکسلی در نور روز جای هیچ حرف و حدیثی را باقی
                                        نگذاشته است. داینامیک رنج بسیار جذاب، جزئیات عالی و کنتراست بسیار جذاب در تصاویر
                                        خروجی ثبت شده به‌خوبی دیده می‌شود. گشودگی دریچه دیافراگم هم جذب نور بسیار خوبی
                                        دارد و این نشان از عملکرد عالی این گوشی هوشمند در ثبت تصاویر شب یا در نور کم
                                        دارد. سنسور دوربین فوق عریض نیز با زاویه دید گسترده‌تر به نسبت سنسور دوربین
                                        اصلی، این امکان را برای شما فراهم می‌کند که تصاویری با زاویه دید باز و بسیار
                                        جذاب (برای مثال عکاسی در طبیعت و عکس‌های گروهی) به ثبت برسانید.
                                        در بخش فیلمبرداری هنوز هم گوشی‌های هوشمند اپل در مقایسه با بسیاری از پرچمداران
                                        اندرویدی توانایی ارائه عملکرد بهتری را دارد. آیفون 13 مینی نیز از این اتفاق
                                        مستثنی نیست و در کنار توانایی ضبط ویدیو با حداکثر کیفیت 4K‌ و نرخ 60 فریم در
                                        ثانیه، قابلیت های ویژه و جدیدی را در این بخش با خود به‌همراه داشته است. سنسور
                                        دوربین اصلی به قابلیت بسیار جذاب OIS یا همان لرزشگیر اپتیکال مجهز شده است.
                                        قابلیتی که لرزش های ناخواسته هنگام ضبط ویدیو را به‌خوبی حذف می‌کند و در نهایت
                                        خروجی ویدیو بسیار با‌کیفیتی را به شما ارائه می‌کند. همانند نسل قبلی، سنسور
                                        دوربین این گوشی نیز توانایی ضبط ویدیو سینماتیک را دارد که بالا‌ترین کیفیت ممکن
                                        ضبط ویدیو در میان تمام پرچمداران دنیا است. اما این بار اپل بهبود‌های چشم گیری را
                                        برای بخش فیلمبرداری این گوشی‌هوشمند در نظر گرفته تا به‌راحتی نیاز‌های یک
                                        فیلمبردار حرفه‌ای را نیز برطرف کند. فوکوس خودکار بسیار شگفت‌انگیز این دوربین، به
                                        لطف هوش مصنوعی یا همان AI، عملکرد بی‌نظیری را از خود به نمایش گذاشته است. فوکوس
                                        خودکار بین چهره افراد (برای مثال دو نفر در کادر دوربین حضور دارند و فوکوس بر روی
                                        چهره نفر جلو‌تر است، به محض اینکه نفر اول سرش با برگرداند و به نفر بعدی نگاه کن،
                                        دوربین به‌صورت خودکار بر روی نفر دوم فوکوس می‌کند).
                                    </p>
                                    <h3>پردازنده ای قدرتمند مشابه با آیفون 13 پرو مکس</h3>
                                    <img src="./theme-assets/images/product/01.jpg" alt="">
                                    <p>
                                        باید قبول کنیم که تا به امروز، پردازنده‌های قدرتمند گوشی‌های هوشمند اپل در کنار
                                        سیستم عامل بی‌نظیر iOS توانسته اند عملکرد بسیار شگفت‌انگیزی را به نمایش بگذارند.
                                        این بار هم آیفون 13 مینی همانند برادران بزرگترش، یعنی آیفون 13 پرو وآیفون 13 پرو
                                        مکس، به قدرتمند‌ترین پردازنده این شرکت یعنیُ A15 بایونیک مجهز شده است. پردازنده
                                        ای با معماری 5 نانومتری و متشکل از 6 هسته (2 هسته قدرتمند‌تر به‌همراه 4 هسته با
                                        کارایی معمولی و صرفه انرژی کمتر). برای GPU یا همان پردازنده گرافیکی هم، پردازنده
                                        اختصاصی 4 هسته‌ای در نظر گرفته شده است.
                                        با توجه به نتایج بنچمارک و تست های انجام شده باید بگوییم که هیچ بازی در دنیا
                                        وجود ندارد که آیفون 13 مینی با بهره بردن از چنین پردازنده قدرتمندی، توانایی اجرا
                                        آن را نداشته باشد. البته لازم به ذکر است که این گوشی توانایی اجرای بازی های
                                        سنگینی همچون کال‌آ‌ف‌دیوتی موبایل و آسفالت 9 را در بالاتری تنظیمات گرافیکی خواهد
                                        داشت. از طرفی معماری 5 نانومتری این پردازنده نیز سبب شده تا به‌نسبت
                                        پردازنده‌هایی با معماری 7 و 10 نانومتری مصرف انرژی کمتری داشته باشد و در نهایت
                                        طول عمر مفید طولانی‌تری به ازای هر بار شارژ 100 درصدی ارائه کند. آیفون 13 مینی
                                        در سه مدل با حافظه‌های داخلی 128،256 و 512 گیگابایت روانه بازار شده است. در
                                        مقایسه با آیفون 12 مینی، همانطور که می‌بینیم دیگر خبری از حافظه داخلی 64
                                        گیگابایتی نیست و در عوض، آیفون 13 به حافظه داخلی 512 گیگابایت مجهز شده است
                                        (آیفون 12 به حافظه داخلی 512 گیگابایت مجهز نشده بود). دربخش میزان ظرفیت باتری
                                        نیز همانند هر سال، اپل هیچ حرفی از میزان طرفیت باتری در نظر گرفته شده برای این
                                        گوشی‌هوشمند چیزی نگفته است. اما به گفته اپل، آیفون 13 مینی توانایی ارائه طول عمر
                                        مفید بهتری به ازای هر بار شارژ 100 درصدی به‌نسبت آیفون 12 مینی دارد. حضور
                                        پردازنده‌ای با معماری 5 نانومتری و تکنولوژی جدید‌تر این پردازنده به نسبت
                                        پردازنده ‌A14 بایونیک، صرفه انرژی به‌مراتب کمتری را خواهد داشت.
                                    </p>
                                </div>
                                <div class="expandable-text-expand-btn justify-content-start text-sm">
                                    <span class="show-more active">
                                        نمایش کامل نقد و بررسی تخصصی <i class="ri-arrow-down-s-line ms-2"></i>
                                    </span>
                                    <span class="show-less d-none">
                                        نمایش خلاصه <i class="ri-arrow-up-s-line ms-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end of product-content-expert-articles -->
                        <!-- start of product-params -->
                        <div class="product-tab-content product-params tab-content border-bottom pb-2 mb-4"
                            id="scrollspyHeading3">
                            <div class="product-tab-title">
                                <h2>مشخصات کالا</h2>
                                <h3 class="subtitle">Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</h3>
                            </div>
                            <div class="expandable-text pt-1" style="height: 540px;">
                                <div class="expandable-text_text fa-num">
                                    <!-- start of params-list -->
                                    <div class="params-list">
                                        <div class="params-list-title">مشخصات کلی</div>
                                        <ul>
                                            <li>
                                                <span class="param-title">ابعاد</span>
                                                <span class="param-value">159.2x75.1x8.9 میلی‌متر</span>
                                            </li>
                                            <li>
                                                <span class="param-title">توضیحات سیم کارت</span>
                                                <span class="param-value">سایز نانو (8.8 × 12.3 میلی‌متر)</span>
                                            </li>
                                            <li>
                                                <span class="param-title">وزن</span>
                                                <span class="param-value">191 گرم</span>
                                            </li>
                                            <li>
                                                <span class="param-title">ساختار بدنه</span>
                                                <span class="param-value">
                                                    <span>قاب جلو ساخته شده از شیشه با پوشش محافظ Gorilla Glass 3</span>
                                                    <span>قاب پشتی و فریم ساخته شده از پلاستیک</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="param-title">ویژگی‌های خاص</span>
                                                <span class="param-value">مجهز به حس‌گر اثرانگشت , فبلت , مناسب عکاسی ,
                                                    مجهز به حس‌گر تشخیص چهره</span>
                                            </li>
                                            <li>
                                                <span class="param-title">تعداد سیم کارت</span>
                                                <span class="param-value">دو سیم کارت</span>
                                            </li>
                                            <li>
                                                <span class="param-title">زمان معرفی</span>
                                                <span class="param-value">25 فوریه 2020</span>
                                            </li>
                                            <li>
                                                <span class="param-title">شیار مجزا برای کارت حافظه</span>
                                                <span class="param-value">دارد</span>
                                            </li>
                                            <li>
                                                <span class="param-title">شناسه کالا</span>
                                                <span class="param-value">2800000350215</span>
                                            </li>
                                        </ul>
                                        <div class="params-list-title">پردازنده</div>
                                        <ul>
                                            <li>
                                                <span class="param-title">تراشه</span>
                                                <span class="param-value">Exynos 9611 (10nm) Chipset</span>
                                            </li>
                                            <li>
                                                <span class="param-title">پردازنده‌ی مرکزی</span>
                                                <span class="param-value">Quad-core Cortex-A73 + Quad-core Cortex-A53
                                                    CPU</span>
                                            </li>
                                            <li>
                                                <span class="param-title">نوع پردازنده</span>
                                                <span class="param-value">64 بیت</span>
                                            </li>
                                            <li>
                                                <span class="param-title">فرکانس پردازنده‌ی مرکزی</span>
                                                <span class="param-value">2.3 و 1.7 گیگاهرتز</span>
                                            </li>
                                            <li>
                                                <span class="param-title">پردازنده‌ی گرافیکی</span>
                                                <span class="param-value">Mali-G72 MP3 GPU</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end of params-list -->
                                </div>
                                <div class="expandable-text-expand-btn justify-content-start text-sm">
                                    <span class="show-more active">
                                        نمایش همه مشخصات کالا <i class="ri-arrow-down-s-line ms-2"></i>
                                    </span>
                                    <span class="show-less d-none">
                                        فقط نمایش مشخصات کلی کالا <i class="ri-arrow-up-s-line ms-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end of product-params -->
                        <!-- start of product-comments -->
                        <div class="product-tab-content product-comments tab-content border-bottom pb-2 mb-4"
                            id="scrollspyHeading4">
                            <div class="product-tab-title mb-0">
                                <h2>امتیاز و دیدگاه کاربران</h2>
                                <h3 class="subtitle">Samsung Galaxy M31 SM-M315F/DSN Dual SIM 128GB Mobile Phone</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-5 mb-3">
                                    <div class="ui-sticky ui-sticky-top pt-5 z-index-0">
                                        <!-- start of comments-sidebar -->
                                        <div class="comments-sidebar">
                                            <div class="comments-sidebar-rating">
                                                <div class="comments-sidebar-rating-main me-2">۴.۱</div>
                                                <div class="comments-sidebar-rating-desc">از ۵</div>
                                            </div>
                                            <div class="comments-sidebar-rating-bottom">
                                                <div class="stars-container justify-content-end">
                                                    <div class="stars-text ms-2">از مجموع ۹۴۰ امتیاز</div>
                                                    <div class="stars">
                                                        <div class="stars-val" style="width: 70%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-expert-rating mt-4">
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">کیفیت ساخت</div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">ارزش خرید به نسبت قیمت
                                                    </div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">نوآوری</div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">امکانات و قابلیت ها</div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">سهولت استفاده</div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="content-expert-rating-title">طراحی و ظاهر</div>
                                                    <div class="content-expert-rating-value-wrapper">
                                                        <div class="content-expert-rating-value" style="width: 90%;">
                                                        </div>
                                                        <div class="content-expert-rating-value-label">۴.۱</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-2">دیدگاه خود را درباره این کالا بیان کنید</div>
                                            <button class="btn btn-block btn-outline-primary">افزودن
                                                دیدگاه</button>
                                        </div>
                                        <!-- end of comments-sidebar -->
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-7 pt-5">
                                    <!-- start of filter-comments -->
                                    <div class="filter-comments mb-4">
                                        <div class="filter-comments-title me-2">
                                            <i class="ri-list-settings-fill me-1"></i>
                                            <span>مرتب سازی دیدگاه ها بر اساس:</span>
                                        </div>
                                        <div class="filter-comments-options">
                                            <button class="filter-comments-option active">جدیدترین دیدگاه ها</button>
                                            <button class="filter-comments-option">مفیدترین دیدگاه ها</button>
                                            <button class="filter-comments-option">دیدگاه خریداران</button>
                                        </div>
                                    </div>
                                    <!-- end of filter-comments -->
                                    <!-- start of comments -->
                                    <div class="comments">
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                        <!-- start of comment -->
                                        <div class="comment">
                                            <div class="comment-header">
                                                <span>۱۵ تیر ۱۴۰۰</span>
                                                <span>امیر محمد اکبرپور</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>گوشی مناسبی هست نسبت به قیمتش من خودم با ایفون X مقایسه کردم که در
                                                    بعضی از برنامه ها عقب میموند بسیار گوشی خوبی هست در کل</p>
                                                <ul>
                                                    <li class="comment-evaluation positive">دوربین قوی</li>
                                                    <li class="comment-evaluation positive">باتری 6000</li>
                                                    <li class="comment-evaluation positive">خوش دست</li>
                                                    <li class="comment-evaluation positive">مناسب برای کار های حدودا
                                                        سنگین و بالاتر</li>
                                                    <li class="comment-evaluation negative">حسگر اثر انگشت کمی ضعیفه
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-footer">
                                                <span class="me-2">آیا این دیدگاه برایتان مفید بود؟</span>
                                                <button class="comment-like">۷</button>
                                                <button class="comment-dislike">۲</button>
                                            </div>
                                        </div>
                                        <!-- end of comment -->
                                    </div>
                                    <!-- end of comments -->
                                </div>
                            </div>
                        </div>
                        <!-- end of product-comments -->
                        <!-- start of product-questions -->
                        <div class="product-tab-content product-questions tab-content border-bottom pb-2 mb-4"
                            id="scrollspyHeading5">
                            <div class="product-tab-title mb-0">
                                <h2>پرسش و پاسخ</h2>
                                <h3 class="subtitle">Samsung Galaxy M31 SM-M315F/DSN Dual SIM 128GB Mobile Phone</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-5 mb-3">
                                    <div class="ui-sticky ui-sticky-top pt-5 z-index-0">
                                        <!-- start of questions-sidebar -->
                                        <div class="comments-sidebar">
                                            <div class="border rounded p-2">
                                                <div class="border-bottom pb-2 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            پرسش های پاسخ داده شده
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            پرسش های بی پاسخ
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span>پرسش های من</span>
                                                    <div class="form-check form-switch mb-0">
                                                        <input class="form-check-input ms-0" type="checkbox"
                                                            id="flexSwitchCheckDefault">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckDefault"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="mb-2">پرسش خود را درباره این کالا بیان کنید</div>
                                                <button class="btn btn-block btn-outline-primary"
                                                    data-remodal-target="add-question-modal">ثبت
                                                    پرسش</button>
                                            </div>
                                        </div>
                                        <!-- end of questions-sidebar -->
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-7 pt-5">
                                    <!-- start of filter-questions -->
                                    <div class="filter-comments mb-4">
                                        <div class="filter-comments-title me-2">
                                            <i class="ri-list-settings-fill me-1"></i>
                                            <span>مرتب‌سازی پرسش‌ها بر اساس:</span>
                                        </div>
                                        <div class="filter-comments-options">
                                            <button class="filter-comments-option active">جدیدترین پرسش ها</button>
                                            <button class="filter-comments-option">مفیدترین پاسخ ها</button>
                                        </div>
                                    </div>
                                    <!-- end of filter-questions -->
                                    <!-- start of questions -->
                                    <div class="comments">
                                        <!-- start of question -->
                                        <div class="comment question">
                                            <div class="comment-body border-bottom-0">
                                                <div class="question-title fw-bold">سلام لطفا کسایی که خریدن جواب بدن
                                                    این گوشی 4g+میشه؟مشکل آنتن دهی نداره؟</div>
                                            </div>
                                            <div class="comment-footer flex-column align-items-start">
                                                <div class="expandable-text pt-1 w-100" style="height: 160px;">
                                                    <div class="expandable-text_text">
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5">
                                                            <a class="link border-bottom-0" data-bs-toggle="collapse"
                                                                href="#collapseAnswer01" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="collapseAnswer01">ثبت پاسخ جدید <i
                                                                    class="ri-arrow-left-s-line"></i></a>
                                                        </div>
                                                        <div class="collapse" id="collapseAnswer01">
                                                            <div class="rounded bg-light p-3">
                                                                <form action="#">
                                                                    <div class="form-element-row mb-3">
                                                                        <label class="label">به این پرسش پاسخ
                                                                            دهید*</label>
                                                                        <textarea rows="3" class="form-control"
                                                                            placeholder="متن پاسخ"></textarea>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div class="mb-2">
                                                                            ثبت پرسش به معنی موافقت با <a href="#"
                                                                                class="link border-bottom-0">قوانین
                                                                                انتشار در سایت</a> است.
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-danger me-2"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseAnswer01"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseAnswer01">بستن</button>
                                                                            <button class="btn btn-sm btn-primary">ثبت
                                                                                پاسخ</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="expandable-text-expand-btn justify-content-start text-sm">
                                                        <span class="show-more active">
                                                            مشاهده پاسخ های دیگر <i
                                                                class="ri-arrow-down-s-line ms-2"></i>
                                                        </span>
                                                        <span class="show-less d-none">
                                                            مشاهده کمتر <i class="ri-arrow-up-s-line ms-2"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of question -->
                                        <!-- start of question -->
                                        <div class="comment question">
                                            <div class="comment-body border-bottom-0">
                                                <div class="question-title fw-bold">سلام خسته نباشید m31 بهتره یا a71 ??
                                                </div>
                                            </div>
                                            <div class="comment-footer flex-column align-items-start">
                                                <div class="expandable-text pt-1 w-100" style="height: 160px;">
                                                    <div class="expandable-text_text">
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">اگه به امتیازات رجوع کنید میبین که a71
                                                                    در دوربین خیلی ضعیفه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">ناشناس</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۹</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-bottom pb-2 mb-4">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="text-sm me-4">پاسخ</span>
                                                                <p class="mb-0">دوستان من ۱۰ روزه خریدم ساخت ویتنام هست
                                                                    و فقط 4G میشه</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center flex-grow-1 justify-content-between w-100">
                                                                <div>
                                                                    <span class="text-sm me-2">حسین کشاورزی</span>
                                                                    <span
                                                                        class="badge badge-sm bg-info rounded-pill">خریدار</span>
                                                                </div>
                                                                <div>
                                                                    <span class="me-2">آیا این پاسخ برای شما مفید
                                                                        بود؟</span>
                                                                    <button class="comment-like">۶</button>
                                                                    <button class="comment-dislike"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5">
                                                            <a class="link border-bottom-0" data-bs-toggle="collapse"
                                                                href="#collapseAnswer02" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="collapseAnswer02">ثبت پاسخ جدید <i
                                                                    class="ri-arrow-left-s-line"></i></a>
                                                        </div>
                                                        <div class="collapse" id="collapseAnswer02">
                                                            <div class="rounded bg-light p-3">
                                                                <form action="#">
                                                                    <div class="form-element-row mb-3">
                                                                        <label class="label">به این پرسش پاسخ
                                                                            دهید*</label>
                                                                        <textarea rows="3" class="form-control"
                                                                            placeholder="متن پاسخ"></textarea>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div class="mb-2">
                                                                            ثبت پرسش به معنی موافقت با <a href="#"
                                                                                class="link border-bottom-0">قوانین
                                                                                انتشار</a> است.
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-danger me-2"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseAnswer02"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseAnswer02">بستن</button>
                                                                            <button class="btn btn-sm btn-primary">ثبت
                                                                                پاسخ</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="expandable-text-expand-btn justify-content-start text-sm">
                                                        <span class="show-more active">
                                                            مشاهده پاسخ های دیگر <i
                                                                class="ri-arrow-down-s-line ms-2"></i>
                                                        </span>
                                                        <span class="show-less d-none">
                                                            ثبت پاسخ جدید <i class="ri-arrow-drop-left-line ms-2"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of question -->
                                    </div>
                                    <!-- end of questions -->
                                </div>
                            </div>
                        </div>
                        <!-- end of product-questions -->
                    </div>
                    <div class="col-xl-3 col-lg-4 d-lg-block d-none">
                        <div class="ui-sticky ui-sticky-top">
                            <!-- start of mini-buy-box -->
                            <div class="mini-buy-box ui-box bg-transparent p-4">
                                <div class="d-flex border-bottom pb-3 mb-3">
                                    <div class="product-thumbnail">
                                        <img src="./theme-assets/images/gallery/main.jpg" alt="product title">
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">
                                            <h1>گوشی موبایل اپل مدل iPhone 13 A2634 دو سیم کارت ظرفیت 128 گیگابایت و رم
                                                4 گیگابایت
                                            </h1>
                                        </div>
                                        <div class="product-options">
                                            <div class="product-option">
                                                <span class="color" style="background-color: #2196f3;"></span>
                                                <span class="color-label ms-2">آبی</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-features">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-store-3-line text-success me-2"></i>
                                        <span>یکتاکالا</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-shield-check-line text-info me-2"></i>
                                        <span>گارانتی ۱۸ ماهه آوات</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-checkbox-multiple-line text-primary me-2"></i>
                                        <span>موجود در انبار فروشنده</span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <span class="price-value">۶,۵۹۹,۰۰۰</span>
                                    <span class="currency ms-1">تومان</span>
                                </div>
                                <a href="#" class="btn btn-block btn-primary fw-bold">افزودن به
                                    سبد خرید</a>
                            </div>
                            <!-- end of mini-buy-box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- start of notification-modal -->
            <div class="remodal remodal-sm" data-remodal-id="notification-modal"
                data-remodal-options="hashTracking: false">
                <div class="remodal-header">
                    <div class="remodal-title">به من اطلاع بده</div>
                    <button data-remodal-action="close" class="remodal-close"></button>
                </div>
                <div class="remodal-content">
                    <div class="text-muted fs-7 mb-2">اطلاع به من در زمان:</div>
                    <div class="text-dark fs-6">پیشنهاد شگفت‌انگیز</div>
                    <div class="border-bottom my-3"></div>
                    <div class="text-muted fs-7 mb-2">از طریق:</div>
                    <div class="form-element-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="notificationCheckDefault1">
                            <label class="form-check-label" for="notificationCheckDefault1">
                                ایمیل به <span>example@example.com</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-element-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="notificationCheckDefault2">
                            <label class="form-check-label" for="notificationCheckDefault2">
                                پیامک به <span>09xxxxxxxxx</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-element-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="notificationCheckDefault3">
                            <label class="form-check-label" for="notificationCheckDefault3">
                                سیستم پیام شخصی
                            </label>
                        </div>
                    </div>
                </div>
                <div class="remodal-footer">
                    <button data-remodal-action="cancel" class="btn btn-sm btn-outline-light px-3 me-2">بستن</button>
                    <button class="btn btn-sm btn-primary px-3">ثبت</button>
                </div>
            </div>
            <!-- end of notification-modal -->
            <!-- start of add-question-modal -->
            <div class="remodal remodal-sm" data-remodal-id="add-question-modal"
                data-remodal-options="hashTracking: false">
                <div class="remodal-header">
                    <div class="remodal-title">پرسش خود را در مورد کالا مطرح کنید</div>
                    <button data-remodal-action="close" class="remodal-close"></button>
                </div>
                <div class="remodal-content">
                    <form action="#">
                        <div class="form-element-row mb-3">
                            <textarea rows="3" class="form-control" placeholder="متن سوال"></textarea>
                        </div>
                    </form>
                    <div class="fs-7 fw-bold">
                        ثبت پرسش به معنی موافقت با <a href="#" class="link border-bottom-0">قوانین انتشار</a>
                        است.
                    </div>
                </div>
                <div class="remodal-footer">
                    <button class="btn btn-sm btn-primary px-3">ثبت پرسش</button>
                </div>
            </div>
            <!-- end of add-question-modal -->
            <!-- start of share-modal -->
            <div class="remodal remodal-xs" data-remodal-id="share-modal" data-remodal-options="hashTracking: false">
                <div class="remodal-header">
                    <div class="remodal-title">اشتراک‌گذاری</div>
                    <button data-remodal-action="close" class="remodal-close"></button>
                </div>
                <div class="remodal-content">
                    <div class="text-muted fs-7 fw-bold mb-3">
                        با استفاده از روش‌های زیر می‌توانید این صفحه را با دوستان خود به اشتراک بگذارید.
                    </div>
                    <div class="d-flex align-items-center border-top border-bottom py-3 mb-3">
                        <div class="widget flex-grow-1 border-0 p-0 me-2">
                            <div class="widget-content widget-socials">
                                <ul class="align-items-center">
                                    <li><a href="#" class="d-inline-flex"><i class="ri-facebook-circle-fill"></i></a>
                                    </li>
                                    <li><a href="#" class="d-inline-flex"><i class="ri-instagram-fill"></i></a></li>
                                    <li><a href="#" class="d-inline-flex"><i class="ri-twitter-fill"></i></a></li>
                                    <li><a href="#" class="d-inline-flex"><i class="ri-telegram-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn btn-sm btn-primary copy-url-btn" data-copy="https://www.google.com">کپی لینک
                        </div>
                    </div>
                    <div class="text-dark fs-7 fw-bold mb-3">جایزه شما</div>
                    <div class="d-flex justify-content-between">
                        <div class="text-muted fs-7 fw-bold">
                            با دعوت دوستانتان، پس از اولین خریدشان، کدتخفیف و امتیاز هدیه بگیرید.
                        </div>
                        <img src="./theme-assets/images/theme/club.svg" width="100" alt="">
                    </div>
                </div>
            </div>
            <!-- end of share-modal -->
            <!-- start of quick-view-modal -->
            <div class="remodal remodal-lg" data-remodal-id="quick-view-modal"
                data-remodal-options="hashTracking: false">
                <div class="remodal-header">
                    <button data-remodal-action="close" class="remodal-close"></button>
                </div>
                <div class="remodal-content">
                    <div class="product-detail-container">
                        <div class="row">
                            <div class="col-md-5 mb-md-0 mb-4">
                                <!-- start of product-gallery -->
                                <div class="product-gallery">
                                    <div class="gallery-img-container">
                                        <!-- Slider main container -->
                                        <div class="swiper gallery-swiper-slider">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <div class="swiper-slide">
                                                    <div class="gallery-img">
                                                        <img src="./theme-assets/images/gallery/01.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-img">
                                                        <img src="./theme-assets/images/gallery/02.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-img">
                                                        <img src="./theme-assets/images/gallery/03.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-img">
                                                        <img src="./theme-assets/images/gallery/04.png" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- If we need navigation buttons -->
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                        <!-- Slider main container -->
                                        <div class="swiper gallery-thumbs-swiper-slider">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <div class="swiper-slide">
                                                    <div class="gallery-thumb">
                                                        <img src="./theme-assets/images/gallery/01.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-thumb">
                                                        <img src="./theme-assets/images/gallery/02.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-thumb">
                                                        <img src="./theme-assets/images/gallery/03.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="gallery-thumb">
                                                        <img src="./theme-assets/images/gallery/04.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of product-gallery -->
                            </div>
                            <div class="col-md-7 mb-md-0 mb-4">
                                <!-- start of breadcrumb -->
                                <nav class="mb-2" aria-label="breadcrumb">
                                    <ol class="breadcrumb fs-7">
                                        <li class="breadcrumb-item"><a href="#">اپل</a></li>
                                        <li class="breadcrumb-item"><a href="#">گوشی موبایل اپل</a></li>
                                    </ol>
                                </nav>
                                <!-- end of breadcrumb -->
                                <!-- start of product-detail -->
                                <h2 class="product-title">گوشی موبایل اپل مدل iPhone 13 A2634 دو سیم کارت ظرفیت 128
                                    گیگابایت و رم 4 گیگابایت</h2>
                                <div class="product-en mb-3">
                                    <span>Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</span>
                                </div>
                                <div class="product-user-suggestion mb-2">
                                    <i class="ri-thumb-up-fill text-success me-1"></i>
                                    <span class="fs-7 me-2">۷۹٪ (۱۷۰ نفر) از خریداران، این کالا را پیشنهاد کرده
                                        اند.</span>
                                    <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="خریداران کالا با انتخاب یکی از گزینه‌های پیشنهاد یا عدم پیشنهاد، تجربه خرید خود را با کاربران به اشتراک می‌گذارند."><i
                                            class="ri-information-line"></i></span>
                                </div>
                                <div class="product-user-meta fa-num mb-4">
                                    <span class="product-users-rating">
                                        <i class="ri-star-fill icon me-1"></i>
                                        <span class="fw-bold me-1">4.4</span>
                                        <span class="text-muted fs-7">(742)</span>
                                    </span>
                                    <span class="divider"></span>
                                    <a href="#" class="link border-bottom-0 fs-7">۶۳۷ دیدگاه کاربران</a>
                                    <span class="divider"></span>
                                    <a href="#" class="link border-bottom-0 fs-7">۴۰۵ پرسش و پاسخ</a>
                                </div>
                                <div class="product-variants-container mb-3">
                                    <div class="product-variant-selected-container">
                                        <span class="product-variant-selected-label">رنگ:</span>
                                        <span class="product-variant-selected">آبی</span>
                                    </div>
                                    <div class="product-variants">
                                        <div class="product-variant-item">
                                            <div class="custom-radio-circle">
                                                <input type="radio" class="custom-radio-circle-input"
                                                    name="productColor" id="productColor04" checked>
                                                <label for="productColor04" class="custom-radio-circle-label"
                                                    data-variant-label="آبی">
                                                    <span class="color" style="background-color: #2196f3;"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="آبی"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="product-variant-item">
                                            <div class="custom-radio-circle">
                                                <input type="radio" class="custom-radio-circle-input"
                                                    name="productColor" id="productColor05">
                                                <label for="productColor05" class="custom-radio-circle-label"
                                                    data-variant-label="سفید">
                                                    <span class="color" style="background-color: #fff;"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="سفید"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="product-variant-item">
                                            <div class="custom-radio-circle">
                                                <input type="radio" class="custom-radio-circle-input"
                                                    name="productColor" id="productColor06">
                                                <label for="productColor06" class="custom-radio-circle-label"
                                                    data-variant-label="صورتی">
                                                    <span class="color" style="background-color: #ff80ab;"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="صورتی"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="expandable-text mb-3" style="height: 95px;">
                                    <div class="expandable-text_text">
                                        <div class="product-params">
                                            <ul>
                                                <li>
                                                    <span class="label">حافظه داخلی:</span>
                                                    <span class="title">128 گیگابایت</span>
                                                </li>
                                                <li>
                                                    <span class="label">مقدار RAM:</span>
                                                    <span class="title">چهار گیگابایت</span>
                                                </li>
                                                <li>
                                                    <span class="label">بازه‌ی اندازه صفحه نمایش:</span>
                                                    <span class="title">6.0 اینچ و بزرگتر</span>
                                                </li>
                                                <li>
                                                    <span class="label">شبکه های ارتباطی:</span>
                                                    <span class="title">2G، 3G، 4G، 5G</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="expandable-text-expand-btn">
                                        <span class="show-more">
                                            بیشتر بخوانید <i class="ri-arrow-down-s-line"></i>
                                        </span>
                                        <span class="show-less d-none">
                                            بستن <i class="ri-arrow-up-s-line"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- end of product-detail -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="remodal-footer">
                    <button data-remodal-action="cancel" class="btn btn-sm btn-outline-light px-3 me-2">بستن</button>
                    <a href="#" class="btn btn-sm btn-primary px-3">دیدن محصول</a>
                </div>
            </div>
            <!-- end of quick-view-modal -->
        </main>
</div>
@stop

@section('footer')
    @parent
@stop

@section('extraJS')
    @parent
    <script src="{{ asset('theme-assets/js/theme.js') }}"></script>
    <script src="{{ asset('theme-assets/js/custom.js') }}"></script>
@stop