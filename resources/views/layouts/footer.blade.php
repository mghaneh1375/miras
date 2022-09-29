<footer class="page-footer">
    <div class="container">
        <div class="d-flex spaceBetween alignItemsCenter">
            <span class="ui-box-title fontSize20"> <img class="p-2" src="{{ asset('./theme-assets/images/svg/headlineTitle.svg') }}" alt="">تماس با ما</span>        </div>
        <div class="row mb-3">
            <div class="col-lg-3 col-md-5">
                <div class="widget widget-footer mb-4">
                        <div class="widget-title">با ما همراه باشید</div>
                        <div class="textColor customPaddingTopBottom10">پشتیبانی</div>
                        <div class="colorYellow customPaddingTopBottom10">هفت روز هفته از ساعت 8 الی 17</div>
                        <div class="textColor customPaddingTopBottom10">تلفن پشتیبانی : 021 - 88819568</div>
                    <div class="widget-content widget-socials">
                        <ul>
                            <li><a href="#"><i class="ri-facebook-circle-fill"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
                            <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                            <li><a href="#"><i class="ri-telegram-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 ol-sm-6 col-12">
                <div class="widget widget-footer">
                    <div class="widget-title">از جدیدترین تخفیف ها باخبر شوید</div>
                    <div class="widget-content widget-newsletter">
                        <form action="#">
                            <div class="form-element-row with-btn">
                                <input type="text" class="form-control"
                                    placeholder="آدرس ایمیل خود را وارد کنید">
                                <button class="btn btn-primary backgroundGray">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 ol-sm-6 col-12">
                <div class="widget widget-footer">
                    <div class="widget-title">برای مشتریان</div>
                    <div class="widget-content widget-list">
                        <ul>
                            <li><a href="#">سیاست حریم خصوصی</a></li>
                            <li><a href="#">قوانین و مقررات</a></li>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">نحوه ارسال کالا و عودت</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="widget widget-footer">
                    <div class="widget-title">نماد اطمینان</div>
                    <div class="widget-content widget-list">
                        <ul>
                            <li><a href="#">وزارت میراث فرهنگی، صنایع دستی و گردشگری</a></li>
                            <li><a href="#">کانون جهانگردی و اتومبیلرانی جمهوری اسلامی ایران</a></li>
                            <li><a href="#">سامانه گردشگری ویزیت ایران</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="expandable-text pt-1" style="height: 100px;">
                    <div class="expandable-text_text fa-num">
                        <div class="fs-6 fw-bold mb-2">فروشگاه اینترنتی یکتاکالا بررسی، انتخاب و خرید آنلاین
                        </div>
                        <div id="footerDesc" class="fs-7 text-secondary text-justify">
                        </div>
                    </div>
                    <div class="expandable-text-expand-btn justify-content-start text-sm">
                        <span class="show-more active">
                            مشاهده بیشتر <i class="ri-arrow-down-s-line ms-2"></i>
                        </span>
                        <span class="show-less d-none">
                            بستن <i class="ri-arrow-up-s-line ms-2"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right text-center text-muted py-3">
            کلیه حقوق این سایت به متعلق به شرکت سیسوتک می باشد
        </div>
    </div>
</footer>
<script>
     
    $.ajax({
        type: 'get',
        url: '{{ route('api.getDesc') }}',
        headers: {
            'accept': 'application/json'
        },
        success: function(res) {
            if(res.status === "ok") {
                $("#footerDesc").append(res.data);
                
            }
        }
    });
        
</script>