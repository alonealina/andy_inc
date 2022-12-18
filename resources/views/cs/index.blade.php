@extends('layouts.app_cs')

@section('content')
<div class="header_margin" style="padding: 0px 200px;">
    <ul class="slider_cs">
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    </ul>
</div>

<div class="top_brand_list_div">
    <div class="top_brand_list">
        <a href="{{ route('brand.show', ['url' => 'pandy']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_pandy.jpg') }}" class="top_brand_img" alt=""></a>
        <a href="{{ route('brand.show', ['url' => 'andy']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_andy.jpg') }}" class="top_brand_img" alt=""></a>
        <a href="{{ route('brand.show', ['url' => 'glamorous']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="top_brand_img" alt=""></a>
        <a href="{{ route('brand.show', ['url' => 'can']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_can.jpg') }}" class="top_brand_img" alt=""></a>
        <a href="{{ route('brand.show', ['url' => 'an']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_an.jpg') }}" class="top_brand_img" alt=""></a>
        <a href="{{ route('brand.show', ['url' => 'aty']) }}" class="top_brand_a"><img src="{{ asset('img/top_logo_aty.jpg') }}" class="top_brand_img" alt=""></a>
    </div>
</div>

<div class="top_title_div"><div class="top_title">Topics</div></div>

<div class="top_content_div"><div class="top_content">
    <div class="top_content_flex">
        <a href="{{ route('cs.item_detail', ['id' => $topic_first->id ]) }}" class="top_item_a">
            <div class="item_img_div">
                <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
                <div class="date_mark">2022.08.09</div>
            </div>
            <div class="item_detail_div">
                <div class="item_genre_list">
                    @if($topic_first->ship_flg)
                    <div class="blue_genre">発送商品</div>
                    @endif
                    @if($topic_first->new_flg)
                    <div class="pink_genre">新作商品</div>
                    @endif
                    @if($topic_first->deadline_flg)
                    <div class="orange_genre">納期変更</div>
                    @endif
                    @if($topic_first->add_img_flg)
                    <div class="green_genre">画像追加</div>
                    @endif
                </div>
                <div class="item_main_name">{{ $topic_first->name }}</div>
                <div class="item_main_text">{{ $topic_first->text }}</div>

            </div>
        </a>
        <div class="item_right_flex">
        @php $i = 0; @endphp
            @foreach ($topic_list as $topic)
            @php $i++ @endphp
            <a href="{{ route('cs.item_detail', ['id' => $topic->id ]) }}" class="top_item_right_a" @if($i <= 2) style="margin-bottom: 11.3%;" @endif>
                <div class="item_right_img_div">
                    <img src="{{ asset('img/top_item_sample.png') }}" class="item_img" alt="">
                    <div class="date_mark">2022.08.09</div>
                </div>
                <div class="item_right_detail_div">
                    <div class="item_genre_list">
                        @if($topic->ship_flg)
                        <div class="blue_genre">発送商品</div>
                        @endif
                        @if($topic->new_flg)
                        <div class="pink_genre">新作商品</div>
                        @endif
                        @if($topic->deadline_flg)
                        <div class="orange_genre">納期変更</div>
                        @endif
                        @if($topic->add_img_flg)
                        <div class="green_genre">画像追加</div>
                        @endif
                    </div>
                    <div class="item_right_name">{{ $topic->name }}</div>
                    <div class="item_right_text">{{ $topic->text }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div></div>

<div class="top_title_div"><div class="top_title">New Items</div></div>

<div class="top_content_div"><div class="top_content">
    <div class="top_content_flex">
        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample3.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample4.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト<br>テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample5.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample6.png') }}" class="top_item_img" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>
    </div>
    <a href="{{ route('cs.new_item', ['brand' => 'all']) }}" class="new_item_a">Look All New Items</a>
</div></div>


<div class="top_title_div"><div class="top_title">追加生産中 Items</div></div>

<div class="top_content_div"><div class="top_content">
    <div class="top_content_flex">
        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample3.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample4.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト<br>テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample5.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample6.png') }}" class="top_item_img" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>
    </div>
    <a href="{{ route('cs.add_production') }}" class="add_production_a">Look All 追加生産中 Items</a>
</div></div>


<div class="top_title_div"><div class="top_title">Price Down</div></div>

<div class="top_content_div"><div class="top_content">
    <div class="top_content_flex">
        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample3.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample4.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト<br>テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample5.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a">
            <img src="{{ asset('img/top_sample6.png') }}" class="top_item_img" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">テキストテキスト</div>
        </a>
    </div>
    <a href="{{ route('cs.price_down') }}" class="price_down_a">Look All Price Down Items</a>
</div></div>

<div class="top_content_div" style="margin-top: 40px;"><div class="top_content">
    <div class="top_content_flex">
        <div class="top_collection_div">
            <div class="top_collection_title">販促素材集</div>
            <div class="top_collection_text1">MoMAデザインストアの独自性</div>
            <div class="top_collection_text2">MoMAデザインストアがどのように商品を選定しているのか。その独自の視点や、何が特別かをご紹介します。</div>
            <a href="{{ route('cs.collection') }}" class="top_collection_a">さらに詳しく</a>
        </div>
        <img src="{{ asset('img/top_collection.png') }}" class="top_collection_img" alt="">
    </div>
</div></div>




@endsection


@section('content_sp')

<ul class="slider_sp">
    <li class=""><a href=""><img src="{{ asset('img/top_slider1.png') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider2.png') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider3.png') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider1.png') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider2.png') }}" class="top_img1" alt=""></a></li>
    <li class=""><a href=""><img src="{{ asset('img/top_slider3.png') }}" class="top_img1" alt=""></a></li>
</ul>

<form class="" style="margin-bottom:50px;">
    <select name="category_id" class="select_category" style="height: 30px;">
        <option>全ての商品から</option>
        <option value="コラボ商品">コラボ商品</option>
    </select><br>
    {!! Form::text('freeword' ,isset($filter_freeword) ? $freeword : null , ['class' => 'filter_text_sp', 'placeholder' => ''] ) !!}
    <button class="search_btn">検索</button>
</form>

@foreach ($topic_list_sp as $topic)
<a href="{{ route('cs.item_detail', ['id' => $topic->id ]) }}" class="top_item_a_sp">
    <div class="item_img_div_sp">
        <img src="{{ asset('img/item_sample.png') }}" class="item_img_sp" alt="">
        <div class="date_mark">2022.08.09</div>
    </div>
    <div class="item_detail_div_sp">
        <div class="item_genre_list_sp">
            @if($topic->ship_flg)
            <div class="blue_genre_sp">発送商品</div>
            @endif
            @if($topic->new_flg)
            <div class="pink_genre_sp">新作商品</div>
            @endif
            @if($topic->deadline_flg)
            <div class="orange_genre_sp">納期変更</div>
            @endif
            @if($topic->add_img_flg)
            <div class="green_genre_sp">画像追加</div>
            @endif
        </div>
        <div class="item_main_name_sp">{{ $topic->name }}</div>
        <div class="item_main_text_sp">{{ $topic->text }}</div>
    </div>
</a>
@endforeach

<div class="top_item_list_sp">
    <div class="top_item_header">
        <a href="#!" id="item_new_a" onclick="clickNewSp();" class="top_item_header_a" style="border-bottom: none;">新作商品</a>
        <a href="#!" id="item_add_a" onclick="clickAddSp();" class="top_item_header_a top_item_center">追加生産中</a>
        <a href="#!" id="item_down_a" onclick="clickDownSp();" class="top_item_header_a">プライスダウン</a>
    </div>

    <div id="item_new_div" class="top_content_flex" style="flex-wrap: wrap;">
        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">Newテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">Newテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">Newテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="new_mark">New</div>
            <div class="top_item_text">Newテキストテキスト</div>
        </a>
    </div>

    <div id="item_add_div" class="top_content_flex" style="flex-wrap: wrap; display:none;">
        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">追加テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">追加テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">追加テキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="add_production_mark">追加生産中</div>
            <div class="top_item_text">追加テキストテキスト</div>
        </a>
    </div>

    <div id="item_down_div" class="top_content_flex" style="flex-wrap: wrap; display:none;">
        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample1.png') }}" class="top_item_img_sp" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">Downテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">Downテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">Downテキストテキスト</div>
        </a>

        <a href="" class="top_item_list_a_sp">
            <img src="{{ asset('img/top_sample2.png') }}" class="top_item_img_sp" alt="">
            <div class="price_down_mark">Price Down</div>
            <div class="top_item_text">Downテキストテキスト</div>
        </a>
    </div>




</div>



<div class="top_brand_list_div_sp">
    <div class="top_brand_list_sp">
        <a style="width:48%; margin-bottom:15px;" href="{{ route('brand.show', ['url' => 'pandy']) }}"><img src="{{ asset('img/top_logo_pandy.jpg') }}" class="top_brand_img_sp" alt=""></a>
        <a style="width:48%; margin-bottom:15px;" href="{{ route('brand.show', ['url' => 'andy']) }}"><img src="{{ asset('img/top_logo_andy.jpg') }}" class="top_brand_img_sp" alt=""></a>
        <a style="width:48%; margin-bottom:15px;" href="{{ route('brand.show', ['url' => 'glamorous']) }}"><img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="top_brand_img_sp" alt=""></a>
        <a style="width:48%; margin-bottom:15px;" href="{{ route('brand.show', ['url' => 'can']) }}"><img src="{{ asset('img/top_logo_can.jpg') }}" class="top_brand_img_sp" alt=""></a>
        <a style="width:48%;" href="{{ route('brand.show', ['url' => 'an']) }}"><img src="{{ asset('img/top_logo_an.jpg') }}" class="top_brand_img_sp" alt=""></a>
        <a style="width:48%;" href="{{ route('brand.show', ['url' => 'aty']) }}"><img src="{{ asset('img/top_logo_aty.jpg') }}" class="top_brand_img_sp" alt=""></a>
    </div>
</div>

@endsection