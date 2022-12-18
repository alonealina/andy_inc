@extends('layouts.app')

@section('content')
<div class="header_margin" style="margin-bottom:40px;">
    <ul class="slider">
        <li class=""><a href=""><img src="{{ asset('img/top_slider1.jpg') }}" class="top_img1" alt=""></a></li>
        <li class=""><a href=""><img src="{{ asset('img/top_slider2.jpg') }}" class="top_img1" alt=""></a></li>
        <li class=""><a href=""><img src="{{ asset('img/top_slider3.jpg') }}" class="top_img1" alt=""></a></li>
        <li class=""><a href=""><img src="{{ asset('img/top_slider4.jpg') }}" class="top_img1" alt=""></a></li>
        <li class=""><a href=""><img src="{{ asset('img/top_slider5.jpg') }}" class="top_img1" alt=""></a></li>
        <li class=""><a href=""><img src="{{ asset('img/top_slider6.jpg') }}" class="top_img1" alt=""></a></li>
    </ul>
</div>

<div class="pickup_list">
    @foreach ($pickup_list as $pickup)
    <a href="{{ route('pickup.show', ['id' => $pickup->id]) }}" class="pickup_flex">
        <img src="../img/pickup/{{ $pickup->img }}" class="pickup_img" alt="">
        <div class="pickup_content">{!! nl2br(e($pickup->content)) !!}</div>
    </a>
    @endforeach
</div>

@endsection


@section('content_sp')

<ul class="slider_sp">
    <li class=""><a href=""><img src="{{ asset('img/top_slider1.jpg') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider2.jpg') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider3.jpg') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider4.jpg') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider5.jpg') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider6.jpg') }}" class="top_img1" alt=""></a></li>
</ul>

<div class="pickup_list_sp">
    @foreach ($pickup_list as $pickup)
    <a href="{{ route('pickup.show', ['id' => $pickup->id]) }}">
        <img src="../img/pickup/{{ $pickup->img }}" class="pickup_img_sp" alt="">
        <div class="pickup_content_sp">{!! nl2br(e($pickup->content)) !!}</div>
    </a>
    @endforeach
</div>

@endsection