                <!-- start of box -->
                <div class="w-100 mb-5">
                    <div class="container">
                                           <div class="d-flex spaceBetween alignItemsCenter">
                        <span class="ui-box-title fontSize20"> 
                            <img class="p-2" src="{{ asset('./theme-assets/images/svg/headlineTitle.svg') }}" alt="">محبوب ترین ها
                        </span>
                        <span class="alignItemsCenter colorBlue"><a class="hoverBold" href="">مشاهده همه</a></span>
                    </div>
                    <div class="ui-box-content">
                        <!-- Slider main container -->
                        <div class="swiper product-swiper-slider">
                            <!-- Additional required wrapper -->
                            <div id="mostLikeProductsSlider" class="swiper-wrapper">

                                <!-- Slides -->
                                <div id="mostLikeProductsSample" class="cursorPointer">
                                    <div class="swiper-slide customBox customWidthBox">
                                        <!-- start of product-card -->
                                        <div class="product-card customBorderBoxShadow">
                                            <div class="product-thumbnail">
                                                <a href="#" target="_blank">
                                                    <img id="mostLikeProductImg">
                                                </a>
                                            </div>
                                            <div class="product-card-body">
                                                <h2 class="product-title">
                                                    <a id="mostLikeProductHeader" class="textColor fontSize12"></a>
                                                </h2>
                                                <div class="product-variant">
                                                    <span id="mostLikeProductTag" class="colorWhite customBoxLabel fontSize11"></span>
                                                </div>
                                                <div id="mostLikeProductMultiColor" class="colorCircle hidden"></div>
                                                <div class="spaceBetween mt-3 mb-3">
                                                    <span id="mostLikeProductCritical" class="fontSize11 invisible colorRed whiteSpaceNoWrap">
                                                        <span>موجودی تنها</span>
                                                        <span>&nbsp;</span>
                                                        <span id="mostLikeProductCriticalCount"></span>
                                                        <span>&nbsp;</span>
                                                        <span>عدد</span>
                                                    </span>
                                                    <span id="mostLikeProductRate"></span>
                                                </div>
                                                <div class="product-price fa-num">
                                                    <div id="mostLikeProductOffSection" class="hidden d-flex align-items-center">
                                                        <span class="fontSize15 pl-10 position-relative">
                                                            <img src="{{ asset('theme-assets/images/svg/off.svg') }}" alt="">
                                                            <span id="mostLikeProductOff" class="position-absolute fontSize10 colorWhite r-0 customOff">20%</span>
                                                        </span>
                                                        <del id="mostLikeProductPriceBeforeOff" class="customlineText textColor fontSize15">26,900,000</del>
                                                    </div>
                                                    <div id="mostLikeProductPrice" class="fontSize20">26,249,000 <span
                                                            class="fontSize20 colorYellow">ت</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card-footer mb-2">
                                                <div class="textColor">
                                                    <span class="bold">از</span>
                                                    <span id="mostLikeProductSeller"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of product-card -->
                                    </div>
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
                </div>
                <!-- end of box -->


<script>

    $(document).ready(function() {
        $.ajax({
            type: 'get',
            url: '{{ route('api.product.list', ['orderBy' => 'rate', 'limit' => 8]) }}',
            success: function(res) {
                let html = renderProductSlider(res.data, 'mostLikeProduct');
                $("#mostLikeProductsSlider").empty().append(html).removeClass('hidden');
            }
        });
    });

</script>