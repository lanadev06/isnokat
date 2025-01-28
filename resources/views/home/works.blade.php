<div>
    @foreach($companies as $company)
        <div class="h4 d-flex align-items-center justify-content-between pb-2">
            <div>
                <a href="{{ route("company.show",$company->id) }}">{{ $company->name }}</a>
            </div>
            <div>
                <i class="bi-arrow-right"></i>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-2 g-3 pb-3">
            @foreach($company->works as $work)
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
    @endforeach
</div>
