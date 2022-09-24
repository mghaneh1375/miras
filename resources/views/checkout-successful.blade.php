
@extends('layouts.structure')
@section('content')
        <main class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- start of box -->
                        <div class="ui-box bg-white mb-5">
                            <div class="ui-box-content">
                                <div class="row">
                                    <div class="col-md-8 order-md-1 order-2">
                                        <div class="fs-5 fw-bold text-success mb-3">
                                            با موفقیت پرداخت و ثبت گردید.
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-3">
                                            <div class="text-secondary me-3">شماره سفارش:</div>
                                            <div class="font-en">DKC-244424454</div>
                                        </div>
                                        <div class="text-success mb-3">پرداخت با موفقیت انجام شد. سفارش شما با موفقیت
                                            ثبت
                                            شد و در زمان تعیین‌شده برای شما ارسال خواهد شد. از اینکه ما را برای
                                            خرید انتخاب کردید از شما سپاسگزاریم.</div>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <a href="#" class="btn btn-primary me-4">پیگیری سفارش</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 order-md-2 order-1 mb-md-0 mb-4 text-center">
                                        <img src="./theme-assets/images/theme/checkout-successful.png" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of box -->
                        <!-- start of box -->
                        <div class="ui-box bg-white mb-5">
                            <div class="ui-box-content fa-num">
                                <div class="row fs-7 fw-bold">
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="text-muted mb-2">ردیف</div>
                                        <div class="text-dark">1</div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="text-muted mb-2">درگاه پرداخت</div>
                                        <div class="text-dark">درگاه ملت</div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="text-muted mb-2">شماره پیگیری</div>
                                        <div class="text-dark">۱۷۶۹۳۴۱۱۶</div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="text-muted mb-2">زمان</div>
                                        <div class="text-dark">۱۲:۲۴:۱۳</div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="text-muted mb-2">تاریخ</div>
                                        <div class="text-dark">۲۵ دی ۱۴۰۰</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of box -->
                    </div>
                </div>
            </div>
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