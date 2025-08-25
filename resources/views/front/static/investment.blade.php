@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="/o-inwestycji/">O inwestycji</a>
        </div>

        <section class="text-img">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">Greenwood Park</h2>
                    <h3 class="text-img__subtitle scroll-animation">zamieszkaj tak, jak zawsze marzyłeś</h3>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>LWyobraź sobie codzienność w otoczeniu zieleni, ciszy i spokoju, zaledwie kilkanaście minut od centrum
                            Warszawy. Greenwood Park to wyjątkowa inwestycja w Starej Miłosnej, stworzona dla osób, które chcą łączyć
                            bliskość natury z komfortem miejskiego życia.</p>
                        <p>Elegancka architektura, kameralny charakter i sąsiedztwo Mazowieckiego Parku Krajobrazowego sprawiają, że
                            Greenwood Park to miejsce, gdzie odpoczywasz od zgiełku miasta, nie rezygnując z jego wygód. Starannie
                            zaprojektowana zieleń, przestrzenie wspólne sprzyjające spotkaniom i relaksowi, a także bezpieczny plac zabaw
                            dla najmłodszych – to wszystko czeka na przyszłych mieszkańców.</p>
                    </div>
                    <div class="text-img__icons scroll-animation delay-3">
                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/construction.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Nowoczesne projekty<br>mieszkaniowo-usługowe</span>
                        </div>
                        <div class="icon">
                            <div class="icon__wrapper">
                                <img src="{{ asset('images/icons/map.svg') }}" alt="" class="icon__img">
                            </div>
                            <span class="icon__text">Zaufana spółka działająca<br>na krajowym rynku</span>
                        </div>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-12.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

            </div>

        </section>  <section class="text-img text-img--multiple">

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">NOWOCZESNE OSIEDLE<br>W SERCU WESOŁEJ</h2>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Zaprojektowane tak, by łączyć funkcjonalność z estetyką. Przemyślane układy mieszkań, wysoka jakość
                            materiałów i dbałość o detale gwarantują codzienny komfort oraz trwałość na lata. Całość uzupełniają
                            przestrzenie rekreacyjne i przyjazne otoczenie, które podkreślają unikalny charakter inwestycji.
                            To nie tylko idealne miejsce do zamieszkania – to również doskonała i dochodowa inwestycja w dynamicznie
                            rozwijającej się części Warszawy.</p>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-13.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                        <img src="{{ asset('images/photos/photo-14.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                        <img src="{{ asset('images/photos/photo-15.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                        <img src="{{ asset('images/photos/photo-16.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

            </div>

        </section>  <section class="text-img text-img--left">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--left decor--top" />

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">Jakość i precyzja<br>na każdym etapie realizacji</h2>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Projektując i realizując budowę inwestycji GREENWOOD PARK największy nacisk kładziemy na najwyższą jakość
                            materiałów i wykonania.</p>
                        <p>Naszym celem jest budowanie mieszkań z myślą o najbardziej wymagających klientach. Do realizacji inwestycji
                            zastosowano starannie dobrane materiały wysokiej klasy oraz nowoczesne technologie.</p>
                        <p>Każde mieszkanie oferowane w inwestycji w Wesołej zostało zaprojektowane i realizowane jest z ogromną
                            precyzją i dbałością o każdy detal. Dzięki temu inwestycja łączy walory estetyczne z funkcjonalnością, tworząc
                            komfortową przestrzeń do życia na lata.</p>
                        <p><strong>Greenwood Park to więcej niż mieszkanie – to styl życia w harmonii z naturą, nowoczesnością i
                                pewnością dobrze podjętej decyzji.</strong></p>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner slider slider--with-bar">
                        <img src="{{ asset('images/photos/photo-17.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

            </div>

        </section>  <section class="text-img">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--bottom" />

            <div class="wrapper">

                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">DBAMY O BEZPIECZEŃSTWO NASZYCH KLIENTÓW</h2>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Kupując mieszkanie w Miasteczku GREENWOOD przy ul. Jeździeckiej w Warszawie – Wesoła, otrzymasz od nas
                            profesjonalne wsparcie na każdym etapie zakupu – od wyboru lokalu, przez cały okres realizacji inwestycji, aż
                            po przekazanie kluczy i późniejszy kontakt posprzedażowy. Inwestycja realizowana jest zgodnie z przepisami
                            Ustawy Deweloperskiej i pod pełnym nadzorem wykwalifikowanego banku – Millennium Bank S.A., który prowadzi
                            mieszkaniowy rachunek powierniczy.</p>
                        <p><b>Sprawdzeni wykonawcy i doświadczenie w realizacji</b></p>
                        <ul>
                            <li>Generalny Wykonawca I etapu: Unibep S.A.</li>
                            <li>Generalny Wykonawca II etapu: F.B.I. Tasbud</li>
                            <li>Zarządzanie i nadzór nad inwestycją: Reacon Sp. z o.o.</li>
                        </ul>
                        <p>Zespół doświadczonych specjalistów oraz sprawdzeni partnerzy zapewniają najwyższy standard realizacji – tak,
                            by każda nieruchomość spełniała oczekiwania najbardziej wymagających klientów.</p>
                        <p><b>Zamieszkaj w zielonej części Warszawy – Białołęka czeka na Ciebie.</b> Nowoczesne osiedle Greenwood
                            powstało przy ul. Jeździeckiej, Warszawa – Wesoła, w jednej z najbardziej rozwijających się i przyjaznych do
                            życia dzielnic stolicy. Kameralne sąsiedztwo, świetna komunikacja i pełna infrastruktura – wszystko, czego
                            potrzebujesz na co dzień.</p>
                    </div>
                </div>

                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-18.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>

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
@push('scripts')

@endpush
