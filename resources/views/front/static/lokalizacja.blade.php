@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-lokalizacja">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="/lokalizacja/">Lokalizacja</a>
        </div>

        <section class="text-img">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">Lokalizacja, która łączy spokój i wygodę</h2>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Greenwood Park powstaje przy ul. Jeździeckiej w Starej Miłosnej – jednej z najbardziej zielonych części
                            Warszawy. To miejsce, które pozwala cieszyć się ciszą i naturą, a jednocześnie zapewnia doskonałe połączenie z
                            centrum miasta. Dzięki bliskości trasy S2 oraz dogodnym przystankom autobusowym mieszkańcy szybko i wygodnie
                            dotrą do Śródmieścia czy innych dzielnic stolicy.</p>
                        <p>Codzienne życie w Greenwood Park to także komfort bliskości wszystkiego, co niezbędne. W okolicy znajdują się
                            liczne sklepy, supermarkety, restauracje i punkty usługowe, a także szkoły, przedszkola i placówki medyczne.
                            Nie brakuje tu także terenów rekreacyjnych – Mazowiecki Park Krajobrazowy, ścieżki rowerowe, a nawet park
                            linowy sprawiają, że aktywny wypoczynek jest zawsze na wyciągnięcie ręki.</p>
                        <p>Lokalizacja przy Jeździeckiej to idealne połączenie zielonej, spokojnej okolicy z miejską infrastrukturą i
                            szybkim dojazdem do centrum – właśnie dlatego Greenwood Park to inwestycja, która spełnia oczekiwania
                            nowoczesnych mieszkańców Warszawy.</p>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner slider slider--with-bar">
                        <img src="{{ asset('images/photos/photo-02.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

            </div>

        </section>  <section class="icons">
            <div class="wrapper">
                <div class="icons__list scroll-animation delay-3">

                    <div class="icon">
                        <div class="icon__wrapper">
                            <img src="{{ asset('images/icons/education-black.svg') }}" alt="" class="icon__img">
                        </div>
                        <span class="icon__text">Szkoły<br>i przedszkola</span>
                    </div>

                    <div class="icon">
                        <div class="icon__wrapper">
                            <img src="{{ asset('images/icons/motorway-black.svg') }}" alt="" class="icon__img">
                        </div>
                        <span class="icon__text">Bliskość<br>trasy S2</span>
                    </div>

                    <div class="icon">
                        <div class="icon__wrapper">
                            <img src="{{ asset('images/icons/park-black.svg') }}" alt="" class="icon__img">
                        </div>
                        <span class="icon__text">W otulinie Mazowieckiego<br>Parku Krajobrazowego</span>
                    </div>

                </div>
            </div>
        </section>  <section class="text-img text-img--left">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">Szybki dojazd<br>do centrum</h2>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Dojazd do centrum Warszawy zajmuje zaledwie kilkanaście minut, co pozwala cieszyć się spokojem podmiejskiej
                            okolicy bez rezygnacji z miejskich wygód. Bliskość trasy S2 i Wału Miedzeszyńskiego gwarantuje sprawną i
                            szybką komunikację samochodem. Dodatkowo liczne linie autobusowe zapewniają łatwy dostęp do różnych części
                            stolicy.</p>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-23.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

            </div>

        </section>  <section class="map">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />

            <div class="wrapper">

                <div class="map__content">
                    <div class="map__walk scroll-animation">

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Park linowy<i>1 minuta</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Supermarket<i>2 minuty</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Szkoła i przedszkole<i>2 minuty</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Przystanek autobusowy<i>5 minut</i></span>
                        </div>

                    </div>

                    <div class="map__car scroll-animation delay-1">

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Placówka medyczna<i>5 minut</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/walk-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Restauracje<i>2 minuty</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/car-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Park Krajobrazowy<i>5 minut</i></span>
                        </div>

                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/car-black.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Centrum Warszawy<i>20 minut</i></span>
                        </div>

                    </div>

                </div>

                <div class="map__image scroll-animation delay-2">
                    <div class="map__image-inner slider slider--with-bar">
                        <img src="{{ asset('images/map.jpg') }}" alt="GREENWOOD PARK" class="map__img">
                    </div>
                </div>

            </div>

        </section>  <section class="steps">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--left decor--bottom" />

            <div class="wrapper--x-small">

                <h2 class="steps__title scroll-animation">Blisko, wygodnie,<br>komfortowo</h2>

                <div class="steps__list">

                    <div class="steps__item scroll-animation">
                        <img src="{{ asset('images/photos/photo-24.jpg') }}" alt="" class="steps__img">
                        <div class="steps__content">
                            <h3 class="steps__name">
                                <span class="steps__name-number">01</span>
                                <span class="steps__name-text">Szkoły i przedszkola<br>w zasięgu ręki</span>
                            </h3>
                            <div class="steps__description">
                                <p>Rodziny z dziećmi z pewnością docenią bliskość sprawdzonych placówek edukacyjnych w okolicy ul.
                                    Jeździeckiej. W sąsiedztwie znajdują się zarówno przedszkola, jak i szkoły podstawowe oraz średnie, co
                                    znacząco ułatwia codzienną organizację. To wygoda, która przekłada się na większy komfort życia całej
                                    rodziny.</p>
                            </div>
                        </div>
                    </div>

                    <div class="steps__item scroll-animation">
                        <img src="{{ asset('images/photos/photo-25.jpg') }}" alt="" class="steps__img">
                        <div class="steps__content">
                            <h3 class="steps__name">
                                <span class="steps__name-number">02</span>
                                <span class="steps__name-text">Zielona okolica - przestrzeń<br>do odpoczynku i rekreacji</span>
                            </h3>
                            <div class="steps__description">
                                <p>Greenwood to nie tylko nazwa – to styl życia blisko natury. Otoczenie osiedla przy ul. Jeździeckiej
                                    wypełniają tereny zielone, parki oraz ścieżki rowerowe. To idealne miejsce na rodzinne spacery, jogging
                                    czy wycieczki rowerowe. Bliskość Mazowieckiego Parku Krajobrazowego i parków linowych sprawia, że aktywny
                                    wypoczynek staje się naturalną częścią codziennego życia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="steps__item scroll-animation">
                        <img src="{{ asset('images/photos/photo-26.jpg') }}" alt="" class="steps__img">
                        <div class="steps__content">
                            <h3 class="steps__name">
                                <span class="steps__name-number">03</span>
                                <span class="steps__name-text">Bezpieczna okolica z dostępem<br>do opieki zdrowotnej</span>
                            </h3>
                            <div class="steps__description">
                                <p>W okolicy inwestycji mieszkańcy mają łatwy dostęp do przychodni, gabinetów lekarskich oraz
                                    dentystycznych, aptek oraz innych placówek medycznych. Otoczenie osiedla jest spokojne i przyjazne, a jego
                                    kameralny charakter daje poczucie prywatności i bezpieczeństwa dla całej rodziny.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>  <section class="gallery-slider">

            <div class="wrapper">
                <h2 class="gallery-slider__title scroll-animation">Galeria inwestycji <br>GREENWOOD PARK</h2>
            </div>

            <div class="gallery-slider__slider slider slider--with-bar scroll-animation delay-1">

                <button class="gallery-slider__slide" data-src="{{ asset('images/photos/photo-01.jpg') }}">
                    <img src="{{ asset('images/photos/photo-01.jpg') }}" alt="" class="gallery-slider__image">
                </button>

                <button class="gallery-slider__slide" data-src="{{ asset('images/photos/photo-02.jpg') }}">
                    <img src="{{ asset('images/photos/photo-02.jpg') }}" alt="" class="gallery-slider__image">
                </button>

                <button class="gallery-slider__slide" data-src="{{ asset('images/photos/photo-03.jpg') }}">
                    <img src="{{ asset('images/photos/photo-03.jpg') }}" alt="" class="gallery-slider__image">
                </button>

                <button class="gallery-slider__slide" data-src="{{ asset('images/photos/photo-04.jpg') }}">
                    <img src="{{ asset('images/photos/photo-04.jpg') }}" alt="" class="gallery-slider__image">
                </button>

            </div>

            <div class="wrapper gallery-slider__pagination-wrapper scroll-animation delay-3">
                <div class="gallery-slider__pagination pagination-bar">
                    <div class="pagination-bar__progress">
                        <div class="pagination-bar__progress-bar"></div>
                    </div>
                </div>
            </div>

            <div class="gallery-slider__button scroll-animation delay-2">
                <a href="/galeria/" class="btn btn--primary">Zobacz więcej</a>
            </div>

        </section>

        <section class="contact">
            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--left decor--bottom" />
            <h2 class="contact-form__title scroll-animation">Skontaktuj<br>się z nami</h2>
            <div class="wrapper contact__wrapper">
                <div class="contact__data">
                    <h2 class="contact-data__title scroll-animation">Kontakt</h2>
                    <div class="contact-data__icons scroll-animation delay-2">
                        <p>Biuro sprzedaży</p>
                        <p>Godziny otwarcia: Poniedziałek - Piątek: 10:00 - 18:00</p>
                        <p><a href="tel:+48606292908"><svg xmlns="http://www.w3.org/2000/svg" width="20.558" height="20.558" viewBox="0 0 20.558 20.558">
                                    <g id="phone-call_2_" data-name="phone-call (2)" transform="translate(0)">
                                        <g id="Group_2452" data-name="Group 2452" transform="translate(0 0)">
                                            <path id="Path_13472" data-name="Path 13472" d="M17.546,3.009a10.279,10.279,0,1,0,3.012,7.267A10.279,10.279,0,0,0,17.546,3.009ZM15.567,14.318h0v0l-.521.517a2.741,2.741,0,0,1-2.587.74,9.108,9.108,0,0,1-2.645-1.185,12.221,12.221,0,0,1-2.087-1.682,12.315,12.315,0,0,1-1.559-1.891A9.593,9.593,0,0,1,5,8.443a2.741,2.741,0,0,1,.685-2.8l.61-.61a.435.435,0,0,1,.615,0h0L8.833,6.96a.435.435,0,0,1,0,.615h0L7.7,8.707a.922.922,0,0,0-.1,1.2,13.223,13.223,0,0,0,1.353,1.58,13.142,13.142,0,0,0,1.782,1.5.929.929,0,0,0,1.185-.1l1.093-1.11a.435.435,0,0,1,.615,0h0L15.565,13.7A.435.435,0,0,1,15.567,14.318Z" transform="translate(0 0)"/>
                                        </g>
                                    </g>
                                </svg>
                                606 292 908</a></p>
                        <p><a href="mailto:biuro@greenwoodpark.pl"><svg xmlns="http://www.w3.org/2000/svg" width="20.558" height="20.558" viewBox="0 0 20.558 20.558">
                                    <g id="Layer_2" data-name="Layer 2" transform="translate(0)">
                                        <g id="message" transform="translate(0)">
                                            <path id="Path_13471" data-name="Path 13471" d="M10.279,0A10.279,10.279,0,1,0,20.558,10.279,10.279,10.279,0,0,0,10.279,0ZM5.858,6.311H14.7a1.193,1.193,0,0,1,.781.289L10.3,9.757,5.461,6.379a1.2,1.2,0,0,1,.4-.067ZM15.9,13.046a1.2,1.2,0,0,1-1.2,1.2H5.858a1.2,1.2,0,0,1-1.2-1.2V7.512a1.191,1.191,0,0,1,.126-.535l5.244,3.664a.438.438,0,0,0,.479.015l5.386-3.276a1.221,1.221,0,0,1,.008.134Z"/>
                                        </g>
                                    </g>
                                </svg>
                                biuro@greenwoodpark.pl</a>
                        </p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="20.558" height="20.558" viewBox="0 0 20.558 20.558">
                                <path
                                    d="M10.279,20.558A10.279,10.279,0,1,1,20.558,10.279,10.28,10.28,0,0,1,10.279,20.558Zm0-16.965A5.091,5.091,0,0,1,15.37,8.684c0,2.812-5.091,8.28-5.091,8.28S5.188,11.5,5.188,8.684A5.091,5.091,0,0,1,10.279,3.593Zm0,3.068A1.931,1.931,0,1,1,8.348,8.592,1.931,1.931,0,0,1,10.279,6.662Z"
                                    fill-rule="evenodd" />
                            </svg>ul. Jeździecka 20</p>
                        <div class="row mt-4">
                            <div class="col-6">
                                <img src="{{ asset('images/kontakt_2.jpg') }}" alt="Nasi sprzedawcy">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/kontakt_1.jpg') }}" alt="Nasi sprzedawcy">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact__form">
                    @include('front.contact.form', ['page_name' => 'Kontakt'])
                </div>
            </div>
        </section>
    </main>
@endsection
