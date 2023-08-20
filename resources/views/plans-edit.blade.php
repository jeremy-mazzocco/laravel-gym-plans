@extends('layout')

@section('content')
    <div class="col-3 my-2 border border-2">

        <form method="POST" action="{{ route('plans.update', $plan->id) }}">

            @csrf
            @method('PUT')

            <div class="fs-6 my-2">

                <div class="my-1">
                    <label class="fw-semibold" for="plan">Plan: </label>
                    <input type="text" name="plan" id="plan" value="{{ $plan->id }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="wo">WO: </label>
                    <input type="text" name="wo" id="wo" value="{{ $plan->name_of_workout }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="goal">Goal: </label>
                    <input type="text" name="goal" id="goal" value="{{ $plan->kind_of_workout }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="series">Series: </label>
                    <input type="text" name="series" id="series" value="{{ $plan->series }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="repetitions">Repetitions: </label>
                    <input type="text" name="repetitions" id="repetitions" value="{{ $plan->repetitions }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="rest">Rest: </label>
                    <input type="text" name="rest" id="rest" value="{{ $plan->rest_time }}">
                </div>

                <input class="btn btn-dark my-3" type="submit" value="UPDATE">
            </div>

        </form>

    </div>
@endsection
