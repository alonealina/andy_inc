@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">お客様情報・お届け先情報</div></div>

<div class="info_form_title">お客様情報</div>

<form>
    <div class="info_form_flex">
        <div class="info_form_left">お名前（漢字）</div>
        <div class="info_form_right">
            <div class="info_form_sub">姓</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
            <div class="info_form_sub" style="margin-left:50px;">名</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">フリガナ（カタカナ）</div>
        <div class="info_form_right">
            <div class="info_form_sub">セイ</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
            <div class="info_form_sub" style="margin-left:50px;">メイ</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">郵便番号</div>
        <div class="info_form_right">
            <div class="info_form_sub">〒</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">都道府県・市区町村</div>
        <div class="info_form_right">
            <div class="info_form_sub"></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => ''] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">丁目・番地</div>
        <div class="info_form_right">
            <div class="info_form_sub"></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(例：0000000)'] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">建物名・部屋番号</div>
        <div class="info_form_right">
            <div class="info_form_sub"></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(例：○○マンション000号室)'] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">電話番号(連絡先1)</div>
        <div class="info_form_right">
            <div class="info_form_sub"></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(半角数字 / ハイフン不要 / 09000000000)'] ) !!}
        </div>
    </div>
    <div class="info_form_flex">
        <div class="info_form_left">メールアドレス</div>
        <div class="info_form_right">
            <div class="info_form_sub"></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(半角英数字)例：andy.123@andy.co.jp'] ) !!}
        </div>
    </div>

    <div class="info_check_div">
        <input id="info_check" type="checkbox" name="chk[]" class="" value="1" checked><label for="info_check"><div class="check_after_info"></div></label>
        お客様情報と同じ住所に届ける
    </div>
    <div id="info_another" hidden style="margin-top:50px;">
        <div class="info_form_flex">
            <div class="info_form_left">お名前（漢字）</div>
            <div class="info_form_right">
                <div class="info_form_sub">姓</div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
                <div class="info_form_sub" style="margin-left:50px;">名</div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">フリガナ（カタカナ）</div>
            <div class="info_form_right">
                <div class="info_form_sub">セイ</div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
                <div class="info_form_sub" style="margin-left:50px;">メイ</div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">郵便番号</div>
            <div class="info_form_right">
                <div class="info_form_sub">〒</div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short', 'placeholder' => ''] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">都道府県・市区町村</div>
            <div class="info_form_right">
                <div class="info_form_sub"></div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => ''] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">丁目・番地</div>
            <div class="info_form_right">
                <div class="info_form_sub"></div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(例：0000000)'] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">建物名・部屋番号</div>
            <div class="info_form_right">
                <div class="info_form_sub"></div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(例：○○マンション000号室)'] ) !!}
            </div>
        </div>
        <div class="info_form_flex">
            <div class="info_form_left">電話番号(連絡先1)</div>
            <div class="info_form_right">
                <div class="info_form_sub"></div>
                {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long', 'placeholder' => '(半角数字 / ハイフン不要 / 09000000000)'] ) !!}
            </div>
        </div>
    </div>
</form>

<a href="{{ route('ec.time_form') }}" class="cart_btn" style="margin-top:50px;">次のステップへ</a>
@endsection




@section('content_sp')
<div class="cart_title_div_sp"><div class="cart_title">お客様情報・お届け先情報</div></div>

<form>
    <div class="info_form_title_sp">お名前（漢字）</div>
    <div class="info_form_name_sp">
        <div class="info_form_sub_sp">姓</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
    </div>
    <div class="info_form_name_sp">
        <div class="info_form_sub_sp">名</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
    </div>
    <div class="info_form_title_sp">フリガナ（カタカナ）</div>
    <div class="info_form_name_sp">
        <div class="info_form_sub_sp">セイ</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
    </div>
    <div class="info_form_name_sp">
        <div class="info_form_sub_sp">メイ</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
    </div>
    <div class="info_form_title_sp">郵便番号</div>
    <div class="info_form_name_sp">
        <div class="info_form_sub_sp">〒</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
    </div>
    <div class="info_form_title_sp">都道府県・市区町村</div>
    {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => ''] ) !!}
    <div class="info_form_title_sp">丁目・番地</div>
    {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(例：0000000)'] ) !!}
    <div class="info_form_title_sp">建物名・部屋番号</div>
    {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(例：○○マンション000号室)'] ) !!}
    <div class="info_form_title_sp">電話番号(連絡先1)</div>
    {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(半角数字 / ハイフン不要 / 09000000000)'] ) !!}
    <div class="info_form_title_sp">メールアドレス</div>
    {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(半角英数字)例：andy.123@andy.co.jp'] ) !!}

    <div class="info_check_div" style="font-size: 14px;">
        <input id="info_check" type="checkbox" name="chk[]" class="" value="1" checked><label for="info_check" style="width: 40px;"><div class="check_after_info"></div></label>
        お客様情報と同じ住所に届ける
    </div>
    <div id="info_another" hidden style="margin-top:50px;">
        <div class="info_form_title_sp">お名前（漢字）</div>
        <div class="info_form_name_sp">
            <div class="info_form_sub_sp">姓</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="info_form_name_sp">
            <div class="info_form_sub_sp">名</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="info_form_title_sp">フリガナ（カタカナ）</div>
        <div class="info_form_name_sp">
            <div class="info_form_sub_sp">セイ</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="info_form_name_sp">
            <div class="info_form_sub_sp">メイ</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="info_form_title_sp">郵便番号</div>
        <div class="info_form_name_sp">
            <div class="info_form_sub_sp">〒</div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_short_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="info_form_title_sp">都道府県・市区町村</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => ''] ) !!}
        <div class="info_form_title_sp">丁目・番地</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(例：0000000)'] ) !!}
        <div class="info_form_title_sp">建物名・部屋番号</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(例：○○マンション000号室)'] ) !!}
        <div class="info_form_title_sp">電話番号(連絡先1)</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'form_text_long_sp', 'placeholder' => '(半角数字 / ハイフン不要 / 09000000000)'] ) !!}
    </div>
</form>

<a href="{{ route('ec.time_form') }}" class="cart_btn" style="margin-top:50px;">次のステップへ</a>
@endsection