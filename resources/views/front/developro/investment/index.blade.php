@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper mb-0">
            <a href="/">Strona główna</a>
            <a href="/mieszkania/">Mieszkania</a>
        </div>

        <section class="image mt-3">
            <div class="wrapper--small">
                <h2 class="image__title scroll-animation">Greenwood Park</h2>
                <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="Plan inwestycji {{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="image__img scroll-animation delay-1 rounded-7">
                <map name="invesmentplan">
                    @if($investment->buildings)
                        @foreach($investment->buildings as $building)
                            <area
                                shape="poly"
                                href="{{route('front.developro.building', [$building, 'buildingSlug' => Str::slug($building->name)])}}"
                                alt="{{$building->slug}}"
                                title="{{$building->name}}"
                                coords="@if($building->html) {{cords($building->html)}} @endif">
                        @endforeach
                    @endif
                </map>

            </div>
        </section>  <section class="searcher-section">
            <div class="wrapper--small">

                <div class="searcher scroll-animation delay-2">
                    <h3 class="searcher__title">Wyszukiwarka mieszkań</h3>
                    <form class="searcher__form">

                        <div class="searcher__filters">
                            <div class="searcher__selects">

                                <select name="surface" id="surface">
                                    <option value="" disabled selected>Powierzchnia</option>
                                    <option value="mieszkanie">Mieszkanie</option>
                                    <option value="dom">Dom</option>
                                    <option value="lokal">Lokal</option>
                                </select>

                                <select name="rooms" id="rooms">
                                    <option value="" disabled selected>Liczba pokoi</option>
                                    <option value="1">1 pokój</option>
                                    <option value="2">2 pokoje</option>
                                    <option value="3">3 pokoje</option>
                                    <option value="4">4 pokoje</option>
                                    <option value="5">5 pokoi</option>
                                </select>

                                <select name="floor" id="floor">
                                    <option value="" disabled selected>Piętro</option>
                                    <option value="parter">Parter</option>
                                    <option value="1">1 piętro</option>
                                    <option value="2">2 piętro</option>
                                    <option value="3">3 piętro</option>
                                    <option value="4">4 piętro</option>
                                    <option value="5">5 piętro</option>
                                    <option value="6">6 piętro</option>
                                    <option value="7">7 piętro</option>
                                    <option value="8">8 piętro</option>
                                    <option value="9">9 piętro</option>
                                    <option value="10">10 piętro</option>
                                </select>

                                <select name="investition" id="investition">
                                    <option value="" disabled selected>Inwestycja</option>
                                    <option value="inwestycja1">Inwestycja 1</option>
                                    <option value="inwestycja2">Inwestycja 2</option>
                                    <option value="inwestycja3">Inwestycja 3</option>
                                </select>

                                <select name="price" id="price">
                                    <option value="" disabled selected>Przedział cenowy</option>
                                    <option value="do-300000">do 300 000 zł</option>
                                    <option value="300000-500000">300 000 - 500 000 zł</option>
                                    <option value="500000-700000">500 000 - 700 000 zł</option>
                                    <option value="700000-1000000">700 000 - 1 000 000 zł</option>
                                    <option value="powyzej-1000000">powyżej 1 000 000 zł</option>
                                </select>

                                <select name="type" id="type">
                                    <option value="" disabled selected>Typ nieruchomości</option>
                                    <option value="mieszkanie">Mieszkanie</option>
                                    <option value="dom">Dom</option>
                                    <option value="lokal">Lokal</option>
                                    <option value="dzialka">Działka</option>
                                </select>

                                <select name="status" id="status">
                                    <option value="" disabled selected>Stan nieruchomości</option>
                                    <option value="nowe">Nowe</option>
                                    <option value="uzywane">Używane</option>
                                    <option value="do-remontu">Do remontu</option>
                                    <option value="do-wykończenia">Do wykończenia</option>
                                </select>

                            </div>

                            <div class="searcher__more-wrapper" style="display:none;">
                                <button class="searcher__more btn--secondary btn" type="button">
                                    Więcej filtrów
                                </button>
                            </div>
                        </div>

                        <div class="searcher__search">
                            <button type="submit" class="searcher__button btn btn--primary">
                                Wyszukaj
                            </button>
                        </div>
                    </form>
                </div>

                <div class="searcher__display-filters scroll-animation">
                    <button class="filter__display--block active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19">
                            <path
                                d="M4.35,2A2.384,2.384,0,0,0,2,4.35v4.5A2.384,2.384,0,0,0,4.35,11.2h4.5A2.384,2.384,0,0,0,11.2,8.85V4.35A2.384,2.384,0,0,0,8.85,2ZM4,4.35A.389.389,0,0,1,4.35,4h4.5a.389.389,0,0,1,.35.35v4.5a.389.389,0,0,1-.35.35H4.35A.389.389,0,0,1,4,8.85Z"
                                transform="translate(-2 -2)" fill-rule="evenodd" />
                            <path
                                d="M15.15,2A2.384,2.384,0,0,0,12.8,4.35v4.5a2.384,2.384,0,0,0,2.35,2.35h4.5A2.384,2.384,0,0,0,22,8.85V4.35A2.384,2.384,0,0,0,19.65,2ZM14.8,4.35A.389.389,0,0,1,15.15,4h4.5a.389.389,0,0,1,.35.35v4.5a.389.389,0,0,1-.35.35h-4.5a.389.389,0,0,1-.35-.35Z"
                                transform="translate(-2 -2)" fill-rule="evenodd" />
                            <path
                                d="M2,15.15A2.384,2.384,0,0,1,4.35,12.8h4.5a2.384,2.384,0,0,1,2.35,2.35v4.5A2.384,2.384,0,0,1,8.85,22H4.35A2.384,2.384,0,0,1,2,19.65Zm2.35-.35a.389.389,0,0,0-.35.35v4.5a.389.389,0,0,0,.35.35h4.5a.389.389,0,0,0,.35-.35v-4.5a.389.389,0,0,0-.35-.35Z"
                                transform="translate(-2 -3)" fill-rule="evenodd" />
                            <path
                                d="M15.15,12.8a2.384,2.384,0,0,0-2.35,2.35v4.5A2.384,2.384,0,0,0,15.15,22h4.5A2.384,2.384,0,0,0,22,19.65v-4.5a2.384,2.384,0,0,0-2.35-2.35Zm-.35,2.35a.389.389,0,0,1,.35-.35h4.5a.389.389,0,0,1,.35.35v4.5a.389.389,0,0,1-.35.35h-4.5a.389.389,0,0,1-.35-.35Z"
                                transform="translate(-2 -3)" fill-rule="evenodd" />
                        </svg>
                    </button>

                    <button class="filter__display--list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18.789" viewBox="0 0 22 18.789">
                            <path d="M22,11H2a.9.9,0,1,0,0,1.789H22A.9.9,0,1,0,22,11Z" transform="translate(-1 -11)" />
                            <path d="M22,11H2a.9.9,0,1,0,0,1.789H22A.9.9,0,1,0,22,11Z" transform="translate(-1 6)" />
                            <path d="M22,11H2a.9.9,0,1,0,0,1.789H22A.9.9,0,1,0,22,11Z" transform="translate(-1 0.333)" />
                            <path d="M22,11H2a.9.9,0,1,0,0,1.789H22A.9.9,0,1,0,22,11Z" transform="translate(-1 -5.333)" />
                        </svg>
                    </button>
                </div>

                <div class="searcher__items searcher__items--block scroll-animation">
                    @foreach($properties as $p)
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
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/developro.min.css') }}" rel="stylesheet">
@endpush
