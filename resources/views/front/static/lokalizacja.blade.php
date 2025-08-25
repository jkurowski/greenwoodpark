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
                <a href="/galeria.html" class="btn btn--primary">Zobacz więcej</a>
            </div>

        </section>  <section class="contact-form">

            <h2 class="contact-form__title scroll-animation">Skontaktuj<br>się z nami</h2>

            <div class="wrapper--medium contact-form__wrapper">

                <div class="contact-form__image scroll-animation delay-2">
                    <img src="{{ asset('images/photos/photo-19.jpg') }}" alt="" class="contact-form__img" />
                </div>

                <div class="contact-form__content scroll-animation">
                    <h3 class="contact-form__form-title">Formularz kontaktowy</h3>
                    <form class="form" action="">
                        <div class="input input--text">
                            <label for="name">Imię</label>
                            <input type="text" id="name" name="name" />
                        </div>
                        <div class="input input--text">
                            <label for="email">Adres e-mail</label>
                            <input type="email" id="email" name="email" />
                        </div>
                        <div class="input input--text">
                            <label for="phone">Telefon</label>
                            <input type="text" id="phone" name="phone" />
                        </div>
                        <div class="input input--textarea">
                            <label for="message">Wiadomość</label>
                            <textarea id="message" name="message"
                                      placeholder="Proszę o więcej szczegółów dotyczących mieszkania nr... oraz propozycję terminu spotkania"></textarea>
                        </div>
                        <div class="form__agreements">
                            <div class="input input--checkbox">
                                <input type="checkbox" id="privacy" name="privacy" />
                                <label for="privacy">Wyrażam zgodę na przetwarzanie przez Greenwood II sp. z o.o. z siedzibą przy ul.
                                    Henryka Dembińskiego 13, 01-644 w Warszawie, moich danych osobowych zawartych w niniejszym formularzu w
                                    celu umożliwienia kontaktu oraz przekazywania materiałów marketingowych i promocyjnych dotyczących
                                    inwestycji realizowanych przez Spółkę.</label>
                            </div>
                            <div class="input input--checkbox">
                                <input type="checkbox" id="privacy-2" name="privacy-2" />
                                <label for="privacy-2">Wyrażam zgodę na otrzymywanie od Greenwood II sp. z o.o. drogą elektroniczną na
                                    wskazany przeze mnie adres e-mail informacji handlowej dotyczących produktów oferowanych przez Greenwood
                                    II sp. z o.o. w rozumieniu art. 10 ust. 1 Ustawy z dnia 18 lipca 2002 roku o świadczeniu usług drogą
                                    elektroniczną.</label>
                            </div>
                            <div class="input input--checkbox">
                                <input type="checkbox" id="privacy-3" name="privacy-3" />
                                <label for="privacy-3">Wyrażam zgodę na otrzymywanie od Greenwood II sp. z o.o. drogą elektroniczną na
                                    wskazany przeze mnie adres e-mail informacji handlowej dotyczących produktów oferowanych przez Greenwood
                                    II sp. z o.o. w rozumieniu art. 10 ust. 1 Ustawy z dnia 18 lipca 2002 roku o świadczeniu usług drogą
                                    elektroniczną.</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn--primary form__submit">Wyślij</button>
                    </form>
                </div>

            </div>

        </section>
    </main>
@endsection
