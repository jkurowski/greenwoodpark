@extends('layouts.page', ['body_class' => 'contact-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-kontakt">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="/kontakt/">Kontakt</a>
        </div>

        <section class="contact">
            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--left decor--bottom" />
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
