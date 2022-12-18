@extends('layouts.app')

@section('content')
<div class="store_list header_margin">
    <div class="page_title">STORE LIST</div>
    <div class="store_pref">OFFICIAL SHOP</div>
    <div class="store_list_flex">
        <a href="http://www.andy-dress.com/?utm_source=andy-inc&utm_medium=shoplist" class="store_a">Andy 公式通販</a>
    </div>

    <div class="store_pref">北海道</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 1 ]) }}" class="store_a">オレンジハウス(本店)</a>
        <a href="{{ route('store.show', ['id' => 2 ]) }}" class="store_a">オレンジハウス(ススキノ店)</a>
        <a href="{{ route('store.show', ['id' => 3 ]) }}" class="store_a">SPUR</a>
        <a href="{{ route('store.show', ['id' => 4 ]) }}" class="store_a">JAM</a>
    </div>

    <div class="store_pref">宮城県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 5 ]) }}" class="store_a">Bay-B-Club 仙台店</a>
        <a href="{{ route('store.show', ['id' => 6 ]) }}" class="store_a">ブリリアント</a>
        <a href="{{ route('store.show', ['id' => 8 ]) }}" class="store_a">PB1 仙台Ⅰ号店</a>
        <a href="{{ route('store.show', ['id' => 7 ]) }}" class="store_a">PB1 仙台Ⅱ号店</a>
    </div>

    <div class="store_pref">千葉県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 10 ]) }}" class="store_a">Bay-B-Club 柏店</a>
        <a href="{{ route('store.show', ['id' => 11 ]) }}" class="store_a">Bay-B-Club 船橋店</a>
        <a href="{{ route('store.show', ['id' => 12 ]) }}" class="store_a">Bay-B-Club 千葉店</a>
    </div>

    <div class="store_pref">東京都</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 13 ]) }}" class="store_a">Bay-B-Club 池袋店</a>
        <a href="{{ route('store.show', ['id' => 14 ]) }}" class="store_a">Bay-B-Club 渋谷店</a>
        <a href="{{ route('store.show', ['id' => 15 ]) }}" class="store_a">Le・Dione</a>
        <a href="{{ route('store.show', ['id' => 16 ]) }}" class="store_a">Ebonye</a>
        <a href="{{ route('store.show', ['id' => 17 ]) }}" class="store_a">ゴールドスター</a>
        <a href="{{ route('store.show', ['id' => 18 ]) }}" class="store_a">Bay-B-Club 新宿サブナード店</a>
        <a href="{{ route('store.show', ['id' => 19 ]) }}" class="store_a">Bay-B-Club 新宿アルタ店</a>
        <a href="{{ route('store.show', ['id' => 20 ]) }}" class="store_a">AIDMAX Garls Style</a>
        <a href="{{ route('store.show', ['id' => 21 ]) }}" class="store_a">ルーヴル 歌舞伎町</a>
        <a href="{{ route('store.show', ['id' => 22 ]) }}" class="store_a">プログレス</a>
        <a href="{{ route('store.show', ['id' => 23 ]) }}" class="store_a">シライ</a>
        <a href="{{ route('store.show', ['id' => 24 ]) }}" class="store_a">09 by dazzy</a>
        <a href="{{ route('store.show', ['id' => 25 ]) }}" class="store_a">ホームシック</a>
        <a href="{{ route('store.show', ['id' => 26 ]) }}" class="store_a">ニューソース</a>
    </div>

    <div class="store_pref">神奈川県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 27 ]) }}" class="store_a">Bay-B-Club 横浜店</a>
        <a href="{{ route('store.show', ['id' => 28 ]) }}" class="store_a">ブラックキャット</a>
        <a href="{{ route('store.show', ['id' => 29 ]) }}" class="store_a">BINOMA</a>
    </div>

    <div class="store_pref">新潟県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 30 ]) }}" class="store_a">sugar 古町店</a>
        <a href="{{ route('store.show', ['id' => 31 ]) }}" class="store_a">sugar&jewels 新潟ALTA</a>
    </div>

    <div class="store_pref">富山県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 32 ]) }}" class="store_a">ロディオ ドライブ 掛尾店</a>
    </div>

    <div class="store_pref">石川県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 34 ]) }}" class="store_a">PEARL</a>
        <a href="{{ route('store.show', ['id' => 33 ]) }}" class="store_a">PEARL2</a>
    </div>

    <div class="store_pref">長野県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 35 ]) }}" class="store_a">make cat matsumoto</a>
        <a href="{{ route('store.show', ['id' => 36 ]) }}" class="store_a">make cat</a>
    </div>

    <div class="store_pref">岐阜県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 37 ]) }}" class="store_a">Ririka</a>
    </div>

    <div class="store_pref">静岡県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 38 ]) }}" class="store_a">Bay-B-Club 静岡店</a>
        <a href="{{ route('store.show', ['id' => 39 ]) }}" class="store_a">MIYUKI</a>
    </div>

    <div class="store_pref">愛知県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 40 ]) }}" class="store_a">Bay-B-Club 名古屋店</a>
        <a href="{{ route('store.show', ['id' => 41 ]) }}" class="store_a">マリーズshop 大須店</a>
        <a href="{{ route('store.show', ['id' => 42 ]) }}" class="store_a">PB1 栄店</a>
        <a href="{{ route('store.show', ['id' => 43 ]) }}" class="store_a">PB1錦 DCⅠ</a>
        <a href="{{ route('store.show', ['id' => 46 ]) }}" class="store_a">PB1錦 Ⅰ号店</a>
        <a href="{{ route('store.show', ['id' => 45 ]) }}" class="store_a">PB1錦 Ⅱ号店</a>
        <a href="{{ route('store.show', ['id' => 44 ]) }}" class="store_a">PB1錦 Ⅲ号店</a>
    </div>

    <div class="store_pref">京都府</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 48 ]) }}" class="store_a">Macllyz 京都店</a>
        <a href="{{ route('store.show', ['id' => 49 ]) }}" class="store_a">コルテ・デ・モード</a>
        <a href="{{ route('store.show', ['id' => 50 ]) }}" class="store_a">Galle</a>
    </div>

    <div class="store_pref">大阪府</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 51 ]) }}" class="store_a">Macllyz 長堀店</a>
        <a href="{{ route('store.show', ['id' => 52 ]) }}" class="store_a">Bay-B-Club 心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 53 ]) }}" class="store_a">Andy By No Name OPA店</a>
        <a href="{{ route('store.show', ['id' => 54 ]) }}" class="store_a">istinto OPA店</a>
        <a href="{{ route('store.show', ['id' => 55 ]) }}" class="store_a">シェリー 高槻店</a>
        <a href="{{ route('store.show', ['id' => 56 ]) }}" class="store_a">シェリー 茨木店</a>
        <a href="{{ route('store.show', ['id' => 57 ]) }}" class="store_a">Bay-B-Club 梅田店</a>
        <a href="{{ route('store.show', ['id' => 58 ]) }}" class="store_a">ロイヤル　マコニス</a>
        <a href="{{ route('store.show', ['id' => 59 ]) }}" class="store_a">ティアラミナミ</a>
        <a href="{{ route('store.show', ['id' => 60 ]) }}" class="store_a">an by Vanity ME.</a>
        <a href="{{ route('store.show', ['id' => 61 ]) }}" class="store_a">アタッチメント</a>
        <a href="{{ route('store.show', ['id' => 62 ]) }}" class="store_a">Vanity ME.</a>
        <a href="{{ route('store.show', ['id' => 64 ]) }}" class="store_a">Tika 心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 63 ]) }}" class="store_a">Tika 東心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 65 ]) }}" class="store_a">LiLLion</a>
        <a href="{{ route('store.show', ['id' => 66 ]) }}" class="store_a">ビ・ミラノ 北新地</a>
        <a href="{{ route('store.show', ['id' => 67 ]) }}" class="store_a">Tika 北新地店</a>
        <a href="{{ route('store.show', ['id' => 68 ]) }}" class="store_a">ガウディ</a>
    </div>

    <div class="store_pref">岡山県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 69 ]) }}" class="store_a">VIARU</a>
    </div>

    <div class="store_pref">広島県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 70 ]) }}" class="store_a">クラウンジュエル 宮通り店</a>
        <a href="{{ route('store.show', ['id' => 71 ]) }}" class="store_a">PB1 広島2号店</a>
        <a href="{{ route('store.show', ['id' => 72 ]) }}" class="store_a">PB1 広島3号店</a>
        <a href="{{ route('store.show', ['id' => 73 ]) }}" class="store_a">Faith</a>
    </div>

    <div class="store_pref">福岡県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 74 ]) }}" class="store_a">アクロス</a>
        <a href="{{ route('store.show', ['id' => 75 ]) }}" class="store_a">Bay-B-Club 天神店</a>
        <a href="{{ route('store.show', ['id' => 76 ]) }}" class="store_a">ひつじや六つ門</a>
        <a href="{{ route('store.show', ['id' => 77 ]) }}" class="store_a">1Million</a>
        <a href="{{ route('store.show', ['id' => 78 ]) }}" class="store_a">ラビリンス</a>
        <a href="{{ route('store.show', ['id' => 79 ]) }}" class="store_a">シンデレラ</a>
        <a href="{{ route('store.show', ['id' => 80 ]) }}" class="store_a">ビ・ミラノ 川丈</a>
        <a href="{{ route('store.show', ['id' => 81 ]) }}" class="store_a">ビ・ミラノ 大通り</a>
        <a href="{{ route('store.show', ['id' => 82 ]) }}" class="store_a">ヒロクロージング</a>
    </div>

    <div class="store_pref">熊本県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 86 ]) }}" class="store_a">Linda</a>
        <a href="{{ route('store.show', ['id' => 85 ]) }}" class="store_a">Linda(アリストン店)</a>
    </div>

    <div class="store_pref">宮崎県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 87 ]) }}" class="store_a">ドレスのフルタ</a>
        <a href="{{ route('store.show', ['id' => 88 ]) }}" class="store_a">GIRL</a>
        <a href="{{ route('store.show', ['id' => 89 ]) }}" class="store_a">KINA宮崎店</a>
    </div>

    <div class="store_pref">鹿児島県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 90 ]) }}" class="store_a">sugar</a>
    </div>

    <div class="store_pref">沖縄県</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 91 ]) }}" class="store_a">Dazzy 沖縄</a>
    </div>

    <div class="store_pref">ネットショップ</div>
    <div class="store_list_flex">
        <a href="{{ route('store.show', ['id' => 92 ]) }}" class="store_a">ニュース・ソース</a>
        <a href="{{ route('store.show', ['id' => 93 ]) }}" class="store_a">メゾン・ド・ヴォーテ</a>
        <a href="{{ route('store.show', ['id' => 94 ]) }}" class="store_a">MIYUKI</a>
        <a href="{{ route('store.show', ['id' => 95 ]) }}" class="store_a">PB1</a>
        <a href="{{ route('store.show', ['id' => 96 ]) }}" class="store_a">ビ・ミラノ</a>
        <a href="{{ route('store.show', ['id' => 97 ]) }}" class="store_a">Mew Atelier</a>
        <a href="{{ route('store.show', ['id' => 98 ]) }}" class="store_a">Clytie</a>
        <a href="{{ route('store.show', ['id' => 99 ]) }}" class="store_a">Acloth</a>
        <a href="{{ route('store.show', ['id' => 100 ]) }}" class="store_a">FAITH</a>
        <a href="{{ route('store.show', ['id' => 101 ]) }}" class="store_a">ORANGE SHOP</a>
        <a href="{{ route('store.show', ['id' => 102 ]) }}" class="store_a">1 Million</a>
        <a href="{{ route('store.show', ['id' => 103 ]) }}" class="store_a">sugar</a>
    </div>

