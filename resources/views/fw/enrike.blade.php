@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
Special Interview : Eri Ogawa
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="enrike_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/enrike1.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="enrike_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/enrike2.png') }}" class="" alt="" style="top: 47%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="enrike_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/enrike3.png') }}" class="" alt="" style="top: 47%;">
                        <a href="https://www.arts9731111.jp/" target="_blank"><img src="{{ asset('img/enrike_url.png') }}" class="enrike_url"></a>
                        <a href="https://mobile.twitter.com/rie0985" target="_blank"><img src="{{ asset('img/enrike_twitter.png') }}" class="enrike_twitter"></a>
                        <a href="https://www.instagram.com/eri.ogawa1102/" target="_blank"><img src="{{ asset('img/enrike_insta.png') }}" class="enrike_insta"></a>
                        <a href="https://www.youtube.com/@enrikekukan" target="_blank"><img src="{{ asset('img/enrike_youtube.png') }}" class="enrike_youtube"></a>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4498787960233!2d136.90155221554124!3d35.17033816542746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d52099b745%3A0x8c3805eb6ca455e6!2z44Ki44O844Or44K644Kr44OV44KnIOaghCDjgq3jg6Pjg5Djgq_jg6k!5e0!3m2!1sja!2sjp!4v1669032500951!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </figure>
                    </div>

                </div>
            </section>
        </div>
    </main>
</div>

@endsection

@section('header_page_sp')
<div class="header_page_name_sp">
Special Interview : Eri Ogawa
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/enrike_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/enrike_sp2.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/enrike_sp3.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back enrike_sp_iframe">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/enrike_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="enrike_sp1">
                            店舗名　　：<a href="https://www.arts9731111.jp/" target="_blank" style="text-decoration:underline;">アールズカフェ</a><br>
                            住所　　　：名古屋市中区錦3-19-5　pivot square 1F<br>
                            アクセス　：地下鉄「栄駅」より徒歩１分<br>
                            　　　　　　地下鉄「久屋大通駅」より徒歩３分<br>
                            営業時間　：19:30~1:00<br>
                            電話番号　：052-973-1111
                        </div>
                        <a href="https://mobile.twitter.com/rie0985" target="_blank"><img src="{{ asset('img/enrike_twitter_sp.png') }}" style="width: 90px;top: calc((100% - -400px) / 2);left: 60px;height: auto;"></a>
                        <a href="https://www.instagram.com/eri.ogawa1102/" target="_blank"><img src="{{ asset('img/enrike_insta_sp.png') }}" style="width: 128px;top: calc((100% - -400px) / 2);left: 175px;height: auto;"></a>
                        <a href="https://www.youtube.com/@enrikekukan" target="_blank"><img src="{{ asset('img/enrike_youtube_sp.png') }}" style="width: 122px;top: calc((100% - -400px) / 2);left: 308px;height: auto;"></a>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4498787960233!2d136.90155221554124!3d35.17033816542746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d52099b745%3A0x8c3805eb6ca455e6!2z44Ki44O844Or44K644Kr44OV44KnIOaghCDjgq3jg6Pjg5Djgq_jg6k!5e0!3m2!1sja!2sjp!4v1669032500951!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

@endsection