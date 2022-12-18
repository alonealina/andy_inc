@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.item_regist') }}">商品登録</a>
</div>
<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.item_list') }}">商品管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">商品管理</div>
    <div class="item_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="news_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="item_list_name">
                <div class="admin_item_name">商品名</div>
            </div>
            <div class="item_list_brand">
                <div class="admin_item_name">ブランド</div>
            </div>
            <div class="item_list_deadline">
                <div class="admin_item_name">納期</div>
            </div>
            <div class="item_list_price">
                <div class="admin_item_name">価格(税込)</div>
            </div>
            <div class="item_list_text">
                <div class="admin_item_name">テキスト</div>
            </div>
        </div>
        <form id="boxes" name="item_list_form" action="" method="get">
            @foreach($item_list as $item)
            {{ Form::hidden('news_id[]', $item->id) }}
            <div class="admin_list_column">
                <div class="news_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $item->id }}">
                </div>
                <div class="item_list_name">
                    <div class="admin_item_name">{{ $item->name }}</div>
                </div>
                <div class="item_list_brand">
                    <div class="admin_item_name">{{ $item->brand_name }}</div>
                </div>
                <div class="item_list_deadline">
                    <div class="admin_item_name">{{ $item->deadline }}</div>
                </div>
                <div class="item_list_price">
                    <div class="admin_item_name">{{ number_format($item->price_tax) }}</div>
                </div>
                <div class="item_list_text">
                    <div class="admin_item_name">{{ $item->text }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="item_edit/{{ $item->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="item_delete/{{ $item->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $item_list->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


