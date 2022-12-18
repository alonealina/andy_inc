@extends('layouts.app')

@section('content')
<div class="news_flex">
    <div class="news_list">
        <div class="page_title">PICKUP</div>
        <img src="../img/pickup/{{ $pickup->img }}" class="" style="width: 700px;height:445px;margin-top: 30px;"alt="">
        <div class="detail_content">{!! nl2br(e($pickup->content)) !!}</div>
    </div>

    @include('item.brand_list')

</div>


@endsection


@section('content_sp')

<div class="page_title">PICKUP</div>
<img src="../img/pickup/{{ $pickup->img }}" class="" style="width: 100%;margin-top: 30px;"alt="">
<div class="detail_content" style="padding: 10px;">{!! nl2br(e($pickup->content)) !!}</div>


@include('item.brand_list_sp')

@endsection