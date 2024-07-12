@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-6 pl-0">
                    <h4 class="page-title"><i class="fe-users"></i><a href="{{route('admin.crm.clients.index')}}">Klienci</a><span class="d-inline-flex me-2 ms-2">/</span>{{$client->name}}</h4>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center form-group-submit"></div>
            </div>
        </div>
        @include('admin.crm.client.client_shared.menu')
        <div class="row">
            <div class="col-4">
                @include('admin.crm.client.client_shared.aside')
            </div>
            <div class="col-8">
                <div class="card mt-3">
                    <form method="POST" action="{{route('admin.crm.clients.update', $client)}}" class="card-body control-col12">
                        @method('PUT')
                        @csrf
                        <div class="row w-100 mb-4">
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Imię', 'name' => 'name', 'value' => $client->name, 'required' => 1])
                            </div>
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Nazwisko', 'name' => 'lastname', 'value' => $client->name, 'required' => 1])
                            </div>
                        </div>

                        <div class="row w-100 mb-4">
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Adres e-mail', 'name' => 'mail', 'value' => $client->mail, 'required' => 1])
                            </div>
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Adres e-mail 2', 'name' => 'mail2', 'value' => $client->mail2])
                            </div>
                        </div>

                        <div class="row w-100">
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Telefon', 'name' => 'phone', 'value' => $client->phone, 'required' => 1])
                            </div>
                            <div class="col-6">
                                @include('form-elements.html-input-text', ['label' => 'Telefon 2', 'name' => 'phone2', 'value' => $client->phone2])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            @if (session('success')) toastr.options={closeButton:!0,progressBar:!0,positionClass:"toast-bottom-right",timeOut:"3000"};toastr.success("{{ session('success') }}"); @endif

            const myInput = document.getElementById("mail");
            myInput.readOnly = true;
        </script>
    @endpush
@endsection
