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
                                Udogodnienia
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END -> Breadcrumb -->

        <!-- About  -->
        <section class="margin-wrapper-smallest-100">
            <div class="container">
                <div class="row about">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-5">
                                <article class="about-common" data-aos="fade-up">
                                    <div class="d-flex flex-column gap-5">
                                        <div>
                                            <!-- ICON on to of a header title  -->
                                            <img
                                                    src="{{ asset('images/logo-small.svg') }}"
                                                    alt="Apartamenty Nowe Miasto logo"
                                                    width="54"
                                                    height="33"
                                                    class="img-fluid about--icon hidden-first"
                                                    loading="lazy"
                                                    decoding="async"
                                            />
                                            <!-- TITLE -->
                                            <h1 class="text-uppercase header-1 px-0 mx-0">
                                                UDOGODNIENIA
                                            </h1>
                                            <!-- SUBTITLE -->
                                            <span class="text-uppercase subtitle-1"
                                            >APARTAMENTY NOWE MIASTO</span
                                            >
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <!-- PARAGRAPH -->
                                            <p class="fw-bolder">
                                                W naszej inwestycji oferujemy szeroki wachlarz
                                                udogodnień, zaprojektowanych z myślą o komforcie i
                                                wygodzie mieszkańców.
                                            </p>
                                            <p>
                                                Dbamy o każdy detal, aby zapewnić wysoki standard
                                                życia, łącząc nowoczesne rozwiązania technologiczne z
                                                funkcjonalnymi przestrzeniami. Dzięki temu każdy
                                                mieszkaniec może cieszyć się wygodą i bezpieczeństwem
                                                na najwyższym poziomie.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div
                                    class="col-md-6 offset-md-1 position-relative about-common--img-box pt-0 pt-sm-5 pt-xl-0"
                            >
                                <picture>
                                    <source
                                            srcset="{{ asset('images/gallery-grid/galeria-hero.webp') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/galeria-hero@2x.webp') }}"
                                            media="(min-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/galeria-hero.png') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/galeria-hero@2x.png') }}"
                                            media="(min-width: 992px)"
                                    />
                                    <img
                                            src="{{ asset('images/gallery-grid/galeria-hero@2x.png') }}"
                                            alt="Udogodnienia Apartamentów Nowe Miasto"
                                            width="3276"
                                            height="1966"
                                            class="img-fluid about-common--img facilities-img"
                                            data-aos="fade-left"
                                            data-aos-delay="200"
                                    />
                                </picture>
                                <img
                                        src="{{ asset('images/big-fence.png') }}"
                                        srcset="{{ asset('images/big-fence.png') }} 1x, /{{ asset('images/big-fence@2x.png') }} 2x"
                                        class="img-fluid about-common--fence"
                                        alt=""
                                        width="269"
                                        height="337"
                                        loading="eager"
                                        decoding="async"
                                        data-aos="fade-up"
                                        data-aos-delay="600"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> About  -->

        <!-- FEATURES SECTION -->
        <section class="margin-wrapper-xs">
            <div class="container">
                <div class="row feature gy-5 justify-content-center">
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-1.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                alt=""
                                width="78.996"
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">Zielone Tereny</h3>
                            <p class="feature-box--text">
                                Nasze apartamenty otoczone są przestronnymi, zielonymi
                                terenami, które sprzyjają relaksowi i rekreacji na świeżym
                                powietrzu.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-2.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">MIEJSCA PARKINGOWE</h3>
                            <p class="feature-box--text">
                                Dla wygody mieszkańców oferujemy komfortowe i bezpieczne
                                miejsca parkingowe.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-3.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">DOGODNA LOKALIZACJA</h3>
                            <p class="feature-box--text">
                                Apartamenty znajdują się w optymalnej lokalizacji, zapewniając
                                łatwy dostęp do najważniejszych punktów miasta.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-4.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">WSPÓLNY PLAC ZABAW</h3>
                            <p class="feature-box--text">
                                Na terenie osiedla znajduje się wspólny plac zabaw, idealny
                                dla rodzin z dziećmi.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-5.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">Balkon, taras lub loggia</h3>
                            <p class="feature-box--text">
                                Każdy apartament posiada przestronny balkon, taras lub loggie,
                                gdzie można cieszyć się widokami i świeżym powietrzem.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-6.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">KOMÓRKI LOKATORSKIE</h3>
                            <p class="feature-box--text">
                                Do dyspozycji mieszkańców są także funkcjonalne, murowane
                                komórki lokatorskie, zapewniające dodatkową przestrzeń do
                                przechowywania.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-7.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">MONITORING</h3>
                            <p class="feature-box--text">
                                Cały teren osiedla jest objęty całodobowym monitoringiem, co
                                zwiększa poczucie bezpieczeństwa.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-8.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">ZAMKNIĘTE OSIEDLE</h3>
                            <p class="feature-box--text">
                                Nasze apartamenty znajdują się na zamkniętym osiedlu,
                                gwarantując prywatność i spokój.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-9.svg') }}"
                                data-aos="flip-right"
                                data-aos-offset="120"
                                width="78.996"
                                alt=""
                                srcset=""
                        />
                        <div class="feature-box--info">
                            <h3 class="feature-box--head">OGRÓDEK</h3>
                            <p class="feature-box--text">
                                Wybrane apartamenty oferują również prywatne ogródki, idealne
                                do relaksu i spotkań towarzyskich.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> FEATURES SECTION -->

        <!-- Section About with slider - LEFT -->
        <section class="about-wrapper-top">
            <div class="container">
                <div class="row about-slider-l">
                    <div
                            class="col-lg-6 order-1 position-relative align-self-lg-center slider-container position-relative"
                            data-aos="fade-left"
                            data-aos-delay="300"
                            data-aos-offset="120"
                    >
                        <!-- COPY IMAGES IN THE SAME ORDER TO slick-slider-about-nav  -->
                        <div
                                class="slick-slider-about-l slick-slider-about-left"
                                dir="rtl"
                        >
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        alt="Partk linowy"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        alt="Las"
                                        width="670"
                                        height="462"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        alt="Partk linowy"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        alt="Las"
                                        width="670"
                                        height="462"
                                        loading="lazy"
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
                                        srcset="{{ asset('images/gallery-grid/rope-park.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        alt="Partk linowy"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        alt="Las"
                                        width="670"
                                        height="462"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/rope-park@2x.png') }}"
                                        alt="Partk linowy"
                                        width="672"
                                        height="489"
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/forest@2x.png') }}"
                                        alt="Las"
                                        width="670"
                                        height="462"
                                        loading="lazy"
                                />
                            </picture>
                        </div>
                    </div>
                    <article
                            class="order-0 order-lg-2 col-12 col-lg-5 offset-lg-1 pb-5 mt-5 mt-lg-0"
                            data-aos="fade-up"
                            data-aos-offset="120"
                    >
                        <div class="d-flex flex-column gap-5">
                            <div>
                                <!-- ICON on to of a header title  -->
                                <img
                                        src="{{ asset('images/logo-small.svg') }}"
                                        alt="Apartamenty Nowe Miasto logo"
                                        width="54"
                                        height="33"
                                        class="img-fluid about--icon"
                                        loading="lazy"
                                        decoding="async"
                                />
                                <!-- HEADER -->
                                <h2 class="text-uppercase header-1 fs-xl-3 px-0 mx-0">
                                    OKOLICA
                                </h2>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1"
                                >APARTAMENTY NOWE MIASTO</span
                                >
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2">
                                <p class="fw-bolder">
                                    Charakteryzuje się spokojnym otoczeniem z dostępem do
                                    terenów zielonych i parków, co sprzyja relaksowi i aktywnemu
                                    wypoczynkowi.
                                </p>
                                <p>
                                    W pobliżu znajdują się również liczne sklepy, centrum
                                    handlowe oraz dogodna infrastruktura komunikacyjna, co
                                    zapewnia łatwy dostęp do niezbędnych usług i udogodnień​.
                                </p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4">
                            DOSTĘPNE MIESZKANIA
                            <img
                                    class="ps-4"
                                    src="{{ asset('images/arrow-right.svg') }}"
                                    height="15.644"
                                    alt="strzałka"
                            />
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- END -> Section About with slider - LEFT -->
    </main>
@endsection
