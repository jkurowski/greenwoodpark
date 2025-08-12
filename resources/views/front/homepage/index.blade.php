@extends('layouts.homepage', ['body_class' => 'homepage'])
@if ($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main>
        <!-- Section About with Image -->
        <section class="about-section-m-lg">
            <div class="container">
                <div class="row text-start align-items-center">
                    <article class="col-12 col-md-5 pb-md-5">
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
                                        data-aos="fade-right"
                                />
                                <!-- HEADER -->
                                <h1
                                        class="text-uppercase header-1 fs-xl-3 px-0 mx-0"
                                        data-aos="fade-up"
                                >
                                    Apartamenty
                                </h1>
                                <!-- SUBTITLE -->
                                <span
                                        class="text-uppercase subtitle-1"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                >Nowe miasto</span
                                >
                            </div>
                            <div
                                    class="d-flex flex-column gap-2 w-90"
                                    data-aos="fade-up"
                                    data-aos-delay="100"
                            >
                                <!-- PARAGRAPH -->
                                <p class="fw-bolder">
                                    Nowoczesne apartamenty o wysokim standardzie, zaprojektowane
                                    z myślą o Twoim komforcie i stylu życia.
                                </p>
                                <p>
                                    Odwiedź nas i odkryj, jak blisko jest Twój wymarzony
                                    apartament. Nasze nowoczesne, komfortowe mieszkania czekają
                                    na Ciebie, oferując najwyższy standard życia. Przyjdź i
                                    przekonaj się na własne oczy, jak łatwo możesz zamieszkać w
                                    wyjątkowym miejscu. Zapraszamy do zapoznania się z naszą
                                    ofertą i zobaczenia na żywo, co możemy Ci zaoferować.
                                </p>
                            </div>
                        </div>
                        <a
                                href="/kontakt"
                                class="btn btn-main mt-4"
                                data-aos="fade-up"
                                data-aos-delay="100"
                        >
                            kontakt
                            <img
                                    class="ps-4"
                                    src="{{ asset('images/arrow-right.svg') }}"
                                    height="15.644"
                                    alt="strzałka w prawo"
                            />
                        </a>
                    </article>
                    <div class="col-12 pt-main pb-0 px-0 ps-md-5">
                        <!-- MAIN IMAGE -->
                        <picture>
                            <source srcset="{{ asset('images/wizualizacja-inwestycji.webp') }}"
                                    type="image/webp" />

                            <source srcset="{{ asset('images/wizualizacja-inwestycji-mobile.webp') }}"
                                    media="(max-width: 1366px)"
                                    type="image/webp" />

                            <source srcset="{{ asset('images/wizualizacja-inwestycji-mobile.jpg') }}" media="(max-width: 1366px)"/>

                            <img
                                    src="{{ asset('images/wizualizacja-inwestycji.jpg') }}"
                                    class="img-fluid position-absolute-md calc-hero-sizing about--img"
                                    loading="eager"
                                    decoding="async"
                                    width="1420"
                                    height="920"
                                    data-aos="fade-left"
                                    alt="Wizualizacja inwestycji Zgierz w Nowym Mieście"
                            />
                        </picture>
                    </div>
                    <div class="col-12 col-xl-8 offset-xl-2 p-0">
                        <!-- FORM -->
                        <form
                                class="about--form"
                                data-aos="fade-left"
                                data-aos-delay="200"
                                method="get"
                                action="{{ route('front.developro.investment.index') }}"
                        >
                            <select
                                    name="s_pokoje"
                                    id=""
                                    class="form-select about--form-input"
                                    aria-label="Pokoje"
                            >
                                <option selected value="">pokoje</option>
                                <option value="1">1 pokój</option>
                                <option value="2">2 pokoje</option>
                                <option value="3">3 pokoje</option>
                                <option value="4">4 pokoje</option>
                            </select>
                            <select
                                    name="s_metry"
                                    id=""
                                    class="form-select about--form-input"
                                    aria-label="Metraż"
                            >
                                <option value="">Metraż</option>
                                <option value="29-42">29-42 m²</option>
                                <option value="43-58">43-58 m²</option>
                                <option value="59-68">59-68 m²</option>
                                <option value="69-79">69-79 m²</option>
                            </select>

                            <!-- To handle this dropdown change JS in main.js file -->
                            <div class="dropdown dropdown-checkbox">
                                <button class="form-select about--form-input text-start" type="button" id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">Udogodnienia</button>
                                <ul class="dropdown-menu" aria-labelledby="multiSelectDropdown">
                                    <li>
                                        <label><input type="checkbox" value="1"/> Balkon</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" value="2"/> Ogród</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" value="3"/> Loggia</label>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" value="4"/> Taras</label>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" id="s_dodatkowe" name="s_dodatkowe" />

                            <button class="btn btn-casual d-flex align-items-center gap-2" type="submit">
                                Szukaj<img src="{{ asset('images/search.svg') }}" alt="" />
                            </button>
                        </form>

                        <!-- ANIMATION SCROLL DOWN -->
                        <a
                                class="anim-scroll-down-box about--animation-scroll-down-box"
                                href="#main-section"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            <img
                                    src="{{ asset('images/przewin.png') }}"
                                    width="157"
                                    height="153"
                                    class="rotate"
                                    alt=""
                                    srcset="{{ asset('images/przewin@2x.png') }}"
                                    loading="lazy"
                                    decoding="async"
                            />
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 7.694 7.694"
                                    class="bounce"
                            >
                                <path
                                        id="arrow_downward_FILL0_wght100_GRAD0_opsz48"
                                        d="M215.689-748v7.091l-3.459-3.474-.23.23,3.847,3.847,3.847-3.847-.23-.23L216-740.909V-748Z"
                                        transform="translate(-212 748)"
                                        fill="#000"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> Section About with Image -->

        <!-- DIVIDER with animations -->
        <div class="container-fluid">
            <div class="row section-divider">
                <div class="col-12 position-relative">
                    <div class="anim-bounce-box">
                        <div class="bounce"></div>
                    </div>
                    <div class="fence-right">
                        <div class="right">
                            <img
                                    src="{{ asset('images/anim/fence.svg') }}"
                                    width="138.43"
                                    height="54.423"
                                    class="fence"
                                    alt=""
                                    srcset=""
                            />
                            <img
                                    src="{{ asset('images/anim/Rectangle.svg') }}"
                                    class="rect bounce-anim"
                                    width="96.61"
                                    height="53.458"
                                    alt=""
                                    srcset=""
                            />
                        </div>
                        <!-- <img src="{{ asset('images/fence-horizontal.svg') }}" alt="" /> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END -> DIVIDER with animations -->

        <!-- Section About with slider -RIGHT -->
        <section class="about-wrapper-top" id="main-section">
            <div class="container">
                <div class="row">
                    <article
                            class="col-12 col-lg-5 pb-5"
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
                                    O INWESTYCJI
                                </h2>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1"
                                >APARTAMENTY NOWE MIASTO</span
                                >
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2">
                                <p class="fw-bolder">
                                    Oferujemy nowoczesne apartamenty, które spełnią oczekiwania
                                    nawet najbardziej wymagających klientów.
                                </p>
                                <p class="">
                                    Nasze projekty charakteryzują się innowacyjnymi
                                    rozwiązaniami architektonicznymi, które gwarantują wygodę i
                                    komfort na co dzień. Zlokalizowane w atrakcyjnej
                                    lokalizacji, nasze apartamenty łączą w sobie bliskość natury
                                    z dostępem do miejskich udogodnień. Wybierając nasze
                                    mieszkania, inwestujesz w jakość i nowoczesny styl życia.
                                </p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4">
                            DOSTĘPNE MIESZKANIA
                            <img
                                    class="ps-4"
                                    src="{{ asset('images/arrow-right.svg') }}"
                                    height="15.644"
                                    alt="strzałka w prawo"
                            />
                        </a>
                    </article>
                    <div
                            class="col-lg-6 offset-lg-1 position-relative align-self-lg-center slider-container"
                            data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-offset="120"
                    >
                        <!-- COPY IMAGES IN THE SAME ORDER TO slick-slider-about-nav  -->
                        <div class="slick-slider-about slick-slider-about-right">
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
                                <source srcset="{{ asset('images/wizualizacja-inwestycji-1.webp') }}"
                                        type="image/webp" />

                                <img
                                        src="{{ asset('images/wizualizacja-inwestycji-1.jpg') }}"
                                        width="2124"
                                        height="1380"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto"
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
                                <img
                                        src="{{ asset('images/wizualizacja-inwestycji-1.jpg') }}"
                                        width="2124"
                                        height="1380"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto"
                                />
                            </picture>
                        </div>
                        <!-- HERE -->
                        <div class="slick-slider-about-nav slick-slider-about-nav-right">
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
                                <img
                                        src="{{ asset('images/wizualizacja-inwestycji-1.jpg') }}"
                                        width="2124"
                                        height="1380"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto"
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
                                <img
                                        src="{{ asset('images/wizualizacja-inwestycji-1.jpg') }}"
                                        width="2124"
                                        height="1380"
                                        loading="lazy"
                                        decoding="async"
                                        alt="Nowe miasto"
                                />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> Section About with slider - RIGHT -->

        <!-- FEATURES SECTION -->
        <section class="margin-wrapper-xs">
            <div class="container">
                <div class="row feature gy-5 justify-content-center">
                    <div class="col-12 col-lg-6 col-xl-4 feature-box">
                        <img
                                src="{{ asset('images/features/feature-1.svg') }}"
                                width="78.996"
                                alt=""
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
                </div>
            </div>
        </section>
        <!-- END -> FEATURES SECTION -->

        <!-- Section About with slider - LEFT -->
        <section class="about-wrapper">
            <div class="container">
                <div class="row about-slider-l">
                    <div
                            class="col-lg-6 order-1 position-relative align-self-lg-center slider-container position-relative"
                            data-aos="fade-left"
                            data-aos-delay="300"
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
                    <article
                            class="order-0 order-lg-2 col-12 col-lg-5 offset-lg-1 pb-5 mt-5 mt-lg-0"
                            data-aos="fade-up"
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
                                <h3 class="text-uppercase header-1 fs-xl-3 px-0 mx-0">
                                    APARTAMENTY
                                </h3>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1"
                                >APARTAMENTY NOWE MIASTO</span
                                >
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2">
                                <p class="fw-bolder">
                                    Osiedle będzie składać się z dwóch bloków. W granicach
                                    zamkniętego i monitorowanego osiedla powstanie wspólny plac
                                    zabaw.
                                </p>
                                <p>
                                    W ramach inwestycji zostanie realizowany
                                    pięciokondygnacyjny, dwuklatkowy budynek B. Każde mieszkanie
                                    będzie posiadać obszerny balkon lub taras, a do lokali
                                    parterowych zaprojektowano ogródki.
                                </p>
                                <p>
                                    W ofercie znajdą się mieszkania 1-, 2 – 3- i 4-pokojowe w
                                    metrażu od 29 do 78 m2. Na każdej kondygnacji mieszkalnej
                                    zaprojektowano murowane komórki lokatorskie, a w hali
                                    parkingowej na poziomie -1 miejsca postojowe dla aut.
                                </p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4">
                            sprawdź
                            <img
                                    class="ps-4"
                                    src="{{ asset('images/arrow-right.svg') }}"
                                    height="15.644"
                                    alt="strzałka w prawo"
                            />
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- END -> Section About with slider - LEFT -->

        <!-- QUESTIONS CARD -->
        <section
                class="question-card-section margin-wrapper-xs-card position-relative"
        >
            <div class="left-anim">
                <img
                        src="{{ asset('images/anim/fence.svg') }}"
                        width="138.43"
                        height="54.423"
                        class="fence"
                        alt=""
                        srcset=""
                />
                <img
                        src="{{ asset('images/anim/Rectangle.svg') }}"
                        class="rect bounce-7-anim"
                        width="96.61"
                        height="53.458"
                        alt=""
                        srcset=""
                />
            </div>
            @include('front.shared.contact')
        </section>
        <!-- END -> QUESTIONS CARD -->

        <!-- APARMENT TYPES -->
        <section class="margin-wrapper-xs ap-types-section">
            <div class="right">
                <img
                        src="{{ asset('images/anim/fence.svg') }}"
                        width="138.43"
                        height="54.423"
                        class="fence"
                        alt=""
                        srcset=""
                />
                <img
                        src="{{ asset('images/anim/Rectangle.svg') }}"
                        class="rect bounce-7-anim-3"
                        width="96.61"
                        height="53.458"
                        alt=""
                        srcset=""
                />
            </div>
            <div class="container">
                <div class="ap-types">
                    <div class="row mb-4">
                        <div class="col-12">
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
                                <h4 class="text-uppercase header-1 fs-xl-3 px-0 mx-0">
                                    TYPY <br />
                                    MIESZKAŃ
                                </h4>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1"
                                >APARTAMENTY NOWE MIASTO</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3 gx-lg-3 gx-xl-4">
                        <div
                                class="col-6 col-md-6 col-lg-3"
                                data-aos="fade-right"
                                data-aos-delay="200"
                        >
                            <a href="/apartamenty" class="ap-card-link">
                                <div class="ap-card" data-order="1">
                                    <div class="box">
                                        <div class="type">1-pokojowe</div>
                                        <div class="squares">29 m<sup>2</sup></div>
                                    </div>
                                    <div class="btn-container">
                                        <button class="btn btn-main btn-main-white" type="button">
                                            <span class="pe-0 pe-sm-4"> sprawdź </span>
                                            <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15.644"
                                                    height="15.644"
                                                    viewBox="0 0 15.644 15.644"
                                            >
                                                <path
                                                        id="arrow_downward_FILL0_wght100_GRAD0_opsz48"
                                                        d="M7.5,0V14.418L.467,7.355,0,7.822l7.822,7.822,7.822-7.822-.467-.467L8.143,14.418V0Z"
                                                        transform="translate(0 15.644) rotate(-90)"
                                                        fill="#fff"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                                class="col-6 col-md-6 col-lg-3"
                                data-aos="fade-right"
                                data-aos-delay="400"
                        >
                            <a href="/apartamenty" class="ap-card-link">
                                <div class="ap-card" data-order="2">
                                    <div class="box">
                                        <div class="type">2-pokojowe</div>
                                        <div class="squares">32-47 m<sup>2</sup></div>
                                    </div>
                                    <div class="btn-container">
                                        <button class="btn btn-main btn-main-white" type="button">
                                            <span class="pe-0 pe-sm-4"> sprawdź </span>
                                            <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15.644"
                                                    height="15.644"
                                                    viewBox="0 0 15.644 15.644"
                                            >
                                                <path
                                                        id="arrow_downward_FILL0_wght100_GRAD0_opsz48"
                                                        d="M7.5,0V14.418L.467,7.355,0,7.822l7.822,7.822,7.822-7.822-.467-.467L8.143,14.418V0Z"
                                                        transform="translate(0 15.644) rotate(-90)"
                                                        fill="#fff"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                                class="col-6 col-md-6 col-lg-3"
                                data-aos="fade-right"
                                data-aos-delay="600"
                        >
                            <a href="/apartamenty" class="ap-card-link">
                                <div class="ap-card" data-order="3">
                                    <div class="box">
                                        <div class="type">3-pokojowe</div>
                                        <div class="squares">50-68 m<sup>2</sup></div>
                                    </div>
                                    <div class="btn-container">
                                        <button class="btn btn-main btn-main-white" type="button">
                                            <span class="pe-0 pe-sm-4"> sprawdź </span>
                                            <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15.644"
                                                    height="15.644"
                                                    viewBox="0 0 15.644 15.644"
                                            >
                                                <path
                                                        id="arrow_downward_FILL0_wght100_GRAD0_opsz48"
                                                        d="M7.5,0V14.418L.467,7.355,0,7.822l7.822,7.822,7.822-7.822-.467-.467L8.143,14.418V0Z"
                                                        transform="translate(0 15.644) rotate(-90)"
                                                        fill="#fff"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                                class="col-6 col-md-6 col-lg-3"
                                data-aos="fade-right"
                                data-aos-delay="800"
                        >
                            <a href="/apartamenty" class="ap-card-link">
                                <div class="ap-card" data-order="4">
                                    <div class="box">
                                        <div class="type">4-pokojowe</div>
                                        <div class="squares">61-78 m<sup>2</sup></div>
                                    </div>
                                    <div class="btn-container">
                                        <button class="btn btn-main btn-main-white" type="button">
                                            <span class="pe-0 pe-sm-4"> sprawdź </span>
                                            <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15.644"
                                                    height="15.644"
                                                    viewBox="0 0 15.644 15.644"
                                            >
                                                <path
                                                        id="arrow_downward_FILL0_wght100_GRAD0_opsz48"
                                                        d="M7.5,0V14.418L.467,7.355,0,7.822l7.822,7.822,7.822-7.822-.467-.467L8.143,14.418V0Z"
                                                        transform="translate(0 15.644) rotate(-90)"
                                                        fill="#fff"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row text-center mt-5">
                        <div class="col-12 col-sm-6 offset-sm-3">
                            <a class="cta-link" href="/apartamenty">
                                zobacz wszystkie
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
        </section>
        <!-- END -> APARMENT TYPES -->

        <!-- INVESTOR COMMON -->
        <section class="margin-wrapper-xs">
            <div class="investor d-flex justify-content-center align-items-center">
                <div class="container-lg">
                    <div class="row row-sizing gx-0">
                        <div class="col-12 col-lg-6">
                            <article class="bg-white box" data-aos="fade-up">
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
                                        <!-- TITLE -->
                                        <h4 class="text-uppercase header-1 px-0 mx-0">
                                            INWESTOR
                                        </h4>
                                        <!-- SUBTITLE -->
                                        <span class="text-uppercase subtitle-1"
                                        >APARTAMENTY NOWE MIASTO</span
                                        >
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <!-- PARAGRAPH -->
                                        <p class="fw-bolder">
                                            Madey Development Spółka z ograniczoną
                                            odpowiedzialnością 2 Sp. K. jest częścią Grupy Madej, w
                                            której kluczową rolę odgrywa Madej Bud, specjalizujący
                                            się w budowie obiektów kubaturowych i inżynieryjnych.
                                        </p>
                                        <p class="mb-5">
                                            Nasza firma, z siedzibą przy ul. Przybyszewskiego
                                            199/205 w Łodzi, cieszy się stabilną pozycją na rynku i
                                            jest znana z tworzenia nowoczesnych oraz trwałych
                                            konstrukcji. Doświadczenie zebrane na budowach w całej
                                            Polsce pozwala nam na kompleksowe zarządzanie projektami
                                            - od zakupu działki, przez wybór projektu
                                            architektonicznego, aż po budowę i oddanie obiektu do
                                            użytkowania. Dzięki silnej pozycji rynkowej oraz
                                            realizacji wielu skomplikowanych projektów, oferujemy
                                            najwyższą jakość, partnerskie podejście oraz zaufanie,
                                            na które możesz liczyć.
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-main mt-auto" href="/inwestor">
                                    SPRAWDŹ
                                    <img
                                            class="ps-4"
                                            src="{{ asset('images/arrow-right.svg') }}"
                                            height="15.644"
                                            alt="strzałka w prawo"
                                    />
                                </a>
                            </article>
                        </div>
                        <div class="col-12 col-lg-6">
                            <article
                                    class="text-white bg-primary box"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            >
                                <div class="d-flex flex-column gap-5">
                                    <div>
                                        <!-- ICON on to of a header title  -->
                                        <svg
                                                id="Group_297"
                                                data-name="Group 297"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="53.813"
                                                height="33.353"
                                                viewBox="0 0 53.813 33.353"
                                                class="img-fluid about--icon"
                                        >
                                            <rect
                                                    id="Rectangle_222"
                                                    data-name="Rectangle 222"
                                                    width="26.637"
                                                    height="11.19"
                                                    transform="translate(27.176 13.675)"
                                                    fill="#fff"
                                            />
                                            <path
                                                    id="Path_7"
                                                    data-name="Path 7"
                                                    d="M147.879,2.507l14.327,16.764H147.879Zm-.539-1.3V19.271h-15.3Zm0-1.2L120.434,31.825h1.134l10.155-12.109H147.34V32.683h.539V19.716h14.709l11.658,13.638V1.529H173.7V31.18Z"
                                                    transform="translate(-120.434 -0.001)"
                                            />
                                        </svg>
                                        <!-- TITLE -->
                                        <h4 class="text-uppercase header-1 px-0 mx-0 text-white">
                                            LOKALIZACJA
                                        </h4>
                                        <!-- SUBTITLE -->
                                        <span class="text-uppercase subtitle-1"
                                        >APARTAMENTY NOWE MIASTO</span
                                        >
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <!-- PARAGRAPH -->
                                        <p class="fw-bolder">
                                            Inwestycja położona będzie przy ul. Orlej 12 w dzielnicy
                                            Nowe Miasto w Zgierzu, w najbliższym sąsiedztwie
                                            znajdują się: szkoły podstawowe, szkoły średnie oraz
                                            przedszkole. Ogromnym autem tej lokalizacji są liczne
                                            punkty aktywności sportowej takie jak; boisko, hala
                                            sportowa czy lodowisko.
                                        </p>
                                        <p>
                                            Blisko osiedla znajduje się przystanek tramwajowy, z
                                            którego co 20 minut odjeżdża tramwaj do Łodzi, z jednego
                                            z przystanków w 5 minut dojdziemy do Manufaktury.
                                        </p>
                                        <p class="mb-5">
                                            Dziesięciominutowym spacerem dojdziemy do stacji PKP
                                            Zgierz, skąd co godzinę odjeżdżają pociągi do Warszawy
                                            Centralnej, a co 45 minut na dworzec Łódź Fabryczna.
                                        </p>
                                    </div>
                                </div>
                                <a
                                        class="btn btn-main btn-main--white-slider mt-auto"
                                        href="/o-inwestycji"
                                >
                                    SPRAWDŹ
                                    <img
                                            class="ps-4"
                                            src="{{ asset('images/arrow-right.svg') }}"
                                            height="15.644"
                                            alt="strzałka w prawo"
                                    />
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> ABOUT  COMMON -->

        <!-- CONTACT FORM COMMON -->
        <section class="margin-wrapper-xs contact-section">
            <img
                    src="{{ asset('images/fence-horizontal.svg') }}"
                    class="left"
                    alt=""
                    srcset=""
                    data-aos="zoom-out-down"
            />
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- ICON on to of a header title  -->
                        <img
                                src="{{ asset('images/logo-small.svg') }}"
                                alt="Apartamenty Nowe Miasto logo"
                                width="54"
                                height="33"
                                loading="lazy"
                                decoding="async"
                                class="mb-3 about--icon img-fluid"
                                data-aos="fade-up"
                                data-aos-delay="100"
                        />
                        <!-- HEADER -->
                        <h4
                                class="header-1 px-0 mx-0"
                                data-aos="fade-left"
                                data-aos-delay="200"
                        >
                            Kontakt
                        </h4>

                        <!-- SUBTITLE -->
                        <span class="subtitle-1" data-aos="fade-left" data-aos-delay="500"
                        >Apartamenty Nowe miasto</span
                        >

                        <!-- PARAGRAPH -->
                        <div class="row pt-4" data-aos="fade-left" data-aos-delay="400">
                            <div class="col col-lg-6 offset-lg-3">
                                <p class="fw-medium">
                                    Jeżeli masz jakiekolwiek pytania dotyczące naszych nowych
                                    apartamentów, z przyjemnością pomożemy. Nasz zespół jest
                                    gotowy, aby dostarczyć wszelkie potrzebne informacje i
                                    rozwiać Twoje wątpliwości.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 offset-lg-3">
                        @include('front.contact.form', ['page_name' => 'Strona główna'])
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> CONTACT FORM  COMMON -->
    </main>
@endsection
