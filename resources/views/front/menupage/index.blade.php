@extends('layouts.page', ['body_class' => 'gallery-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="#">{{ $page->title }}</a>
        </div>

        <section class="gallery">
            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />
            <div class="wrapper">
                <h2 class="section-header__title">{{ $page->title }}</h2>
                {!! parse_text($page->content) !!}
            </div>
        </section>
    </main>
@endsection
