@extends('layouts.app')

@section('title', $company->name)

@section('content')
    <div class="h3 fw-bold p-4">
        {{ $company->name }}
    </div>
    <div class="row row-cols-2 row-cols-md-2 g-3 pb-3">
        @foreach($works as $work)
            <div class="col">
                <div class="bg-white h-100 rounded p-3">
                    <div class="h4 text-secondary">
                        <a href="{{ route("work.show",$work->id) }}">
                            {{ $work->name }}
                        </a>
                    </div>
                    <div class="h5 fw-normal">{{ number_format($work->salary, 2, '.', '.') }} <span class="small">TMT</span>
                    </div>
                    <div>
                        <span class="pe-1">
                            <i class="bi-eye"></i>
                        </span>
                        {{$work->viewed}}
                    </div>
                    <div>Employer: <span class="text-primary">{{$work->employer->fullname()}}</span></div>
                    <div>Work type: <span class="text-primary">{{ $work->work_type }}</span></div>
                    <div>Work time: <span class="text-primary">{{ $work->work_time }}</span></div>
                    <div>Category: <span class="text-primary">{{ $work->category->name }}</span></div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pt-3">
        {{ $works->links() }}
    </div>
@endsection
