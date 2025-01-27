@extends('layouts.app')

@section('content')
    <div>
        @include('home.categories')
    </div>
    <div class="pt-4">
        @include('home.works')
    </div>
@endsection
