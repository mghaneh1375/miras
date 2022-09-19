@extends('layouts.structure')
@section('content')
<div class="container">
            @include('layouts.slider')
            @include('layouts.banner')
                <!-- end of box => categories-slider -->
                <div class="row mb-5">
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/020.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/021.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/022.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/023.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                </div>
                <!-- start of box -->
                <div class="ui-box mb-5">
                    <div class="ui-box-title">منتخب محصولات تخفیف و حراج</div>
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
                <div class="row mb-5">
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/018.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img src="./theme-assets/images/banner/019.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                </div>
            </div>
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
                                                    name="productColor" id="productColor01" checked>
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
                                                <input type="radio" class="custom-radio-circle-input"
                                                    name="productColor" id="productColor02">
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
                                                <input type="radio" class="custom-radio-circle-input"
                                                    name="productColor" id="productColor03">
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
            @include('cart')
            @include('product')
            <!-- end of quick-view-modal -->
@stop

@section('footer')
    @include('layouts.faq')
    @parent
@stop

@section('extraJS')
    @parent
    <script src="{{ asset('theme-assets/js/theme.js') }}"></script>
    <script src="{{ asset('theme-assets/js/custom.js') }}"></script>


@stop