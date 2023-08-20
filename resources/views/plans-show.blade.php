@extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        @foreach ($customers->plans as $plan)
            <div class="col-3 border border-2 ">

                <div class="fw-semibold text-center my-1">PLAN ID: {{ $plan->id }}</div>

                <div><span class="fw-semibold">WO: </span>{{ $plan->name_of_workout }}</div>
                <span><span class="fw-semibold">Goal: </span>{{ $plan->kind_of_workout }}</span>

                <div><span class="fw-semibold">Series: </span>{{ $plan->series }}</div>
                <div><span class="fw-semibold">Repetitions: </span>{{ $plan->repetitions }}</div>
                <span><span class="fw-semibold">Rest: </span>{{ $plan->rest_time }} seconds </span>

                <div class="d-flex justify-content-between">
                    <div class="bg-success m-2 p-1 rounded">
                        <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                            Back
                        </a>
                    </div>
                </div>

                <div class="d-flex justify-content-between text-center">
                    <div class="bg-dark m-2 p-1 rounded w-50 ">
                        <a href="{{ route('customer.edit', $customer->id) }}" class="text-decoration-none text-light">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
