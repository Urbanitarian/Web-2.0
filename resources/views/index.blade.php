@extends('layouts.app')

@section('main')
    <div data-barba="container">
        @include('parts.content', ['user' => $user ?? ''])
    </div>
@endsection
