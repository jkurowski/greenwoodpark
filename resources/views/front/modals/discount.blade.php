<div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="discountModalLabel">
                    Wyślij zapytanie
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                    <form id="modalForm" class="row validateForm" data-property="{{ $property->id }}">
                        <div class="col-12 pb-4">
                            <p>Dziękujemy za zainteresowanie naszą ofertą. Chętnie odpowiemy na Twoje pytania - zapraszamy do kontaktu!</p>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <input name="form_name" type="text" class="form-control validate[required]" placeholder="Imię" required>
                                @error('form_name') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <input name="form_lastname" type="text" class="form-control validate[required]" placeholder="Nazwisko" required>
                                @error('form_lastname') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <input name="form_phone" type="text" class="form-control validate[required]" placeholder="Telefon" required>
                                @error('form_phone') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <input name="form_email" type="email" class="form-control validate[required]" placeholder="E-mail" required>
                                @error('form_email') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <textarea name="form_message" class="form-control validate[required]" rows="3" placeholder="Wiadomość" required>Proszę o więcej informacji na temat {{ $property->name }} lub podobnych, w tej inwestycji.</textarea>
                                @error('form_message') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form__agreements">
                                @foreach ($rules as $r)
                                    <div class="input input--checkbox">
                                        <input
                                            type="checkbox"
                                            id="rule_{{ $r->id }}"
                                            name="rules[]"
                                            value="{{ $r->id }}"
                                            class="validate[required]"
                                            data-prompt-position="topLeft:0"
                                        />
                                        <label for="rule_{{ $r->id }}">{!! strip_tags($r->text) !!}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12">
                            <button
                                type="button"
                                id="discountSendBtn"
                                class="panel__btn btn btn--primary g-recaptcha"
                                data-sitekey="{{ config('services.recaptcha.v3_site_key') }}"
                                data-callback="onRecaptchaSuccess"
                                data-action="submitContact"
                            >
                                Wyślij zapytanie
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

