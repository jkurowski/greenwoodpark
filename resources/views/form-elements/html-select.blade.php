@isset($required)
    {!! Form::label(
        $name,
        '<div class="text-start">' . $label . ' <span class="text-danger d-inline">*</span>' . (isset($sublabel) ? '<br><span>'.$sublabel.'</span>' : '') . '</div>',
        ['class' => 'col-12 col-form-label control-label pb-2 required'],
        false
    ) !!}
@else
    {!! Form::label(
        $name,
        '<div class="text-start">' . $label . (isset($sublabel) ? '<br><span>'.$sublabel.'</span>' : '') . '</div>',
        ['class' => 'col-12 col-form-label control-label pb-2'],
        false
    ) !!}
@endisset

<div class="col-12 control-input position-relative d-flex align-items-center flex-wrap">
    {{-- Pole select --}}
    @if(isset($selected))
        {!! Form::select(
            $name,
            $select,
            $selected,
            array_merge(['class' => 'form-select'], isset($required) ? ['required' => 'required'] : [])
        ) !!}
    @else
        {!! Form::select(
            $name,
            $select,
            [],
            array_merge(['class' => 'form-select'], isset($required) ? ['required' => 'required'] : [])
        ) !!}
    @endif

    {{-- Obsługa błędów walidacji --}}
    @if($errors->first($name))
        <div class="invalid-feedback d-block">{{ $errors->first($name) }}</div>
    @endif
</div>
