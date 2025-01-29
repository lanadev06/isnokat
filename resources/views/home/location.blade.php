@extends('layouts.app')

@section('title', $location->name)

@section('content')
    <div class="pt-4">
        <div class="h2 pb-2">
            {{$location->name}}
        </div>
        <div class="row">
            <div class="col">
                @foreach($location->children as $child)
                    <div class="h4">
                        {{ $child->name }}
                    </div>
                    <div class="row row-cols-5 pb-3">
                        @foreach($child->companies as $company)
                            <div class="col">
                                <div class="bg-white p-3 rounded">
                                    {{ $company->name }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
