@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
Bijou Dress with Asuka Ayano
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="new_dress_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/new_dress1.png') }}" class="" alt="" style="top: 47%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="new_dress_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress2.png') }}" class="" alt="" style="top: 47%;">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3331" class="buy_btn_a new_btn1" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3306" class="buy_btn_a new_btn2" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="new_dress_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress3.png') }}" class="" alt="" style="top: 47%;">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3327" class="buy_btn_a new_btn3" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3332" class="buy_btn_a new_btn4" target="_blank">ご購入はこちら</a>
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
Bijou Dress with Asuka Ayano
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top" style="background:#000;">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section_wide">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/new_dress_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3331" class="buy_btn_white_sp_a new_btn_sp1" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3306" class="buy_btn_white_sp_a new_btn_sp2" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3327" class="buy_btn_white_sp_a new_btn_sp3" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/new_dress_sp5.png') }}" class="sp_img" alt="" style="top:46%">
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3332" class="buy_btn_white_sp_a new_btn_sp4" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>



        </div>
    </main>
</div>
@endsection