@extends('template.main')
@section('title'){{'Welcome' . \Auth::user()->nickname}}@endsection
@section('content')
    @include('template.partials.logbar')
@stop