</div>


@endsection




@section('content_sp')
<div style="padding:0 10px 50px;">
    <div class="page_title">STORE LIST</div>
    <a href="#!" class="store_pref_sp" onclick="clickStorePref1();">
        OFFICIAL SHOP<img src="{{ asset('img/down.png') }}" id="down1" class="down"><img src="{{ asset('img/up.png') }}" id="up1" class="up">
    </a>
    <div class="store_list_flex_sp" id="store1">
        <a href="http://www.andy-dress.com/?utm_source=andy-inc&utm_medium=shoplist" class="store_a_sp">Andy 公式通販</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref2();">
        北海道<img src="{{ asset('img/down.png') }}" id="down2" class="down"><img src="{{ asset('img/up.png') }}" id="up2" class="up">
    </a>
    <div class="store_list_flex_sp" id="store2">
        <a href="{{ route('store.show', ['id' => 1 ]) }}" class="store_a_sp">オレンジハウス(本店)</a>
        <a href="{{ route('store.show', ['id' => 2 ]) }}" class="store_a_sp">オレンジハウス(ススキノ店)</a>
        <a href="{{ route('store.show', ['id' => 3 ]) }}" class="store_a_sp">SPUR</a>
        <a href="{{ route('store.show', ['id' => 4 ]) }}" class="store_a_sp">JAM</a>
    </div>

    
    <a href="#!" class="store_pref_sp" onclick="clickStorePref3();">
    宮城県<img src="{{ asset('img/down.png') }}" id="down3" class="down"><img src="{{ asset('img/up.png') }}" id="up3" class="up">
    </a>
    <div class="store_list_flex_sp" id="store3">
        <a href="{{ route('store.show', ['id' => 5 ]) }}" class="store_a_sp">Bay-B-Club 仙台店</a>
        <a href="{{ route('store.show', ['id' => 6 ]) }}" class="store_a_sp">ブリリアント</a>
        <a href="{{ route('store.show', ['id' => 8 ]) }}" class="store_a_sp">PB1 仙台Ⅰ号店</a>
        <a href="{{ route('store.show', ['id' => 7 ]) }}" class="store_a_sp">PB1 仙台Ⅱ号店</a>
    </div>


    <a href="#!" class="store_pref_sp" onclick="clickStorePref4();">
    千葉県<img src="{{ asset('img/down.png') }}" id="down4" class="down"><img src="{{ asset('img/up.png') }}" id="up4" class="up">
    </a>
    <div class="store_list_flex_sp" id="store4">
        <a href="{{ route('store.show', ['id' => 10 ]) }}" class="store_a_sp">Bay-B-Club 柏店</a>
        <a href="{{ route('store.show', ['id' => 11 ]) }}" class="store_a_sp">Bay-B-Club 船橋店</a>
        <a href="{{ route('store.show', ['id' => 12 ]) }}" class="store_a_sp">Bay-B-Club 千葉店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref5();">
    東京都<img src="{{ asset('img/down.png') }}" id="down5" class="down"><img src="{{ asset('img/up.png') }}" id="up5" class="up">
    </a>
    <div class="store_list_flex_sp" id="store5">
        <a href="{{ route('store.show', ['id' => 13 ]) }}" class="store_a_sp">Bay-B-Club 池袋店</a>
        <a href="{{ route('store.show', ['id' => 14 ]) }}" class="store_a_sp">Bay-B-Club 渋谷店</a>
        <a href="{{ route('store.show', ['id' => 15 ]) }}" class="store_a_sp">Le・Dione</a>
        <a href="{{ route('store.show', ['id' => 16 ]) }}" class="store_a_sp">Ebonye</a>
        <a href="{{ route('store.show', ['id' => 17 ]) }}" class="store_a_sp">ゴールドスター</a>
        <a href="{{ route('store.show', ['id' => 18 ]) }}" class="store_a_sp">Bay-B-Club 新宿サブナード店</a>
        <a href="{{ route('store.show', ['id' => 19 ]) }}" class="store_a_sp">Bay-B-Club 新宿アルタ店</a>
        <a href="{{ route('store.show', ['id' => 20 ]) }}" class="store_a_sp">AIDMAX Garls Style</a>
        <a href="{{ route('store.show', ['id' => 21 ]) }}" class="store_a_sp">ルーヴル 歌舞伎町</a>
        <a href="{{ route('store.show', ['id' => 22 ]) }}" class="store_a_sp">プログレス</a>
        <a href="{{ route('store.show', ['id' => 23 ]) }}" class="store_a_sp">シライ</a>
        <a href="{{ route('store.show', ['id' => 24 ]) }}" class="store_a_sp">09 by dazzy</a>
        <a href="{{ route('store.show', ['id' => 25 ]) }}" class="store_a_sp">ホームシック</a>
        <a href="{{ route('store.show', ['id' => 26 ]) }}" class="store_a_sp">ニューソース</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref6();">
    神奈川県<img src="{{ asset('img/down.png') }}" id="down6" class="down"><img src="{{ asset('img/up.png') }}" id="up6" class="up">
    </a>
    <div class="store_list_flex_sp" id="store6">
        <a href="{{ route('store.show', ['id' => 27 ]) }}" class="store_a_sp">Bay-B-Club 横浜店</a>
        <a href="{{ route('store.show', ['id' => 28 ]) }}" class="store_a_sp">ブラックキャット</a>
        <a href="{{ route('store.show', ['id' => 29 ]) }}" class="store_a_sp">BINOMA</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref7();">
    新潟県<img src="{{ asset('img/down.png') }}" id="down7" class="down"><img src="{{ asset('img/up.png') }}" id="up7" class="up">
    </a>
    <div class="store_list_flex_sp" id="store7">
        <a href="{{ route('store.show', ['id' => 30 ]) }}" class="store_a_sp">sugar 古町店</a>
        <a href="{{ route('store.show', ['id' => 31 ]) }}" class="store_a_sp">sugar&jewels 新潟ALTA</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref8();">
    富山県<img src="{{ asset('img/down.png') }}" id="down8" class="down"><img src="{{ asset('img/up.png') }}" id="up8" class="up">
    </a>
    <div class="store_list_flex_sp" id="store8">
        <a href="{{ route('store.show', ['id' => 32 ]) }}" class="store_a_sp">ロディオ ドライブ 掛尾店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref9();">
    石川県<img src="{{ asset('img/down.png') }}" id="down9" class="down"><img src="{{ asset('img/up.png') }}" id="up9" class="up">
    </a>
    <div class="store_list_flex_sp" id="store9">
        <a href="{{ route('store.show', ['id' => 34 ]) }}" class="store_a_sp">PEARL</a>
        <a href="{{ route('store.show', ['id' => 33 ]) }}" class="store_a_sp">PEARL2</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref10();">
    長野県<img src="{{ asset('img/down.png') }}" id="down10" class="down"><img src="{{ asset('img/up.png') }}" id="up10" class="up">
    </a>
    <div class="store_list_flex_sp" id="store10">
        <a href="{{ route('store.show', ['id' => 35 ]) }}" class="store_a_sp">make cat matsumoto</a>
        <a href="{{ route('store.show', ['id' => 36 ]) }}" class="store_a_sp">make cat</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref11();">
    岐阜県<img src="{{ asset('img/down.png') }}" id="down11" class="down"><img src="{{ asset('img/up.png') }}" id="up11" class="up">
    </a>
    <div class="store_list_flex_sp" id="store11">
        <a href="{{ route('store.show', ['id' => 37 ]) }}" class="store_a_sp">Ririka</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref12();">
    静岡県<img src="{{ asset('img/down.png') }}" id="down12" class="down"><img src="{{ asset('img/up.png') }}" id="up12" class="up">
    </a>
    <div class="store_list_flex_sp" id="store12">
        <a href="{{ route('store.show', ['id' => 38 ]) }}" class="store_a_sp">Bay-B-Club 静岡店</a>
        <a href="{{ route('store.show', ['id' => 39 ]) }}" class="store_a_sp">MIYUKI</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref13();">
    愛知県<img src="{{ asset('img/down.png') }}" id="down13" class="down"><img src="{{ asset('img/up.png') }}" id="up13" class="up">
    </a>
    <div class="store_list_flex_sp" id="store13">
        <a href="{{ route('store.show', ['id' => 40 ]) }}" class="store_a_sp">Bay-B-Club 名古屋店</a>
        <a href="{{ route('store.show', ['id' => 41 ]) }}" class="store_a_sp">マリーズshop 大須店</a>
        <a href="{{ route('store.show', ['id' => 42 ]) }}" class="store_a_sp">PB1 栄店</a>
        <a href="{{ route('store.show', ['id' => 43 ]) }}" class="store_a_sp">PB1錦 DCⅠ</a>
        <a href="{{ route('store.show', ['id' => 46 ]) }}" class="store_a_sp">PB1錦 Ⅰ号店</a>
        <a href="{{ route('store.show', ['id' => 45 ]) }}" class="store_a_sp">PB1錦 Ⅱ号店</a>
        <a href="{{ route('store.show', ['id' => 44 ]) }}" class="store_a_sp">PB1錦 Ⅲ号店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref14();">
    京都府<img src="{{ asset('img/down.png') }}" id="down14" class="down"><img src="{{ asset('img/up.png') }}" id="up14" class="up">
    </a>
    <div class="store_list_flex_sp" id="store14">
        <a href="{{ route('store.show', ['id' => 48 ]) }}" class="store_a_sp">Macllyz 京都店</a>
        <a href="{{ route('store.show', ['id' => 49 ]) }}" class="store_a_sp">コルテ・デ・モード</a>
        <a href="{{ route('store.show', ['id' => 50 ]) }}" class="store_a_sp">Galle</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref15();">
    大阪府<img src="{{ asset('img/down.png') }}" id="down15" class="down"><img src="{{ asset('img/up.png') }}" id="up15" class="up">
    </a>
    <div class="store_list_flex_sp" id="store15">
        <a href="{{ route('store.show', ['id' => 51 ]) }}" class="store_a_sp">Macllyz 長堀店</a>
        <a href="{{ route('store.show', ['id' => 52 ]) }}" class="store_a_sp">Bay-B-Club 心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 53 ]) }}" class="store_a_sp">Andy By No Name OPA店</a>
        <a href="{{ route('store.show', ['id' => 54 ]) }}" class="store_a_sp">istinto OPA店</a>
        <a href="{{ route('store.show', ['id' => 55 ]) }}" class="store_a_sp">シェリー 高槻店</a>
        <a href="{{ route('store.show', ['id' => 56 ]) }}" class="store_a_sp">シェリー 茨木店</a>
        <a href="{{ route('store.show', ['id' => 57 ]) }}" class="store_a_sp">Bay-B-Club 梅田店</a>
        <a href="{{ route('store.show', ['id' => 58 ]) }}" class="store_a_sp">ロイヤル　マコニス</a>
        <a href="{{ route('store.show', ['id' => 59 ]) }}" class="store_a_sp">ティアラミナミ</a>
        <a href="{{ route('store.show', ['id' => 60 ]) }}" class="store_a_sp">an by Vanity ME.</a>
        <a href="{{ route('store.show', ['id' => 61 ]) }}" class="store_a_sp">アタッチメント</a>
        <a href="{{ route('store.show', ['id' => 62 ]) }}" class="store_a_sp">Vanity ME.</a>
        <a href="{{ route('store.show', ['id' => 64 ]) }}" class="store_a_sp">Tika 心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 63 ]) }}" class="store_a_sp">Tika 東心斎橋店</a>
        <a href="{{ route('store.show', ['id' => 65 ]) }}" class="store_a_sp">LiLLion</a>
        <a href="{{ route('store.show', ['id' => 66 ]) }}" class="store_a_sp">ビ・ミラノ 北新地</a>
        <a href="{{ route('store.show', ['id' => 67 ]) }}" class="store_a_sp">Tika 北新地店</a>
        <a href="{{ route('store.show', ['id' => 68 ]) }}" class="store_a_sp">ガウディ</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref16();">
    岡山県<img src="{{ asset('img/down.png') }}" id="down16" class="down"><img src="{{ asset('img/up.png') }}" id="up16" class="up">
    </a>
    <div class="store_list_flex_sp" id="store16">
        <a href="{{ route('store.show', ['id' => 69 ]) }}" class="store_a_sp">VIARU</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref17();">
    広島県<img src="{{ asset('img/down.png') }}" id="down17" class="down"><img src="{{ asset('img/up.png') }}" id="up17" class="up">
    </a>
    <div class="store_list_flex_sp" id="store17">
        <a href="{{ route('store.show', ['id' => 70 ]) }}" class="store_a_sp">クラウンジュエル 宮通り店</a>
        <a href="{{ route('store.show', ['id' => 71 ]) }}" class="store_a_sp">PB1 広島2号店</a>
        <a href="{{ route('store.show', ['id' => 72 ]) }}" class="store_a_sp">PB1 広島3号店</a>
        <a href="{{ route('store.show', ['id' => 73 ]) }}" class="store_a_sp">Faith</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref18();">
    福岡県<img src="{{ asset('img/down.png') }}" id="down18" class="down"><img src="{{ asset('img/up.png') }}" id="up18" class="up">
    </a>
    <div class="store_list_flex_sp" id="store18">
        <a href="{{ route('store.show', ['id' => 74 ]) }}" class="store_a_sp">アクロス</a>
        <a href="{{ route('store.show', ['id' => 75 ]) }}" class="store_a_sp">Bay-B-Club 天神店</a>
        <a href="{{ route('store.show', ['id' => 76 ]) }}" class="store_a_sp">ひつじや六つ門</a>
        <a href="{{ route('store.show', ['id' => 77 ]) }}" class="store_a_sp">1Million</a>
        <a href="{{ route('store.show', ['id' => 78 ]) }}" class="store_a_sp">ラビリンス</a>
        <a href="{{ route('store.show', ['id' => 79 ]) }}" class="store_a_sp">シンデレラ</a>
        <a href="{{ route('store.show', ['id' => 80 ]) }}" class="store_a_sp">ビ・ミラノ 川丈</a>
        <a href="{{ route('store.show', ['id' => 81 ]) }}" class="store_a_sp">ビ・ミラノ 大通り</a>
        <a href="{{ route('store.show', ['id' => 82 ]) }}" class="store_a_sp">ヒロクロージング</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref19();">
    熊本県<img src="{{ asset('img/down.png') }}" id="down19" class="down"><img src="{{ asset('img/up.png') }}" id="up19" class="up">
    </a>
    <div class="store_list_flex_sp" id="store19">
        <a href="{{ route('store.show', ['id' => 86 ]) }}" class="store_a_sp">Linda</a>
        <a href="{{ route('store.show', ['id' => 85 ]) }}" class="store_a_sp">Linda(アリストン店)</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref20();">
    宮崎県<img src="{{ asset('img/down.png') }}" id="down20" class="down"><img src="{{ asset('img/up.png') }}" id="up20" class="up">
    </a>
    <div class="store_list_flex_sp" id="store20">
        <a href="{{ route('store.show', ['id' => 87 ]) }}" class="store_a_sp">ドレスのフルタ</a>
        <a href="{{ route('store.show', ['id' => 88 ]) }}" class="store_a_sp">GIRL</a>
        <a href="{{ route('store.show', ['id' => 89 ]) }}" class="store_a_sp">KINA宮崎店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref21();">
    鹿児島県<img src="{{ asset('img/down.png') }}" id="down21" class="down"><img src="{{ asset('img/up.png') }}" id="up21" class="up">
    </a>
    <div class="store_list_flex_sp" id="store21">
        <a href="{{ route('store.show', ['id' => 90 ]) }}" class="store_a_sp">sugar</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref22();">
    沖縄県<img src="{{ asset('img/down.png') }}" id="down22" class="down"><img src="{{ asset('img/up.png') }}" id="up22" class="up">
    </a>
    <div class="store_list_flex_sp" id="store22">
        <a href="{{ route('store.show', ['id' => 91 ]) }}" class="store_a_sp">Dazzy 沖縄</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref23();">
    ネットショップ<img src="{{ asset('img/down.png') }}" id="down23" class="down"><img src="{{ asset('img/up.png') }}" id="up23" class="up">
    </a>
    <div class="store_list_flex_sp" id="store23">
        <a href="{{ route('store.show', ['id' => 92 ]) }}"  class="store_a_sp">ニュース・ソース</a>
        <a href="{{ route('store.show', ['id' => 93 ]) }}"  class="store_a_sp">メゾン・ド・ヴォーテ</a>
        <a href="{{ route('store.show', ['id' => 94 ]) }}"  class="store_a_sp">MIYUKI</a>
        <a href="{{ route('store.show', ['id' => 95 ]) }}"  class="store_a_sp">PB1</a>
        <a href="{{ route('store.show', ['id' => 96 ]) }}"  class="store_a_sp">ビ・ミラノ</a>
        <a href="{{ route('store.show', ['id' => 97 ]) }}"  class="store_a_sp">Mew Atelier</a>
        <a href="{{ route('store.show', ['id' => 98 ]) }}"  class="store_a_sp">Clytie</a>
        <a href="{{ route('store.show', ['id' => 99 ]) }}"  class="store_a_sp">Acloth</a>
        <a href="{{ route('store.show', ['id' => 100 ]) }}" class="store_a_sp">FAITH</a>
        <a href="{{ route('store.show', ['id' => 101 ]) }}" class="store_a_sp">ORANGE SHOP</a>
        <a href="{{ route('store.show', ['id' => 102 ]) }}" class="store_a_sp">1 Million</a>
        <a href="{{ route('store.show', ['id' => 103 ]) }}" class="store_a_sp">sugar</a>
    </div>
</div>

<script src="{{ asset('js/store_list_sp.js') }}"></script>

@endsection