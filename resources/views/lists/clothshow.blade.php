@extends('layouts.app')

@section('content')
<img src="/assets/i/clothpics/{{ $cloth->image }}" style="width: 100%; height: 160px;"/>
<hr>
<div class="am-panel-group" >
	<section class="am-panel am-panel-primary">
  		<header class="am-panel-hd"><strong>{{ $cloth->name }}</strong></header>
	</section>
	<section class="am-panel am-panel-secondary">
  		<header class="am-panel-hd">简介</header>
  		<main class="am-panel-bd">{{ $cloth->info }}</main>
	</section>
	<section class="am-panel am-panel-success">
  		<header class="am-panel-hd">地址</header>
  		<main class="am-panel-bd">{{ $cloth->addr }}</main>
	</section>
	<section class="am-panel am-panel-warning">
  		<header class="am-panel-hd">联系方式</header>
  		<main class="am-panel-bd">{{ $cloth->tel }}</main>
	</section>
</div>
  <div data-am-widget="map" class="am-map am-map-default"
      data-name="{{ $cloth->name }}" data-address="{{ $cloth->addr }}" data-longitude="{{ $cloth->x }}" data-latitude="{{ $cloth->y }}" data-scaleControl="" data-zoomControl="true" data-setZoom="17" data-icon="/assets/i/mapicon.png">
    <div id="bd-map"></div>
  </div>
@endsection