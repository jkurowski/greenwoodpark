@extends('layouts.page', ['body_class' => 'gallery-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="/galeria/">Galeria</a>
        </div>

        <section class="gallery">
            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />
            <div class="wrapper gallery__wrapper">
                <div class="gallery__categories-wrapper">
                    <h2 class="gallery__title scroll-animation">Galeria inwestycji<br>Greenwood Park</h2>
                    <div class="gallery__categories scroll-animation delay-1">
                        @foreach($galleries as $g)
                            <button class="gallery__category" data-category="gallery-{{ $g->id }}">
                                <picture>
                                    @if($g->file_webp)
                                        <source type="image/webp" srcset="{{asset('uploads/gallery/webp/'.$g->file_webp) }}">
                                    @endif
                                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/'.$g->file) }}">
                                    <img src="{{asset('uploads/gallery/'.$g->file) }}" alt="{{ $g->name }}">
                                </picture>
                                <span>{{ $g->name }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- possible types: image, video, iframe -->
                @foreach($galleries as $g)
                    <div class="gallery__items-wrapper" data-category="gallery-{{ $g->id }}">
                        <button class="gallery__back-button with-arrow with-arrow--left">Powrót</button>
                        <h2 class="gallery__title scroll-animation">{{ $g->name }}</h2>
                        <div class="gallery__items">
                            @foreach($g->photos as $image)
                            <div class="gallery__item"
                                 data-src="{{ asset('uploads/gallery/images/'.$image->file) }}"
                                 data-thumb="{{ asset('uploads/gallery/images/thumbs/'.$image->file) }}"
                                 data-type="image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="wrapper">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.greenwoodpark.pl/uploads/Wirtualny-Spacer/" border="0" title="" allowfullscreen style="border-radius:5px;border:0;margin-top:50px"></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
