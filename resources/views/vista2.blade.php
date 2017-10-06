@extends('welcome')

@section('content')
    <h1>Vista 2 heredada de la plantilla principal </h1>
    {{Form::label('id', 'Description')}}
    {{Form::text('name')}}
@endsection