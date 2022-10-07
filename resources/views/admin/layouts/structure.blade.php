<!doctype html>
<html class="no-js" lang="en">

<head>

    @section('header')
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>پنل ادمین</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-panel/img/logo.png')}}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/font-awesome.min.css')}}">

        <!-- adminpro icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/adminpro-custon-icon.css')}}">

        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/meanmenu.min.css')}}">

        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/jquery.mCustomScrollbar.min.css')}}">

        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/animate.css')}}">

        <!-- jvectormap CSS
            ============================================ -->
{{--        <link rel="stylesheet" href="{{asset('admin-panel/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">--}}

        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/data-table/bootstrap-table.css')}}">
        <link rel="stylesheet" href="{{asset('admin-panel/css/data-table/bootstrap-editable.css')}}">

        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/normalize.css')}}">
        <!-- charts CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/c3.min.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('admin-panel/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('admin-panel/css/commonCSS.css')}}">

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('admin-panel/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{asset('admin-panel/js/jquery.min.js')}}"></script>

        
    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            padding: 5px;
            height: 200px;
            max-height: 300px;

        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
            display: flex;
            justify-content: center;
        }

        .myContainer:hover .overlay .infoBox {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
            overflow: auto;
            width: 100%;
            padding: 5px;
        }
        
        .myContainer:hover .overlay .opBox {
            display: flex;
            flex-direction: row;
            align-self: center;
            gap: 20px;
        }

        .editor {
            width: calc(100% - 60px);
            margin-right: 30px;
            min-height: 300px;
        }

        .myContainer:hover .overlay .infoBox .op {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 15px;
        }

        .myContainer:hover .overlay .infoBox label {
            display: inline-block;
            width: 75px;
        }
        
        .myContainer:hover .overlay .infoBox input,
        .myContainer:hover .overlay .infoBox select,
        .myContainer:hover .overlay .infoBox textarea {
            display: inline-block;
            width: calc(100% - 110px);
        }

        .myContainer:hover .overlay p {
            direction: rtl;
            color: white;
            font-size: 16px;
        }

        .myContainer:hover .overlay .remove {
            color: white; 
            background-color: rgb(153, 51, 51);
        }

        .myContainer:hover .overlay {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .flex {
            display: flex;
        }
        
        .flex-start {
            align-self: flex-start;
        }
        
        .flex-end {
            align-self: flex-end;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .space-between {
            justify-content: space-between
        }
        .flex-col {
            flex-direction: column;
        }

        .margin20 {
            margin: 20px;
        }

        .width-auto {
            width: auto;
        }

        .center {
            align-self: center;
            justify-content: center;
            align-items: center;
        }

        .gap10 {
            gap: 10px;
        }
        
        .gap30 {
            gap: 30px;
        }

        .container {
            position: relative;
        }

        .modal {
            display: block; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            padding: 15px !important;
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 30%;
            direction: rtl;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }
        .cke_chrome {
            margin-top: 20px;
            border: none !important;
        }
        table td, table th {
            padding: 10px;
            min-width: 120px;
            text-align: center;
        }
        tbody tr:nth-child(even) {
            background-color: #ddd;
        }
        table {
            width: 100%;
        }
        table th {
            background-color: #ddd;
        }
        .mCSB_scrollTools, .mCSB_scrollTools .mCSB_buttonDown, .mCSB_scrollTools .mCSB_buttonLeft, .mCSB_scrollTools .mCSB_buttonRight, .mCSB_scrollTools .mCSB_buttonUp, .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
            transition: unset !important;
            -webkit-transition: unset !important;
            -moz-transition: unset !important;
            -o-transition: unset !important;

        }
        *{
            animation-delay: unset !important;
            transition-delay: unset !important;
            transition: unset !important;
            animation: unset !important
        }

    </style>


        <style>

            .alarm1 {
                margin: 6px;
                padding: 5px;
                font-size: 0.6em;
                border-radius: 100%;
                border: 1px solid red;
                background-color: red;
                color: white;
            }

            .messages-scrollbar {
                height: auto !important;
            }

            .alarm2 {
                margin: 6px;
                padding: 5px;
                font-size: 0.6em;
                border-radius: 100%;
                border: 1px solid #ff7c3e;
                background-color: #ff7c3e;
                color: white;
            }

            .dropdown-item {
                text-align: right;
            }

            .main-sparkline8-hd {
                direction: rtl;
            }

            .hidden {
                display: none !important;
            }

            .nav-item {
                margin: 10px;
            }

            .calendar > table {
                width: 100%;
            }

            .nav-link {
                height: 28px;
            }

            .fixed-table-body {
                direction: ltr !important;
            }


            .col-md-7, .col-md-5, .col-md-6, .col-md-4, .col-lg-2, .col-lg-10, .col-xs-4, .col-xs-8, .col-xs-6, .col-md-3, .col-lg-4, .col-xs-3 {
                float: right !important;
            }

            div, center {
                direction: rtl;
            }

            .mCSB_container {
                overflow: scroll !important;
            }
        </style>

        <script>
            function validateNumber(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                    if(theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>

    @show

</head>

<body class="materialdesign">

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>پنل ادمین</h3>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">

                        <li class="nav-item"><a data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i></i> <span class="mini-dn">تنظیمات سیستمی</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('category.index')}}" class="dropdown-item">مدیریت دسته ها</a>
                                <a href="{{route('infobox.index')}}" class="dropdown-item">مدیریت بنر اطلاعات</a>
                                <a href="{{route('faq.index')}}" class="dropdown-item">مدیریت سوالات متداول</a>
                                <a href="{{route('slider.index')}}" class="dropdown-item">مدیریت اسلایدر</a>
                                <a href="{{route('brand.index')}}" class="dropdown-item">مدیریت برند ها</a>
                                <a href="{{route('blog.index')}}" class="dropdown-item">مدیریت بلاگ ها</a>
                                <a href="{{route('banner.index')}}" class="dropdown-item">مدیریت بنر های تبلیغاتی</a>
                                <a href="{{route('config.index')}}" class="dropdown-item">پیکربندی</a>
                            </div>
                        </li>

                        <li class="nav-item"><a data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i></i> <span class="mini-dn">کاربران</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('seller.index')}}" class="dropdown-item">فروشندگان</a>
                                <a href="{{route('mail.users')}}" class="dropdown-item">خبرنامه</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="{{ route('off.index') }}" role="button" class="nav-link"><i></i> <span class="mini-dn">تخفیفات</span></a></li>
                        <li class="nav-item"><a href="{{ route('product.index') }}" role="button" class="nav-link"><i></i> <span class="mini-dn">مدیریت محصولات</span></a></li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="content-inner-all-fa">
            @yield('content')
        </div>

        <div id="myModal" class="modal hidden">
            <div class="modal-content">
                <input type="hidden" value="" id="slideId" name="id">
                <input type="hidden" value="delete" name="kind">
                <h2 style="padding-right: 5%;">ایا اطیمنان دارید؟</h2>
                <div class="flex center gap10">
                    <input type="submit" value="بله" class="btn green"  style="margin-right: 5px; margin-bottom: 3%" onclick="remove()">
                    <input type="button" value="انصراف" class="btn green"  style="margin-bottom: 3%; margin-left: 5px;" onclick="$('#myModal').addClass('hidden')">
                </div>
            </div>
        </div>



        @section('reminder')
        <!-- jquery
        ============================================ -->
            <script src="{{asset('admin-panel/js/vendor/jquery-1.11.3.min.js')}}"></script>
            <!-- bootstrap JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/bootstrap.min.js')}}"></script>
            <!-- meanmenu JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/jquery.meanmenu.js')}}"></script>
            <!-- mCustomScrollbar JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <!-- sticky JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/jquery.sticky.js')}}"></script>
            <!-- scrollUp JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/jquery.scrollUp.min.js')}}"></script>
            <!-- scrollUp JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/wow/wow.min.js')}}"></script>
            <!-- counterup JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/counterup/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/counterup/waypoints.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/counterup/counterup-active.js')}}"></script>
            <!-- jvectormap JS
                ============================================ -->
            {{--<script src="{{asset('admin-panel/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>--}}
            {{--<script src="{{asset('admin-panel/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
            {{--<script src="{{asset('admin-panel/js/jvectormap/jvectormap-active.js')}}"></script>--}}
            <!-- peity JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/peity/jquery.peity.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/peity/peity-active.js')}}"></script>
            <!-- sparkline JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/sparkline/jquery.sparkline.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/sparkline/sparkline-active.js')}}"></script>
            <!-- flot JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/flot/Chart.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/flot/dashtwo-flot-active.js')}}"></script>
            <!-- data table JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/data-table/bootstrap-table.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/tableExport.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/data-table-active.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/bootstrap-table-editable.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/bootstrap-editable.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/bootstrap-table-resizable.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/colResizable-1.5.source.js')}}"></script>
            <script src="{{asset('admin-panel/js/data-table/bootstrap-table-export.js')}}"></script>

            <script src="{{asset('admin-panel/js/dropzone.js')}}"></script>
            <script src="{{asset('admin-panel/js/multiple-email-active.js')}}"></script>
            <script src="{{asset('admin-panel/js/summernote.min.js')}}"></script>
            <script src="{{asset('admin-panel/js/summernote-active.js')}}"></script>

            <!-- main JS
                ============================================ -->
            <script src="{{asset('admin-panel/js/main.js')}}"></script>

            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
                    return true;
                }

                let removeURL;
                let itemID;
                let item;

                function removeModal(node, id, url, ) {
                    $("#myModal").removeClass('hidden');
                    removeURL = url;
                    itemID = id;
                    item = node;
                }

                function remove() {

                    $.ajax({
                        type: 'delete',
                        url: removeURL,
                        headers: {
                            "Accept": "application/json"
                        },
                        success: function(res) {
                            if(res.status === "ok") {
                                $("#myModal").addClass('hidden');
                                alert("عملیات موردنظر با موفقیت انجام شد.");
                                $("#" + item + "_" + itemID).remove();
                            }
                        }
                    })

                }

            </script>
            
        @show
    </div>
</body>
