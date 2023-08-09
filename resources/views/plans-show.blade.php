@extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        {{-- @foreach ($plans as $plan) --}}
        <div class="col-3 border border-2 ">
            <div><span class="fw-semibold">WO: </span>{{ $plans->name_of_workout }}</div>
            <span><span class="fw-semibold">Kind: </span>{{ $plans->kind_of_workout }}</span>

            <div><span class="fw-semibold">Series: </span>{{ $plans->series }}</div>
            <div><span class="fw-semibold">Repetitions: </span>{{ $plans->repetitions }}</div>
            <span><span class="fw-semibold">Rest: </span>{{ $plans->rest_time }} - </span>

            <div class="d-flex justify-content-between">
                <div class="bg-warning m-2 p-1 rounded">
                    <a href="" class="text-decoration-none text-secondary-emphasis">
                        Back
                    </a>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

    </div>
@endsection
