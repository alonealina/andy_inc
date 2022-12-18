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
        <link href="{{ asset('css/app_cs.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick_cs.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <div class="header_black"></div>
            <div class="header_logo_div">
                <div class="header_flex">
                    <a class="logo_a" href="{{ route('cs.index') }}">
                        <img src="{{ asset('img/logo_black.png') }}" class="header_logo" alt="">
                    </a>
                    <form class="">
                        <select name="category_id" class="select_category" style="height: 30px;">
                            <option>全ての商品から</option>
                            <option value="コラボ商品">コラボ商品</option>
                        </select>
                        {!! Form::text('freeword' ,isset($filter_freeword) ? $freeword : null , ['class' => 'filter_freeword', 'placeholder' => '', 'style' => 'height: 30px;'] ) !!}
                        <button class="search_btn">検索</button>
                    </form>
                </div>
            </div>
            <header>
                <div class="header_menu">
                    <a href="{{ route('cs.index') }}" class="header_a @if (\Route::currentRouteName() == 'cs.index') current @endif">HOME</a>
                    <a href="{{ route('cs.topics', ['genre' => 'all']) }}" class="header_a @if (\Route::currentRouteName() == 'cs.topics') current @endif">Topics</a>
                    <a href="{{ route('cs.new_item', ['brand' => 'all']) }}" class="header_a @if (strpos($now_route,'cs.new_item') !== false) current @endif">新作</a>
                    <a href="{{ route('cs.add_production') }}" class="header_a @if (strpos($now_route,'cs.add_production') !== false)  current @endif">追加生産中</a>
                    <a href="{{ route('cs.price_down') }}" class="header_a @if (strpos($now_route,'cs.price_down') !== false)  current @endif">Price Down</a>
                    <a href="{{ route('cs.calendar') }}" class="header_a @if (strpos($now_route,'calendar') !== false) current @endif">Calendar</a>
                    <a href="{{ route('cs.collection') }}" class="header_a @if (strpos($now_route,'cs.collection') !== false) current @endif">販促素材集</a>
                    <a href="{{ route('cs.store.index') }}" class="header_a @if (strpos($now_route,'cs.store') !== false) current @endif">SHOP LIST</a>
                    <a href="{{ route('cs.contact') }}" class="header_a @if (\Route::currentRouteName() == 'cs.contact') current @endif">お問い合わせ</a>
                </div>
            </header>

            @yield('content')

            <footer>
                <div class="footer_menu_flex">
                    <div class="footer_menu_title">STORE</div>
                    <div class="footer_menu_title">BRAND</div>
                    <div class="footer_menu_title">LINK</div>
                    <div class="footer_menu_title"></div>
                </div>

                <div class="footer_menu_flex">
                    <div class="footer_menu">
                        <a href="{{ route('cs.store.index') }}" class="footer_a">STORE LIST</a>
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
                        <a href="{{ route('cs.company') }}" class="footer_a">運営会社</a>
                        <a href="{{ route('cs.disclaimer') }}" class="footer_a">免責事項</a>
                        <a href="{{ route('cs.terms') }}" class="footer_a">利用規約</a>
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
            <header style="padding: 10px; margin-top: 0px; border-top: none;">
                <a class="logo_a_sp" href="{{ route('cs.index') }}">
                    <img src="{{ asset('img/logo_black.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="{{ route('cs.index') }}" class="menu_head_sp">HOME</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.topics', ['genre' => 'all']) }}" class="menu_content_sp">Topics</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.new_item', ['brand' => 'all']) }}" class="menu_content_sp">新作商品</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.add_production') }}" class="menu_content_sp">追加生産中</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.price_down') }}" class="menu_content_sp">Price Down</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.calendar') }}" class="menu_content_sp">入荷予定カレンダー</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.collection') }}" class="menu_content_sp">販促素材集</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.store.index') }}" class="menu_content_sp">SHOP LIST</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.contact') }}" class="menu_content_sp">お問い合わせ</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.company') }}" class="menu_content_sp">運営会社</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.disclaimer') }}" class="menu_content_sp">免責事項</a>
                            </li>
                            <li>
                                <a href ="{{ route('cs.terms') }}" class="menu_content_sp">利用規約</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div style="margin-top:62px;"></div>
            <div @if (strpos($now_route,'cs.company') === false && strpos($now_route,'cs.contact') === false) style="padding:0 10px;" @endif >
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