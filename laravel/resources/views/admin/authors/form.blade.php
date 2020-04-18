@extends('layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'first_name',
        'label' => 'First name',
    ])

    @formField('input', [
        'name' => 'middle_name',
        'label' => 'Middle name',
    ])

    @formField('input', [
        'name' => 'last_name',
        'label' => 'Last name',
        'required' => true,
    ])
@stop
