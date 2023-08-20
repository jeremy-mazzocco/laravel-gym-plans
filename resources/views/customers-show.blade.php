@extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        @foreach ($customers as $customer)
            <div class="col-3 my-2 border border-2">
                <div class="text-center fs-4">ID: {{ $customer->user_unique }}</div>

                <div class="fs-6 my-2">
                    <span><span class="fw-semibold">Name: </span>{{ $customer->name }}</span>
                    <span>{{ $customer->lastname }}</span>
                    <div><span class="fw-semibold">Born: </span>{{ $customer->date_of_birth }}</div>
                    <div><span class="fw-semibold">Address: </span>{{ $customer->address }}</div>
                    <div><span class="fw-semibold">Type: </span>{{ $customer->kind_of_subscription }}</div>
                    <div><span class="fw-semibold text-left">End date: </span>{{ $customer->end_subscription }}</div>
                    <div><span class="fw-semibold">Customer goal: </span>{{ $customer->goal }}</div>
                </div>

                <div class="d-flex justify-content-between text-center">
                    <div class="bg-warning m-2 p-1 rounded w-50">
                        <a href="{{ route('plans.show', $customer->id) }}"
                            class="text-decoration-none text-secondary-emphasis">
                            Workout plans
                        </a>
                    </div>
                    <div class="bg-secondary my-2 p-1 rounded w-50">
                        <a href="{{ route('accountings.show', $customer->id) }}"
                            class="text-decoration-none text-secondary-emphasis">
                            Accounting
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
