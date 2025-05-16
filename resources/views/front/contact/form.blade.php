<form id="contact-form" autocomplete="off" class="p-0 p-lg-3 validateForm" method="post" action="{{ route('front.contact.form') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
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
        </div>
        <div class="col-12">
            <div class="form-floating mb-3">
                <input
                        type="text"
                        class="form-control validate[required] @error('form_name') is-invalid @enderror"
                        id="user-name"
                        placeholder="Imię i nazwisko"
                        name="form_name"
                        required=""
                        value="{{ old('form_name') }}"
                        data-prompt-position="topLeft:0"
                />
                <label for="user-name">Imię i nazwisko</label>
                @error('form_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input
                        type="email"
                        class="form-control validate[required] @error('form_email') is-invalid @enderror"
                        id="user-email"
                        placeholder="Adres e-mail"
                        name="form_email"
                        required=""
                        value="{{ old('form_email') }}"
                        data-prompt-position="topLeft:0"
                />
                <label for="user-email">Adres e-mail</label>
                @error('form_email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input
                        type="tel"
                        class="form-control validate[required] @error('form_phone') is-invalid @enderror"
                        id="user-tel"
                        placeholder="Telefon"
                        name="form_phone"
                        value="{{ old('form_phone') }}"
                        data-prompt-position="topLeft:0"
                />
                <label for="user-tel">Telefon</label>
                @error('form_phone')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                      <textarea
                              class="form-control validate[required] @error('form_message') is-invalid @enderror"
                              placeholder="Wiadomość"
                              id="user-message"
                              style="height: 100px"
                              name="form_message"
                              data-prompt-position="topLeft:0"
                      >{{ old('form_message') }}</textarea>
                <label for="user-message">Wiadomość</label>
                @error('form_message')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="fs-7 mt-4">
            <p>Zgodnie z art. 13 ust.1 i ust. 2 Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych informujemy, że administratorem Pani/Pana danych osobowych jest Madey Development spółka z ograniczoną odpowiedzialnością 2 sp.k., z siedzibą w  93-120 Łódź ul. Przybyszewskiego 199/205. Dane będą przetwarzane w celu założenia i prowadzenia konta klienta na stronie internetowej w tym przede wszystkim świadczenia usług drogą elektroniczną jak również w celu komunikacji.</p>
            <p></p>
            <p>Osobie, której dane dotyczą, przysługuje prawo dostępu do treści swoich danych oraz ich poprawiania a także prawo sprzeciwu i żądania zaprzestania przetwarzania i usunięcia swoich danych osobowych.. Podanie danych osobowych przez użytkownika jest dobrowolne, jednakże odmowa podania danych osobowych spowoduje  brak możliwości skontaktowania się oraz udzielenia ewentualnej odpowiedzi na treść zamieszczoną w formularzu kontaktowym (w tym celu możesz wysłać takie oświadczenie na adres email biuro@madej-bud.pl lub pisemnie na adres siedziby.</p>
        </div>
    </div>
    @foreach ($rules as $r)
        <div class="col-12">
            <div class="form-check text-start pt-3 @error('rule_'.$r->id) is-invalid @enderror">
                <input
                        class="form-check-input @if($r->required === 1) validate[required] @endif"
                        type="checkbox"
                        id="rule_{{$r->id}}"
                        name="rule_{{$r->id}}"
                        data-prompt-position="topLeft:0"
                />
                <label class="form-check-label small fw-medium" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                @error('rule_'.$r->id)
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    @endforeach
    <input type="hidden" name="page_name" value="{{ $page_name }}">
    <div class="col-12 text-center text-sm-start">
        <script type="text/javascript">
            @if(config('services.recaptcha.v3_site_key') && config('services.recaptcha.v3_secret_key'))
            document.write("<button data-sitekey=\"{{ config('services.recaptcha.v3_site_key') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\" type=\"submit\" class=\"btn btn-main mt-5 btn-submit g-recaptcha\">WYŚLIJ <img class=\"ps-4\" src=\"{{ asset('images/arrow-right.svg') }}\" height=\"15.644\" alt=\"Wyślij formularz\"/></button>");
            @else
            document.write("<button data-btn-submit=\"\" type=\"submit\" class=\"btn btn-main mt-5 btn-submit\">WYŚLIJ <img class=\"ps-4\" src=\"{{ asset('images/arrow-right.svg') }}\" height=\"15.644\" alt=\"Wyślij formularz\"/></button>");
            @endif

        </script>
        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
    </div>
</form>

@push('scripts')
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
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
