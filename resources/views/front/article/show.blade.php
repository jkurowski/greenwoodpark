@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')

    <main class="py-3 py-lg-5">
        <!-- Breadcrumb -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Strona główna</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{route('front.article.index')}}">Aktualności</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$article->title}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END -> Breadcrumb -->

        <!-- About  -->
        <section class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center mb-3">
                        <!-- ICON on to of a header title  -->
                        <img
                            src="{{ asset('images/logo-small.svg') }}"
                            alt="Apartamenty Nowe Miasto logo"
                            width="54"
                            height="33"
                            class="img-fluid about--icon hidden-first"
                            loading="lazy"
                            decoding="async"
                            data-aos="fade-right"
                        />
                        <!-- HEADER -->
                        <h2 class="header-1 fs-xl-3 px-0 mx-0">{{$article->title}}</h2>
                        <!-- SUBTITLE -->
                        <span class="subtitle-1">{{$article->posted_at}}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="text-secondary text-center post-hero-padding">
                            <picture>
                                @if($article->file_webp)
                                    <source type="image/webp" srcset="{{asset('uploads/articles/webp/'.$article->file_webp) }}">
                                @endif
                                <source type="image/jpeg" srcset="{{asset('uploads/articles/'.$article->file) }}">
                                <img src="{{asset('uploads/articles/'.$article->file) }}" alt="@if($article->file_alt){{$article->file_alt}}@else{{$article->title}}@endif" class="img-fluid mt-4 mt-md-30">
                            </picture>
                        </div>

                        <div class="post-content pt-5">
                            <p>{{ $article->content_entry }}</p>
                            <p>{!! parse_text($article->content, true) !!}</p>
                        </div>

                        <a href="{{route('front.article.index')}}" class="btn btn-main mt-5">
                            WRÓĆ DO LISTY
                            <img
                                class="ps-4"
                                src="{{ asset('images/arrow-right.svg') }}"
                                height="15.644"
                                alt="strzałka w prawo"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> About  -->
    </main>
@endsection
