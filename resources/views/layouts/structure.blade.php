<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2962ff">
    <meta name="msapplication-navbutton-color" content="#2962ff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2962ff">
    <title>YektaKala | home v1</title>
    <link rel="stylesheet" href="./theme-assets/css/dependencies.css">
    <link rel="stylesheet" href="{{ asset('theme-assets/css/theme.css') }}">
    <link rel="stylesheet" href="./theme-assets/css/custom.css">
</head>

<body>

    <div class="page-wrapper">
        <!-- start of page-header -->
        <header class="page-header d-md-block d-none">
            <!-- start banner -->
            <div class="alert banner-container alert-dismissible fade show" role="alert">
                <a href="#" id="infobox" class="banner-placement rounded-0"
                    style="height: 60px;"></a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- end banner -->
            <!-- start of page-header-top -->
            <div class="page-header--top">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="page-header--top-right">
                            <div class="notification-container notification-light">
                                <div class="swiper notification-swiper-slider mb-5">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="notification-item">
                                                <span class="notification-item--text creamColor"> ویزیت ایران </span>
                                                <span class="notification-item--text fontSize12"> سامانه فروش صنایع دستی و هنرهای تزئینی </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header--top-left">
                            <ul class="nav nav-light justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">وبلاگ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">پرسش های متداول</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">تماس با ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">درباره ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of page-header-top -->
            <!-- start of page-header-middle -->
            <div class="page-header--middle">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center flex-grow-1 pe-3">
                            <div class="logo-container logo-box me-3">
                                
                                    <img src="./theme-assets/images/menuImage.png" width="120" alt="">
                            </div>
                            <div class="search-container">
                                <form action="#" class="search-form">
                                    <input type="text" class="form-control search-field" placeholder="جستجو کنید..">
                                    <button class="btn btn-primary btn-search btn-action">
                                        <i class="ri-search-2-line"></i>
                                    </button>
                                    <button class="btn btn-primary btn-close-search-result btn-action d-none">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </form>
                                <div class="search-result-container">
                                    <div class="search-result-tags-container">
                                        <div class="search-result-tags-label"><i class="ri-fire-line"></i> بیشترین
                                            جستجوهای اخیر
                                        </div>
                                        <ul class="search-result-tags">
                                            <li><a href="#" class="search-result-tag">گوشی موبایل</a></li>
                                            <li><a href="#" class="search-result-tag">لوازم خانگی برقی</a></li>
                                            <li><a href="#" class="search-result-tag">لپ تاپ</a></li>
                                            <li><a href="#" class="search-result-tag">کنسول بازی</a></li>
                                            <li><a href="#" class="search-result-tag">دوچرخه</a></li>
                                        </ul>
                                    </div>
                                    <div class="border-bottom my-3"></div>
                                    <ul class="search-result-items">
                                        <li><a href="#">گوشی موبایل</a></li>
                                        <li><a href="#">گوشی موبایل شیائومی</a></li>
                                        <li><a href="#">گوشی موبایل سامسونگ</a></li>
                                        <li><a href="#">قاب گوشی موبایل</a></li>
                                        <li><a href="#">گوشی موبایل اپل</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="user-options">
                            <div class="user-option user-option--account">
                                <a href="profile.html" class="user-option-btn user-option-btn--account">
                                    <i class="ri-user-fill icon"></i>
                                    <i class="ri-arrow-down-s-fill icon fs-7 text-muted"></i>
                                </a>
                                <div class="user-option--dropdown user-option--dropdown-right">
                                    <div class="profile-user-info ui-box">
                                        <div class="profile-detail">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-avatar me-3"><img
                                                        src="./theme-assets/images/avatar/default.png" alt="avatar">
                                                </div>
                                                <div class="profile-info">
                                                    <a href="#" class="text-decoration-none text-dark fw-bold mb-2">جلال
                                                        بهرامی
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
                                                <a class="nav-link" href="#"><i
                                                        class="nav-link-icon ri-file-list-3-line"></i>
                                                    سفارش
                                                    های من</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i
                                                        class="nav-link-icon ri-copper-coin-fill"></i>
                                                    باشگاه مشتریان</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i
                                                        class="nav-link-icon ri-logout-box-r-line"></i>
                                                    خروج</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="user-option">
                                <a href="#" class="user-option-btn user-option-btn--account">
                                    <i class="ri-heart-3-fill icon"></i>
                                    <span class="counter">۲</span>
                                </a>
                            </div>
                            <div class="user-option user-option--cart">
                                <a href="cart.html" class="user-option-btn user-option-btn--cart">
                                    <i class="ri-shopping-bag-2-fill icon"></i>
                                    <span class="user-item-text">
                                        <span class="title">سبد خرید شما</span>
                                        <span class="value fa-num">83,678,000 <span class="currency">تومان</span></span>
                                    </span>
                                    <span class="counter">۴</span>
                                </a>
                                <div class="mini-cart">
                                    <div class="mini-cart-header">
                                        <span class="mini-cart-products-count fa-num">4 کالا</span>
                                        <a href="cart.html" class="btn btn-link px-0">مشاهده سبد خرید <i
                                                class="ri-arrow-left-s-fill"></i></a>
                                    </div>
                                    <div class="mini-cart-products do-simplebar">
                                        <div class="mini-cart-product">
                                            <div class="mini-cart-product-thumbnail">
                                                <a href="#"><img src="./theme-assets/images/products/01.jpg" alt=""></a>
                                            </div>
                                            <div class="mini-cart-product-detail">
                                                <div class="mini-cart-product-brand"><a href="#">apple</a></div>
                                                <div class="mini-cart-product-title">
                                                    <a href="product-v1.html">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                        سیم‌ کارت ظرفیت 128
                                                        گیگابایت و رم 4 گیگابایت</a>
                                                </div>
                                                <div class="mini-cart-purchase-info">
                                                    <div class="mini-cart-product-meta">
                                                        <span class="fa-num">1 عدد</span>
                                                        <span class="color" style="background-color: #d4d4d4;"></span>
                                                    </div>
                                                    <div class="mini-cart-product-price fa-num">26,249,000 <span
                                                            class="currency">تومان</span></div>
                                                </div>
                                                <button class="mini-cart-product-remove"></button>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product">
                                            <div class="mini-cart-product-thumbnail">
                                                <a href="#"><img src="./theme-assets/images/products/02.jpg" alt=""></a>
                                            </div>
                                            <div class="mini-cart-product-detail">
                                                <div class="mini-cart-product-brand"><a href="#">xiaomi</a></div>
                                                <div class="mini-cart-product-title">
                                                    <a href="product-v1.html">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                        2109119DG دو سیم‌ کارت
                                                        ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                </div>
                                                <div class="mini-cart-purchase-info">
                                                    <div class="mini-cart-product-meta">
                                                        <span class="fa-num">1 عدد</span>
                                                        <span class="color" style="background-color: #d4d4d4;"></span>
                                                    </div>
                                                    <div class="mini-cart-product-price fa-num">8,239,000 <span
                                                            class="currency">تومان</span></div>
                                                </div>
                                                <button class="mini-cart-product-remove"></button>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product">
                                            <div class="mini-cart-product-thumbnail">
                                                <a href="#"><img src="./theme-assets/images/products/05.jpg" alt=""></a>
                                            </div>
                                            <div class="mini-cart-product-detail">
                                                <div class="mini-cart-product-brand"><a href="#">apple</a></div>
                                                <div class="mini-cart-product-title">
                                                    <a href="product-v1.html">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                        A2412 دو سیم‌ کارت ظرفیت
                                                        256 گیگابایت</a>
                                                </div>
                                                <div class="mini-cart-purchase-info">
                                                    <div class="mini-cart-product-meta">
                                                        <span class="fa-num">1 عدد</span>
                                                        <span class="color" style="background-color: #d4d4d4;"></span>
                                                    </div>
                                                    <div class="mini-cart-product-price fa-num">36,300,000 <span
                                                            class="currency">تومان</span></div>
                                                </div>
                                                <button class="mini-cart-product-remove"></button>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product">
                                            <div class="mini-cart-product-thumbnail">
                                                <a href="#"><img src="./theme-assets/images/products/07.jpg" alt=""></a>
                                            </div>
                                            <div class="mini-cart-product-detail">
                                                <div class="mini-cart-product-brand"><a href="#">samsung</a></div>
                                                <div class="mini-cart-product-title">
                                                    <a href="product-v1.html">گوشی موبایل سامسونگ مدل Galaxy S9 Plus دو
                                                        سیم کارت ظرفیت 64
                                                        گیگابایت</a>
                                                </div>
                                                <div class="mini-cart-purchase-info">
                                                    <div class="mini-cart-product-meta">
                                                        <span class="fa-num">1 عدد</span>
                                                        <span class="color" style="background-color: #d4d4d4;"></span>
                                                    </div>
                                                    <div class="mini-cart-product-price fa-num">12,890,000 <span
                                                            class="currency">تومان</span></div>
                                                </div>
                                                <button class="mini-cart-product-remove"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-footer">
                                        <div class="mini-cart-total">
                                            <span class="mini-cart-total-label">مبلغ قابل پرداخت:</span>
                                            <span class="mini-cart-total-value fa-num">83,678,000 <span
                                                    class="currency">تومان</span></span>
                                        </div>
                                        <a href="#" class="btn btn-primary">ورود و ثبت سفارش</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of page-header-middle -->
            <!-- start of page-header-bottom -->
            <div class="page-header--bottom">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="vertical-menu">
                            <a href="#" class="vertical-menu-btn">دسته بندی کالاها <i class="ri-apps-fill icon"></i></a>
                            <div class="vertical-menu-items">
                                <ul>
                                    <li class="mega-menu-category show">
                                        <a href="#">کالای دیجیتال</a>
                                        <ul class="mega-menu">
                                            <li class="parent"><a href="#">لوازم جانبی گوشی</a></li>
                                            <li><a href="#">کیف و کاور گوشی</a></li>
                                            <li><a href="#">پاور بانک (شارژر همراه)</a></li>
                                            <li><a href="#">پایه نگهدارنده گوشی</a></li>
                                            <li class="parent"><a href="#">گوشی موبایل</a></li>
                                            <li><a href="#">سامسونگ</a></li>
                                            <li><a href="#">هوآوی</a></li>
                                            <li><a href="#">اپل</a></li>
                                            <li><a href="#">شیائومی</a></li>
                                            <li><a href="#">آنر</a></li>
                                            <li><a href="#">نوکیا</a></li>
                                            <li class="parent"><a href="#">واقعیت مجازی</a></li>
                                            <li class="parent"><a href="#">مچ بند و ساعت هوشمند</a></li>
                                            <li class="parent"><a href="#">لوازم جانبی گوشی</a></li>
                                            <li><a href="#">کیف و کاور گوشی</a></li>
                                            <li><a href="#">پاور بانک (شارژر همراه)</a></li>
                                            <li><a href="#">پایه نگهدارنده گوشی</a></li>
                                            <li class="parent"><a href="#">گوشی موبایل</a></li>
                                            <li><a href="#">سامسونگ</a></li>
                                            <li><a href="#">هوآوی</a></li>
                                            <li><a href="#">اپل</a></li>
                                            <li><a href="#">شیائومی</a></li>
                                            <li><a href="#">آنر</a></li>
                                            <li><a href="#">نوکیا</a></li>
                                            <li class="parent"><a href="#">واقعیت مجازی</a></li>
                                            <li class="parent"><a href="#">مچ بند و ساعت هوشمند</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-category">
                                        <a href="#">مد و پوشاک</a>
                                        <ul class="mega-menu">
                                            <li class="parent"><a href="#">لوازم جانبی گوشی</a></li>
                                            <li><a href="#">کیف و کاور گوشی</a></li>
                                            <li><a href="#">پاور بانک (شارژر همراه)</a></li>
                                            <li><a href="#">پایه نگهدارنده گوشی</a></li>
                                            <li class="parent"><a href="#">گوشی موبایل</a></li>
                                            <li><a href="#">سامسونگ</a></li>
                                            <li><a href="#">هوآوی</a></li>
                                            <li><a href="#">اپل</a></li>
                                            <li><a href="#">شیائومی</a></li>
                                            <li><a href="#">آنر</a></li>
                                            <li><a href="#">نوکیا</a></li>
                                            <li class="parent"><a href="#">لوازم جانبی گوشی</a></li>
                                            <li><a href="#">کیف و کاور گوشی</a></li>
                                            <li><a href="#">پاور بانک (شارژر همراه)</a></li>
                                            <li><a href="#">پایه نگهدارنده گوشی</a></li>
                                            <li class="parent"><a href="#">گوشی موبایل</a></li>
                                            <li><a href="#">سامسونگ</a></li>
                                            <li><a href="#">هوآوی</a></li>
                                            <li><a href="#">اپل</a></li>
                                            <li><a href="#">شیائومی</a></li>
                                            <li><a href="#">آنر</a></li>
                                            <li><a href="#">نوکیا</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">اسباب بازی</a></li>
                                    <li><a href="#">زیبایی و سلامت</a></li>
                                    <li><a href="#">خانه و آشپزخانه</a></li>
                                    <li><a href="#">لوازم تحریر</a></li>
                                    <li><a href="#">ورزش و سفر</a></li>
                                    <li><a href="#">سوپرمارکت</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index-1.html">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">وبلاگ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">پرسش های متداول</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">تماس با ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">درباره ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of page-header-bottom -->
        </header>
        <!-- end of page-header -->
        <header class="page-header-responsive d-md-none">
            <div class="page-header-responsive-row mb-3">
                <div class="d-flex align-items-center">
                    <div class="navigation-container">
                        <button class="toggle-navigation"></button>
                        <div class="navigation">
                            <div class="navigation-header">
                                <div class="logo-container logo-box">
                                    <a href="#" class="logo">
                                        <img src="./theme-assets/images/logo.svg" width="120" alt="">
                                        <span class="logo-text">بررسی،انتخاب و خرید آنلاین</span>
                                    </a>
                                </div>
                            </div>
                            <div class="navigation-body">
                                <ul class="menu">
                                    <li>
                                        <a href="#" class="toggle-submenu">
                                            <span>زنانه</span>
                                        </a>
                                        <ul class="submenu">
                                            <li class="close-submenu">
                                                <i class="ri-arrow-right-s-line"></i>
                                                زنانه
                                            </li>
                                            <li>
                                                <a href="#" class="toggle-submenu">
                                                    لباس
                                                </a>
                                                <ul class="submenu">
                                                    <li class="close-submenu">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                        لباس
                                                    </li>
                                                    <li>
                                                        <a href="#">تی شرت و پولوشرت</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">لباس راحتی و خواب</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">مانتو، پانچو و رویه</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">شومیز و پیراهن</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">بلوز</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">پیراهن و لباس مجلسی</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="toggle-submenu">
                                            <span>مردانه</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="toggle-submenu">
                                            <span>بچگانه</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="toggle-submenu">
                                            <span>زیبایی و سلامت</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">فروش ویژه</a>
                                    </li>
                                    <li>
                                        <a href="#">برندها</a>
                                    </li>
                                    <li>
                                        <a href="#">خانه طراحان ایرانی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navigation-overlay"></div>
                    </div>
                    <div class="logo">
                        <a href="#">
                            <img src="./theme-assets/images/logo-dark.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="user-options">
                    <div class="user-option">
                        <a href="#" class="user-option-btn user-option-btn--account">
                            <i class="ri-user-fill icon"></i>
                        </a>
                    </div>
                    <div class="user-option">
                        <a href="#" class="user-option-btn user-option-btn--account">
                            <i class="ri-heart-3-fill icon"></i>
                            <span class="counter">۲</span>
                        </a>
                    </div>
                    <div class="user-option user-option--cart">
                        <a href="#" class="user-option-btn user-option-btn--cart">
                            <i class="ri-shopping-bag-2-fill icon"></i>
                            <span class="counter">۴</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-header-responsive-row">
                <div class="search-container">
                    <form action="#" class="search-form">
                        <input type="text" class="form-control search-field" placeholder="جستجو کنید..">
                        <button class="btn btn-primary btn-search btn-action">
                            <i class="ri-search-2-line"></i>
                        </button>
                        <button class="btn btn-primary btn-close-search-result btn-action d-none">
                            <i class="ri-close-line"></i>
                        </button>
                    </form>
                    <div class="search-result-container">
                        <div class="search-result-tags-container">
                            <div class="search-result-tags-label"><i class="ri-fire-line"></i> بیشترین جستجوهای اخیر
                            </div>
                            <ul class="search-result-tags">
                                <li><a href="#" class="search-result-tag">گوشی موبایل</a></li>
                                <li><a href="#" class="search-result-tag">لوازم خانگی برقی</a></li>
                                <li><a href="#" class="search-result-tag">لپ تاپ</a></li>
                                <li><a href="#" class="search-result-tag">کنسول بازی</a></li>
                                <li><a href="#" class="search-result-tag">دوچرخه</a></li>
                            </ul>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <ul class="search-result-items">
                            <li><a href="#">گوشی موبایل</a></li>
                            <li><a href="#">گوشی موبایل شیائومی</a></li>
                            <li><a href="#">گوشی موبایل سامسونگ</a></li>
                            <li><a href="#">قاب گوشی موبایل</a></li>
                            <li><a href="#">گوشی موبایل اپل</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- start of page-content -->
        <main class="page-content">
            @yield('content')
        </main>
        <!-- end of page-content -->
        @include('layouts.footer')
    </div>


    <script src="{{ asset('theme-assets/js/dependencies/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/jquery.simple.timer.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/iziToast.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/fancybox.umd.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/wNumb.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/remodal.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/select2.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/simplebar.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('theme-assets/js/dependencies/zoomsl.min.js') }}"></script>
    
    
    <script>
     
        $.ajax({
            type: 'get',
            url: '{{ route('api.infobox') }}',
            headers: {
                'accept': 'application/json'
            },
            success: function(res) {
                if(res.status === "ok") {
                    $("#infobox").css('background-image', "url(" + res.data.img_large + ")").attr('href', res.data.href);
                    
                }
            }
        });

    </script>

    @section('extraJS')
    @show
</body>

</html>