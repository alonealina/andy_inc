@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_current_menu">
    <a href="{{ route('admin.news_regist') }}">PICKUP登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.news_list') }}">PICKUP管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">PICKUP登録</div>
    <form id="form" name="regist_form" action="{{ route('admin.pickup_store') }}" method="post" enctype="multipart/form-data">
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item">
            <div class="flex_form_title">内容</div>
            <div class="flex_form_content">
                {{ Form::textarea('content', old('content'), ['class' => 'notice_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="regist_form_item">
            <div class="admin_form_name">画像</div>
            <div class="regist_file_button"><input type="file" id="file_btn_main" accept="image/*" onclick="fileCheckMain();" name="img"></div>
            <div class="img_tmb_main"></div>
        </div>

        <div class="regist_button">
            <a href="#" onclick="clickRegistButton()" class="regist_btn">登録</a>
        </div>
    </form>


</div>



@endsection


