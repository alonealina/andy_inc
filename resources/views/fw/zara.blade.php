@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Special Edition : ZARA
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="zara_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/zara1.png') }}" class="" alt="" style="top: 48%;">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="zara_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/zara2.png') }}" class="" alt="" style="top: 48%;"></figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>


@endsection


@section('header_page_sp')
<div class="header_page_name_sp">
Special Edition : ZARA
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section_zara">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back" style="background-color: #fff;">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/zara_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>



        </div>
    </main>
</div>
@endsection