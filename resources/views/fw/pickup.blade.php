@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    pick up AndyMODEL
</div>
@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="pickup_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup1.png') }}" class="pickup1_img" alt="" style="top: 47%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="pickup_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup2.png') }}" class="" alt="" style="top: 47%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="pickup_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/pickup3.png') }}" class="" alt="" style="top: 47%;">
                        <a href="https://club-mirazur.com/" target="_blank"><img src="{{ asset('img/pickup_url.png') }}" class="pickup_url"></a>
                        <a href="https://mobile.twitter.com/ayakayui58" target="_blank"><img src="{{ asset('img/pickup_twitter.png') }}" class="pickup_twitter"></a>
                        <a href="https://www.instagram.com/ayakayui/" target="_blank"><img src="{{ asset('img/pickup_insta.png') }}" class="pickup_insta"></a>
                        <a href="https://www.youtube.com/channel/UCq622RO4EWsff2hATk0dZ6A" target="_blank"><img src="{{ asset('img/pickup_youtube.png') }}" class="pickup_youtube"></a>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3234004428227!2d139.75874651555068!3d35.669038138247494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfef65f8723%3A0xf4fc8268fa14e4d5!2zQ2x1YiBNaXJhenVyKOOCr-ODqeODluODn-ODqeOCuOODpeODvOODqyk!5e0!3m2!1sja!2sjp!4v1668675808880!5m2!1sja!2sjp" 
                             z-index="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    pick up AndyMODEL
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup_sp2.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup_sp3.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup_sp4.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/pickup_sp5.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>


            <section class="section scroll-section" data-scroll-section id="sp_section6">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back pickup_sp_iframe">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/pickup_sp6.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="pickup_sp1">
                            店舗名　　：<a href="https://club-mirazur.com/" target="_blank" style="text-decoration:underline;">ミラジュール銀座</a><br>
                            住所　　　：〒530-0004　東京都中央区銀座8-6-24 銀座会館8階<br>
                            アクセス　： 銀座駅 徒歩5分 新橋駅 徒歩5分<br>
                            営業時間　：19:30~1:00<br>
                            電話番号　：06-6345-8505
                        </div>
                        <a href="https://mobile.twitter.com/ayakayui58" target="_blank"><img src="{{ asset('img/pickup_twitter_sp.png') }}" style="width: 107px;top: calc((100% - -400px) / 2);left: 60px;height: auto;"></a>
                        <a href="https://www.instagram.com/ayakayui/" target="_blank"><img src="{{ asset('img/pickup_insta_sp.png') }}" style="width: 92px;top: calc((100% - -400px) / 2);left: 169px;height: auto;"></a>
                        <a href="https://www.youtube.com/channel/UCq622RO4EWsff2hATk0dZ6A" target="_blank"><img src="{{ asset('img/pickup_youtube_sp.png') }}" style="width: 147px;top: calc((100% - -400px) / 2);left: 298px;height: auto;"></a>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3234004428227!2d139.75874651555068!3d35.669038138247494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfef65f8723%3A0xf4fc8268fa14e4d5!2zQ2x1YiBNaXJhenVyKOOCr-ODqeODluODn-ODqeOCuOODpeODvOODqyk!5e0!3m2!1sja!2sjp!4v1668675808880!5m2!1sja!2sjp" 
                             z-index="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>
<script src="{{ asset('js/fw/pickup_sp.js') }}"></script>


@endsection