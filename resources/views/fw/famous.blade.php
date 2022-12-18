@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
Famous store Introduction
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="enrike_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/famous1.png') }}" class="" alt="" style="top: 45%;">
                        <div class="famous_div famous_cast">- CAST -</div>
                        <div class="famous_div famous_maria">鳳　まりあ</div>
                        <div class="famous_div famous_kana">佳那嬢</div>
                        <div class="famous_div famous_yuuka">黒木　ゆうか</div>
                        <div class="famous_div famous_gms">
                            <a href="https://group-jp.com/cast_shop/glamorous-2/" target="_blank">グラマラス</a><br><br>
                            -Access-<br>
                            名古屋市中区錦3丁目18-31<br>
                            GS 錦ビルB1<br><br>
                            -Tel-<br>
                            052-971-2228(担当：岩田)
                        </div>
                    </figure>
                    </div>
                </div>
            </section>


            <section class="section scroll-section" data-scroll-section id="enrike_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/famous2.png') }}" class="" alt="" style="top: 45%;">
                        <div class="famous_div famous_cast">- CAST -</div>
                        <div class="famous_div famous_miyu">みゆう</div>
                        <div class="famous_div famous_rin">りん</div>
                        <div class="famous_div famous_cluba">
                            <a href="https://club-a.jp.net/" target="_blank">クラブエース</a><br><br>
                            -Access-<br>
                            大阪市北区堂島1丁目3番3号<br>
                            北新地西辻ビル BF<br><br>
                            -Tel-<br>
                            06-6452-0810(担当：浅沼)
                        </div>
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
Famous store Introduction
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/famous_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/famous_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="famous_div famous_gms_sp">
                            <a href="https://group-jp.com/cast_shop/glamorous-2/" target="_blank">グラマラス</a><br><br>
                            -Access-<br>
                            名古屋市中区錦3丁目18-31<br>
                            GS 錦ビルB1<br><br>
                            -Tel-<br>
                            052-971-2228(担当：岩田)
                        </div>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/famous_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/famous_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="famous_div famous_cluba_sp">
                            <a href="https://club-a.jp.net/" target="_blank">クラブエース</a><br><br>
                            -Access-<br>
                            大阪市北区堂島1丁目3番3号<br>
                            北新地西辻ビル BF<br><br>
                            -Tel-<br>
                            06-6452-0810(担当：浅沼)
                        </div>
                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>
@endsection