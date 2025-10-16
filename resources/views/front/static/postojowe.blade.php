@extends('layouts.page', ['body_class' => 'completed-page'])

{{--@section('meta_title', $page->title)--}}
{{--@section('seo_title', $page->meta_title)--}}
{{--@section('seo_description', $page->meta_description)--}}

@section('content')
    <main class="main" id="page-mieszkania">

        <div class="breadcrumb wrapper mb-3">
            <a href="/">Strona główna</a>
            <a href="{{ route('front.postojowe') }}">Miejsca postojowe</a>
        </div>

        <section class="apartment mt-0">
            <div class="wrapper">
                <div class="wrapper--small">
                    <h2 class="image__title scroll-animation visible">Miejsca postojowe</h2>
                    <img src="{{ asset('images/garaz-plan.jpg') }}" alt="Plan garażu" class="mb-5">
                    <table class="property-table">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Status</th>
                            <th>Cena</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($properties as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td class="center">
                                    <span class="badge room-list-status-{{ $p->status }}">
                                        {{ roomStatus($p->status) }}
                                    </span>
                                </td>
                                <td class="center">@money($p->price_brutto)</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection

