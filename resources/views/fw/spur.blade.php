@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Dress shop 'SPUR'
</div>


@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="spur_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/spur1.png') }}" class="" alt="" style="top: 45%;">
                        <a href="https://www.instagram.com/spurmagazine/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="spur_insta"></a>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.5206197741777!2d141.3485169157088!3d43.05151679914533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2988eb139ecb%3A0xa3c3162c0a863810!2sSPUR!5e0!3m2!1sja!2sjp!4v1669291451243!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="spur_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/spur2.png') }}" class="" alt="" style="top: 46%;"></figure>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

@endsection

@section('header_page_sp')
<div class="header_page_name_sp">
Dress shop 'SPUR'
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/spur_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/spur_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/spur_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/spur_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.instagram.com/spurmagazine/" target="_blank"><img src="{{ asset('img/instagram.png') }}" style="width: 26px;top: calc((100% - -460px) / 2);left: 37%; height:auto;"></a>
                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>
@endsection