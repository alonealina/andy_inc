@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Girl's Bar
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div bar_bg">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="bar_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/bar1.png') }}" class="" alt="">
                        <a href="https://www.nights.fun/hokkaido/A0101/A010103/emo/" target="_blank"><img src="{{ asset('img/bar_url.png') }}" class="bar_url" style="width: 418px;top: calc((100% - -500px) / 2);left: 409px;"></a>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.3342487260893!2d141.3522497157088!3d43.05543719889466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2929d575688d%3A0x8ad17915ddbf40a2!2zR2lybHMgcHVibGljIGJhciBFTU8gLSDjgqjjg6I!5e0!3m2!1sja!2sjp!4v1669118177780!5m2!1sja!2sjp" 
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="bar_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/bar2.png') }}" class="" alt=""></figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

@endsection


@section('header_page_sp')
<div class="header_page_name_sp">
Girl's Bar
</div>

@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back" style="background-color: #FF71C0;">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/bar_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back" style="background-color: #FF71C0;">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/bar_sp2.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back" style="background-color: #FF71C0;">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/bar_sp3.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back bar_sp_iframe" style="background-color: #FF71C0;">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/bar_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.nights.fun/hokkaido/A0101/A010103/emo/" target="_blank"><img src="{{ asset('img/bar_url_sp.png') }}" style="width: 69%;top: calc((100% - -70px) / 2);left: 44.5%;height: auto;"></a>
                        <a href="https://mobile.twitter.com/moekakisaki" target="_blank"><img src="{{ asset('img/bar_twitter_sp.png') }}" style="width: 112px;top: calc((100% - -400px) / 2);left: 30%;height: auto;"></a>
                        <a href="https://www.instagram.com/mek.ksk.1217/" target="_blank"><img src="{{ asset('img/bar_insta_sp.png') }}" style="width: 123px;top: calc((100% - -400px) / 2);left: auto;height: auto;right: 0%;"></a>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.3342487260893!2d141.3522497157088!3d43.05543719889466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2929d575688d%3A0x8ad17915ddbf40a2!2zR2lybHMgcHVibGljIGJhciBFTU8gLSDjgqjjg6I!5e0!3m2!1sja!2sjp!4v1669118177780!5m2!1sja!2sjp" 
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>

@endsection