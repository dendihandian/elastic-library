@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('date_picker', [
        'name' => 'published_date',
        'label' => 'Published date',
        'withTime' => false,
    ])

    @formField('input', [
        'name' => 'pages',
        'label' => 'Number of pages',
        'type' => 'number',
    ])
@stop
