@extends('layouts.page', ['body_class' => 'contact-page'])

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
                                Kontakt
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END -> Breadcrumb -->

        <section class="margin-wrapper-smallest">
            <div class="container contact">
                <div class="row gy-3 gy-lg-0 justify-content-center">
                    <div
                            class="col-12 text-center mb-5 justify-content-center"
                            data-aos="fade-up"
                    >
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
                        <h1 class="header-1 px-0 mx-0">Kontakt</h1>

                        <!-- SUBTITLE -->
                        <span class="subtitle-1">Apartamenty Nowe miasto</span>
                    </div>

                    <div class="col-12 mt-5 text-center d-none">
                        <p style="font-size: 26px;color: red"><b>W dniach od 05.08.2024 do 09.08.2024 biuro sprzedaży będzie zamknięte.</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box">
                            @if(settings()->get('working_hours_text'))
                                {!! settings()->get('working_hours_text') !!}
                            @endif
                            <span>napisz</span>
                            <a class="nav-link contact-page-link" href="mailto:sprzedaz@madeydevelopment.pl"><img src="{{ asset('images/email.svg') }}" alt="" />sprzedaz@madeydevelopment.pl</a>

                            <span>ZADZWOŃ</span>
                            <a class="nav-link" href="tel:+48576117119"><img src="{{ asset('images/phone.svg') }}" />+48 576 117 119</a>

                            <span>WhatsApp</span>
                            <a class="nav-link" href="https://wa.me/48576117119" target="_blank"><img src="{{ asset('images/whatsup.png') }}" width="29" height="29" />+48 576 117 119</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box h-100">
                            <span>Godziny pracy</span>
                            <ul class="list-unstyled mb-0 w-100">
                                <li class="border-bottom p-1">Poniedziałek<span class="float-end">{!! settings()->get('working_hours_1') !!}</span></li>
                                <li class="border-bottom p-1">Wtorek<span class="float-end">{!! settings()->get('working_hours_2') !!}</span></li>
                                <li class="border-bottom p-1">Środa<span class="float-end">{!! settings()->get('working_hours_3') !!}</span></li>
                                <li class="border-bottom p-1">Czwartek<span class="float-end">{!! settings()->get('working_hours_4') !!}</span></li>
                                <li class="border-bottom p-1">Piątek<span class="float-end">{!! settings()->get('working_hours_5') !!}</span></li>
                                <li class="border-bottom p-1">Sobota<span class="float-end">{!! settings()->get('working_hours_6') !!}</span></li>
                                <li class="p-1">Niedziela<span class="float-end">{!! settings()->get('working_hours_7') !!}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="margin-wrapper-xs-contact position-relative">
                <picture>
                    <source srcset="{{ asset('images/investor-bg.webp') }}" media="(max-width: 992px)" />
                    <source
                            srcset="{{ asset('images/investor-bg@2x.webp') }}"
                            media="(min-width: 992px)"
                    />
                    <source srcset="{{ asset('images/investor-bg.png') }}" media="(max-width: 992px)" />
                    <source
                            srcset="{{ asset('images/investor-bg@2x.png') }}"
                            media="(min-width: 992px)"
                    />
                    <img
                            src="{{ asset('images/investor-bg@2x.png') }}"
                            width="3572"
                            height="2144"
                            alt="Inwestor tło"
                            class="bg-contact-img"
                            loading="lazy"
                    />
                </picture>
                <div class="container-fluid contact-form contact d-flex justify-content-center align-items-center">
                    <div class="container">
                        <div class="row gx-0">
                            <div class="col-12 col-lg-8 offset-lg-2">
                                <div class="bg-white box">
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
                                                    class="img-fluid about--icon"
                                                    data-aos="fade-up"
                                                    data-aos-offset="120"
                                                    data-aos-delay="100"
                                            />
                                            <!-- HEADER -->
                                            <h2
                                                    class="header-1 px-0 mx-0"
                                                    data-aos="fade-left"
                                                    data-aos-delay="200"
                                                    data-aos-offset="120"
                                            >
                                                MASZ PYTANIA?
                                            </h2>

                                            <!-- SUBTITLE -->
                                            <span
                                                    class="subtitle-1"
                                                    data-aos="fade-left"
                                                    data-aos-delay="500"
                                                    data-aos-offset="120"
                                            >Apartamenty Nowe miasto</span
                                            >

                                            <!-- PARAGRAPH -->
                                            <div
                                                    class="row pt-4"
                                                    data-aos="fade-left"
                                                    data-aos-delay="400"
                                                    data-aos-offset="120"
                                            >
                                                <div class="col col-lg-10 offset-lg-1">
                                                    <p class="fw-medium text-center">
                                                        Jeżeli masz jakiekolwiek pytania dotyczące naszych
                                                        nowych apartamentów, z przyjemnością pomożemy.
                                                        Nasz zespół jest gotowy, aby dostarczyć wszelkie
                                                        potrzebne informacje i rozwiać Twoje wątpliwości.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            @include('front.contact.form', ['page_name' => 'Kontakt'])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="margin-wrapper-xs">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-12 text-center mb-5">
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
                        <h3 class="header-1 px-0 mx-0">ODWIEDŹ NAS</h3>

                        <!-- SUBTITLE -->
                        <span class="subtitle-1">Apartamenty Nowe miasto</span>
                    </div>
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div id="map" class="map-contact"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
