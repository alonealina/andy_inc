<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Andy</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <div class="header_logo_div">
                <a class="logo_a" href="/">
                    <img src="{{ asset('img/logo_white.png') }}" class="header_logo" alt="">
                </a>
            </div>
            <header>
                <div class="header_menu">
                    <a href="{{ route('pickup') }}" class="header_a @if (\Route::currentRouteName() == 'pickup') current @endif">PICK UP</a>
                    <a href="{{ route('news') }}" class="header_a @if (strpos($now_route,'news') !== false)  current @endif">NEWS</a>
                    <a href="#" id="brand_hover" class="header_a @if (strpos($now_route,'brand') !== false)  current @endif">BRAND</a>
                    <a href="{{ route('store.index') }}" class="header_a @if (strpos($now_route,'store') !== false) current @endif">STORE LIST</a>
                    <a href="{{ route('company') }}" class="header_a @if (\Route::currentRouteName() == 'company') current @endif">COMPANY</a>
                    <a href="{{ route('contact') }}" class="header_a @if (\Route::currentRouteName() == 'contact') current @endif">CONTACT</a>
                </div>
            </header>

            <div id="brand_menu" class="brand_menu">
                <div class="brand_menu_flex">
                    @foreach ($header_brand_list as $brand)
                    <a href="{{ route('brand.show', ['url' => $brand->url ]) }}" class="brand_a">{{ $brand->name }}</a>
                    @endforeach

                </div>
            </div>
            @yield('content')

            <footer>
                <div class="footer_menu_flex">
                    <div class="footer_menu_title">OFFICAL SNS</div>
                    <div class="footer_menu_title">STORE</div>
                    <div class="footer_menu_title">BRAND</div>
                    <div class="footer_menu_title">COMPANY</div>
                    <div class="footer_menu_title">LINK</div>
                </div>

                <div class="footer_menu_flex">
                    <div class="footer_menu">
                        <a href="https://twitter.com/andy_dressbrand"><img src="{{ asset('img/twitter.png') }}" class="footer_icon"></a>
                        <a href=""><img src="{{ asset('img/facebook.png') }}" class="footer_icon"></a>
                        <a href=""><img src="{{ asset('img/line.png') }}" class="footer_icon"></a>
                        <a href="https://www.instagram.com/andy_dress_official"><img src="{{ asset('img/instagram.png') }}" class="footer_icon"></a>
                    </div>
                    <div class="footer_menu">
                        <a href="{{ route('store.index') }}" class="footer_a">STORE LIST</a>
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
                        <a href="{{ route('company') }}" class="footer_a">会社概要</a>
                        <a href="{{ route('recruit') }}" class="footer_a">求人情報</a>
                        <a href="{{ route('contact') }}" class="footer_a">お問い合わせ</a>
                    </div>
                    <div class="footer_menu">
                        <a href="http://shop.andydress.com/" class="footer_a" target="_blank">ANDY CUSTOMER</a>
                        <a href="http://www.andy-dress.com/" class="footer_a" target="_blank">ONLINE STORE</a>
                        <a href="" class="footer_a">ANDY FASHION PRESS</a>
                    </div>
                </div>

                <div class="copyright">2022 ©︎ Andy,inc. All right.</div>
            </footer>
        </body>
    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header style="padding: 10px; margin-top: 0px; border-top: none;">
                <a class="logo_a_sp" href="/">
                    <img src="{{ asset('img/logo_white.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="{{ route('pickup') }}" class="menu_head_sp">PICK UP</a>
                            </li>
                            <li>
                                <a href ="{{ route('news') }}" class="menu_content_sp">NEWS</a>
                            </li>
                            <li>
                                <a href ="#" class="menu_content_sp" onclick="clickMenuBrandButton();">
                                    BRAND <img src="{{ asset('img/down.png') }}" id="down_brand" class="down"><img src="{{ asset('img/up.png') }}" id="up_brand" class="up">
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
                                <a href ="{{ route('store.index') }}" class="menu_content_sp">STORE LIST</a>
                            </li>
                            <li>
                                <a href ="#" class="menu_content_sp" onclick="clickMenuCompanyButton();">
                                    COMPANY <img src="{{ asset('img/down.png') }}" id="down_company" class="down"><img src="{{ asset('img/up.png') }}" id="up_company" class="up">
                                </a>
                                <div id="menu_company_sp">
                                    <a href="{{ route('company') }}" class="menu_a_sp">会社概要</a>
                                    <a href="{{ route('recruit') }}" class="menu_a_sp">求人情報</a>
                                    <a href="{{ route('contact') }}" class="menu_a_sp">お問い合わせ</a>
                                </div>
                            </li>
                            <li>
                                <a href ="{{ route('contact') }}" class="menu_content_sp">CONTACT</a>
                            </li>
                            <li>
                                <a href ="#" class="menu_content_sp" onclick="clickMenuLinkButton();">
                                    LINK <img src="{{ asset('img/down.png') }}" id="down_link" class="down"><img src="{{ asset('img/up.png') }}" id="up_link" class="up">
                                </a>
                                <div id="menu_link_sp">
                                    <a href="http://shop.andydress.com/" class="menu_a_sp" target="_blank">ANDY CUSTOMER</a>
                                    <a href="http://www.andy-dress.com/" class="menu_a_sp" target="_blank">ONLINE STORE</a>
                                    <a href="" class="menu_a_sp">ANDY FASHION PRESS</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header_icon_list">
                            <a href="https://twitter.com/andy_dressbrand"><img src="{{ asset('img/twitter.png') }}" class="header_icon_sp"></a>
                            <a href=""><img src="{{ asset('img/facebook.png') }}" class="header_icon_sp"></a>
                            <a href=""><img src="{{ asset('img/line.png') }}" class="header_icon_sp"></a>
                            <a href="https://www.instagram.com/andy_dress_official"><img src="{{ asset('img/instagram.png') }}" class="header_icon_sp"></a>
                        </div>
                    </div>
                </div>
            </header>
            <div style="margin-top:62px;"></div>
            @yield('content_sp')

            <footer class="footer_sp" style="margin-top: 30px;">
                <div class="copyright">2022 ©︎ Andy,inc. All right.</div>
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