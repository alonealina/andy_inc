@extends('layouts.app_cs')

@section('content')
<img src="{{ asset('img/new_item_header.png') }}" class="company_img" alt="">
<div class="item_logo_list">
    <a href="{{ route('cs.new_item', ['brand' => 'all']) }}" class="collection_logo_a" @if($brand == 'all') style="opacity:1" @endif><img src="{{ asset('img/new_item_logo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'pandy']) }}" class="collection_logo_a" @if($brand == 'pandy') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_pandy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'andy']) }}" class="collection_logo_a" @if($brand == 'andy') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_andy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'glamorous']) }}" class="collection_logo_a" @if($brand == 'glamorous') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_glamorous.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'can']) }}" class="collection_logo_a" @if($brand == 'can') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_can.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'an']) }}" class="collection_logo_a" @if($brand == 'an') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_an.png') }}" class="collection_logo_img" alt=""></a>
    <a href="{{ route('cs.new_item', ['brand' => 'aty']) }}" class="collection_logo_a" @if($brand == 'aty') style="opacity:1" @endif ><img src="{{ asset('img/collection_logo_aty.png') }}" class="collection_logo_img" alt=""></a>
</div>

<div class="item_list">
    @foreach ($item_list as $item)
    <a href="{{ route('cs.item_detail', ['id' => $item->id ]) }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="new_mark">New</div>
        </div>
        <div class="item_detail_div">
            <div class="item_name">{{ $item->name }}</div>
            <div class="item_column">
                <div class="item_column_name">ブランド</div>{{ $item->brand_name }}
            </div>
            <div class="item_column">
                <div class="item_column_name">サイズ</div>
                @php
                $item_size_list = $item_size_list_all->where('item_id', $item->id);
                $cnt = 1; $length = count($item_size_list); 
                @endphp
                @foreach ($item_size_list as $item_size)
                {{ $item_size->name }}
                @if ($cnt != $length)  /  @endif
                @php $cnt++; @endphp
                @endforeach
            </div>
            <div class="item_column">
                <div class="item_column_name">カラー</div>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection




@section('content_sp')

<div class="item_logo_list_sp">
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/new_item_logo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_pandy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_andy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_glamorous.png') }}" class="collection_logo_img" alt=""></a>
    <a class="collection_logo_a_sp"></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_can.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_an.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a_sp"><img src="{{ asset('img/collection_logo_aty.png') }}" class="collection_logo_img" alt=""></a>
</div>



<div class="top_content_flex" style="flex-wrap: wrap;">
    @foreach ($item_list as $item)
    <a href="{{ route('cs.item_detail', ['id' => $item->id ]) }}" class="top_item_list_a_sp">
        <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
        <div class="new_mark">New</div>
        <div class="top_item_text">{{ $item->name }}</div>
        <div class="item_detail_div_sp2">
            <div class="item_column">
                <div class="item_column_name_sp">ブランド</div>{{ $item->brand_name }}
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">サイズ</div>
                @php $cnt = 1; $length = count($item_size_list); @endphp
                @foreach ($item_size_list as $item_size)
                {{ $item_size->name }}
                @if ($cnt != $length)  /  @endif
                @php $cnt++; @endphp
                @endforeach
            </div>
            <div class="item_column">
                <div class="item_column_name_sp">カラー</div>
            </div>
        </div>
    </a>
    @endforeach

</div>

@endsection