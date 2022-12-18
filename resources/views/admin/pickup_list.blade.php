@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.pickup_regist') }}">PICKUP登録</a>
</div>
<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.pickup_list') }}">PICKUP管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">PICKUP管理</div>
    <div class="pickup_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="pickup_list_content">
                <div class="admin_item_name">内容</div>
            </div>
        </div>
        <form id="boxes" name="pickup_list_form" action="" method="get">
            @foreach($pickup_list as $pickup)
            {{ Form::hidden('pickup_id[]', $pickup->id) }}
            <div class="admin_list_column">
                <div class="pickup_list_content">
                    <div class="admin_item_name">{{ $pickup->content }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="pickup_edit/{{ $pickup->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="pickup_delete/{{ $pickup->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $pickup_list->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


