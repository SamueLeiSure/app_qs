@extends('layouts.app')

@section('content')
<img src="/assets/i/lookpics/{{ $look->image }}" style="width: 100%; height: 160px;"/>
<hr>
<div class="am-panel-group" >
	<section class="am-panel am-panel-primary">
  		<header class="am-panel-hd"><strong>{{ $look->name }}</strong></header>
	</section>
	<section class="am-panel am-panel-secondary">
  		<header class="am-panel-hd">简介</header>
  		<main class="am-panel-bd">{{ $look->info }}</main>
	</section>
	<section class="am-panel am-panel-success">
  		<header class="am-panel-hd">地址</header>
  		<main class="am-panel-bd">{{ $look->addr }}</main>
	</section>
	<section class="am-panel am-panel-warning">
  		<header class="am-panel-hd">联系方式</header>
  		<main class="am-panel-bd">{{ $look->tel }}</main>
	</section>
</div>
  <div data-am-widget="map" class="am-map am-map-default"
      data-name="美尚生活馆" data-address="衢山镇人民路400号" data-longitude="122.303805" data-latitude="30.457719" data-scaleControl="" data-zoomControl="true" data-setZoom="17" data-icon="http://amuituku.qiniudn.com/mapicon.png">
    <div id="bd-map"></div>
  </div>
@endsection