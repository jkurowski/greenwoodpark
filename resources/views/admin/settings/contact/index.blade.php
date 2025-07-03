@extends('admin.settings.index')

@section('settings')
    <form method="POST" action="{{route('admin.settings.contact.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid p-0">
            <div class="card p-4">
                <div class="card-body p-3 control-col12">
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Poniedziałek', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_1', 'value' => settings()->get("working_hours_1")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Wtorek', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_2', 'value' => settings()->get("working_hours_2")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Środa', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_3', 'value' => settings()->get("working_hours_3")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Czwartek', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_4', 'value' => settings()->get("working_hours_4")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Piątek', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_5', 'value' => settings()->get("working_hours_5")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Sobota', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_6', 'value' => settings()->get("working_hours_6")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.html-input-text', ['label' => 'Niedziela', 'sublabel'=> 'Wprowadź godziny pracy', 'name' => 'working_hours_7', 'value' => settings()->get("working_hours_7")])
                    </div>
                    <div class="row w-100 form-group">
                        @include('form-elements.textarea-fullwidth', ['label' => 'Wprowadź dodatkowy tekst', 'name' => 'working_hours_text', 'value' => settings()->get("working_hours_text"), 'rows' => 11, 'class' => 'tinymce'])
                    </div>
                </div>
            </div>
            <div class="form-group form-group-submit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <input name="submit" id="submit" value="Zapisz" class="btn btn-primary" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('form-elements.tintmce')
    @push('scripts')
        <script>
            @if (session('success')) toastr.options={closeButton:!0,progressBar:!0,positionClass:"toast-bottom-right",timeOut:"3000"};toastr.success("{{ session('success') }}"); @endif
        </script>
    @endpush
@endsection
