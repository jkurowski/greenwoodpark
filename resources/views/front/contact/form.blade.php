<div class="contact-form__content scroll-animation">
    <h3 class="contact-form__form-title">Formularz kontaktowy</h3>
    <form id="contact-form" autocomplete="off" class="form validateForm" action="{{ route('front.contact.form') }}" method="post">
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
        <div class="input input--textarea">
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
        <input type="hidden" name="page_name" value="{{ $page_name }}">
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
