                <div class="ui-box mb-1">
                    <div class="ui-box-content">
                        <!-- Slider main container -->
                        <div class="swiper product-swiper-slider">
                            <!-- Additional required wrapper -->
                            <div id="cat" class="swiper-wrapper">
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <script>
                    $.ajax({
                        type: 'get',
                        url: '{{ route('api.category') }}',
                        headers: {
                            'accept': 'application/json'
                        },
                        success: function(res) {
                            var html='';
                            if(res.status === "ok") {                            
                                for(var i = 0; i < res.data.top.length; i++) {
                                    html += '<div class="swiper-slide d-flex justify-content-center">';
                                    html += '<div class="banner-img ">';
                                    html += '<a href="#" class="tiles">';
                                    html +='<img class="imgResponsive" src="' + res.data.top[i].img + '" alt="' + res.data.top[i].alt + '">';
                                    html += '<div class="catDetails"><div class="catTitle"></div><span class="catText">' + res.data.top[i].digest + '</span><div class="arrowLeftIcon colorWhite"><img src="{{ asset('theme-assets/images/svg/ionic-ios-arrow-round-back.svg') }}"></div></div>'
                                    html += '<div class="text-category position-absolute labelForCat"><h4 class="colorWhite fontSize14">' + res.data.top[i].name + '</h4></div>';
                                    html +='</a></div></div>';
                                }
                                    $("#cat").empty().append(html);
                        }}
                    });
                </script>