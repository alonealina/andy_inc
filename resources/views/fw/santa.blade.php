@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Santa Cosplay
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div santa_bg">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="santa_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/santa1.png') }}" class="" alt="" style="top:43%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="santa_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa2.png') }}" class="" alt="" style="top:43%">
                        <a href="https://www.andy-dress.com/fs/andy/7839sb" class="buy_btn_a santa_btn1" target="_blank">ご購入はこちら</a>
                    </figure>     
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="santa_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa3.png') }}" class="" alt="" style="top:43%">
                        <a href="https://www.andy-dress.com/fs/andy/ss058yn" class="buy_btn_a santa_btn2" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="santa_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa4.png') }}" class="" alt="" style="top:43%">
                        <a href="https://www.andy-dress.com/fs/andy/ss080yn" class="buy_btn_a santa_btn3" target="_blank">ご購入はこちら</a>
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
Santa Cosplay
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main santa_bg">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/santa_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section_santa2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/7839sb" class="buy_btn_a santa_btn_sp1" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section_santa3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/ss058yn" class="buy_btn_a santa_btn_sp2" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section_santa4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/santa_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/ss080yn" class="buy_btn_a santa_btn_sp3" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>



        </div>
    </main>
</div>


@endsection