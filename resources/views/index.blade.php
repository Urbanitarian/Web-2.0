@extends('layouts.app')

@section('main')
    <div data-barba="container">
        @include('parts.content', ['masterplans' => $masterplans])
    </div>
@endsection
