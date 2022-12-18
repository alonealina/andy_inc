@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">お気に入りアイテム</div></div>

<div class="fav_btn_list">
    <a href="#!" class="fav_check_btn" id="all">全てにチェックを入れる</a>
    <a href="#!" class="fav_check_btn" id="all_not">全てにチェックを外す</a>
    <a href="" class="fav_delete_btn">チェックしたアイテムを削除</a>
</div>

<div class="fav_list_flex">
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check1" type="checkbox" name="chk[]" class="" value="1" ><label for="check1"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check2" type="checkbox" name="chk[]" class="" value="1" ><label for="check2"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check3" type="checkbox" name="chk[]" class="" value="1" ><label for="check3"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check4" type="checkbox" name="chk[]" class="" value="1" ><label for="check4"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check5" type="checkbox" name="chk[]" class="" value="1" ><label for="check5"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check6" type="checkbox" name="chk[]" class="" value="1" ><label for="check6"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check7" type="checkbox" name="chk[]" class="" value="1" ><label for="check7"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
</div>


@endsection




@section('content_sp')

<div class="cart_title_div_sp"><div class="cart_title">お気に入りアイテム</div></div>

<div class="fav_btn_list_sp">
    <a href="#!" class="fav_check_btn" style="margin-right: 0px;" id="all">全てにチェックを入れる</a>
    <a href="#!" class="fav_check_btn" style="margin-right: 0px;" id="all_not">全てにチェックを外す</a>
    <a href="" class="fav_delete_btn" style="margin-top: 10px;">チェックしたアイテムを削除</a>
</div>

<div class="fav_list_flex" style="width: 100%;">
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check1" type="checkbox" name="chk[]" class="" value="1" ><label for="check1"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check2" type="checkbox" name="chk[]" class="" value="1" ><label for="check2"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check3" type="checkbox" name="chk[]" class="" value="1" ><label for="check3"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check4" type="checkbox" name="chk[]" class="" value="1" ><label for="check4"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check5" type="checkbox" name="chk[]" class="" value="1" ><label for="check5"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check6" type="checkbox" name="chk[]" class="" value="1" ><label for="check6"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="fav_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_column"><div>Andy</div><input id="check7" type="checkbox" name="chk[]" class="" value="1" ><label for="check7"><div class="check_after"></div></label></div>
        <div class="fav_name">【洗える】カラーが豊富!!<br>Andy一押しのMY BEST PANTS!!</div>
        <div class="fav_text" style="padding-top:10px;">カラー：ラズベリーピンク</div>
        <div class="fav_text" style="padding-left:4em;">(073)</div>
        <div class="fav_text">サイズ：02(M)</div>
        <div class="fav_text" style="padding-top:5px;">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
</div>




@endsection