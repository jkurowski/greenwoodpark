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
                                Inwestor
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
                                                INWESTOR
                                            </h1>
                                            <!-- SUBTITLE -->
                                            <span class="text-uppercase subtitle-1"
                                            >APARTAMENTY NOWE MIASTO</span
                                            >
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <!-- PARAGRAPH -->
                                            <p class="fw-bolder">
                                                Madey Development Spółka z ograniczoną
                                                odpowiedzialnością 2 Sp. K. jest częścią Grupy Madej,
                                                w której kluczową rolę odgrywa Madej Bud,
                                                specjalizujący się w budowie obiektów kubaturowych i
                                                inżynieryjnych.
                                            </p>
                                            <p>
                                                Nasza firma, z siedzibą przy ul. Przybyszewskiego
                                                199/205 w Łodzi, cieszy się stabilną pozycją na rynku
                                                i jest znana z tworzenia nowoczesnych oraz trwałych
                                                konstrukcji. Doświadczenie zebrane na budowach w całej
                                                Polsce pozwala nam na kompleksowe zarządzanie
                                                projektami - od zakupu działki, przez wybór projektu
                                                architektonicznego, aż po budowę i oddanie obiektu do
                                                użytkowania. Dzięki silnej pozycji rynkowej oraz
                                                realizacji wielu skomplikowanych projektów, oferujemy
                                                najwyższą jakość, partnerskie podejście oraz zaufanie,
                                                na które możesz liczyć.
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
                                            srcset="{{ asset('images/woman-investor.webp') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/woman-investor@2x.webp') }}"
                                    />
                                    <source
                                            srcset="{{ asset('images/woman-investor.png') }}"
                                            media="(max-width: 992px)"
                                    />
                                    <source
                                            srcset="{{ asset('images/woman-investor@2x.png') }}"
                                            media="(min-width: 992px)"
                                    />
                                    <img
                                            src="{{ asset('images/woman-investor@2x.png') }}"
                                            width="1344"
                                            height="978"
                                            alt="Inwestycje Madey Development Sp. z o.o. 2 Sp. K."
                                            data-aos="fade-left"
                                            data-aos-delay="200"
                                            class="img-fluid about-common--img"
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
                                        srcset="{{ asset('images/gallery-grid/agent.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        width="1344"
                                        height="978"
                                        alt="Inwestycje Agenci "
                                        loading="lazy"
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
                                        alt="Inwestycje Nowe Miasto "
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        width="1344"
                                        height="978"
                                        alt="Inwestycje Agenci "
                                        loading="lazy"
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
                                        alt="Inwestycje Nowe Miasto "
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
                                        srcset="{{ asset('images/gallery-grid/agent.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        width="1344"
                                        height="978"
                                        alt="Inwestycje Agenci "
                                        loading="lazy"
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
                                        alt="Inwestycje Nowe Miasto "
                                        loading="lazy"
                                />
                            </picture>
                            <picture>
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.webp') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.webp') }}"
                                        media="(min-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent.png') }}"
                                        media="(max-width: 992px)"
                                />
                                <source
                                        srcset="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        media="(min-width: 992px)"
                                />
                                <img
                                        src="{{ asset('images/gallery-grid/agent@2x.png') }}"
                                        width="1344"
                                        height="978"
                                        alt="Inwestycje Agenci "
                                        loading="lazy"
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
                                        alt="Inwestycje Nowe Miasto "
                                        loading="lazy"
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
                                    DOŚWIADCZENIE
                                </h3>
                                <!-- SUBTITLE -->
                                <span class="text-uppercase subtitle-1"
                                >W BUDOWANIU MARZEŃ</span
                                >
                            </div>
                            <!-- PARAGRAPH -->
                            <div class="d-flex flex-column gap-2">
                                <p class="fw-bolder text-pretty">
                                    Nasza firma ma wieloletnie doświadczenie w tworzeniu
                                    wyjątkowych przestrzeni, które spełniają najwyższe standardy
                                    jakości i komfortu.
                                </p>
                                <p>
                                    Cechuje nas indywidualne podejście do każdego projektu.
                                    Stale poszukujemy nowych, innowacyjnych rozwiązań, aby nasze
                                    budynki były nie tylko funkcjonalne, ale również estetycznie
                                    doskonałe. Nasze doświadczenie to gwarancja Twojej
                                    satysfakcji i pewność, że Twój nowy apartament będzie
                                    miejscem pełnym komfortu i elegancji.
                                </p>
                            </div>
                        </div>

                        <a href="/apartamenty" class="btn btn-main mt-4">
                            dostępne mieszkania
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

        <!-- Investor -->
        <section class="margin-wrapper-smallest position-relative">
            <picture>
                <source srcset="{{ asset('images/men-profess.webp') }}" media="(max-width: 992px)" />
                <source
                        srcset="{{ asset('images/men-profess@2x.webp') }}"
                        media="(min-width: 992px)"
                />
                <source srcset="{{ asset('images/men-profess.png') }}" media="(max-width: 992px)" />
                <source srcset="{{ asset('images/men-profess@2x.png') }}" media="(min-width: 992px)" />
                <img
                        src="{{ asset('images/men-profess@2x.png') }}"
                        width="3840"
                        height="1446"
                        alt="PROFESJONALIZM zdjecie"
                        class="bg-profess-img"
                        loading="lazy"
                />
            </picture>
            <div class="container-fluid about-profess">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-md-5">
                            <article class="text-white about-profess--box">
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

                                        <!-- HEADER -->
                                        <h1
                                                class="text-uppercase header-1 fs-xl-3 px-0 mx-0 text-white"
                                        >
                                            PROFESJONALIZM
                                        </h1>
                                        <!-- SUBTITLE -->
                                        <span class="text-uppercase subtitle-1"
                                        >APARTAMENTY NOWE MIASTO</span
                                        >
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <!-- PARAGRAPH -->
                                        <p class="fw-bolder">
                                            Dokładamy wszelkich starań, aby nasze mieszkania
                                            spełniały najwyższe standardy jakości, komfortu i
                                            estetyki. Wykorzystujemy tylko najlepsze materiały i
                                            nowoczesne technologie, aby zapewnić trwałość i
                                            funkcjonalność naszych apartamentów.
                                        </p>
                                        <p class="">
                                            Nasz zespół obsługi klienta jest zawsze gotowy, aby
                                            odpowiedzieć na Twoje pytania i pomóc w każdej sytuacji.
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div
                                class="col-12 col-sm-5 col-lg-2"
                                data-aos="fade-right"
                                data-aos-delay="0"
                                data-aos-offset="120"
                        >
                            <div class="about-profess--feature-box">
                                <img
                                        src="{{ asset('images/maze.svg') }}"
                                        width="82"
                                        height="82"
                                        alt=""
                                        srcset=""
                                        loading="lazy"
                                        decoding="async"
                                />
                                <h3>KOMPLEKSOWOSĆ</h3>
                            </div>
                        </div>
                        <div
                                class="col-12 col-sm-5 offset-sm-1 col-lg-2 offset-lg-1"
                                data-aos="fade-right"
                                data-aos-delay="200"
                                data-aos-offset="120"
                        >
                            <div class="about-profess--feature-box">
                                <img
                                        src="{{ asset('images/deal.svg') }}"
                                        width="82"
                                        height="82"
                                        loading="lazy"
                                        decoding="async"
                                        alt=""
                                        srcset=""
                                />
                                <h3>PARTNERSTWO</h3>
                            </div>
                        </div>
                        <div
                                class="col-12 col-sm-5 col-lg-2 offset-lg-1"
                                data-aos="fade-right"
                                data-aos-delay="400"
                                data-aos-offset="120"
                        >
                            <div class="about-profess--feature-box">
                                <img
                                        src="{{ asset('images/trust.svg') }}"
                                        width="82"
                                        height="82"
                                        loading="lazy"
                                        decoding="async"
                                        alt=""
                                        srcset=""
                                />
                                <h3>ZAUFANIE</h3>
                            </div>
                        </div>
                        <div
                                class="col-12 col-sm-5 offset-sm-1 col-lg-2 offset-lg-1"
                                data-aos="fade-right"
                                data-aos-delay="600"
                                data-aos-offset="120"
                        >
                            <div class="about-profess--feature-box">
                                <img
                                        src="{{ asset('images/quality.svg') }}"
                                        width="82"
                                        height="82"
                                        loading="lazy"
                                        decoding="async"
                                        alt=""
                                        srcset=""
                                />
                                <h3>JAKOŚĆ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -> Investor -->

        <!-- QUESTIONS CARD -->
        <section class="margin-wrapper-xs-card">
            @include('front.shared.contact')
        </section>
        <!-- END -> QUESTIONS CARD -->
    </main>

@endsection
