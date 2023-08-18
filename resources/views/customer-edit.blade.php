@extends('layout')

@section('content')
    <div class="col-3 my-2 border border-2">

        <form method="POST" action="{{ route('customer.update', $customer->id) }}" @csrf @method('PUT')>

            <div class="text-center fs-4">ID: {{ $customer->user_unique }}</div>

            <div class="fs-6 my-2">

                <div class="my-1">
                    <label class="fw-semibold" for="name">Name: </label>
                    <input type="text" name="name" id="name" value="{{ $customer->name }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="lastname">Lastname: </label>
                    <input type="text" name="lastname" id="lastname" value="{{ $customer->lastname }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="born">Born: </label>
                    <input type="text" name="born" id="born" value="{{ $customer->date_of_birth }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="address">Address: </label>
                    <input type="text" name="address" id="address" value="{{ $customer->address }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="type">Type: </label>
                    <input type="text" name="type" id="type" value="{{ $customer->kind_of_subscription }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="end">End date: </label>
                    <input type="text" name="end" id="end" value="{{ $customer->end_subscription }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="goal">Customer goal: </label>
                    <input type="text" name="goal" id="goal" value="{{ $customer->goal }}">
                </div>

                <input class="btn btn-dark my-3" type="submit" value="UPDATE">
            </div>

        </form>

    </div>
@endsection
