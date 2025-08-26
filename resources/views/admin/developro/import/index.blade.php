@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-6 pl-0">
                    <h4 class="page-title row"><i class="fe-database"></i>Import</h4>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center form-group-submit"></div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="table-overflow">
                <table id="sortable" class="table mb-0">
                    <thead>
                    <tr>
                        <th>Inwestycja</th>
                        <th>Nazwa powierzchni</th>
                        <th>Numer powierzchni</th>
                        <th>Piętro</th>
                        <th>Budynek</th>
                        <th>Metraż</th>
                        <th>Pokoje</th>
                        <th>Wystawa okna</th>
                        <th>Dodatkowe</th>
                        <th>Dodatkowe pow.</th>
                        <th>Cena brutto</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

{{--                    "nazwa_inwestycji" => "Greenwood Park "--}}
{{--                    "nazwa_powierzchni" => 1--}}
{{--                    "nr_powierzchni" => 1--}}
{{--                    "pietro" => 0--}}
{{--                    "budynek" => "nr 30 "--}}
{{--                    "metraz" => 42.94--}}
{{--                    "metraz_z_kropka" => "42.94"--}}
{{--                    "powierzchnia_przy_podlodze" => null--}}
{{--                    "metraz_powykonawczy" => null--}}
{{--                    "kuchniaaneks" => null--}}
{{--                    "pokoje" => 2--}}
{{--                    "wystawa_okien" => "Północny wschód"--}}
{{--                    "powierzchnia_dodatkowa" => "Ogródek i taras"--}}
{{--                    "powierzchnia_powierzchni_dodatkowej" => 24.85--}}
{{--                    "cena_netto" => null--}}
{{--                    "cena_brutto" => 755185.78--}}
{{--                    "stawka_vat" => null--}}
{{--                    "cena_promocyjna" => null--}}
{{--                    "cena_30_dni" => null--}}
{{--                    "status" => "Wolne"--}}
{{--                    "spacer_3d" => null--}}
{{--                    "widok_360" => null--}}

                    @foreach($importedData as $data)
                        <tr>
                            <td>{{ $data['nazwa_inwestycji'] }}</td>
                            <td>{{ $data['nazwa_powierzchni'] }}</td>
                            <td>{{ $data['nr_powierzchni'] }}</td>
                            <td>{{ $data['pietro'] }}</td>
                            <td>{{ $data['budynek'] }}</td>
                            <td>{{ $data['metraz'] }}</td>
                            <td>{{ $data['pokoje'] }}</td>
                            <td>{{ $data['wystawa_okien'] }}</td>
                            <td>{{ $data['powierzchnia_dodatkowa'] }}</td>
                            <td>{{ $data['powierzchnia_powierzchni_dodatkowej'] }}</td>
                            <td>{{ $data['cena_brutto'] }}</td>
                            <td>{{ $data['status'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
