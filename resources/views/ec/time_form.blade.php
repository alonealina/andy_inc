@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">お届け日時指定</div></div>

<form class="time_form">
    <div class="time_form_column">
        <input type="radio" name="example" value="代引" class="time_form_radio">代引
        <div class="time_form_sub">(手数料300円税込)</div>
    </div>
    <div class="time_form_column">
        <input type="radio" name="example" value="コンビニ支払い" class="time_form_radio">コンビニ支払い
        <div class="time_form_sub">(手数料300円税込)</div>
    </div>
    <div class="time_form_column">
        <input type="radio" name="example" value="銀行振込" class="time_form_radio">銀行振込
        <div class="time_form_sub">(手数料お客様負担)</div>
    </div>
    <div class="time_form_column">
        <input type="radio" name="example" value="クレジットカード" class="time_form_radio">クレジットカード
        <div class="credit_flex">
            <div class="credit_left">カード番号<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_flex">
            <div class="credit_left">カード有効期限<span class="required">*</span></div>
            <select name="count" class="credit_select">
                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <select name="count" class="credit_select">
                @for ($i = 2022; $i <= 2050; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="credit_flex">
            <div class="credit_left">カード名義<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_flex">
            <div class="credit_left">セキュリティコード<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_flex">
            <div class="credit_left">お支払い回数</div>
            <select name="count" class="credit_select">
                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}回">{{ $i }}回</option>
                @endfor
            </select>
        </div>
        <div class="time_form_sub">※発送予定が60日を超える商品は代引きのみとなります</div>
    </div>

</form>

<div class="time_btn_list" style="margin-top:50px;">
    <a href="" class="back_btn" onclick="history.back(-1);return false;">戻る</a>
    <a href="{{ route('ec.order_confirm') }}" class="cart_btn">次のステップへ</a>    
</div>
@endsection




@section('content_sp')
<div class="cart_title_div_sp"><div class="cart_title">お届け日時指定</div></div>

<form class="time_form_sp">
    <div class="time_form_column_sp">
        <input type="radio" name="example" value="代引" class="time_form_radio">代引
        <div class="time_form_sub_sp">(手数料300円税込)</div>
    </div>
    <div class="time_form_column_sp">
        <input type="radio" name="example" value="コンビニ支払い" class="time_form_radio">コンビニ支払い
        <div class="time_form_sub_sp">(手数料300円税込)</div>
    </div>
    <div class="time_form_column_sp">
        <input type="radio" name="example" value="銀行振込" class="time_form_radio">銀行振込
        <div class="time_form_sub_sp">(手数料お客様負担)</div>
    </div>
    <div class="time_form_column_sp">
        <input type="radio" name="example" value="クレジットカード" class="time_form_radio">クレジットカード

        <div class="credit_sp">
            <div class="credit_left">カード番号<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_sp">
            <div class="credit_left">カード有効期限<span class="required">*</span></div>
            <select name="count" class="credit_select">
                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <select name="count" class="credit_select" style="float: right; margin:0;">
                @for ($i = 2022; $i <= 2050; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="credit_sp">
            <div class="credit_left">カード名義<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_sp">
            <div class="credit_left">セキュリティコード<span class="required">*</span></div>
            {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'credit_text_sp', 'placeholder' => ''] ) !!}
        </div>
        <div class="credit_sp">
            <div class="credit_left">お支払い回数</div>
            <select name="count" class="credit_select">
                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}回">{{ $i }}回</option>
                @endfor
            </select>
        </div>
        <div class="time_form_sub">※発送予定が60日を超える商品は代引きのみとなります</div>
    </div>

</form>

<a href="{{ route('ec.order_confirm') }}" class="cart_btn">次のステップへ</a>    
<a href="" class="back_btn" onclick="history.back(-1);return false;" style="margin-top:10px;">戻る</a>




@endsection