            <div class="container">
                <div class="bg-white">
                    <div class="d-flex spaceBetween alignItemsCenter">
                        <span class="ui-box-title fontSize20"> 
                            <img class="p-2" src="{{ asset('./theme-assets/images/svg/headlineTitle.svg') }}" alt="">
                            مرام نامه اصالت و کیفیت
                        </span>
                    </div>
                     <div class="ui-box-content">
                            <div id="faq" class="accordion" id="accordionExample">
                                    
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
                        // html += '<div class="accordion-item borderNone"><h2 class="accordion-header" id="headingThree' + res.data[i].id + '"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree' + res.data[i].id + '" aria-expanded="fasle" aria-controls="collapseThree' + res.data[i].id + '">' + res.data[i].title + '</button></h2><div id="collapseThree' + res.data[i].id + '" class="accordion-collapse collapse" aria-labelledby="headingThree' + res.data[i].id + '" data-bs-parent="#accordionExample"><div class="accordion-body">' + res.data[i].description + '</div></div></div>'
                        html =+ '<div class="accordion-item"><h2 class="accordion-header" id="heading' + res.data[i].id + '"><button class="accordion-button collapsed padding0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' + res.data[i].id + '" aria-expanded="true" aria-controls="collapse' + res.data[i].id + '">' + res.data[i].title + '</button></h2><div id="collapse' + res.data[i].id + '" class="accordion-collapse collapse show" aria-labelledby="heading' + res.data[i].id + '" data-bs-parent="#accordionExample"><div class="accordion-body">' + res.data[i].description + '</div></div></div>'}
                        $("#faq").empty().append(html);
                }
            }
        });

    </script>