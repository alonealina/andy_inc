@extends('layouts.app')

@section('content')
<div class="recruit_flex">
    <div class="recruit_left">
        <div class="recruit_list">
            <div class="recruit_div recruit1"><img src="{{ asset('img/recruit1.jpg') }}" class="recruit_img" alt=""></div>
            <div class="recruit_div recruit2"><img src="{{ asset('img/recruit2.jpg') }}" class="recruit_img" alt=""></div>
            <div class="recruit_div recruit3"><img src="{{ asset('img/recruit3.jpg') }}" class="recruit_img" alt=""></div>
            <div class="recruit_div recruit4"><img src="{{ asset('img/recruit4.jpg') }}" class="recruit_img" alt=""></div>
            <div class="recruit_div recruit5"><img src="{{ asset('img/recruit5.jpg') }}" class="recruit_img" alt=""></div>
            <div class="recruit_div recruit6"><img src="{{ asset('img/recruit6.jpg') }}" class="recruit_img" alt=""></div>
        </div>
        <div class="recruit_detail" id="recruit1">
            <div class="page_title">営業(コンサルティング営業)</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                顧客への営業活動及び企画 /<br>
                調査などプロモーション全般や雑誌媒体に掲載する広告会社の管理<br>
                契約店舗の販売管理 / タブレットを使用した営業活動<br>
                国内出張(契約店舗訪問・キャスト様のバースデーイベント等への訪問<br>
                主に・・・北海道・東京。福岡など)
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・学歴不問<br>
                ・基本的なPCスキル必須<br>
                ・未経験者歓迎
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

        <div class="recruit_detail" id="recruit2" hidden>
            <div class="page_title">企画・広報</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                有名キャストやyoutuberをモデルに起用した、年6冊発行全国販売の雑誌媒体<br>
                ブランドカタログ・WEBなどの撮影の進行 / キャスティング業務<br>
                ファッションショー等のイベント進行および企画<br>
                弊社管理SNS(Instagram、Twitter)の発信等をお願いします。
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・学歴不問<br>
                ・基本的なPCスキル必須<br>
                ・未経験者歓迎<br>
                ★下記の方優遇します。<br>
                ・SNSの基礎知識をお持ちの方
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

        <div class="recruit_detail" id="recruit3" hidden>
            <div class="page_title">アパレルWEB通販サイトの運営</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                通販サイトの運営 / お客様対応 (問い合わせメールや電話対応)<br>
                弊社商品の魅力やイメージが伝わるようにサイト更新や構築<br>
                SNSと連動した広告の出稿や運営戦略をお任せします。<br>
                ★売上に応じて広告戦略を考えていただくため<br>
                幅広いマーケティングの知識が身に付きます。
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・学歴不問<br>
                ・ECサイト運営の実務経験がある方<br>
                ・ファッション業界での販売経験者<br>
                ★下記の方優遇します。<br>
                ・Photoshop、illustrator、FFFTPなどが扱える方<br>
                ・HTML、cssの基礎知識の有る方
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

        <div class="recruit_detail" id="recruit4" hidden>
            <div class="page_title">ファッションデザイナー</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                自社ブランドのドレスデザイン / プロモーション業務<br>
                海外出張(EU・USA・アジア等)をお任せします。<br>
                先輩デザイナーの元で学んでいただき、<br>
                先輩の仕事をみて流れを覚えていただきます。<br>
                ゆくゆくはサンプルの依頼から商品のオーダーまで全てお任せします。<br>
                <br>
                ・商品オーダーの流れ<br>
                海外の工場へサンプルの依頼を行い、各デザインの生地を指定し<br>
                サンプルを作成してもらいます。<br>
                サンプルができたら試着をし微調整を行いオーダーします。<br>
                工場は海外にあるためオーダー等の仕事は基本海外で行っていただきます。<br>
                <br>
                他にもWEBの撮影や全国発売の雑誌媒体の進行も
                <br>デザイナーを中心に行っており<br>
                ブランドに合うモデルやドレスの選定、構成を考えていただきます。<br>
                ファッションショーに出展する際もドレスやショーで流す音楽等<br>
                様々な事をデザイナーを中心に決めています。
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・学歴不問<br>
                ・未経験者歓迎<br>
                ・ドレスや洋服が大好きな方、様々なブランド知識のある方
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                ・デザイン画添付※郵送でも可<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

        <div class="recruit_detail" id="recruit5" hidden>
            <div class="page_title">グラフィックデザイナー</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                有名キャストやyoutuberをモデルに起用した、<br>
                年6冊発行全国販売の雑誌媒体のディレクションやページデザイン業務、<br>
                画像修正(レタッチ)等、WEBバナーSNS用画像の作成をお願いします。<br>
                <br>
                企画会議で交わされた意見を軸に、デザインのコンセプトを固め、<br>
                ラフデザインを作成。<br>
                撮影後、画像にレタッチを施し、ラフデザインに流し込み、<br>
                1ページ1ページのデザインを完成させます。<br>
                <br>
                完成したデザインは印刷会社へ入稿し、出力された色校正を参考に<br>
                色合いやテキストに間違いがないかを確認し、修正を加えていきます。<br>
                ★社内にて入稿までを行うので雑誌制作を1から学べます。<br>
                <br>
                デザイナー業務に慣れてきたら、制作チームを引っ張る<br>
                ディレクターとしての業務もお任せしていきます。
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・学歴不問<br>
                ・Illustrator・Photoshopの実務経験(1年以上)ある方<br>
                ★下記の方優遇します<br>
                ・自身でもアプリで画像加工を行う方<br>
                ・InDesignが使える方
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                ・ポートフォリオ添付※郵送でも可<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

        <div class="recruit_detail" id="recruit6" hidden>
            <div class="page_title">店頭販売</div>
            <div class="company_flex">
                <div class="recruit_title">仕事内容</div>
                接客販売 / 店頭のディスプレイやレイアウトの売り場の演出<br>
                商品の仕上げ・検品 / SNSの発信等<br>
                新店舗のためオープニングスタッフとなります。<br>
                ※店舗の営業時間は14時～19時です。<br>
            </div>
            <div class="company_flex">
                <div class="recruit_title">応募資格</div>
                ・販売経験者<br>
                ★下記の方優遇します<br>
                ・ファッション業界での販売経験者<br>
            </div>
            <div class="company_flex">
                <div class="recruit_title">給与</div>
                200,000円～220,000円　☆皆勤手当て有(1万円)<br>
                賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
                学歴・経験・スキル考慮、当社規定により決定<br>
                ◎試用期間 3～6ヶ月
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
            </div>
            <div class="company_flex">
                <div class="recruit_title">休日・休暇</div>
                日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
                夏季休暇、年末年始休暇<br>
                社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
            </div>
            <div class="company_flex">
                <div class="recruit_title">福利厚生</div>
                交通費支給<br>
                雇用保険 / 厚生年金 / 健康保険<br>
                服装・ヘアカラー・ネイル自由
            </div>
            <div class="company_flex">
                <div class="recruit_title">勤務地</div>
                株式会社アンディ<br>
                〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
                最寄駅 : 各線「日本橋」駅より徒歩3分
            </div>
            <div class="company_flex">
                <div class="recruit_title">ご応募</div>
                info@andy-creative.com<br>
                メールにてご応募の際は<br>
                ・氏名(フリガナ)<br>
                ・年齢<br>
                ・電話番号<br>
                以上をご記載の上、お送りください。<br>
                弊社にて確認後、改めてご連絡します。
            </div>
        </div>

    </div>

    @include('item.brand_list')
