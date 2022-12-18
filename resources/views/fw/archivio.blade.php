@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Golf wear By:ARCHIVIO
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="archivio_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/archivio1.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="archivio_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/archivio2.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="archivio_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/archivio3.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="archivio_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio4.png') }}" class="" alt="">
                        <a href="https://www.bikijapan-store.jp/archivio/" target="_blank"><img src="{{ asset('img/archivio_url.png') }}" class="archivio_url"></a>
                    </figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>
@endsection


@section('header_page_sp')
<div class="header_page_name_sp">
Special Edition : archivio
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/archivio_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio_sp5.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section6">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/archivio_sp6.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="archivio_btn_list">
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref1();">
                                <img src="{{ asset('img/archivio_btn1.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store1">
                                <img src="{{ asset('img/arc_shop1.png') }}" class="arc_shop1" alt="">
                            </div>
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref2();">
                                <img src="{{ asset('img/archivio_btn2.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store2">
                                <img src="{{ asset('img/arc_shop2.png') }}" class="arc_shop2" alt="">
                            </div>
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref3();">
                                <img src="{{ asset('img/archivio_btn3.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store3">
                                <img src="{{ asset('img/arc_shop3.png') }}" class="arc_shop3" alt="">
                            </div>
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref4();">
                                <img src="{{ asset('img/archivio_btn4.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store4">
                                <img src="{{ asset('img/arc_shop4.png') }}" class="arc_shop4" alt="">
                            </div>
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref5();">
                                <img src="{{ asset('img/archivio_btn5.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store5">
                                <img src="{{ asset('img/arc_shop5.png') }}" class="arc_shop5" alt="">
                            </div>
                            <a href="#!" class="arc_btn_a" onclick="clickStorePref6();">
                                <img src="{{ asset('img/archivio_btn6.png') }}" class="arc_btn" alt="">
                            </a>
                            <div class="store_list_flex_sp" id="store6">
                                <img src="{{ asset('img/arc_shop6.png') }}" class="arc_shop6" alt="">
                            </div>

                        </div>
                        <a href="https://www.bikijapan-store.jp/archivio/" target="_blank"><img src="{{ asset('img/archivio_url_sp.png') }}" style="width: 250px;top: calc((100% - -464px) / 2);left: 35.5%;height: auto;"></a>

                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>

<script src="{{ asset('js/archivio_list.js') }}"></script>
@endsection