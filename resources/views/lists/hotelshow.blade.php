@extends('layouts.app')

@section('content')
<img src="/assets/i/hotelpics/{{ $hotel->image }}" style="width: 100%; height: 160px;"/>
<hr>
<div class="am-panel-group" >
	<section class="am-panel am-panel-primary">
  		<header class="am-panel-hd"><strong>{{ $hotel->name }}</strong></header>
	</section>
	<section class="am-panel am-panel-secondary">
  		<header class="am-panel-hd">简介</header>
  		<main class="am-panel-bd">{{ $hotel->info }}</main>
	</section>
	<section class="am-panel am-panel-success">
  		<header class="am-panel-hd">地址</header>
  		<main class="am-panel-bd">{{ $hotel->addr }}</main>
	</section>
	<section class="am-panel am-panel-warning">
  		<header class="am-panel-hd">联系方式</header>
  		<main class="am-panel-bd">{{ $hotel->tel }}</main>
	</section>
</div>
@endsection