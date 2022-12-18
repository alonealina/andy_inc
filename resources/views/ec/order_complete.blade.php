@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">ご注文完了</div></div>

<img src="{{ asset('img/cart_bar3.png') }}" class="cart_bar" alt="">

<div class="order_comp_text">
    ご注文ありがとうございます。<br>
    ご登録されたメールアドレスにご注文完了メールが自動で送信されます。<br>
    商品の到着までしばらくお待ちください。
</div>

<a href="{{ route('ec.index') }}" class="top_btn">トップページへ</a>

@endsection




@section('content_sp')
<div class="cart_title_div_sp"><div class="cart_title">ご注文完了</div></div>

<img src="{{ asset('img/cart_bar3_sp.png') }}" class="cart_bar_sp" alt="">

<div class="order_comp_text_sp">
    ご注文ありがとうございます。<br>
    ご登録されたメールアドレスにご注文完了メールが自動で送信されます。<br>
    商品の到着までしばらくお待ちください。
</div>

<a href="{{ route('ec.index') }}" class="top_btn">トップページへ</a>

@endsection