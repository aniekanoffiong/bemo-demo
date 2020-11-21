@extends('layouts.base')

@section("content")
<div id="feature" class="bghide position-relative featured">
    <img class="img-fluid w-100"
        src="{{$page->featured_image ? asset($page->featured_image) :'/images/cda-interview-guide.jpg'}}">
    <div class="article_title">
        <div class="w-100">
            <span>CDA Interview Guide</span>
        </div>
    </div>
</div>
<div id="wrapper">
    <div class="container">
        {!! $content !!}
    </div>
</div>
@endsection
