@extends('admin.layout')
@section('content')
@if(Route::is('admin.developro.investment.edit'))
    <form method="POST" action="{{route('admin.developro.investment.update', $entry->id)}}" enctype="multipart/form-data">
        @method('PUT')
@else
    <form method="POST" action="{{route('admin.developro.investment.store')}}" enctype="multipart/form-data">
@endif
        @csrf
        <div class="container">
            <div id="map"></div>

            <div class="card">
                <div class="card-head container">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <h4 class="page-title"><i class="fe-book-open"></i><a href="{{route('admin.developro.investment.index')}}" class="p-0">Inwestycje</a><span class="d-inline-flex ms-2 me-2">/</span>{{ $cardTitle }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                @include('form-elements.back-route-button')
                <div class="card-body control-col12">
                    <div class="row w-100 mb-4">
                        <div class="col-4">
                            @include('form-elements.html-select', [
                                'label' => 'Typ inwestycji',
                                'name' => 'type',
                                'selected' => $entry->type,
                                'select' => [
                                    '1' => 'Inwestycja osiedlowa',
                                    //'2' => 'Inwestycja budynkowa',
                                    //'3' => 'Inwestycja z domami'
                            ]])
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-select', [
                                'label' => 'Status inwestycji',
                                'name' => 'status',
                                'selected' => $entry->status,
                                'select' => [
                                    '1' => 'Inwestycja w sprzedaży',
                                    //'2' => 'Inwestycja zakończona',
                                    //'3' => 'Inwestycja planowana',
                                    //'4' => 'Inwestycja już wkrótce',
                                    //'5' => 'Inwestycja ukryta'
                            ]])
                        </div>
                    </div>

                    <div class="row w-100 mb-4">
                        <div class="col-12">
                            @include('form-elements.html-input-text', ['label' => 'Nazwa inwestycji', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                        </div>
                    </div>

                    <div class="row w-100 mb-4 form-group">
                        <div class="col-12">
                            <h2>Szczegółowe informacje o inwestycji</h2>
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-select', [
                                'label' => 'Województwo lokalizacji',
                                'name' => 'inv_province',
                                'selected' => $entry->inv_province,
                                'select' => $provinces,
                            ])
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Powiat lokalizacji',
                                'name' => 'inv_county',
                                'value' => $entry->inv_county,
                            ])
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Gmina lokalizacji',
                                'name' => 'inv_municipality',
                                'value' => $entry->inv_municipality,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Miejscowość lokalizacji',
                                'name' => 'inv_city',
                                'value' => $entry->inv_city,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Ulica lokalizacji',
                                'name' => 'inv_street',
                                'value' => $entry->inv_street,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Nr nieruchomości lokalizacji',
                                'name' => 'inv_property_number',
                                'value' => $entry->inv_property_number,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-input-text', [
                                'label' => 'Kod pocztowy lokalizacji',
                                'name' => 'inv_postal_code',
                                'value' => $entry->inv_postal_code,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-select', [
                                'label' => 'Spółka celowa',
                                'name' => 'company_id',
                                'selected' => $entry->company_id,
                                'select' => $companies,
                            ])
                        </div>
                        <div class="col-4 mt-4">
                            @include('form-elements.html-select', [
                                'label' => 'Punkt sprzedaży',
                                'name' => 'sale_point_id',
                                'selected' => $entry->sale_point_id,
                                'select' => $salePoints,
                            ])
                        </div>
                    </div>

                    <div class="row w-100 mb-4">
                        <div class="col-6">
                            @include('form-elements.input-text', ['label' => 'Zakres powierzchni w wyszukiwarce xx-xx', 'sublabel' => '(zakresy oddzielone przecinkiem)', 'name' => 'area_range', 'value' => $entry->area_range])
                        </div>
                    </div>

                    <div class="row w-100 mb-5">
                        <div class="col-4">
                            @include('form-elements.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])
                        </div>
                        <div class="col-4">
                            @include('form-elements.html-input-text', ['label' => 'Indeksowanie', 'sublabel'=> 'Meta tag - robots', 'name' => 'meta_robots', 'value' => $entry->meta_robots])
                        </div>
                    </div>

                    <div class="row w-100 mb-4">
                        @include('form-elements.html-input-file-pdf', [
                            'label' => 'Prospekt informacyjny',
                            'name' => 'file_brochure',
                            'file' => $entry->file_brochure,
                            'file_preview' => config('images.investment.brochure_file_path')
                        ])
                    </div>
                </div>
            </div>
        </div>
        @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
    </form>
@endsection
