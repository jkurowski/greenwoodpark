@extends('layouts.page', ['body_class' => 'completed-page'])

{{--@section('meta_title', $page->title)--}}
{{--@section('seo_title', $page->meta_title)--}}
{{--@section('seo_description', $page->meta_description)--}}

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper">
            <a href="/">Strona główna</a>
            <a href="/mieszkania/">Mieszkania</a>
        </div>

        <section class="apartment">
            <div class="wrapper">

                <div class="apartment__top-bar scroll-animation">
                    <a class="with-arrow with-arrow--left" href="#">Poprzednie</a>
                    <a href="/mieszkania/">Wróć do planu</a>
                    <a class="with-arrow" href="#">Następne</a>
                </div>

                <div class="wrapper--small">
                    <div class="apartment__content scroll-animation delay-2">


                        <h2 class="apartment__name">{{ $property->name }}</h2>

                        <table class="apartment__data">
                            <tbody>
                            <tr>
                                <th>Status:</th>
                                <td><span class="status available">Dostępne</span></td>
                            </tr>
                            <tr>
                                <th>Cena:</th>
                                <td>{{ $property->price_brutto }} zł</td>
                            </tr>
                            <tr>
                                <th>Powierzchnia:</th>
                                <td>{{ $property->area }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th>Cena garażu pojednyczego:</th>
                                <td>od 000000 zł</td>
                            </tr>
                            <tr>
                                <th>Piętro:</th>
                                <td>{{ $property->floor->number }}</td>
                            </tr>
                            <tr>
                                <th>Cena garażu rodzinnego:</th>
                                <td>od 000000 zł</td>
                            </tr>
                            <tr>
                                <th>Lorem ipsum:</th>
                                </th>
                                <td>Lorem ipsum</td>
                            </tr>
                            <tr>
                                <th>Lorem ipsum:</th>
                                <td>Lorem ipsum</td>
                            </tr>
                            </tbody>
                        </table>

                        <div>
                            <a class="apartment__history-btn cta-link" href="#">Historia zmian ceny</a>
                        </div>

                        <div class="apartment__buttons">
                            <a class="cta-link" href="#">Pobierz prospekt informacyjny</a>
                            <a class="cta-link" href="#">Pobierz kartę apartamentu</a>
                            <a class="btn btn--primary" href="#">Umów spotkanie</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>  <section class="contact-form">

            <div class="wrapper--medium contact-form__wrapper">

                <div class="contact-form__image scroll-animation delay-2">
                    @if($property->file)
                        <picture>
                            <source type="image/webp" srcset="/investment/property/webp/{{$property->file_webp}}">
                            <source type="image/jpeg" srcset="/investment/property/{{$property->file}}">
                            <img src="/investment/property/{{$property->file}}" alt="{{$property->name}}" class="contact-form__img">
                        </picture>
                    @endif
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

        </section>  <section class="similar">

            <img src="{{ asset('images/decor-03.png') }}" alt="" class="decor-03 decor--left decor--top" />

            <div class="wrapper--small">
                <h2 class="similar__title scroll-animation">Podobne<br>mieszkania</h2>
            </div>

            <div class="similar__content scroll-animation delay-3">
                <div class="similar__items slider slider--thin slider--with-bar">
                    @foreach($similar as $p)
                        <div class="panel {!! roomStatusList($p->status) !!}">
                            <h3 class="panel__name">{{ $p->name }}</h3>
                            <div class="panel__status">{!! roomStatusBadge($p->status) !!}</div>
                            @if($p->file)
                                <picture>
                                    <source type="image/webp" srcset="/investment/property/list/webp/{{$p->file_webp}}">
                                    <source type="image/jpeg" srcset="/investment/property/list/{{$p->file}}">
                                    <img src="/investment/property/list/{{$p->file}}" alt="{{$p->name}}" class="panel__img object-position-center">
                                </picture>
                            @endif
                            <div class="panel__data">
                                <p>Powierzchnia:<br><span>{{ $p->area }} m<sup>2</sup></span></p>
                                <p>Pokoje:<br><span>{{ $p->rooms }}</span></p>
                                <p>Piętro:<br><span>{{ $p->floor->number }}</span></p>
                                <p>Cena<br><span>od {{ $p->price_brutto }} zł</span></p>
                            </div>
                            <a href="{{ route('front.developro.investment.property', [
                                                        $p->building->slug,
                                                        Str::slug($p->floor->name),
                                                        $p,
                                                        Str::slug($p->name),
                                                        floorLevel($p->floor->number, true),
                                                        number2RoomsName($p->rooms, true),
                                                        round(floatval($p->area), 2).'-m2'
                                                    ]) }}" class="panel__btn btn btn--primary">Zobacz więcej</a>
                        </div>
                    @endforeach
                </div>

                <div class="wrapper slider__pagination-wrapper scroll-animation delay-4">
                    <div class="similar__pagination pagination-bar">
                        <div class="pagination-bar__progress">
                            <div class="pagination-bar__progress-bar"></div>
                        </div>
                        <div class="pagination-bar__buttons"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush

