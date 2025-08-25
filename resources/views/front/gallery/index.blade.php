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

                        <button class="gallery__category" data-category="wizualizacje">
                            <img src="{{ asset('images/photos/thumb/photo-02.jpg') }}" alt="GREENWOOD PARK">
                            <span>Wizualizacje</span>
                        </button>

                        <button class="gallery__category" data-category="wizualizacje-wnetrz">
                            <img src="{{ asset('images/photos/thumb/photo-06.jpg') }}" alt="GREENWOOD PARK">
                            <span>Wizualizacje wnętrz</span>
                        </button>

                        <button class="gallery__category" data-category="budowa">
                            <img src="{{ asset('images/photos/thumb/photo-22.jpg') }}" alt="GREENWOOD PARK">
                            <span>Postęp budowy</span>
                        </button>

                        <button class="gallery__category" data-category="filmy">
                            <img src="{{ asset('images/photos/thumb/photo-11.jpg') }}" alt="GREENWOOD PARK">
                            <span>Filmy</span>
                        </button>

                    </div>
                </div>

                <!-- possible types: image, video, iframe -->

                <div class="gallery__items-wrapper" data-category="wizualizacje">
                    <button class="gallery__back-button with-arrow with-arrow--left">Powrót</button>
                    <h2 class="gallery__title scroll-animation">Wizualizacje</h2>
                    <div class="gallery__items">
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-01.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-01.jpg') }}"
                             data-type="image">
                        </div>
                    </div>
                </div>

                <div class="gallery__items-wrapper" data-category="wizualizacje-wnetrz">
                    <button class="gallery__back-button with-arrow with-arrow--left">Powrót</button>
                    <h2 class="gallery__title scroll-animation">Wizualizacje wnętrz</h2>
                    <div class="gallery__items">
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-01.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-01.jpg') }}"
                             data-type="image">
                        </div>
                    </div>
                </div>

                <div class="gallery__items-wrapper" data-category="budowa">
                    <button class="gallery__back-button with-arrow with-arrow--left">Powrót</button>
                    <h2 class="gallery__title scroll-animation">Postęp budowy</h2>
                    <div class="gallery__items">
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-01.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-01.jpg') }}"
                             data-type="image">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-02.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-02.jpg') }}"
                             data-type="image">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-03.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-03.jpg') }}"
                             data-type="image">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-04.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-04.jpg') }}"
                             data-type="image">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-05.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-05.jpg') }}"
                             data-type="image">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-06.jpg') }}" data-thumb="{{ asset('images/photos/thumb/photo-06.jpg') }}"
                             data-type="image">
                        </div>
                    </div>
                </div>

                <div class="gallery__items-wrapper" data-category="filmy">
                    <button class="gallery__back-button with-arrow with-arrow--left">Powrót</button>
                    <h2 class="gallery__title scroll-animation">Filmy</h2>
                    <div class="gallery__items">
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-01.jpg') }}" data-type="image"
                             data-thumb="{{ asset('images/photos/thumb/photo-01.jpg') }}">
                        </div>
                        <div class="gallery__item" data-src="{{ asset('images/photos/photo-02.jpg') }}" data-type="image"
                             data-thumb="{{ asset('images/photos/thumb/photo-02.jpg') }}">
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
@endsection
