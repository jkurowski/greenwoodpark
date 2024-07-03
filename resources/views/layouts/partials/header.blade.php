<header class="sticky-top bg-white py-3">
    <nav class="navbar navbar-expand-xl py-0">
        <div class="container d-flex justify-content-between position-relative">
            <!-- INFO -- EMAIL/PHONE CONTAINER -->
            <div class="info-container">
                <div class="info-container__email info-container__box">
                    <span>Napisz do nas</span>
                    <a
                            href="mailto:sprzedaz@madeydevelopment.pl"
                            aria-label="skontaktuj się"
                    >sprzedaz@madeydevelopment.pl</a
                    >
                </div>
                <div class="info-container__phone info-container__box">
                    <span>Zadzwoń do nas</span>
                    <a href="tel:+48576117119" aria-label="Zadzwoń"
                    >+48 576 117 119</a
                    >
                </div>
            </div>

            <!-- Logo -->
            <div>
                <a
                        class="text-center d-inline-flex justify-content-center"
                        href="/"
                >
                    <img
                            src="{{ asset('images/logo.svg') }}"
                            alt="Logo"
                            width="210"
                            class="img-fluid"
                    />
                </a>
            </div>

            <!-- Toggle button for mobile -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon-x">
              <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      fill="currentColor"
                      class="bi bi-x"
                      viewBox="0 0 16 16"
              >
                <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                />
              </svg>
            </span>
            </button>

            <!-- Links -->

            <div class="collapse navbar-collapse justify-content-end bg-white position-relative" id="navbarNav">
                <ul class="navbar-nav fw-light py-4 py-xl-0 gap-2 gap-xl-4 align-items-xxl-center">
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim @if($page->slug == 'o-inwestycji') active @endif" href="/o-inwestycji">O inwestycji</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim" href="/apartamenty">Apartamenty</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim @if($page->slug == 'galeria') active @endif" href="/galeria">Galeria</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim @if($page->slug == 'udogodnienia') active @endif" href="/udogodnienia">Udogodnienia</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim @if($page->slug == 'inwestor') active @endif" href="/inwestor">Inwestor</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-anim @if($page->slug == 'kontakt') active @endif" href="/kontakt">KONTAKT</a>
                    </li>
                    <li class="nav-item mt-3 text-uppercase d-flex justify-content-between li-hidden">
                        <div class="info-container__email info-container__box">
                            <span>Napisz do nas</span>
                            <a href="mailto:sprzedaz@madeydevelopment.pl" aria-label="kontakt email">sprzedaz@madeydevelopment.pl</a>
                        </div>
                    </li>
                    <li class="nav-item mt-3 text-uppercase d-flex justify-content-between li-hidden">
                        <div class="info-container__phone info-container__box">
                            <span>Zadzwoń do nas</span>
                            <a href="tel:+48504470477" aria-label="kontakt telefoniczny">+48 504 470 477</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>