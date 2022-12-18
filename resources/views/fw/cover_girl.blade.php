@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Cover Girl
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="cover_girl_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl1.png') }}" class="" alt="" style="top: 48%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="cover_girl_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl2.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

@endsection



@section('header_page_sp')
<div class="header_page_name_sp">
    Cover Girl
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl_sp1.png') }}" class="sp_img" alt="" style="top:44%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl_sp2.png') }}" class="sp_img" alt="" style="top:44%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl_sp3.png') }}" class="sp_img" alt="" style="top:44%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/cover_girl_sp4.png') }}" class="sp_img" alt="" style="top:44%"></figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>

@endsection