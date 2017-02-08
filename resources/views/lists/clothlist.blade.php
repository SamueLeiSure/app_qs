@extends('layouts.app')

@section('content')

<div data-am-widget="list_news" class="am-list-news am-list-news-default" >
    <!--列表标题-->
    <div class="am-list-news-hd am-cf">
       <!--带更多链接-->
        <a href="###" class="">
          <h2>餐饮住宿</h2>
            <span class="am-list-news-more am-fr">更多 &raquo;</span>
        </a>
    </div>

    <div class="am-list-news-bd">
      <ul class="am-list">
   
      <!--缩略图在标题左边-->
          @foreach ($cloths as $cloth)
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-list-thumb">
                <a href="#" class="">
                  <img src="/assets/i/clothpics/{{ $cloth->image }}" width="80px" height="80px"/>
                </a>
            </div>

            <div class="am-u-sm-8 am-list-main">
                <h3 class="am-list-item-hd"><a href="{{ url('/clothshow/' .$cloth->id) }}" class="">{{ $cloth->name }}</a></h3>
                <div class="am-list-item-text">位置：{{ $cloth->addr }}</div>
            </div>
          </li>
          @endforeach
      </ul>
    </div>
</div>
@endsection