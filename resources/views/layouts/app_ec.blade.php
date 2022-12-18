<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Andy</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <!-- <link rel="icon" type="image/png" href="{{ asset('img/omisenavi_favicon.png') }}"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- <link rel="icon" type="image/png" href="https://mall.cpon.co.jp/favicon.png"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app_ec.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick_ec.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <div class="header_yellow"></div>
            <div class="header_search_div">
                <div class="header_flex">
                    <form class="">
                        <select name="category_id" class="select_category">
                            <option>全ての商品から</option>
                            <option value="新着アイテム">新着アイテム</option>
                            <option value="セールアイテム">セールアイテム</option>
                            <option value="ブランド">ブランド</option>
                            <option value="ランキング">ランキング</option>
                            <option value="コーディネート">コーディネート</option>
                            <option value="店舗">店舗</option>
                        </select>
                        {!! Form::text('freeword' ,isset($filter_freeword) ? $freeword : null , ['class' => 'filter_freeword', 'placeholder' => ''] ) !!}
                        <button class="search_btn"><img src="{{ asset('img/search.png') }}" class="" alt=""></button>
                    </form>
                    <div class="header_img_menu">
                        <a href="{{ route('ec.cart') }}"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="margin-right: 20px;"></a>
                        <a href="{{ route('ec.favorite') }}"><img src="{{ asset('img/fav.png') }}" class="" alt=""></a>
                    </div>
                </div>
            </div>
            <header>
                <div class="header_menu">
                    <div class="">
                        <a href="{{ route('ec.index') }}" class="header_a @if (\Route::currentRouteName() == 'ec.index') current @endif">ALL</a>
                        <a href="{{ route('ec.new_arrival') }}" class="header_a @if (\Route::currentRouteName() == 'ec.new_arrival') current @endif">NEW ARRIVAL</a>
                        <a href="{{ route('ec.recommend') }}" class="header_a @if (\Route::currentRouteName() == 'ec.recommend') current @endif">RECOMMEND</a>
                        <a href="{{ route('ec.ranking') }}" class="header_a @if (\Route::currentRouteName() == 'ec.ranking') current @endif">RANKING</a>
                    </div>

                    <a href="{{ route('ec.index') }}"><img src="{{ asset('img/logo_ec.png') }}" class="" alt="" style="width: 150px;"></a>
                    <div class="">
                        <a href="{{ route('cs.index') }}" class="header_a @if (\Route::currentRouteName() == 'cs.index') current @endif">LIFE GOODS</a>
                        <a href="{{ route('cs.contact') }}" class="header_a @if (\Route::currentRouteName() == 'cs.contact') current @endif">SALE</a>
                        <a href="{{ route('ec.store.index') }}" class="header_a @if (\Route::currentRouteName() == 'ec.store.index') current @endif" style="margin-right: 0px;">SHOP LIST</a>
                    </div>
                </div>
            </header>

            <div style="margin-top:250px;"></div>
            @yield('content')
            <div style="margin-bottom:100px;"></div>
            <footer>
                <div class="footer_menu_flex">
                    <div class="footer_menu_title">OFFICAL SNS</div>
                    <div class="footer_menu_title">STORE</div>
                    <div class="footer_menu_title">BRAND</div>
                    <div class="footer_menu_title">LINK</div>
                    <div class="footer_menu_title"></div>
                </div>

                <div class="footer_menu_flex">
                    <div class="footer_menu">
                        <a href="https://twitter.com/andy_dressbrand"><img src="{{ asset('img/twitter.png') }}" class="footer_icon"></a>
                        <a href=""><img src="{{ asset('img/facebook.png') }}" class="footer_icon"></a>
                        <a href=""><img src="{{ asset('img/line.png') }}" class="footer_icon"></a>
                        <a href="https://www.instagram.com/andy_dress_official"><img src="{{ asset('img/instagram.png') }}" class="footer_icon"></a>
                    </div>
                    <div class="footer_menu">
                        <a href="{{ route('ec.store.index') }}" class="footer_a">STORE LIST</a>
                    </div>
                    <div class="footer_menu">
                        <a href="{{ route('brand.show', ['url' => 'pandy']) }}" class="footer_a">Premium Andy</a>
                        <a href="{{ route('brand.show', ['url' => 'andy']) }}" class="footer_a">Andy</a>
                        <a href="{{ route('brand.show', ['url' => 'glamorous']) }}" class="footer_a">GLAMOROUS</a>
                        <a href="{{ route('brand.show', ['url' => 'can']) }}" class="footer_a">couture an</a>
                        <a href="{{ route('brand.show', ['url' => 'an']) }}" class="footer_a">an</a>
                        <a href="{{ route('brand.show', ['url' => 'aty']) }}" class="footer_a">an to you</a>
                    </div>
                    <div class="footer_menu">
                        <a href="http://shop.andydress.com/" class="footer_a">ANDY CUSTOMER</a>
                        <a href="http://www.andy-dress.com/" class="footer_a">OFFICAL EC</a>
                        <a href="" class="footer_a">ANDY FASHION PRESS</a>
                    </div>
                    <div class="footer_menu">
                        <a href="{{ route('ec.company') }}" class="footer_a">運営会社</a>
                        <a href="{{ route('ec.disclaimer') }}" class="footer_a">免責事項</a>
                        <a href="{{ route('ec.terms') }}" class="footer_a">利用規約</a>
                    </div>
                </div>

                <div class="copyright">Copyright（C）DressChannel All rights reserved.</div>
            </footer>
        </body>
    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header style="padding: 10px; margin-top: 0px; border-top: none; justify-content: normal;">
                <a class="logo_a_sp" href="{{ route('ec.index') }}">
                    <img src="{{ asset('img/logo_black.png') }}" class="logo_img_sp" alt="">
                </a>
                <a href="{{ route('ec.search') }}" class="header_a_sp" style="width:11%;"><img src="{{ asset('img/search_black.png') }}" class="header_img_sp" alt=""><br>検索</a>
                <a href="{{ route('ec.cart') }}" class="header_a_sp" style="width:16%;"><img src="{{ asset('img/cart_black.png') }}" class="header_img_sp" alt=""><br>カート</a>
                <a href="{{ route('ec.favorite') }}" class="header_a_sp" style="width:20%;"><img src="{{ asset('img/fav_white.png') }}" class="header_img_sp" alt=""><br>お気に入り</a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="{{ route('ec.index') }}" class="menu_head_sp">HOME</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.topics', ['genre' => 'all']) }}" class="menu_content_sp">NEW ARRIVAL</a>
                            </li>
                            <li>
                                <a href ="#!" class="menu_content_sp" onclick="clickMenuBrandButton();">
                                    BRAND <img src="{{ asset('img/down_black.png') }}" id="down_brand" class="down"><img src="{{ asset('img/up_black.png') }}" id="up_brand" class="up">
                                </a>
                                <div id="menu_brand_sp">
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'pandy']) }}"><img src="{{ asset('img/top_logo_pandy.jpg') }}" class="news_brand_logo" alt=""></a>
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'andy']) }}"><img src="{{ asset('img/top_logo_andy.jpg') }}" class="news_brand_logo" alt=""></a>
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'glamorous']) }}"><img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="news_brand_logo" alt=""></a>
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'can']) }}"><img src="{{ asset('img/top_logo_can.jpg') }}" class="news_brand_logo" alt=""></a>
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'an']) }}"><img src="{{ asset('img/top_logo_an.jpg') }}" class="news_brand_logo" alt=""></a>
                                    <a style="width:32%;" href="{{ route('brand.show', ['url' => 'aty']) }}"><img src="{{ asset('img/top_logo_aty.jpg') }}" class="news_brand_logo" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <a href ="{{ route('ec.ranking') }}" class="menu_content_sp">RANKING</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.price_down') }}" class="menu_content_sp">SALE</a>
                            </li>
                            <li>
                                <a href ="{{ route('ec.silhouette') }}" class="menu_content_sp">SILHOUETTE</a>
                            </li>
                            <li>
                                <a href ="{{ route('ec.complex') }}" class="menu_content_sp">COMPLEX</a>
                            </li>
                            <li>
                                <a href ="{{ route('ec.model') }}" class="menu_content_sp">MODEL LIST</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.contact') }}" class="menu_content_sp">先行予約</a>
                            </li>
                            <li>
                                <a href ="{{ route('ec.store.index') }}" class="menu_content_sp">SHOP LIST</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div @if (strpos($now_route,'ec.index') === false) style="margin-top: 100px;" @else style="margin-top: 70px;" @endif></div>
            <div @if (strpos($now_route,'ec.index') === false) style="padding:0 10px;" @endif >
            @yield('content_sp')
            </div>
            <footer class="footer_sp">
                <div class="copyright">Copyright（C）DressChannel All rights reserved.</div>
            </footer>
        </body>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/recruit.js') }}"></script>
    <script src="{{ asset('js/fav.js') }}"></script>
    <script src="{{ asset('js/info_form.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>