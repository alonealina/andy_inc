@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Hostess Susukino
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="susukino_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/susukino1.png') }}" class="" alt="" style="top: 46%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="susukino_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino2.png') }}" class="" alt="">
                        <a href="https://www.instagram.com/tori_hoshimiyuu/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="susukino_insta1"></a>
                        <a href="https://www.instagram.com/mari_hasumi/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="susukino_insta2"></a>

                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="susukino_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino3.png') }}" class="" alt="">
                        <a href="https://www.instagram.com/akamon_haruka/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="susukino_insta3"></a>
                        <a href="https://www.instagram.com/sayori_fourseasons/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="susukino_insta4"></a>
                    </figure>
                    </div>

                </div>
            </section>
        </div>
    </main>
</div>

<script src="{{ asset('js/fw/susukino.js') }}"></script>

@endsection


@section('header_page_sp')
<div class="header_page_name_sp">
Hostess Susukino
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/susukino_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.instagram.com/tori_hoshimiyuu/" target="_blank"><img src="{{ asset('img/instagram.png') }}" style="width: 26px;top: calc((100% - -270px) / 2);left: 88%; height:auto;"></a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.instagram.com/mari_hasumi/" target="_blank"><img src="{{ asset('img/instagram.png') }}" style="width: 26px;top: calc((100% - -270px) / 2);left: 88%; height:auto;"></a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.instagram.com/sayori_fourseasons/" target="_blank"><img src="{{ asset('img/instagram.png') }}" style="width: 26px;top: calc((100% - -270px) / 2);left: 40%; height:auto;"></a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/susukino_sp5.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.instagram.com/tori_hoshimiyuu/" target="_blank"><img src="{{ asset('img/instagram.png') }}" style="width: 26px;top: calc((100% - -270px) / 2);left: 40%; height:auto;"></a>
                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>

@endsection