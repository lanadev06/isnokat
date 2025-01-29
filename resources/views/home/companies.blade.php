@extends('layouts.app')

@section('tile', 'Companies')

@section('content')
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 my-3">
        @foreach($companies as $company)
            <div class="col">
                <div class="bg-white p-4 rounded fw-bold h-100">
                    <a href="{{ route("company.show", $company->id) }}">
                        {{ $company->name }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
