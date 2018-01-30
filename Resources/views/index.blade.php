@extends('polytest123::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('polytest123.name') !!}
    </p>
@stop
