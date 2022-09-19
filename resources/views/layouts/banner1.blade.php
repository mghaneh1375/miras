                <div class="row mb-5">
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img id="bannerHalf" src="./theme-assets/images/banner/018.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
                    <div class="row mb-5">
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <!-- start of banner -->
                        <div class="banner-img">
                            <a href="#">
                                <img id="bannerHalf" src="./theme-assets/images/banner/018.jpg" alt="">
                            </a>
                        </div>
                        <!-- end of banner -->
                    </div>
    <script>
     
        $.ajax({
            type: 'get',
            url: '{{ route('api.banner', ['section', 'home']) }}',
            headers: {
                'accept': 'application/json'
            },
            success: function(res) {
                if(res.status === "ok") {
                    $("#bannerHalf").css('background-image', "url(" + res.data.img_large + ")").attr('href', res.data.href);
                }
            }
        });

    </script>