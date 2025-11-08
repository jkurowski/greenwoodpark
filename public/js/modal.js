document.addEventListener('click', function(event) {
    const target = event.target;

    if (target.classList.contains('askForPrice')) {
        const productId = target.dataset.id;

        fetch(`/modal/property/${productId}`, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(html => {
                const modalHandler = document.getElementById('modalHandler');
                modalHandler.innerHTML = html;

                // Inicjuj modal Bootstrap
                const modalEl = document.getElementById('discountModal');
                const modal = new bootstrap.Modal(modalEl);
                modal.show();

                // Tutaj inicjuj walidację i reCAPTCHA, np:
                initializeValidation();
                initializeRecaptcha();

                // ⬇️ DODAJ TO TUTAJ:
                const sendBtn = modalEl.querySelector('#discountSendBtn');
                if (sendBtn) {
                    sendBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        console.log('[DEBUG] Kliknięto discountSendBtn ✅');

                        // Walidacja formularza
                        const isValid = $(".validateForm").validationEngine('validate');
                        console.log('[DEBUG] Form valid =', isValid);

                        if (!isValid) {
                            console.warn('[DEBUG] Formularz niepoprawny, przerwano wysyłkę');
                            return;
                        }

                        // Uruchamiamy reCAPTCHA v3
                        if (typeof grecaptcha !== 'undefined' && grecaptcha.ready) {
                            grecaptcha.ready(() => {
                                grecaptcha.execute(site_key, { action: 'submitContact' })
                            .then(token => {
                                    console.log('[DEBUG] reCAPTCHA token:', token);

                                    // Wysyłamy dane formularza AJAX-em
                                    const form = document.getElementById('modalForm');
                                    const formData = new FormData(form);
                                    formData.append('recaptcha_token', token);

                                    const propertyId = form.getAttribute('data-property');
                                    const url = `/modal/property/${propertyId}`;

                                    console.log('[DEBUG] Wysyłam formularz AJAX-em do:', url);

                                    fetch(url, {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                        },
                                        body: formData
                                    })
                                        .then(response => {
                                            if (!response.ok) throw new Error('HTTP ' + response.status);
                                            return response.json();
                                        })
                                        .then(data => {
                                            console.log('[DEBUG] Odpowiedź z serwera:', data);

                                            if (data.success) {
                                                form.innerHTML = `<div><h3 class="text-success">Dziękujemy za wiadomość!</h3><p>Jesteś już o krok bliżej do swojego zakupu!</p><p>Postaramy się odpowiedzieć tak szybko jak to możliwe.</p><p>Jesteśmy w kontakcie.</p></div>`;
                                            } else {
                                                alert(data.message || 'Wystąpił błąd. Spróbuj ponownie.');
                                                grecaptcha.reset();
                                            }
                                        })
                                        .catch(err => {
                                            console.error('[DEBUG] Błąd AJAX:', err);
                                            alert('Nie udało się wysłać wiadomości.');
                                            grecaptcha.reset();
                                        });
                                })
                                    .catch(err => {
                                        console.error('[DEBUG] Błąd generowania tokenu reCAPTCHA:', err);
                                    });
                            });
                        } else {
                            console.error('[DEBUG] reCAPTCHA niedostępna!');
                        }
                    });
                }

                // Usuwamy modal z DOM po zamknięciu
                modalEl.addEventListener('hidden.bs.modal', () => {
                    modalHandler.innerHTML = '';
                });
            })
            .catch(error => {
                console.error('Błąd przy ładowaniu modala:', error);
                alert('Coś poszło nie tak przy ładowaniu modala!');
            });
    }
});

function initializeValidation() {
    // tutaj Twoja logika inicjująca validationEngine lub inną walidację
    $(".validateForm").validationEngine({
        validateNonVisibleFields: true,
        updatePromptsPosition: true,
        promptPosition: "topRight:-137px",
        autoPositionUpdate: false
    });
    console.log('[DEBUG] Validation engine initialized');
}

function initializeRecaptcha() {
    if (typeof grecaptcha !== 'undefined' && grecaptcha.ready) {
        grecaptcha.ready(() => {
            console.log('[DEBUG] grecaptcha ready');
            // możesz np. resetować token, jeśli jest taka potrzeba
        });
    } else {
        console.warn('[DEBUG] grecaptcha not ready');
    }
}
