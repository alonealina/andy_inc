@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Contact
</div>

@endsection

@section('content')
<div class="contact_div">
    <div class="page_title" style="margin-bottom:30px;">お問い合わせ</div>
    <div class="contact_flex">
        <div class="contact_name">お名前</div>
        <input class="form_text" placeholder="" name="name" type="text">
    </div>

    <div class="contact_flex">
        <div class="contact_name">電話番号</div>
        <input class="form_text" placeholder="" name="tel" type="text">
    </div>

    <div class="contact_flex">
        <div class="contact_name">メールアドレス</div>
        <input class="form_text" placeholder="" name="mail" type="text">
    </div>

    <div class="contact_flex">
        <div class="contact_name">お問い合わせ内容</div>
        <textarea class="form_textarea"></textarea>
    </div>

    <div class="send_button" style="margin-top:50px;">
        <a href="#" onclick="clickSearchButton()">送信</a>
    </div>
</div>


@endsection


@section('header_page_sp')
<div class="header_page_name_sp">
Contact
</div>
@endsection

@section('content_sp')
<div class="contact_div_sp">

    <div class="contact_name">お名前</div>
    <input class="form_text_sp" placeholder="" name="name" type="text">

    <div class="contact_name">電話番号</div>
    <input class="form_text_sp" placeholder="" name="tel" type="text">

    <div class="contact_name">メールアドレス</div>
    <input class="form_text_sp" placeholder="" name="mail" type="text">

    <div class="contact_name">お問い合わせ内容</div>
    <textarea class="form_textarea_sp"></textarea>

    <div class="send_button" style="margin-top:20px;">
        <a href="#" onclick="clickSearchButton()" style="margin:auto;">送信</a>
    </div>
</div>


@endsection