@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title .' - '. $building->name . ' - ' . $investment->floor->name . ' - ' . $property->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper mb-0">
            <a href="/mieszkania/">Mieszkania</a>
            <a href="{{ route('front.developro.building', [$building, 'buildingSlug' => $building->slug]) }}">{{ $building->name }}</a>
            <a href="{{route('front.developro.investment.floor', [$building->slug, $investment->floor, Str::slug($investment->floor->name)])}}">{{ $investment->floor->name }}</a>
        </div>

        <section class="apartment mt-3">
            <div class="wrapper">
                <div class="wrapper--small">
                    <div class="container-fluid p-0 floor-nav">
                        <div class="row mb-5">
                            <div class="col-4">
                                @if($prev)
                                    <a href="{{ route('front.developro.investment.property', [
                                                        $building->slug,
                                                        Str::slug($prev->floor->name),
                                                        $prev,
                                                        Str::slug($prev->name),
                                                        floorLevel($prev->floor->number, true),
                                                        number2RoomsName($prev->rooms, true),
                                                        round(floatval($prev->area), 2).'-m2'
                                                    ]) }}" class="btn btn--primary">{{$prev->name}}</a>
                                @endif
                            </div>
                            <div class="col-4 text-center">
                                <a href="{{route('front.developro.investment.floor', [$building->slug, $property->floor, Str::slug($property->floor->name)])}}" class="btn btn--primary">Plan piętra</a>
                            </div>
                            <div class="col-4 text-end">
                                @if($next)
                                    <a href="{{ route('front.developro.investment.property', [
                                                        $building->slug,
                                                        Str::slug($next->floor->name),
                                                        $next,
                                                        Str::slug($next->name),
                                                        floorLevel($next->floor->number, true),
                                                        number2RoomsName($next->rooms, true),
                                                        round(floatval($next->area), 2).'-m2'
                                                    ]) }}" class="btn btn--primary">{{$next->name}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="apartment__content scroll-animation delay-2">
                        <h2 class="apartment__name">{{ $property->name }}</h2>

                        <table class="apartment__data">
                            <tbody>
                            <tr>
                                <th>Status:</th>
                                <td>{!! roomStatusCard($property->status) !!}</td>
                            </tr>
                            <tr>
                                <th>Cena:</th>
                                @if($property->price_brutto && $property->status == 1)
                                <td @if($property->promotion_price) class="old-price" @endif>@money($property->price_brutto)
                                    <br>
                                    <span style="font-weight: normal !important;font-size: 11px;color: black;font-family: 'regular',sans-serif;">@money($property->price_brutto / $property->area)/m<sup>2</sup></span>
                                </td>
                                @endif
                                @if($property->promotion_price && $property->price_brutto && $property->highlighted && $property->status == 1)
                                    <td class="promotion-price">@money($property->promotion_price)
                                        <br>
                                        <span style="font-weight: normal !important;font-size: 11px;color: black;font-family: 'regular',sans-serif;">@money($property->promotion_price / $property->area)/m<sup>2</sup></span>
                                    </td>
                                @endif
                            </tr>
                            <tr>
                                <th>Powierzchnia:</th>
                                <td>{{ $property->area }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th>Piętro:</th>
                                <td>{{ $property->floor->number }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="text-center">
                            @if($property->has_price_history)
                            <a class="apartment__history-btn cta-link btn-history" data-id="{{ $property->id }}" href="#">Historia zmian ceny</a>
                            <div id="modalHistory"></div>
                            @else
                            <p class="apartment__history-btn cta-link">Cena nie zmieniła się od 11.09.2025 r.</p>
                            @endif
                        </div>

                        <div class="apartment__buttons">
                            @if($investment->file_brochure)
                            <a class="cta-link" target="_blank" href="{{ asset('/investment/brochure/'.$investment->file_brochure) }}">Pobierz prospekt informacyjny</a>
                            @endif
                            @if($property->file_pdf)
                                <a class="cta-link" href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank">Pobierz kartę apartamentu</a>
                            @endif
                            <a class="btn btn--primary" href="#contactForm">Umów spotkanie</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <div id="contactForm"></div>
        <section class="contact-form">
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
                    @if (session('success'))
                        <div class="alert alert-success border-0">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning border-0">
                            {{ session('warning') }}
                        </div>
                    @endif
                    <form id="contact-form" autocomplete="off" class="form validateForm" action="{{ route('front.contact.property', $property->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="input input--text">
                            <label for="user-ename">Imię</label>
                            <input
                                type="text"
                                class="form-control validate[required] @error('form_name') is-invalid @enderror"
                                id="user-ename"
                                name="form_name"
                                required=""
                                value="{{ old('form_name') }}"
                                data-prompt-position="topLeft:0"
                            />

                            @error('form_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <div class="input input--text">
                            <label for="user-email">Adres e-mail</label>
                            <input
                                type="email"
                                class="form-control validate[required] @error('form_email') is-invalid @enderror"
                                id="user-email"
                                name="form_email"
                                required=""
                                value="{{ old('form_email') }}"
                                data-prompt-position="topLeft:0"
                            />
                            @error('form_email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input input--text">
                            <label for="user-tel">Telefon</label>
                            <input
                                type="text"
                                class="form-control validate[required] @error('form_phone') is-invalid @enderror"
                                id="user-tel"
                                name="form_phone"
                                value="{{ old('form_phone') }}"
                                data-prompt-position="topLeft:0"
                            />

                            @error('form_phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input input--textarea w-100">
                            <label for="message">Wiadomość</label>
                            <textarea
                                class="form-control validate[required] @error('form_message') is-invalid @enderror"
                                id="message"
                                name="form_message"
                                data-prompt-position="topLeft:0"
                            >{{ old('form_message') }}</textarea>

                            @error('form_message')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form__agreements">
                            @foreach ($rules as $r)
                                <div class="input input--checkbox">
                                    <input
                                        class="@if($r->required === 1) validate[required] @endif"
                                        type="checkbox"
                                        id="rule_{{$r->id}}"
                                        name="rule_{{$r->id}}"
                                        data-prompt-position="topLeft:0"
                                    />
                                    <label for="rule_{{$r->id}}">{!! strip_tags($r->text) !!}</label>
                                </div>
                            @endforeach
                        </div>
                        <input type="hidden" name="page_name" value="{{ $property->name }}">
                        <script type="text/javascript">
                            @if(config('services.recaptcha.v3_site_key') && config('services.recaptcha.v3_secret_key'))
                            document.write("<button data-sitekey=\"{{ config('services.recaptcha.v3_site_key') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\" type=\"submit\" class=\"btn btn--primary form__submit g-recaptcha\">WYŚLIJ</button>");
                            @else
                            document.write("<button data-btn-submit=\"\" type=\"submit\" class=\"btn btn--primary form__submit\">WYŚLIJ</button>");
                            @endif

                        </script>
                        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
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
    <link href="{{ asset('/css/modal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/history.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px",
                autoPositionUpdate: false
            });
        });

        function onRecaptchaSuccess(token) {
            $(".validateForm").validationEngine('updatePromptsPosition');
            const isValid = $(".validateForm").validationEngine('validate');
            if (isValid) {
                $("#contact-form").submit();
            } else {
                grecaptcha.reset();
            }
        }
        @if (session('success') || session('warning') || $errors->any())
        $(window).on('load', function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top - aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif

        document.addEventListener('click', async function (e) {
            // History Button
            const btnHistory = e.target.closest('.btn-history');
            if (btnHistory) {
                e.preventDefault();

                // Disable button to prevent double click
                btnHistory.disabled = true;

                const modalHolder = document.getElementById('modalHistory');
                const dataId = btnHistory.dataset.id;
                modalHolder.innerHTML = '';

                try {
                    const url = `/historia/${dataId}/`;

                    const response = await fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error('Błąd z backendu:', response.status, errorText);
                        throw new Error(`Błąd sieci: ${response.status}`);
                    }

                    const html = await response.text();
                    modalHolder.innerHTML = html;

                    const modalElement = document.getElementById('portletModal');
                    const bootstrapModal = new bootstrap.Modal(modalElement);
                    bootstrapModal.show();

                    modalElement.addEventListener('hidden.bs.modal', () => {
                        modalHolder.innerHTML = '';
                    }, { once: true });

                } catch (error) {
                    alert('Wystąpił błąd podczas ładowania historii.');
                    console.error(error);
                } finally {
                    // Re-enable the button after request completes
                    btnHistory.disabled = false;
                }
            }
        });
    </script>
@endpush

