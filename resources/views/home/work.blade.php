@extends('layouts.app')

@section('title', $work->name)

@section('content')
    <div class="pt-5">
        <div class="bg-white p-4 h-100 fs-5 rounded">
            <div class="h3 text-secondary fw-bold">{{ $work->name }}</div>
            <div class="h4 fw-normal">{{ number_format($work->salary, 2, '.', '.') }} <span class="small">TMT</span>
            </div>
            <div class="">
                <span class="pe-1">
                    <i class="bi-eye"></i>
                </span>
                {{$work->viewed}}
            </div>
            <div>Description:<span class="text-black-50">{{ $work->description }}</span></div>
            <div>Category: <span class="text-primary">{{ $work->category->name }}</span></div>
            <div>Employer: <span class="text-primary">{{$work->employer->fullname()}}</span></div>
            <div>Location: <span class="text-primary">
                    {{$work->company->location->parent->name}},{{ $work->company->location->name }}
                </span>
            </div>
            <div>Company: <span class="text-primary">{{ $work->company->name }}</span></div>
            <div>Work type: <span class="text-primary">{{ $work->work_type }}</span></div>
            <div>Work time: <span class="text-primary">{{ $work->work_time }}</span></div>
        </div>
    </div>
@endsection
