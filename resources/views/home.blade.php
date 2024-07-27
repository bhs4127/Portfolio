@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h2 class="display-4">Barrett Hamilton Smith</h2>
        <p>I've worked at places.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('portfolio') }}" role="button">Check it out!</a>
    </div>
@endsection
