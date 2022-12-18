@extends('layouts.app')

@section('content')
<div class="store_detail">
    <div class="page_title">{{ $store->name }}</div>
    @if (!empty($store->address))
    <div class="company_flex">
        <div class="company_title">住所</div>{{ $store->address }}
    </div>
    @endif

    <div class="company_flex">
        <div class="company_title">電話番号</div>{{ $store->tel }}
    </div>

    @if (!empty($store->opening_time))
    <div class="company_flex">
        <div class="company_title">営業時間</div>{{ $store->opening_time }}
    </div>
    @endif

    @if (!empty($store->holiday))
    <div class="company_flex">
        <div class="company_title">定休日</div>{{ $store->holiday }}
    </div>
    @endif

    <div class="company_flex">
        <div class="company_title">取り扱いブランド</div>
        <div class="store_brand_list">
            @if ($store->pandy)
            <img src="{{ asset('img/top_logo_pandy.jpg') }}" class="store_brand_img">
            @endif
            @if ($store->andy)
            <img src="{{ asset('img/top_logo_andy.jpg') }}" class="store_brand_img">
            @endif
            @if ($store->glamorous)
            <img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="store_brand_img">
            @endif
            @if ($store->can)
            <img src="{{ asset('img/top_logo_can.jpg') }}" class="store_brand_img">
            @endif
            @if ($store->an)
            <img src="{{ asset('img/top_logo_an.jpg') }}" class="store_brand_img">
            @endif
            @if ($store->aty)
            <img src="{{ asset('img/top_logo_aty.jpg') }}" class="store_brand_img">
            @endif
        </div>
    </div>

    @if (!empty($store->address))
    <div class="company_flex">
        <div class="company_title">地図</div><a href="https://www.google.co.jp/maps/dir/{{ $store->address }}" target="_blank" class="google_a">Google Mapで開く</a>
    </div>
    @endif


</div>

@endsection




@section('content_sp')
<div class="company_detail_sp">
    <div class="page_title">{{ $store->name }}</div>

    @if (!empty($store->address))
    <div class="company_flex_sp">
        <div class="company_title_sp">住所</div>{{ $store->address }}
    </div>
    @endif

    <div class="company_flex_sp" style="color:#fff;">
        <div class="company_title_sp">電話番号</div>{{ $store->tel }}
    </div>

    @if (!empty($store->opening_time))
    <div class="company_flex_sp">
        <div class="company_title_sp">営業時間</div>{{ $store->opening_time }}
    </div>
    @endif

    @if (!empty($store->holiday))
    <div class="company_flex_sp">
        <div class="company_title_sp">定休日</div>{{ $store->holiday }}
    </div>
    @endif

    <div class="company_flex_sp">
        <div class="company_title_sp">取り扱い<br>ブランド</div>
        <div class="store_brand_list" style="width: 260px;">
            @if ($store->pandy)
            <img src="{{ asset('img/top_logo_pandy.jpg') }}" class="store_brand_img_sp">
            @endif
            @if ($store->andy)
            <img src="{{ asset('img/top_logo_andy.jpg') }}" class="store_brand_img_sp">
            @endif
            @if ($store->glamorous)
            <img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="store_brand_img_sp">
            @endif
            @if ($store->can)
            <img src="{{ asset('img/top_logo_can.jpg') }}" class="store_brand_img_sp">
            @endif
            @if ($store->an)
            <img src="{{ asset('img/top_logo_an.jpg') }}" class="store_brand_img_sp">
            @endif
            @if ($store->aty)
            <img src="{{ asset('img/top_logo_aty.jpg') }}" class="store_brand_img_sp">
            @endif
        </div>
    </div>

    @if (!empty($store->address))
    <div class="company_flex_sp">
        <div class="company_title_sp">地図</div><a href="https://www.google.co.jp/maps/dir/{{ $store->address }}" target="_blank" class="google_a">Google Mapで開く</a>
    </div>
    @endif

</div>

@endsection