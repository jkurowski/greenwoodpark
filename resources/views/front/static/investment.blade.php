@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="my-3 my-lg-5">
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
                                O inwestycji
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END -> Breadcrumb -->

        <!-- Section About with slider -->
        <section class="margin-wrapper-smallest-invest">
            <div class="container">
                <div class="row">
                    <article class="col-12 col-lg-5 pb-5">
                        <div class="d-flex flex-column gap-5">
                            <div>
                                <!-- ICON on to of a header title  -->
                                <img src="{{ asset('images/logo-small.svg') }}" alt="Apartamenty Nowe Miasto logo" width="54" height="33" class="img-fluid about--icon hidden-first" loading="lazy" decoding="async" data-aos="fade-right" />
                                <!-- HEADER -->
                                <h1 class="text-uppercase header-1 fs-xl-3 px-0 mx-0" data-aos="fade-up">O INWESTYCJI</h1>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1" data-aos="fade-right" data-aos-delay="300">Nowe miasto</span>
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2" data-aos="fade-up" data-aos-delay="100">
                                <p class="fw-bolder">Inwestycja położona będzie przy ul. Orlej 12 w dzielnicy Nowe Miasto w Zgierzu, w najbliższym sąsiedztwie znajdują się: szkoły podstawowe, szkoły średnie oraz przedszkole. Ogromnym autem tej lokalizacji są liczne punkty aktywności sportowej takie jak; boisko, hala sportowa czy lodowisko.</p>
                                <p class="">Blisko osiedla znajduje się przystanek tramwajowy, z którego co 20 minut odjeżdża tramwaj do Łodzi, z jednego z przystanków w 5 minut dojdziemy do Manufaktury.</p>
                                <p>Dziesięciominutowym spacerem dojdziemy do stacji PKP Zgierz, skąd co godzinę odjeżdżają pociągi do Warszawy Centralnej, a co 45 minut na dworzec Łódź Fabryczna.</p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4" data-aos="fade-up" data-aos-delay="200" data-aos-offset="-220">DOSTĘPNE MIESZKANIA <img class="ps-4" src="{{ asset('images/arrow-right.svg') }}" height="15.644" alt="strzałka" /> </a>
                    </article>

                    <div class="col-lg-6 offset-lg-1 position-relative align-self-lg-center slider-container" data-aos="fade-left" data-aos-delay="400">
                        <!-- COPY IMAGES IN THE SAME ORDER TO slick-slider-about-nav  -->
                        <!-- MAKE FIRST IMG LOADING EAGER -->
                        <div class="slick-slider-about slick-slider-about-right">
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" width="3276" height="1966" alt="Nowe miasto" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" width="3276" height="1966" loading="lazy" decoding="async" alt="Nowe miasto 2" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" width="3276" height="1966" alt="Nowe miasto" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" width="3276" height="1966" loading="lazy" decoding="async" alt="Nowe miasto 2" />
                            </picture>
                        </div>
                        <!-- HERE -->
                        <div class="slick-slider-about-nav slick-slider-about-nav-right">
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" width="3276" height="1966" alt="Nowe miasto" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" width="3276" height="1966" loading="lazy" decoding="async" alt="Nowe miasto 2" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}" width="3276" height="1966" alt="Nowe miasto" />
                            </picture>
                            <picture>
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}" media="(min-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}" media="(max-width: 992px)" />
                                <source srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" media="(min-width: 992px)" />
                                <img src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}" width="3276" height="1966" loading="lazy" decoding="async" alt="Nowe miasto 2" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> Section About with slider -->

        <!-- Section Map -->
        <section class="margin-wrapper-xs">
            <div class="location-map px-0 container-lg">
                <div class="row gy-5">
                    <div class="col-12 text-center">
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
                        <h2 class="header-1 fs-xl-3 px-0 mx-0">LOKALIZACJA</h2>

                        <!-- SUBTITLE -->
                        <span class="subtitle-1">APARTAMENTY NOWE MIASTO</span>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="slider-box">
                            <div class="slick-slider-map">
                                <div>
                                    <div class="map-place" data-group="1">
                                        <img
                                                src="{{ asset('images/map-slider/clinic.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="PRZYCHODNIA"
                                        />
                                        <span>PRZYCHODNIA</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-place" data-group="2">
                                        <img
                                                src="{{ asset('images/map-slider/city-hall.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="URZĄD MIASTA"
                                        />
                                        <span>URZĄD MIASTA</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-place" data-group="3">
                                        <img
                                                src="{{ asset('images/map-slider/park.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="PARK MIEJSKI I PARK LINOWY"
                                        />
                                        <span>PARK MIEJSKI I PARK LINOWY</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="map-place" data-group="4">
                                        <img
                                                src="{{ asset('images/map-slider/mall.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="CENTRUM HANDLOWE"
                                        />
                                        <span>CENTRUM HANDLOWE</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-place" data-group="5">
                                        <img
                                                src="{{ asset('images/map-slider/kindergarten.png') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="EDUKACJA"
                                        />
                                        <span>EDUKACJA</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-place" data-group="6">
                                        <img
                                                src="{{ asset('images/map-slider/sports-hall.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="HALA SPORTOWA"
                                        />
                                        <span>SPORT</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-place" data-group="7">
                                        <img
                                                src="{{ asset('images/map-slider/pkp-station.svg') }}"
                                                width="63"
                                                height="63"
                                                decoding="async"
                                                loading="lazy"
                                                alt="DWORZEC PKP"
                                        />
                                        <span>DWORZEC PKP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-xl-1 map-container">
                        <div id="map2"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> Section Map -->

        <!-- Section About with slider - LEFT -->
        <section class="margin-wrapper-smallest">
            <div class="container">
                <div class="row about-slider-l">
                    <div
                            class="col-lg-6 order-1 position-relative align-self-lg-center slider-container position-relative"
                            data-aos="fade-right"
                            data-aos-delay="200"
                    >
                        <!-- COPY IMAGES IN THE SAME ORDER TO slick-slider-about-nav  -->
                        <div
                                class="slick-slider-about-l slick-slider-about-left"
                                dir="rtl"
                        >
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                        decoding="async"
                                        alt="wizualizacja wejscia"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        width="3276"
                                        height="1966"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto 2"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                        decoding="async"
                                        alt="wizualizacja wejscia"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        width="3276"
                                        height="1966"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto 2"
                                />
                            </picture>
                        </div>
                        <!-- HERE -->
                        <div
                                class="slick-slider-about-nav-l slick-slider-about-nav-left"
                                dir="rtl"
                        >
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                        decoding="async"
                                        alt="wizualizacja wejscia"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        width="3276"
                                        height="1966"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto 2"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/wizualizacja-wejscia@2x.png') }}"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                        decoding="async"
                                        alt="wizualizacja wejscia"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/nowe-miasto-2@2x.png') }}"
                                        width="3276"
                                        height="1966"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto 2"
                                />
                            </picture>
                        </div>
                    </div>
                    <article class="order-0 order-lg-2 col-12 col-lg-5 offset-lg-1 pb-5 mt-0 mt-sm-3 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex flex-column gap-5">
                            <div>
                                <!-- ICON on to of a header title  -->
                                <img src="{{ asset('images/logo-small.svg') }}" alt="Apartamenty Nowe Miasto logo" width="54" height="33" class="img-fluid about--icon" loading="lazy" decoding="async"/>
                                <!-- HEADER -->
                                <h3 class="text-uppercase header-1 fs-xl-3 px-0 mx-0">O INWESTYCJI</h3>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1">APARTAMENTY NOWE MIASTO</span>
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2">
                                <p class="fw-bolder">
                                    Nasza inwestycja to synonim komfortu i nowoczesności.
                                    Tworzymy przestrzenie, które łączą w sobie wysoką jakość
                                    wykonania z estetycznym designem.
                                </p>
                                <p>
                                    Dzięki zastosowaniu najnowszych technologii i materiałów,
                                    nasze apartamenty są nie tylko piękne, ale także
                                    funkcjonalne i trwałe. Nasz zespół dba o każdy detal, aby
                                    zapewnić Ci wygodę i bezpieczeństwo na najwyższym poziomie.
                                </p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4">
                            DOSTĘPNE MIESZKANIA
                            <img class="ps-4" src="{{ asset('images/arrow-right.svg') }}" height="15.644" alt="strzałka" />
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- END -> Section About with slider - LEFT -->

        <!-- QUESTIONS CARD -->
        <section class="question-card-section margin-wrapper-xs-card-2">
            <!-- <img src="{{ asset('images/fence-horizontal.svg') }}" class="left" alt="" srcset="" /> -->
            <div class="left-anim">
                <img src="{{ asset('images/anim/fence.svg') }}" width="138.43" height="54.423" class="fence" alt="" />
                <img src="{{ asset('images/anim/Rectangle.svg') }}" class="rect bounce-7-anim" width="96.61" height="53.458" alt="" />
            </div>
            @include('front.shared.contact')
        </section>
        <!-- END -> QUESTIONS CARD -->
    </main>
