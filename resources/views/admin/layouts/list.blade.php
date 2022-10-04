@extends('admin.layouts.structure')

@section('header')
    @parent
@stop

@section('content')

    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="sparkline8-list shadow-reset mg-tb-30">
            <div class="sparkline8-hd">
                <div class="main-sparkline8-hd">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
            </div>

            <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">

                <div id="mainContainer" class="page-content" style="margin-top: 5%; margin: 50px; direction: rtl">

                    <div class="row">
                        <div class="flex center gap10">
                            @yield('backBtn')
                            <button onclick="document.location.href = @yield('createNew')" class="btn btn-success">افزودن مورد جدید</button>
                        </div>
                        <div class="col-xs-12">
                            @yield('items')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>

@stop