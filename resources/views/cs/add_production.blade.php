@extends('layouts.app_cs')

@section('content')
<img src="{{ asset('img/add_production_header.png') }}" class="company_img" alt="">
<div class="item_logo_list">
    <a href="" class="collection_logo_a"><img src="{{ asset('img/add_production_logo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_pandy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_andy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_glamorous.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_can.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_an.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_aty.png') }}" class="collection_logo_img" alt=""></a>
</div>

<div class="item_list">
    <a href="{{ route('cs.item_detail') }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
        </div>
        <div class="item_detail_div">
            <div class="item_name">アイテム名前テスト</div>
            <div class="item_column">
                <div class="item_column_name">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
        </div>
        <div class="item_detail_div">
            <div class="item_name">アイテム名前テスト</div>
            <div class="item_column">
                <div class="item_column_name">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
        </div>
        <div class="item_detail_div">
            <div class="item_name">アイテム名前テスト</div>
            <div class="item_column">
                <div class="item_column_name">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
        </div>
        <div class="item_detail_div">
            <div class="item_name">アイテム名前テスト</div>
            <div class="item_column">
                <div class="item_column_name">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name">カラー</div>
            </div>
        </div>
    </a>
</div>

@endsection




@section('content_sp')
<div class="item_logo_list_sp">
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/add_production_logo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_pandy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_andy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_glamorous.png') }}" class="collection_logo_img" alt=""></a>
    <a class="collection_logo_a_sp"></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_can.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_an.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_aty.png') }}" class="collection_logo_img" alt=""></a>
</div>



<div class="top_content_flex" style="flex-wrap: wrap;">
    <a href="{{ route('cs.item_detail') }}" class="top_item_list_a_sp">
        <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
        <div class="add_production_mark">追加生産中</div>
        <div class="top_item_text">追加テキストテキスト</div>
        <div class="item_detail_div_sp2">
            <div class="item_column">
                <div class="item_column_name_sp">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="top_item_list_a_sp">
        <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
        <div class="add_production_mark">追加生産中</div>
        <div class="top_item_text">追加テキストテキスト</div>
        <div class="item_detail_div_sp2">
            <div class="item_column">
                <div class="item_column_name_sp">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="top_item_list_a_sp">
        <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
        <div class="add_production_mark">追加生産中</div>
        <div class="top_item_text">追加テキストテキスト</div>
        <div class="item_detail_div_sp2">
            <div class="item_column">
                <div class="item_column_name_sp">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">カラー</div>
            </div>
        </div>
    </a>

    <a href="{{ route('cs.item_detail') }}" class="top_item_list_a_sp">
        <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
        <div class="add_production_mark">追加生産中</div>
        <div class="top_item_text">追加テキストテキスト</div>
        <div class="item_detail_div_sp2">
            <div class="item_column">
                <div class="item_column_name_sp">ブランド</div>Andy
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">サイズ</div>S/M
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">カラー</div>
            </div>
        </div>
    </a>

</div>

@endsection