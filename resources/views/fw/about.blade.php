@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
    About
</div>


@endsection

@section('content')
<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="main_section">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <div class="main_bg_div about_bg">
                            <div class="about_flex">
                                <div class="about_div">
                                    <div class="about_title">会社概要</div>
                                    <div class="about_content_div">
                                        <div class="about_name">社名</div>
                                        <div class="about_content">株式会社アンディ</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">代表取締役</div>
                                        <div class="about_content">野田裕治</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">事業内容</div>
                                        <div class="about_content">婦人服製造・卸等</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">展開ブランド</div>
                                        <div class="about_content">Premium Andy<br>Andy<br>GLAMOROUS<br>couture an<br>antoyou</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">所在地</div>
                                        <div class="about_content">〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br><a href="https://www.google.co.jp/maps/search/%E5%A4%A7%E9%98%AA%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E9%81%93%E9%A0%93%E5%A0%80%EF%BC%91%E4%B8%81%E7%9B%AE%E6%9D%B15-21/">GOOGLE MAP</a></div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">営業日</div>
                                        <div class="about_content">月～金（年末年始、お盆、祝日を除く）</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">営業時間</div>
                                        <div class="about_content">10:00～19:00</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">Mail</div>
                                        <div class="about_content">info@andy-creative.com</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">WEB</div>
                                        <div class="about_content"><a href="http://andy-creative.com/">http://andy-creative.com/</a></div>
                                    </div>
                                </div>
                                <div class="about_div">
                                    <div class="about_title">発行情報</div>
                                    <div class="about_content_div">
                                        <div class="about_name">発行日</div>
                                        <div class="about_content">令和4年01月12日</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">発行人</div>
                                        <div class="about_content">島津諒</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">編集人</div>
                                        <div class="about_content">島津諒</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">発行元</div>
                                        <div class="about_content">株式会社Ace&Co.</div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">所在地</div>
                                        <div class="about_content">〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br><a href="https://www.google.co.jp/maps/search/%E5%A4%A7%E9%98%AA%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E9%81%93%E9%A0%93%E5%A0%80%EF%BC%91%E4%B8%81%E7%9B%AE%E6%9D%B15-21/">GOOGLE MAP</a></div>
                                    </div>
                                    <div class="about_content_div">
                                        <div class="about_name">TEL</div>
                                        <div class="about_content">06-6484-3861</div>
                                    </div>
                                </div>
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
About
</div>
@endsection

@section('content_sp')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">

            <section class="section scroll-section" data-scroll-section id="sp_section1">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/about_sp1.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="about_div_sp">
                            <div class="about_title">会社概要</div>
                            <div class="about_content_div_sp">
                                <div class="about_name">社名</div>
                                <div class="about_content">株式会社アンディ</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">代表取締役</div>
                                <div class="about_content">野田裕治</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">事業内容</div>
                                <div class="about_content">婦人服製造・卸等</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">展開ブランド</div>
                                <div class="about_content">Premium Andy<br>Andy<br>GLAMOROUS<br>couture an<br>antoyou</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">所在地</div>
                                <div class="about_content">〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br><a href="https://www.google.co.jp/maps/search/%E5%A4%A7%E9%98%AA%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E9%81%93%E9%A0%93%E5%A0%80%EF%BC%91%E4%B8%81%E7%9B%AE%E6%9D%B15-21/">GOOGLE MAP</a></div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">営業日</div>
                                <div class="about_content">月～金（年末年始、お盆、祝日を除く）</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">営業時間</div>
                                <div class="about_content">10:00～19:00</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">Mail</div>
                                <div class="about_content">info@andy-creative.com</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">WEB</div>
                                <div class="about_content"><a href="http://andy-creative.com/">http://andy-creative.com/</a></div>
                            </div>
                        </div>
                    </figure>
                    </div>
                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="sp_section2">
                <div class="section-header">
                    <div class="thumbnail section_img trac-back">
                    <figure data-scroll data-delay="0.05">
                        <img src="{{ asset('img/about_sp2.png') }}" class="sp_img" alt="" style="top:46%">
                        <div class="about_div_sp">
                            <div class="about_title">発行情報</div>
                            <div class="about_content_div_sp">
                                <div class="about_name">発行日</div>
                                <div class="about_content">令和4年01月12日</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">発行人</div>
                                <div class="about_content">島津諒</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">編集人</div>
                                <div class="about_content">島津諒</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">発行元</div>
                                <div class="about_content">株式会社Ace&Co.</div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">所在地</div>
                                <div class="about_content">〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br><a href="https://www.google.co.jp/maps/search/%E5%A4%A7%E9%98%AA%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E9%81%93%E9%A0%93%E5%A0%80%EF%BC%91%E4%B8%81%E7%9B%AE%E6%9D%B15-21/">GOOGLE MAP</a></div>
                            </div>
                            <div class="about_content_div_sp">
                                <div class="about_name">TEL</div>
                                <div class="about_content">06-6484-3861</div>
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