</div>

@endsection


@section('content_sp')

<div class="recruit_sp">
    <div class="recruit_list">
        <div class="recruit_div_sp recruit1"><img src="{{ asset('img/recruit1.jpg') }}" class="recruit_img" alt=""></div>
        <div class="recruit_div_sp recruit2"><img src="{{ asset('img/recruit2.jpg') }}" class="recruit_img" alt=""></div>
        <div class="recruit_div_sp recruit3"><img src="{{ asset('img/recruit3.jpg') }}" class="recruit_img" alt=""></div>
        <div class="recruit_div_sp recruit4"><img src="{{ asset('img/recruit4.jpg') }}" class="recruit_img" alt=""></div>
        <div class="recruit_div_sp recruit5"><img src="{{ asset('img/recruit5.jpg') }}" class="recruit_img" alt=""></div>
        <div class="recruit_div_sp recruit6"><img src="{{ asset('img/recruit6.jpg') }}" class="recruit_img" alt=""></div>
    </div>
    <div class="recruit_detail_sp" id="recruit1">
        <div class="page_title">営業(コンサルティング営業)</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            顧客への営業活動及び企画 /<br>
            調査などプロモーション全般や雑誌媒体に掲載する広告会社の管理<br>
            契約店舗の販売管理 / タブレットを使用した営業活動<br>
            国内出張(契約店舗訪問・キャスト様のバースデーイベント等への訪問<br>
            主に・・・北海道・東京。福岡など)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・学歴不問<br>
            ・基本的なPCスキル必須<br>
            ・未経験者歓迎
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>

    <div class="recruit_detail_sp" id="recruit2" hidden>
        <div class="page_title">企画・広報</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            有名キャストやyoutuberをモデルに起用した、年6冊発行全国販売の雑誌媒体<br>
            ブランドカタログ・WEBなどの撮影の進行 / キャスティング業務<br>
            ファッションショー等のイベント進行および企画<br>
            弊社管理SNS(Instagram、Twitter)の発信等をお願いします。
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・学歴不問<br>
            ・基本的なPCスキル必須<br>
            ・未経験者歓迎<br>
            ★下記の方優遇します。<br>
            ・SNSの基礎知識をお持ちの方
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>

    <div class="recruit_detail_sp" id="recruit3" hidden>
        <div class="page_title">アパレルWEB通販サイトの運営</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            通販サイトの運営 / お客様対応 (問い合わせメールや電話対応)<br>
            弊社商品の魅力やイメージが伝わるようにサイト更新や構築<br>
            SNSと連動した広告の出稿や運営戦略をお任せします。<br>
            ★売上に応じて広告戦略を考えていただくため<br>
            幅広いマーケティングの知識が身に付きます。
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・学歴不問<br>
            ・ECサイト運営の実務経験がある方<br>
            ・ファッション業界での販売経験者<br>
            ★下記の方優遇します。<br>
            ・Photoshop、illustrator、FFFTPなどが扱える方<br>
            ・HTML、cssの基礎知識の有る方
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>

    <div class="recruit_detail_sp" id="recruit4" hidden>
        <div class="page_title">ファッションデザイナー</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            自社ブランドのドレスデザイン / プロモーション業務<br>
            海外出張(EU・USA・アジア等)をお任せします。<br>
            先輩デザイナーの元で学んでいただき、<br>
            先輩の仕事をみて流れを覚えていただきます。<br>
            ゆくゆくはサンプルの依頼から商品のオーダーまで全てお任せします。<br>
            <br>
            ・商品オーダーの流れ<br>
            海外の工場へサンプルの依頼を行い、各デザインの生地を指定し<br>
            サンプルを作成してもらいます。<br>
            サンプルができたら試着をし微調整を行いオーダーします。<br>
            工場は海外にあるためオーダー等の仕事は基本海外で行っていただきます。<br>
            <br>
            他にもWEBの撮影や全国発売の雑誌媒体の進行も
            <br>デザイナーを中心に行っており<br>
            ブランドに合うモデルやドレスの選定、構成を考えていただきます。<br>
            ファッションショーに出展する際もドレスやショーで流す音楽等<br>
            様々な事をデザイナーを中心に決めています。
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・学歴不問<br>
            ・未経験者歓迎<br>
            ・ドレスや洋服が大好きな方、様々なブランド知識のある方
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            ・デザイン画添付※郵送でも可<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>

    <div class="recruit_detail_sp" id="recruit5" hidden>
        <div class="page_title">グラフィックデザイナー</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            有名キャストやyoutuberをモデルに起用した、<br>
            年6冊発行全国販売の雑誌媒体のディレクションやページデザイン業務、<br>
            画像修正(レタッチ)等、WEBバナーSNS用画像の作成をお願いします。<br>
            <br>
            企画会議で交わされた意見を軸に、デザインのコンセプトを固め、<br>
            ラフデザインを作成。<br>
            撮影後、画像にレタッチを施し、ラフデザインに流し込み、<br>
            1ページ1ページのデザインを完成させます。<br>
            <br>
            完成したデザインは印刷会社へ入稿し、出力された色校正を参考に<br>
            色合いやテキストに間違いがないかを確認し、修正を加えていきます。<br>
            ★社内にて入稿までを行うので雑誌制作を1から学べます。<br>
            <br>
            デザイナー業務に慣れてきたら、制作チームを引っ張る<br>
            ディレクターとしての業務もお任せしていきます。
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・学歴不問<br>
            ・Illustrator・Photoshopの実務経験(1年以上)ある方<br>
            ★下記の方優遇します<br>
            ・自身でもアプリで画像加工を行う方<br>
            ・InDesignが使える方
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            ・ポートフォリオ添付※郵送でも可<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>

    <div class="recruit_detail_sp" id="recruit6" hidden>
        <div class="page_title">店頭販売</div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">仕事内容</div>
            接客販売 / 店頭のディスプレイやレイアウトの売り場の演出<br>
            商品の仕上げ・検品 / SNSの発信等<br>
            新店舗のためオープニングスタッフとなります。<br>
            ※店舗の営業時間は14時～19時です。<br>
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">応募資格</div>
            ・販売経験者<br>
            ★下記の方優遇します<br>
            ・ファッション業界での販売経験者<br>
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">給与</div>
            200,000円～220,000円　☆皆勤手当て有(1万円)<br>
            賞与(ボーナス)2021年夏実績 約3.46ヶ月支給<br>
            学歴・経験・スキル考慮、当社規定により決定<br>
            ◎試用期間 3～6ヶ月
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務時間</div>10：00～19：00 実働8時間 (休憩1時間)
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">休日・休暇</div>
            日・祝　完全休み / 週1回、自由休み　=　週休2日制 / 有給休暇有、GW<br>
            夏季休暇、年末年始休暇<br>
            社員旅行(海外・・・ハワイ、ラスベガス、シンガポール等) / 各約1週間
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">福利厚生</div>
            交通費支給<br>
            雇用保険 / 厚生年金 / 健康保険<br>
            服装・ヘアカラー・ネイル自由
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">勤務地</div>
            株式会社アンディ<br>
            〒542-0077 大阪市中央区道頓堀１丁目東5-21-B1<br>
            最寄駅 : 各線「日本橋」駅より徒歩3分
        </div>
        <div class="company_flex_sp">
            <div class="recruit_title_sp">ご応募</div>
            info@andy-creative.com<br>
            メールにてご応募の際は<br>
            ・氏名(フリガナ)<br>
            ・年齢<br>
            ・電話番号<br>
            以上をご記載の上、お送りください。<br>
            弊社にて確認後、改めてご連絡します。
        </div>
    </div>


    @include('item.brand_list_sp')
</div>

@endsection