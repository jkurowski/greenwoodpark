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
                            <li class="breadcrumb-item active" aria-current="page">
                                Aktualności
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
                <div class="row">
                    <div class="col-12 text-center mb-5 pb-5">
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
                        <h2 class="header-1 fs-xl-3 px-0 mx-0">AKTUALNOŚCI</h2>
                        <!-- SUBTITLE -->
                        <span class="subtitle-1">APARTAMENTY NOWE MIASTO</span>
                    </div>
                </div>
                @foreach ($articles as $n)
                    <div class="news-list-item row row-gap-30 flex">
                        <div class="col-12">
                            <article class="shadow-post-article">
                                <div class="row {{ $loop->index % 2 == 1 ? 'flex-row-reverse' : '' }}">
                                    <div class="col-12 col-lg-8 col-xl-7">
                                        <div class="h-100">
                                            <a href="{{route('front.article.show', $n->slug)}}" title="{{ $n->title }}" itemprop="url">
                                                <picture>
                                                    @if($n->file_webp)
                                                        <source type="image/webp" srcset="{{asset('uploads/articles/thumbs/webp/'.$n->file_webp) }}">
                                                    @endif
                                                    <source type="image/jpeg" srcset="{{asset('uploads/articles/thumbs/'.$n->file) }}">

                                                    <img src="{{asset('uploads/articles/thumbs/'.$n->file) }}" alt="@if($n->file_alt){{$n->file_alt}}@else{{$n->title}}@endif" loading="lazy" decoding="async" fetchpriority="low" class="w-100 h-auto object-fit-cover">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-5 d-flex align-items-center">
                                        <div class="d-flex flex-column justify-content-between p-3 py-lg-3">
                                            <div>
                                                <h2 class="fs-24 ff-secondary text-secondary text-balance mb-4">
                                                    <a href="{{route('front.article.show', $n->slug)}}" itemprop="url"><span itemprop="name headline">{{ $n->title }}</span></a>
                                                </h2>
                                                <span class="d-block fs-10 text-secondary ff-secondary fw-900 mb-30">{{ $n->posted_at }}</span>
                                                <div class="mb-30">
                                                    {{ $n->content_entry }}
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{route('front.article.show', $n->slug)}}" class="btn btn-main mt-5">
                                                    czytaj więcej
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
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- END -> About  -->
    </main>
@endsection
