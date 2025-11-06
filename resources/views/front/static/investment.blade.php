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

        <section class="text-img mb-0">
            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--right decor--top" />
            <div class="wrapper">
                <div class="text-img__content">
                    <h2 class="text-img__title scroll-animation">Greenwood Park</h2>
                    <h3 class="text-img__subtitle scroll-animation">zamieszkaj tak, jak zawsze marzyłeś</h3>
                    <div class="text-img__description scroll-animation delay-2">
                        <p>Wyobraź sobie codzienność w otoczeniu zieleni, ciszy i spokoju, zaledwie kilkanaście minut od centrum
                            Warszawy. Greenwood Park to wyjątkowa inwestycja w Starej Miłosnej, stworzona dla osób, które chcą łączyć
                            bliskość natury z komfortem miejskiego życia.</p>
                        <p>Elegancka architektura, kameralny charakter i sąsiedztwo Mazowieckiego Parku Krajobrazowego sprawiają, że
                            Greenwood Park to miejsce, gdzie odpoczywasz od zgiełku miasta, nie rezygnując z jego wygód. Starannie
                            zaprojektowana zieleń, przestrzenie wspólne sprzyjające spotkaniom i relaksowi, a także bezpieczny plac zabaw
                            dla najmłodszych – to wszystko czeka na przyszłych mieszkańców.</p>
                    </div>
                </div>
                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-12.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>
            </div>
        </section>

        <section class="m-0">
            <div class="wrapper">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="investment-icon-box">
                            <svg id="planet" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 40.6 41.1">
                                <path d="M18,0c.3,0,.7,0,1,.1s.7.2,1.1.3c1.5.7,2,2,2.2,3.5.5.3.9.6,1.3,1,.1,0,.6-.6.8-.7s.5-.2.6-.4,0-.8.2-1c.5-1.9,1.7-2.5,3.5-3,0,0,.5,0,1,0,1.7.2,4.3,2.2,5.3,3.6s.4.5.1.9c-.4.6-1,.1-1.4,0-1,0-2.1,1-3,1.4-1.7.7-3.2.9-4.7-.2s-.5-.5-.6-.5c-.9.5-1.1,1.4-1,2.4,1.3.1,2.6.3,3.8.7,4.4,1.4,8.9,6,9.4,10.6s-.7,1.2-1.1.7-.6-2-.7-2.4c-.3-.8-.7-1.6-1.1-2.3-1.5,1.4-1.7,4.8-4,5s-3-.3-4.1.3-1.4,1.5-1.7,2.3-.3,2-1.2,1.6,0-1.9.2-2.5c.7-1.5,1.7-2.8,3.4-3.1s2.2,0,3.3,0,1.5-1.9,1.9-2.7.9-1.5,1.5-2.1c.1-.2-2.2-2.4-2.7-2.6-.7.9-1.8,1.7-3,1.6s-1.2-.5-1.9-.4-1.5,1-2.1,1.2c-2.5,1-4.2.2-5.6-1.9s-.6-1.1-.8-1.3,0,0-.2,0c-.2,0-1,.6-1.2.8-.8.6-1.4,1.2-2.1,1.9l1.4,1.1c.7.6,1.3,1.2,1.7,2.1.8,1.8-.6,3.6-1.2,5.2-.4.5-1.2.2-1.2-.4s1-2,1.2-2.7.2-.7.2-.9c0-1.2-1.9-2.7-2.9-3.2-.2,0-1.3,2.1-1.4,2.4-.8,1.8-1,3.6-1.1,5.6-.2.5-1.1.4-1.2-.1s0-2,.2-2.7c1-6.5,6.7-11.5,13.3-11.8.1-1-.1-1.9-1-2.4-.1,0-.4.4-.6.5-1.5,1.1-3,1-4.7.2s-2-1.5-3-1.4-1.1.5-1.4,0,0-.6.1-.9c.8-1.2,2.9-2.8,4.6-3.4s.8-.2,1.2-.2h0ZM20.8,3.5c0-1-.7-1.6-1.6-1.9-2.1-.7-3.6.5-5,1.8,2,.7,4.1,3.1,6.3,1.4-.5-.4-2-.5-2-1.4,0-1.4,2.2.2,2.3,0ZM32.8,3.4c-1-1-2.6-2.3-4.2-2.1s-2.3.8-2.4,2,0,.2.1.1c.5-.2,1.9-1.2,2.2-.2s-1.4,1.1-2,1.6c2.2,1.7,4.2-.8,6.3-1.4ZM18.5,10c.9,1.7,2,3.4,4.2,2.9s2.1-1.7,3.8-1.6,1.6.8,2.8,0,.4-.4.6-.6c-3.4-2.1-7.7-2.2-11.3-.8Z" fill="#1c7933"/>
                                <path d="M28.5,26.5c.1.1.3.4.4.5h.1s5-5,5-5c2.9-2.4,6.5,1.2,4.2,4.1-2.6,2.3-4.9,5.3-7.5,7.5s-2.4,1.6-3.9,1.7c-3.2.2-6.8-.3-10,0-.9,0-1.3.7-1.9,1.3.3.6,1.3.9.9,1.7l-2.6,2.7c-.2.2-.5.3-.7.2L1.9,30.7c-.2-.2-.2-.4-.2-.7.1-.5,2.4-2.4,2.8-2.9.8-.4,1.1.6,1.7.9,1.8-1.6,3.2-3.7,5.5-4.4s5.7,0,7.8,2.2c2.4.2,5-.2,7.4,0s1.2.4,1.6.7ZM35.8,22.5c-.3,0-.6.2-.8.3-1.9,1.5-3.7,4.1-5.7,5.6-.3,1.2-1,2.1-2.3,2.3-3-.2-6.3.3-9.3,0s-.9-1.2-.2-1.3h9.4c1.4-.4,1.2-2.4-.2-2.6h-7.8c-.4-.1-.7-.7-.9-.9-2.3-2.1-5.6-2.2-7.9-.2s-2.3,2.2-2.9,2.9-.1,0-.1.2l6.7,6.7c.8-.7,1.5-1.5,2.6-1.6,3.2-.3,6.9.2,10.1,0s2.1-.5,2.9-1.2l7.8-7.8c.8-1.2-.2-2.7-1.6-2.5ZM4.9,28.6c-.1,0-1.5,1.4-1.5,1.5s0,0,0,.2l9.3,9.2c0,0,1.4-1.4,1.5-1.5s0,0,0-.2l-9.3-9.2Z" fill="#1c7933"/>
                            </svg>
                            <h3>Rozwiązania proekologiczne<br> i przyjazne środowisku</h3>
                            <ul class="list-unstyled">
                                <li><b>Zieleń ekstensywna na dachach</b> – naturalna izolacja chroniąca budynek przed przegrzewaniem, poprawiająca mikroklimat i retencję wody</li>
                                <li><b>System wykorzystania szarej wody</b> – woda zbierana z dachów i patio służą do podlewania terenów zielonych, co znacząco ogranicza jej zużycie</li>
                                <li><b>Nowoczesne linie kroplujące</b> – efektywnie nawadniają rośliny, minimalizując straty</li>
                                <li><b>Hybrydowa kotłownia</b> – połączenie kotłów gazowych i pomp ciepła pozwala na zoptymalizowane, energooszczędne ogrzewanie i podgrzewanie wody</li>
                                <li><b>Indywidualne szachty klimatyzacyjne</b> – w budynku nr 30 umożliwiają poprowadzenie instalacji na dach, bez ingerencji w estetykę elewacji</li>
                                <li><b>Energooszczędne oświetlenie w częściach wspólnych</b> – zmniejsza zużycie energii elektrycznej i koszty eksploatacji</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="investment-icon-box">
                            <svg id="park" xmlns="http://www.w3.org/2000/svg" width="55.088" height="55.087" viewBox="0 0 55.088 55.087">
                                <path id="Path_12514" data-name="Path 12514" d="M.807,53.492a.808.808,0,0,0,0,1.614H54.281a.808.808,0,0,0,0-1.614H53.259v-2.4a.807.807,0,0,0-.807-.807H51.107v-2.4a.807.807,0,0,0-.807-.807H49.009V37.244a.8.8,0,0,0,.058-.192,5.719,5.719,0,0,1,5.263-4.766.807.807,0,0,0-.1-1.611,7.229,7.229,0,0,0-5.223,2.7V29.716a3.152,3.152,0,0,0,2.34-3.042V23.259h.583a.819.819,0,0,0,.571-1.378L50.162,19.54a2.771,2.771,0,0,0-3.912,0L43.9,21.88a.818.818,0,0,0,.57,1.378h.583v3.416a3.152,3.152,0,0,0,2.34,3.042v5.472a5.1,5.1,0,0,0-4.312-.261,6.277,6.277,0,0,0-9.7-2.967,4.328,4.328,0,0,0-4.1-1.232,4.659,4.659,0,0,0-3.723-3.25,4.627,4.627,0,0,0-5.126,3.2,6.136,6.136,0,0,0-4.5.072V21.27a7.97,7.97,0,0,0-9.815-7.748.808.808,0,0,0,.374,1.57,6.356,6.356,0,0,1,7.827,6.178V32.762a6.359,6.359,0,0,1-5.481,6.289V33.769h0V28.555L12,25.387c.714-.714-.395-1.888-1.141-1.141L8.833,26.272V20.73a.808.808,0,0,0-1.614,0V31.82L5.24,29.841c-.714-.714-1.888.395-1.141,1.141L7.219,34.1v4.964a6.358,6.358,0,0,1-5.605-6.305V21.27a6.322,6.322,0,0,1,1.757-4.385c.7-.73-.438-1.878-1.167-1.115A7.928,7.928,0,0,0,0,21.27V32.762A7.974,7.974,0,0,0,7.219,40.69v12.8Zm28.458-2.321a.808.808,0,0,0,0-1.614H15.4V47.9H39.685v1.658H33.569a.808.808,0,0,0,0,1.614h2.5v2.321H19.022V51.171ZM17.857,42.993V39.8H37.231v3.19Zm14.1,1.614v1.678h-8.82V44.607Zm19.691,8.885H44.759V51.9h6.886Zm-2.152-3.2H46.911V48.7h2.582Zm-2.1-29.607a1.155,1.155,0,0,1,1.631,0l.963.963h-3.56Zm-.721,5.994V23.258h3.066v3.416a1.533,1.533,0,1,1-3.066,0Zm-37.836,14a7.975,7.975,0,0,0,7.1-7.916v-.21l0,0a4.52,4.52,0,0,1,4.679.007c.8.486,1.164-.369,1.257-.968a3.011,3.011,0,0,1,3.437-2.515,3.028,3.028,0,0,1,2.544,2.783.814.814,0,0,0,1.171.668,2.712,2.712,0,0,1,3.553,1.022.814.814,0,0,0,1.266.151,4.658,4.658,0,0,1,7.913,2.544.814.814,0,0,0,1.25.541,3.5,3.5,0,0,1,4.393.382v9.916H46.1a.807.807,0,0,0-.807.807v2.4H43.952a.807.807,0,0,0-.807.807v2.4H37.68V51.171h2.813a.807.807,0,0,0,.807-.807V47.092a.807.807,0,0,0-.807-.807H33.568V44.607h4.47a.807.807,0,0,0,.807-.807V39a.807.807,0,0,0-.807-.807H17.05a.807.807,0,0,0-.807.807v4.8a.807.807,0,0,0,.807.807h4.47v1.678H14.6a.807.807,0,0,0-.807.807v3.272a.807.807,0,0,0,.807.807h2.813v2.321H8.833Z" transform="translate(0 -11.874)" fill="#1c7933"/>
                                <path id="Path_12515" data-name="Path 12515" d="M296.514,8.8a4.4,4.4,0,1,0-4.4-4.4A4.4,4.4,0,0,0,296.514,8.8Zm0-7.184A2.785,2.785,0,1,1,293.729,4.4a2.788,2.788,0,0,1,2.785-2.785Z" transform="translate(-260.685)" fill="#1c7933"/>
                                <path id="Path_12516" data-name="Path 12516" d="M467.955,438.75h-3.631a.808.808,0,0,0,0,1.614h3.631A.808.808,0,0,0,467.955,438.75Z" transform="translate(-413.675 -391.544)" fill="#1c7933"/>
                                <path id="Path_12517" data-name="Path 12517" d="M46.478,438.75H1.074a.808.808,0,0,0,0,1.614h45.4A.808.808,0,0,0,46.478,438.75Z" transform="translate(-0.267 -391.544)" fill="#1c7933"/>
                                <path id="Path_12518" data-name="Path 12518" d="M16.831,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,16.831,467.876Z" transform="translate(-14.324 -417.536)" fill="#1c7933"/>
                                <path id="Path_12519" data-name="Path 12519" d="M63.372,497a.807.807,0,0,0,0,1.614A.807.807,0,0,0,63.372,497Z" transform="translate(-55.858 -443.526)" fill="#1c7933"/>
                                <path id="Path_12520" data-name="Path 12520" d="M109.912,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,109.912,467.876Z" transform="translate(-97.39 -417.536)" fill="#1c7933"/>
                                <path id="Path_12521" data-name="Path 12521" d="M156.452,497a.807.807,0,0,0,0,1.614A.807.807,0,0,0,156.452,497Z" transform="translate(-138.924 -443.526)" fill="#1c7933"/>
                                <path id="Path_12522" data-name="Path 12522" d="M202.994,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,202.994,467.876Z" transform="translate(-180.457 -417.536)" fill="#1c7933"/>
                                <path id="Path_12523" data-name="Path 12523" d="M249.534,497a.807.807,0,0,0,0,1.614A.807.807,0,0,0,249.534,497Z" transform="translate(-221.991 -443.526)" fill="#1c7933"/>
                                <path id="Path_12524" data-name="Path 12524" d="M296.076,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,296.076,467.876Z" transform="translate(-263.524 -417.536)" fill="#1c7933"/>
                                <path id="Path_12525" data-name="Path 12525" d="M342.617,497a.807.807,0,0,0,0,1.614A.807.807,0,0,0,342.617,497Z" transform="translate(-305.058 -443.526)" fill="#1c7933"/>
                                <path id="Path_12526" data-name="Path 12526" d="M389.158,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,389.158,467.876Z" transform="translate(-346.591 -417.536)" fill="#1c7933"/>
                                <path id="Path_12527" data-name="Path 12527" d="M435.7,497a.807.807,0,0,0,0,1.614A.807.807,0,0,0,435.7,497Z" transform="translate(-388.124 -443.526)" fill="#1c7933"/>
                                <path id="Path_12528" data-name="Path 12528" d="M482.239,467.876a.807.807,0,0,0,0,1.614A.807.807,0,0,0,482.239,467.876Z" transform="translate(-429.657 -417.536)" fill="#1c7933"/>
                            </svg>
                            <h3>Komfort i bezpieczeństwo<br> na co dzień</h3>
                            <ul class="list-unstyled">
                                <li><b>Czujniki dymu w każdym lokalu</b> oraz <b>automatyczny system wykrywania pożaru</b> w budynku</li>
                                <li><b>Dwustopniowy system kontroli dostępu i całodobowy monitoring</b> – gwarancja bezpieczeństwa mieszkańców</li>
                                <li><b>Podgrzewana rampa do garażu</b> – komfortowy wjazd niezależnie od pogody</li>
                                <li><b>Estetyczne części wspólne</b> – panele ścienne z betonu architektonicznego, gres na podłogach, elegancki portal wejściowy</li>
                                <li><b>Nowoczesne windy KONE</b> – przestronne, ciche, dostępne od poziomu -1</li>
                                <li><b>Stojaki rowerowe</b> – wygodne rozwiązanie dla miłośników jednośladów</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-img text-img--multiple mt-5 pt-0 pt-md-3">
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
                        <p>Kupując mieszkanie w Greenwood Park przy ul. Jeździeckiej w Warszawie – Wesoła, otrzymasz od nas
                            profesjonalne wsparcie na każdym etapie zakupu – od wyboru lokalu, przez cały okres realizacji inwestycji, aż
                            po przekazanie kluczy i późniejszy kontakt posprzedażowy. Inwestycja realizowana jest zgodnie z przepisami
                            Ustawy Deweloperskiej i pod pełnym nadzorem wykwalifikowanego banku – Millennium Bank S.A., który prowadzi
                            mieszkaniowy rachunek powierniczy.</p>
                        <p><b>Sprawdzeni wykonawcy i doświadczenie w realizacji</b></p>
                        <p>Zespół doświadczonych specjalistów oraz sprawdzeni partnerzy zapewniają najwyższy standard realizacji – tak, by każda nieruchomość spełniała oczekiwania najbardziej wymagających klientów.</p>
                        <p><b>Zamieszkaj w zielonej części Warszawy – Stara Miłosna czeka na Ciebie.</b> Nowoczesne osiedle Greenwood Park powstaje przy ul. Jeździeckiej, Warszawa – Wesoła, w jednej z najbardziej rozwijających się i przyjaznych do życia dzielnic stolicy. Kameralne sąsiedztwo, świetna komunikacja i pełna infrastruktura – wszystko, czego potrzebujesz na co dzień.</p>
                    </div>
                </div>
                <div class="text-img__image scroll-animation delay-3">
                    <div class="text-img__image-inner">
                        <img src="{{ asset('images/photos/photo-18.jpg') }}" alt="GREENWOOD PARK" class="text-img__img">
                    </div>
                </div>
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
                @include('front.contact.form', ['page_name' => 'O inwestycji'])
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')

@endpush