@endsection
@push('scripts')
    <style>
        .leaflet-marker-icon {
            border-radius: 50%;
        }
    </style>
    <script src="{{ asset('/js/leaflet2.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <script>
        const tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        const icons = [];
        for (let i = 0; i <= 7; i++) {
            if(i === 0){
                icons[i] = L.icon({
                    iconUrl: `{{ asset('images/mapicons/${i}.png') }}`,
                    shadowUrl: '',
                    iconAnchor: [36, 86]
                });
            } else {
                icons[i] = L.icon({
                    iconUrl: `{{ asset('images/mapicons/${i}.png') }}`,
                    shadowUrl: '',
                    iconSize: [40, 40],
                    iconAnchor: [20, 32]
                });
            }
        }

        const markers = [];
        markers.push(L.marker([51.85109819957367, 19.418445297865162], {icon: icons[0]}).bindPopup('Inwestycja'));

        @foreach($markers as $m)
        markers.push(L.marker([{{ $m->lat }}, {{ $m->lng }}], {icon: icons[{{ $m->group_id }}]}).bindPopup('{{ $m->name }}'));
        @endforeach

        const featureGroup = L.featureGroup(markers);

        const mapDiv = document.getElementById("map2");
        let maps = new L.Map(mapDiv, {
            center: [0, 0],
            zoom: 0,
            layers: [tileLayer, featureGroup]
        });

        maps.fitBounds(featureGroup.getBounds(), {
            padding: [50, 50]
        });

        maps.on('popupclose', function () {
            maps.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        });

        function debounce(func) {
            let timer;
            return function (event) {
                if (timer) clearTimeout(timer);
                timer = setTimeout(func, 100, event);
            };
        }

        window.addEventListener("resize", debounce(function (e) {
            maps.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }));

        const alwaysIncludedMarker = L.marker([51.85109819957367, 19.418445297865162], {icon: icons[0]}).bindPopup('Inwestycja');

        // Function to filter markers
        function filterMarkers(group) {
            featureGroup.clearLayers();
            featureGroup.addLayer(alwaysIncludedMarker);
            markers.forEach(marker => {
                if (group === null || marker.options.icon.options.iconUrl.includes(`/${group}.png`)) {
                    featureGroup.addLayer(marker);
                }
            });
            maps.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }

        // Add click event listeners to the divs
        document.querySelectorAll('.map-place').forEach(div => {
            div.addEventListener('click', function() {
                const group = this.getAttribute('data-group');
                filterMarkers(group);
            });
        });

        // Optionally add a reset button to show all markers
        const resetButton = document.getElementById('resetButton');
        if (resetButton) {
            resetButton.addEventListener('click', function() {
                filterMarkers(null);
            });
        }
    </script>
@endpush
