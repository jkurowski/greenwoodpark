@extends('layouts.page', ['body_class' => 'gallery-page'])

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
                                Galeria
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
                    <div class="col-12 position-relative">
                        <img
                                src="{{ asset('images/fence-horizontal.svg') }}"
                                width="169"
                        height="72"
                        alt=""
                        class="about-common--fence-horizontal"
                        loading="lazy"
                        decoding="async"
                        />
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-up">
                                <article class="about-common">
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
                                                galeria
                                            </h1>
                                            <!-- SUBTITLE -->
                                            <span class="text-uppercase subtitle-1"
                                            >APARTAMENTY NOWE MIASTO</span
                                            >
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <!-- PARAGRAPH -->
                                            <p class="fw-bolder">
                                                Zapraszamy do obejrzenia naszej galerii, gdzie
                                                znajdziesz zdjęcia prezentujące nasze nowoczesne
                                                apartamenty oraz ich otoczenie.
                                            </p>
                                            <p>
                                                Przekonaj się, jak starannie zaprojektowane wnętrza,
                                                liczne udogodnienia i zielone tereny tworzą komfortowe
                                                i estetyczne miejsce do życia. Zobacz, jak może
                                                wyglądać Twoje przyszłe mieszkanie!
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
                                            srcset="{{ asset('images/gallery-grid/gallery-hero-top.webp') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/gallery-hero-top@2x.webp') }}"
                                            media="(min-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/gallery-hero-top.png') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/gallery-grid/gallery-hero-top@2x.png') }}"
                                            media="(min-width: 992px)"
                                    />
                                    <img
                                            src="{{ asset('images/gallery-grid/gallery-hero-top@2x.png') }}"
                                            class="img-fluid about-common--img"
                                            alt="Galeria Apartamentów Nowe Miasto"
                                            width="3276"
                                            height="2494"
                                            data-aos="fade-left"
                                            data-aos-delay="200"
                                    />
                                </picture>
                                <img
                                        src="{{ asset('images/big-fence.png') }}"
                                        srcset="{{ asset('images/big-fence.png') }} 1x, {{ asset('images/big-fence@2x.png') }} 2x"
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

        <!-- Galleria -->

        <section class="gallery margin-wrapper-xs">
            <div class="container">
                <div class="d-flex flex-column gap-5 align-items-start">
                    <div class="nav nav-pills nav-btn-container" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                        <button class="active tab" id="v-pills-visual-tab" data-bs-toggle="pill" data-bs-target="#v-pills-visual" type="button" role="tab" aria-controls="v-pills-visual" aria-selected="true">WIZUALIZACJE</button>

                        <button class="tab" id="v-pills-interior-tab" data-bs-toggle="pill" data-bs-target="#v-pills-interior" type="button" role="tab" aria-controls="v-pills-interior" aria-selected="false">WNĘTRZA</button>

                        <button class="tab" id="v-pills-area-tab" data-bs-toggle="pill" data-bs-target="#v-pills-area" type="button" role="tab" aria-controls="v-pills-area" aria-selected="false">ZDJĘCIA Z BUDOWY</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active gallery" id="v-pills-visual" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="gallery-grid">
                                <div class="row gx-4 gy-4" id="gallery">
                                    <div class="col-md-8">
                                        <div class="row gx-4 gy-4">
                                            <!-- 1 - TOP -->
                                            <a
                                                    href="{{ asset('images/gallery-grid/nowe-miasto-2.png') }}"
                                                    class="glightbox"
                                            >
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
                                                            alt="Galeria Apartamentów Nowe Miasto"
                                                            width="3276"
                                                            height="1966"
                                                    />
                                                </picture>
                                            </a>
                                            <div class="col-6">
                                                <!-- 1 LEFT BOTTOM -->
                                                <a href="{{ asset('images/wizualizacja-inwestycji.jpg') }}" class="glightbox">
                                                    <picture>
                                                        <img
                                                                src="{{ asset('images/wizualizacja-inwestycji-gallery.jpg') }}"
                                                                alt="Galeria Apartamentów Nowe Miasto"
                                                                width="780"
                                                                height="505"
                                                        />
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <!-- 2 LEFT BOTTOM -->
                                                <a
                                                        href="{{ asset('images/gallery-grid/galeria-hero.png') }}"
                                                        class="glightbox"
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
                                                                alt="Galeria Apartamentów Nowe Miasto"
                                                                width="3276"
                                                                height="1966"
                                                        />
                                                    </picture>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row gy-4">
                                            <div class="col-12">
                                                <!-- 1 TOP RIGHT -->
                                                <a
                                                        href="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}"
                                                        class="glightbox"
                                                >
                                                    <picture>
                                                        <source
                                                                srcset="{{ asset('images/gallery-grid/o-inwestycji-1.webp') }}"
                                                                media="(max-width: 992px)"
                                                        />
                                                        <source
                                                                srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.webp') }}"
                                                                media="(min-width: 992px)"
                                                        />
                                                        <source
                                                                srcset="{{ asset('images/gallery-grid/o-inwestycji-1.png') }}"
                                                                media="(max-width: 992px)"
                                                        />
                                                        <source
                                                                srcset="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}"
                                                                media="(min-width: 992px)"
                                                        />
                                                        <img
                                                                src="{{ asset('images/gallery-grid/o-inwestycji-1@2x.png') }}"
                                                                width="3276"
                                                                height="1966"
                                                                alt="Nowe miasto"
                                                                class="grid-img"
                                                        />
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <!-- 1 BOTTOM RIGHT -->
                                                <a
                                                        href="{{ asset('images/gallery-grid/gallery-2-right-new-big.jpg') }}"
                                                        class="glightbox"
                                                >
                                                    <picture>
                                                        <img
                                                                src="{{ asset('images/gallery-grid/gallery-2-right-new.jpg') }}"
                                                                width="900"
                                                                height="540"
                                                                alt="Nowe miasto"
                                                                class="grid-img-2"
                                                        />
                                                    </picture>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade gallery" id="v-pills-interior" role="tabpanel" aria-labelledby="v-pills-interior-tab" tabindex="0">
                            {!! parse_text('[galeria=gallery]3[/galeria]') !!}
                        </div>
                        <div class="tab-pane fade gallery" id="v-pills-area" role="tabpanel" aria-labelledby="v-pills-area-tab" tabindex="0">
                            {!! parse_text('[galeria=gallery]2[/galeria]') !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
