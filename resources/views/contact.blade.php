@extends('layouts.app')

@section('content')
<div class="contact_div">
    <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="page_title" style="margin-bottom:30px;">CONTACT</div>
        <div class="contact_flex">
            <div class="contact_name">name</div>
            <input class="form_text" placeholder="" name="name" type="text">
        </div>

        <div class="contact_flex">
            <div class="contact_name">phone number</div>
            <input class="form_text" placeholder="" name="tel" type="text">
        </div>

        <div class="contact_flex">
            <div class="contact_name">e-mail</div>
            <input class="form_text" placeholder="" name="mail" type="text">
        </div>

        <div class="contact_flex">
            <div class="contact_name">messsge</div>
            <textarea class="form_textarea" name="content"></textarea>
        </div>

        <div class="send_button" style="margin-top:50px;">
            <a href="#" onclick="clickMailButton()">SEND</a>
        </div>
    </form>
</div>


@endsection




@section('content_sp')
<img src="{{ asset('img/company.png') }}" style="width: 100%;" alt="">
<div class="contact_div_sp">
    <div class="page_title" style="margin-bottom:30px;">CONTACT</div>

    <div class="contact_name">name</div>
    <input class="form_text_sp" placeholder="" name="name" type="text">

    <div class="contact_name">phone number</div>
    <input class="form_text_sp" placeholder="" name="tel" type="text">

    <div class="contact_name">e-mail</div>
    <input class="form_text_sp" placeholder="" name="mail" type="text">

    <div class="contact_name">messsge</div>
    <textarea class="form_textarea_sp"></textarea>

    <div class="send_button" style="margin-top:20px;">
        <a href="#" onclick="clickMailButton()" style="margin:auto;">SEND</a>
    </div>
</div>


@endsection