@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title .' - '.$building->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper mb-0">
            <a href="/">Strona główna</a>
            <a href="/mieszkania/">Mieszkania</a>
            <a href="#">{{ $building->name }}</a>
        </div>

        <section class="image mt-3">
            <div class="wrapper--small">
                <div class="container-fluid p-0 floor-nav">
                    <div class="row mb-5">
                        <div class="col-4">
                            @if($prev_floor)
                                <a href="{{route('front.developro.building', [$prev_floor, 'buildingSlug' => Str::slug($prev_floor->name)])}}" class="btn btn--primary">{{$prev_floor->name}}</a>
                            @endif
                        </div>
                        <div class="col-4 text-center">
                            <a href="/mieszkania/" class="btn btn--primary">Plan inwestycji</a>
                        </div>
                        <div class="col-4 text-end">
                            @if($next_floor)
                                <a href="{{route('front.developro.building', [$next_floor, 'buildingSlug' => Str::slug($next_floor->name)])}}" class="btn btn--primary">{{$next_floor->name}}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <h2 class="image__title scroll-animation">{{ $building->name }}</h2>
                @if($building->file)
                    <img src="{{ asset('/investment/building/'.$building->file) }}" alt="{{$building->name}}" id="invesmentplan" usemap="#invesmentplan" class="image__img scroll-animation delay-1 rounded-7">
                    <map name="invesmentplan">
                        @foreach($investment->buildingFloors as $floor)
                            @if($floor->html)
                                <area shape="poly" href="{{route('front.developro.investment.floor', [$building->slug, $floor, Str::slug($floor->name)])}}" data-item="{{$floor->id}}" title="{{$floor->name}}" alt="floor-{{$floor->id}}" data-floornumber="{{$floor->id}}" data-floortype="{{$floor->type}}" coords="{{cords($floor->html)}}">
                            @endif
                        @endforeach
                    </map>
                @endif
            </div>
        </section>
        <section class="searcher-section">
            <div class="wrapper--small">

                <div class="searcher scroll-animation delay-2">
                    <h3 class="searcher__title">Wyszukiwarka mieszkań</h3>
                    <form class="searcher__form">

                        <div class="searcher__filters">
                            <div class="searcher__selects">

                                <select name="s_metry" id="surface">
                                    <option value="">Powierzchnia</option>
                                    {!! area2Select($building->area_range) !!}
                                </select>

                                <select name="s_pokoje" id="rooms">
                                    <option value="">Liczba pokoi</option>
                                    <option value="2" @if(request()->input('s_pokoje') == 2) selected @endif>2 pokoje</option>
                                    <option value="3" @if(request()->input('s_pokoje') == 3) selected @endif>3 pokoje</option>
                                    <option value="4" @if(request()->input('s_pokoje') == 4) selected @endif>4 pokoje</option>
                                </select>

                                <select name="s_pietro" id="floor">
                                    <option value="" selected>Piętro</option>
                                    <option value="0" @if(request()->input('s_pietro') == "0") selected @endif>Parter</option>
                                    <option value="1" @if(request()->input('s_pietro') == "1") selected @endif>1 piętro</option>
                                    <option value="2" @if(request()->input('s_pietro') == "2") selected @endif>2 piętro</option>
                                    <option value="3" @if(request()->input('s_pietro') == "3") selected @endif>3 piętro</option>
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
                    @forelse($properties as $p)
                        <div class="panel {!! roomStatusList($p->status) !!}">
                            <h3 class="panel__name">{{ $p->name }}</h3>
                            <div class="panel__status">{!! roomStatusBadge($p->status) !!}</div>
                            @if($p->price_brutto && $p->status == 1 && $p->highlighted)
                                <div class="panel__status panel__status_promo me-2">PROMOCJA</div>
                            @endif
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
                                <p>Cena<br>
                                    @if($p->price_brutto && $p->status == 1 && !$p->highlighted)
                                        <span>@money($p->price_brutto)</span>
                                        <br>
                                        <span style="font-weight: normal !important;font-size: 11px;color: black;font-family: 'regular',sans-serif;">
                                        @money($p->price_brutto / $p->area)/m<sup>2</sup>
                                    </span>
                                    @endif
                                    @if($p->price_brutto && $p->status == 1 && $p->highlighted)
                                        <span style="color: red">@money($p->promotion_price)</span>
                                        <br>
                                        <span style="font-weight: normal !important;font-size: 11px;color: red;font-family: 'regular',sans-serif;">
                                        @money($p->promotion_price / $p->area)/m<sup>2</sup>
                                    </span>
                                    @endif
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <a href="{{ route('front.developro.investment.property', [
                                                        $p->building->slug,
                                                        Str::slug($p->floor->name),
                                                        $p,
                                                        Str::slug($p->name),
                                                        floorLevel($p->floor->number, true),
                                                        number2RoomsName($p->rooms, true),
                                                        round(floatval($p->area), 2).'-m2'
                                                    ]) }}" class="panel__btn btn btn-primary">Zobacz więcej</a>
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-end mt-3 mt-sm-0">
                                    @if($p->status == 1)
                                    <button class="panel__btn btn btn-primary askForPrice" data-id="{{ $p->id }}">Zapytaj o rabat</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center w-100">Brak wyników, zmień parametry i spróbuj ponownie</p>
                    @endforelse
                </div>
            </div>
        </section>
        <div id="modalHandler"></div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/developro.min.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/validation.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.v3_site_key') }}"></script>
    <script src="{{ asset('/js/modal.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/modal.min.css') }}" rel="stylesheet">
    <script>
        const site_key = '{{ config('services.recaptcha.v3_site_key') }}';
    </script>
@endpush
