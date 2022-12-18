@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.item_regist') }}">商品登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.item_list') }}">商品管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">商品編集</div>
    <div class="news_list">
        <form id="form" name="regist_form" action="{{ route('admin.item_update') }}" method="post" enctype="multipart/form-data">
            {{ Form::hidden('id', $item->id) }}
            @if($errors->has('name'))
            <div class="comment_error">{{ $errors->first('name') }}</div>
            @endif
            @if($errors->has('deadline'))
            <div class="comment_error">{{ $errors->first('deadline') }}</div>
            @endif
            @if($errors->has('price'))
            <div class="comment_error">{{ $errors->first('price') }}</div>
            @endif
            @if($errors->has('img'))
            <div class="comment_error">{{ $errors->first('img') }}</div>
            @endif

            @csrf
            <div class="flex_form_item">
                <div class="flex_form_title">商品名</div>
                <div class="flex_form_content">
                    {{ Form::text('name', old('name', $item->name), ['class' => '', 'maxlength' => 20]) }}
                </div>
            </div>

            <div class="flex_form_item">
                <div class="flex_form_title">ブランド</div>
                <div class="flex_form_content">
                    <select name="brand">
                    @foreach ($brand_list as $brand)
                    <option value="{{ $brand->url }}"
                        @if(old('brand') == $brand->name) selected 
                        @elseif(empty(old('brand')) && $brand->url == $item->brand) selected @endif >{{ $brand->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">納期</div>
                <div class="flex_form_content">
                    {{ Form::text('deadline', old('deadline', $item->deadline), ['class' => '', 'maxlength' => 30]) }}
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">価格(税抜)</div>
                <div class="flex_form_content">
                    {{ Form::text('price', old('price', $item->price), ['class' => '', 'maxlength' => 7, 'pattern' => '^[0-9]+$']) }}
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">伸縮性</div>
                <div class="flex_form_content">
                    <select name="elasticity">
                        <option value="なし">なし</option>
                        <option value="あり">あり</option>
                    </select>
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">裏地</div>
                <div class="flex_form_content">
                    <select name="lining">
                        <option value="なし">なし</option>
                        <option value="あり" 
                            @if(old('lining') == 'あり') selected 
                            @elseif(empty(old('lining')) && $item->lining == 'あり') selected @endif>あり</option>
                    </select>
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">透け感</div>
                <div class="flex_form_content">
                    <select name="translucency">
                        <option value="なし">なし</option>
                        <option value="あり">あり</option>
                    </select>
                </div>
            </div>
            <div class="flex_form_item">
                <div class="flex_form_title">ジャンル</div>
                <div class="flex_form_content">
                    <input type="hidden" name="genre[ship_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="ship_flg" name="genre[ship_flg]" value="1"
                    @if(old('genre.ship_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->ship_flg == 1) checked @endif >
                    <label for="ship_flg" class="item_label">発送商品</label>
                    <input type="hidden" name="genre[new_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="new_flg" name="genre[new_flg]" value="1"
                    @if(old('genre.new_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->new_flg == 1) checked @endif >
                    <label for="new_flg" class="item_label">新作商品</label>
                    <input type="hidden" name="genre[deadline_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="deadline_flg" name="genre[deadline_flg]" value="1"
                    @if(old('genre.deadline_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->deadline_flg == 1) checked @endif >
                    <label for="deadline_flg" class="item_label">納期変更</label>
                    <input type="hidden" name="genre[add_img_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="add_img_flg" name="genre[add_img_flg]" value="1"
                    @if(old('genre.add_img_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->add_img_flg == 1) checked @endif >
                    <label for="add_img_flg" class="item_label">画像追加</label>
                    <input type="hidden" name="genre[price_down_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="price_down_flg" name="genre[price_down_flg]" value="1"
                    @if(old('genre.price_down_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->price_down_flg == 1) checked @endif >
                    <label for="price_down_flg" class="item_label">Price Down</label>
                    <input type="hidden" name="genre[add_production_flg]" value="0">
                    <input type="checkbox" class="item_checkbox" id="add_production_flg" name="genre[add_production_flg]" value="1"
                    @if(old('genre.add_production_flg') == 1) checked 
                    @elseif(empty(old('genre')) && $item->add_production_flg == 1) checked @endif >
                    <label for="add_production_flg" class="item_label">追加生産中</label>
                </div>
            </div>

            <div class="flex_form_item">
                <div class="flex_form_title">テキスト</div>
                <div class="flex_form_content">
                    {{ Form::textarea('text', old('text'), ['class' => 'notice_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
                </div>
            </div>

            <div class="regist_form_item">
                <div class="admin_form_name">画像</div>
                <div class="regist_file_button"><input type="file" id="file_btn_main" accept="image/*" onclick="fileCheckMain();" name="img"></div>
                <div class="img_tmb_main"></div>
            </div>

            <div class="regist_button">
                <a href="#" onclick="clickRegistButton()" class="regist_btn">更新</a>
            </div>
        </form>

    </div>

</div>



@endsection


