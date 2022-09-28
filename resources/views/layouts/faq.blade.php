            <div class="container">
                <div class="bg-white">
                     <div id="faq" class="ui-box-content">
                            <div class="accordion" id="accordionExample">
                            <!-- start of accordion-item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed padding0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        چگونه می توانم سفارش خود را ثبت کنم ؟
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        شما برای ثبت سفارش و خرید از فروشگاه اینترنتی یکتاکالا پس از اینکه کالای مورد
                                        نظر
                                        را انتخاب کردید آن را به سبد خرید اضافه و به ترتیب مراحل خرید اینترنتی را تکمیل
                                        نمایید .
                                    </div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->
                            <!-- start of accordion-item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed padding0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        چگونه شماره شبای حساب بانکی را به دست آوریم؟
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        برای دریافت شماره شبا از طریق شماره حساب و یا شماره کارت خود، وارد سایت بانک
                                        مربوطه شوید.
                                    </div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->
                            <!-- start of accordion-item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed padding0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        می توانم سفارشم را تلفنی ثبت کنم ؟
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        خیر، امکان ثبت سفارش بصورت تلفنی امکان پذیر نیست.
                                    </div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->
                        </div>
                     </div>
                </div>
            </div>
                    <script>
     
        $.ajax({
            type: 'get',
            url: '{{ route('api.faq') }}',
            headers: {
                'accept': 'application/json'
            },
            success: function(res) {
                if(res.status === "ok") {

                    var html = "";
                    for(var i = 0; i < res.data.length; i++) {
                        html += '<div class="accordion-item borderNone"><h2 class="accordion-header" id="headingThree' + res.data[i].id + '"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree' + res.data[i].id + '" aria-expanded="false" aria-controls="collapseThree' + res.data[i].id + '">' + res.data[i].title + '</button></h2><div id="collapseThree' + res.data[i].id + '" class="accordion-collapse collapse" aria-labelledby="headingThree' + res.data[i].id + '" data-bs-parent="#accordionExample"><div class="accordion-body">' + res.data[i].description + '</div></div></div>'}

                    $("#faq").empty().append(html);
                    
                }
            }
        });

    </script>