@extends('layouts.app')

@section('content')

<div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 8000}">
    <ul class="am-slides">
        <li><img src="assets/i/homepics/bing-1.jpg" /></li>
        <li><img src="assets/i/homepics/bing-2.jpg" /></li>
        <li><img src="assets/i/homepics/bing-3.jpg" /></li>
        <li><img src="assets/i/homepics/bing-4.jpg" /></li>
    </ul>
</div>

<nav id="nav" class="nav-entry">
    <div class="row">
        <div class="col col-33">
            <a id="c_hotel" title="潮" href="#">潮</a>
        </div>

        <div class="col col-33">
            <a id="c_hotel_international" title="餐饮住宿" href="/hotellist"><em>餐饮住宿</em></a> 
            <a id="c_hotel_sale" title="休闲娱乐" href="#"><em>休闲娱乐</em></a>
        </div>

        <div class="col col-33">
            <a id="c_group" title="养身美容" href="/looklist"><em>养身美容</em></a>
            <a id="c_hotel_inn" title="服装箱包" href="/clothlist"><em>服装箱包</em></a>
        </div>
    </div>

    <div class="row">
        <div class="col col-33">
            <a id="c_flight" title="游" href="#">游</a>
        </div>

        <div class="col col-33">
            <a id="c_train_ticket" title="旅游交通" href="#"><em>旅游交通</em></a>
            <a id="c_flight_international" title="行政部门" href="#"><em>行政部门</em></a>
        </div>

        <div class="col col-33">
            <a id="c_bus_ticket" title="今日特惠" href="#"><em>今日特惠</em></a> 
            <a id="c_car" title="团购·订票" href="#"><em>团购<span class=point>&middot;</span>订票</em></a>
        </div>
    </div>
        
    <div class="row">
        <div class="col col-33">
            <a id="c_vacation" title="居" href="#">居</a>
        </div>

        <div class="col col-33">
            <a id="c_entrance" title="家居建材" href="#"><em>家居建材</em></a> 
            <a id="c_weekend" title="船舶精工" href="#"><em>船舶精工</em></a>
        </div>

        <div class="col col-33">
            <a id="c_cruise" title="生活服务" href="#"><em>生活服务</em></a> 
            <a id="c_custom" title="家政服务" href="#"><em>家政服务</em></a>
        </div>
    </div>

    <div class="row">
        <div class="col col-33">
            <a id="c_ticket" title="记" href="#">记</a> 
        </div>

        <div class="col col-33">
            <a id="c_food" title="招聘求职" href="#"><em>招聘求职</em></a> 
            <a id="c_wifi" title="房产租售" href="#"><em>房产租售</em></a>
        </div>

        <div class="col col-33">
            <a id="c_global_shopping" title="二手买卖" href="#"><em>二手买卖</em></a> 
            <a id="c_visa" title="外卖电话" href="#"><em>外卖电话</em></a>
        </div>
    </div>
</nav>
@endsection