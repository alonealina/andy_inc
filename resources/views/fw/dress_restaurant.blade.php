@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    Best select Restaurant
</div>

@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="restaurant_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/restaurant1.png') }}" class="" alt="" style="top: 45.5%;"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="restaurant_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant2.png') }}" class="" alt="" style="top: 45.5%;">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="restaurant_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant3.png') }}" class="" alt="" style="top: 45.5%;">
                        <div class="restaurant_div">
                            <div class="restaurant_name">リストランテ・リナッシェレ・ドウジマ</div>
                            <div class="restaurant_address">〒530-0004　大阪府大阪市北区堂島浜1-1-8<br>Tel：06-6345-8505</div>
                            <a href="http://rinascere-dojima.jp/index.html" class="restaurant_a" target="_blank">http://rinascere-dojima.jp/index.html</a>
                            <div class="restaurant_detail">
                                【不定休】<br>
                                営業時間 11：30～23：00<br>
                                ランチ　 11：30～15：00<br>
                                ディナー 17：30～23：00<br><br>
                                【カード利用可】<br>
                                VISA　MasterCard　UC　ダイナースクラブ　アメリカンエクスプレス　JCB<br><br>
                                【総席数】<br>
                                38席<br><br>
                                【個室あり】<br>
                                2名～6名様から利用可<br><br>
                                【フロア貸切可能人数＊着席時】<br>
                                1Fフロアのみ 12名～貸切可能(最大14名様）<br>
                                2Fフロアのみ 15名～貸切可能(最大24名様）<br>
                                全フロア(1F、2F） 30名～貸切可能(最大38名様）<br><br>
                                【交通手段】<br>
                                地下鉄御堂筋線 淀屋橋駅 7番出口 徒歩5分<br>
                                ＪＲ東西線 北新地駅 11-41番出口 徒歩5分<br>
                                地下鉄谷町線 東梅田駅 8番出口 徒歩7分<br><br>
                                【入店制限について】<br>
                                当店では、全てのお客様に、ゆっくりとお食事を楽しんで頂くため、<br>
                                年齢制限させて頂いております。<br>
                                大変申し訳ございませんが、小学生以下のお子様の入店はご遠慮頂いて<br>
                                おります。何卒、ご了承くださいませ。<br>
                            </div>


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
Best select Restaurant
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05"><img src="{{ asset('img/restaurant_sp1.png') }}" class="sp_img" alt="" style="top:46%"></figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section3">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant_sp3.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section4">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant_sp4.png') }}" class="sp_img" alt="" style="top:46%">
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section5">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/restaurant_sp5.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="restaurant_div_sp">
                            <div class="restaurant_address_sp">〒530-0004　大阪府大阪市北区堂島浜1-1-8<br>Tel：06-6345-8505</div>
                            <a href="http://rinascere-dojima.jp/index.html" class="restaurant_a_sp" target="_blank">http://rinascere-dojima.jp/index.html</a>
                            <div class="restaurant_detail_sp">
                                【不定休】<br>
                                営業時間 11：30～23：00<br>
                                ランチ　 11：30～15：00<br>
                                ディナー 17：30～23：00<br><br>
                                【カード利用可】<br>
                                VISA　MasterCard　UC　ダイナースクラブ　アメリカンエクスプレス　JCB<br><br>
                                【総席数】<br>
                                38席<br><br>
                                【個室あり】<br>
                                2名～6名様から利用可<br><br>
                                【フロア貸切可能人数＊着席時】<br>
                                1Fフロアのみ 12名～貸切可能(最大14名様）<br>
                                2Fフロアのみ 15名～貸切可能(最大24名様）<br>
                                全フロア(1F、2F） 30名～貸切可能(最大38名様）<br><br>
                                【交通手段】<br>
                                地下鉄御堂筋線 淀屋橋駅 7番出口 徒歩5分<br>
                                ＪＲ東西線 北新地駅 11-41番出口 徒歩5分<br>
                                地下鉄谷町線 東梅田駅 8番出口 徒歩7分<br><br>
                                【入店制限について】<br>
                                当店では、全てのお客様に、ゆっくりとお食事を楽しんで頂くため、<br>
                                年齢制限させて頂いております。<br>
                                大変申し訳ございませんが、小学生以下のお子様の入店はご遠慮頂いて<br>
                                おります。何卒、ご了承くださいませ。<br>
                            </div>


                        </div>
                    </figure>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>
@endsection