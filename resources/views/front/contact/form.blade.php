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
                        value="{{ old('form_name') }}"
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
            Aby świadczyć usługi na najwyższym poziomie, strona
            internetowa Kalter Nieruchomości Sp. z o.o. wykorzystuje
            pliki cookies zapisywane w pamięci przeglądarki. Szczegółowe
            informacje na temat celu ich używania oraz zmiany ustawień
            plików cookies w przeglądarce internetowej znajdują się w
            Polityce prywatności – obowiązki informacyjne. Dalsze
            korzystanie z serwisu bez zmiany ustawień dotyczących
            cookies w przeglądarce oznacza potwierdzenie zapoznania się
            z powyższymi informacjami.
        </div>
    </div>
    @foreach ($rules as $r)
        <div class="col-12">
            <div class="form-check text-start pt-3 @error('rule_'.$r->id) is-invalid @enderror">
                <input
                        class="form-check-input"
                        type="checkbox @if($r->required === 1) validate[required] @endif"
                        value=""
                        id="rule_{{$r->id}}"
                        name="rule_{{$r->id}}"
                />
                <label class="form-check-label small fw-medium" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                @error('rule_'.$r->id)
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    @endforeach
    <div class="col-12 text-center text-sm-start">
        <script type="text/javascript">
            document.write("<button data-btn-submit=\"\" type=\"submit\" class=\"btn btn-main mt-5 btn-submit\" disabled>WYŚLIJ <img class=\"ps-4\" src=\"{{ asset('images/arrow-right.svg') }}\" height=\"15.644\" alt=\"Wyślij formularz\"/></button>");
        </script>
        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
    </div>
</form>

@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
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