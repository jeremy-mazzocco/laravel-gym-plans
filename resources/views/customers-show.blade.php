@extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        @foreach ($customers as $customer)
            <div class="col-3 border border-2 ">
                <div>Customer - ID: {{ $customer->id }}</div>
                <span><span class="fw-semibold">Name: </span>{{ $customer->name }}</span>
                <span>{{ $customer->lastname }}</span>
                <div><span class="fw-semibold">Born: </span>{{ $customer->date_of_birth }}</div>
                <div><span class="fw-semibold">Address: </span>{{ $customer->address }}</div>
                <span><span class="fw-semibold">Type: </span>{{ $customer->kind_of_subscription }} - </span>
                <span><span class="fw-semibold text-left">End date:</span>{{ $customer->end_subscription }}</span>
                <div><span class="fw-semibold">Customer goal: </span>{{ $customer->goal }}</div>

                <div class="d-flex justify-content-between">
                    <div class="bg-warning m-2 p-1 rounded">
                        <a href="{{ route('plans.show', $customer->id) }}"
                            class="text-decoration-none text-secondary-emphasis">
                            Workout plans
                        </a>
                    </div>
                    <div class="bg-danger m-2 p-1 rounded">
                        <a href="{{ route('accounting.show', $customer->id) }}"
                            class="text-decoration-none text-secondary-emphasis">
                            Accounting
                        </a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
