@extends('layouts.app')

@section('content')
<div class="news_flex">
    <div class="news_list">
        <div class="page_title">NEWS</div>
        <div class="detail_date">{{ $news->notice_date }}</div>
        <div class="detail_title">{{ $news->title }}</div>
        <div class="detail_content">{!! nl2br(e($news->content)) !!}</div>
    </div>

    @include('item.brand_list')

</div>


@endsection


@section('content_sp')
<div class="news_list_sp" style="margin-bottom: 50px;">
    <div class="page_title">NEWS</div>
    <div class="detail_date">{{ $news->notice_date }}</div>
    <div class="detail_title">{{ $news->title }}</div>
    <div class="detail_content_sp">{!! nl2br(e($news->content)) !!}</div>
    @if (!$max_flg) <a href="{{ route('news.show', ['id' => $back_id]) }}" class="back_news"><< 前のニュース</a> @endif
    @if (!$min_flg) <a href="{{ route('news.show', ['id' => $next_id]) }}" class="next_news">次のニュース >></a> @endif
</div>


@include('item.brand_list_sp')
@endsection