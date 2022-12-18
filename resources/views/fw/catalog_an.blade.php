@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Dress catalog : an
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main main_bg_div catalog_bg">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="catalog_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog1.png') }}" class="" alt="" style="width: 88%; top:55%;">
                        <div class="an_detail an_detail1">
                            COLLECTION 01　|　AOC-3355<br>
                            SIZE　:　S  /  M<br>
                            COLOR　:　BEIGE  /  BLUE<br>
                            PRICE　:　￥27,500 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3355" class="buy_btn_a an_btn1" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="catalog_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog2.png') }}" class="" alt="" style="top: 54%;left: 44%;width: 97%;">
                        <div class="an_detail an_detail2">
                            COLLECTION 02　|　AOC-3339<br>
                            SIZE　:　S  /  M<br>
                            COLOR　:　BLACK  /  BEIGE<br>
                            PRICE　:　￥26,400 - [ <span class="an_span">税込</span> ]
                        </div>
                        <div class="an_detail an_detail3">
                            COLLECTION 03　|　AOC-3337<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  WHITE  /  WHITEBLACKMIX  /  BLUE  /  BLACK<br>
                            PRICE　:　￥19,800 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3339" class="buy_btn_white_a an_btn2" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3337" class="buy_btn_a an_btn3" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="catalog_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog3.png') }}" class="" alt="" style="top: 56%;left: 45%;width: 100%;">
                        <div class="an_detail an_detail4">
                            COLLECTION 04　|　AOC-3294<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  GREEN  /  PINK  /  BLUE  /  BLACK<br>
                            PRICE　:　￥24,200 - [ <span class="an_span">税込</span> ]
                        </div>
                        <div class="an_detail an_detail5">
                            COLLECTION 05　|　AOC-3356<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  PINK<br>
                            PRICE　:　￥26,400 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3294" class="buy_btn_a an_btn4" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3356" class="buy_btn_a an_btn5" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="catalog_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog4.png') }}" class="" alt="" style="top: 56%;left: 45%;width: 90%;">
                        <div class="an_detail an_detail6">
                            COLLECTION 06　|　ATY-2170<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  PINK  /  BEIGE<br>
                            PRICE　:　￥25,300 - [ <span class="an_span">税込</span> ]
                        </div>
                        <div class="an_detail an_detail7">
                            COLLECTION 07　|　ATY-2171<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  WHITE / CHERRYPINK / BLACK<br>
                            PRICE　:　￥16,500 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aty-2170" class="buy_btn_a an_btn6" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aty-2171" class="buy_btn_a an_btn7" target="_blank">ご購入はこちら</a>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="catalog_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/noa_an_bg.png') }}" class="noa_an_bg" alt="">
                        <div class="an_detail an_detail8">
                            COLLECTION 08<br>
                            AOC-N3368-BK-<br>
                            BLACK　|　S  /  M<br>
                            ￥23,000 - [ <span class="an_span">税込</span> ]
                        </div>
                        <div class="an_detail an_detail9">
                            COLLECTION 09<br>
                            AOC-N3368-WH-<br>
                            WHITE　|　S  /  M<br>
                            ￥23,000 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-n3368-bk-" class="buy_btn_a an_btn8" target="_blank">ご購入はこちら</a>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-n3368-wh-" class="buy_btn_a an_btn9" target="_blank">ご購入はこちら</a>
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
Dress catalog : an
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">

            <section class="section scroll-section" data-scroll-section id="sp_section_an">
                <div class="section-header catalog_bg">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog_an_sp1.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="an_detail_sp an_detail_sp1">
                            COLLECTION 01　|　AOC-3355<br>
                            SIZE　:　S  /  M<br>
                            COLOR　:　BEIGE  /  BLUE<br>
                            PRICE　:　￥27,500 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3355" class="buy_btn_sp_a an_btn_sp1" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp2">
                            COLLECTION 02　|　AOC-3339<br>
                            SIZE　:　S  /  M<br>
                            COLOR　:　BLACK  /  BEIGE<br>
                            PRICE　:　￥26,400 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3339" class="buy_btn_white_sp_a an_btn_sp2" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp3">
                            COLLECTION 03　|　AOC-3337<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  WHITE  /  WHITEBLACKMIX  /  BLUE  /  BLACK<br>
                            PRICE　:　￥19,800 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3337" class="buy_btn_sp_a an_btn_sp3" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp4">
                            COLLECTION 04　|　AOC-3294<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  GREEN  /  PINK  /  BLUE  /  BLACK<br>
                            PRICE　:　￥24,200 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3294" class="buy_btn_sp_a an_btn_sp4" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp5">
                            COLLECTION 05　|　AOC-3356<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  PINK<br>
                            PRICE　:　￥26,400 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-3356" class="buy_btn_sp_a an_btn_sp5" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp6">
                            COLLECTION 06　|　ATY-2170<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  PINK  /  BEIGE<br>
                            PRICE　:　￥25,300 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aty-2170" class="buy_btn_sp_a an_btn_sp6" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp7">
                            COLLECTION 07　|　ATY-2171<br>
                            SIZE　:　S  /  M<br>
                            COLOR  :  WHITE / CHERRYPINK / BLACK<br>
                            PRICE　:　￥16,500 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aty-2171" class="buy_btn_sp_a an_btn_sp7" target="_blank">ご購入はこちら</a>

                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section_wide2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back" style="background-color: #000;">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/catalog_an_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="an_detail_sp an_detail_sp8">
                            COLLECTION 08<br>
                            AOC-N3368-BK-<br>
                            BLACK　|　S  /  M<br>
                            ￥23,000 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-n3368-bk-" class="buy_btn_sp_a an_btn_sp8" target="_blank">ご購入はこちら</a>

                        <div class="an_detail_sp an_detail_sp9">
                            COLLECTION 09<br>
                            AOC-N3368-WH-<br>
                            WHITE　|　S  /  M<br>
                            ￥23,000 - [ <span class="an_span">税込</span> ]
                        </div>
                        <a href="https://www.andy-dress.com/fs/andy/aoc-n3368-wh-" class="buy_btn_sp_a an_btn_sp9" target="_blank">ご購入はこちら</a>


                    </figure>
                    </div>
                </div>
            </section>



        </div>
    </main>
</div>
@endsection