                <div class="row mb-4">
                    <div class="col-lg-12">
                        <!-- start of main-slider -->
                        <div class="swiper main-swiper-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <div id="slider" class="swiper-slide main-swiper-slide opacity1">
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <!-- end of main-slider -->
                    </div>
                </div>
                        <script>
        var width = window.innerWidth;
        console.log('====================================');
        console.log(width);
        console.log('====================================');
        $.ajax({
            type: 'get',
            url: '{{ route('api.slider') }}',
            headers: {
                'accept': 'application/json'
            },
            success: function(res) {
                var html= "";

                if(res.status === "ok") {
                     if (width > 1000) {
                        for(var i = 0; i < res.data.length; i++) {
                            html += '<a href="' + res.data[i].href + '" style="background-image: url(' + res.data[i].img_large + ')!important;"></a>';
                        }
                     }else if (width > 520) {
                        
                         for(var i = 0; i < res.data.length; i++) {
                            html += '<a href="' + res.data[i].href + '" style="background-image: url(' + res.data[i].img_mid + ')!important;"></a>';
                         }
                     }else {
                         for(var i = 0; i < res.data.length; i++) {
                             html += '<a href="' + res.data[i].href + '" style="background-image: url(' + res.data[i].img_small + ')!important;"></a>';
                         }
                     }
                     
                        $("#slider").empty().append(html);
                }
            }
        });

    </script>