@extends('layout')

@section('content')
    <div class="text-center">
        <h3 class="my-4">New Bill</h3>
        <form method="POST" action="{{ route('accounting.store') }}">

            @csrf
            @method('POST')

            <div class="my-3">
                <label class="fw-semibold" for="month">Month: </label>
                <input type="text" name="Month_of_the_year" id="month">
            </div>

            <div class="my-3">
                <label class="fw-semibold" for="method">Pay method: </label>
                <input type="text" name="method_paid" id="method">
            </div>

            <div class="my-3">
                <label class="fw-semibold" for="paid">Paid: </label>
                <input type="text" name="paid" id="paid">
            </div>

            <div class="my-3">
                <label class="fw-semibold" for="iban">IBAN: </label>
                <input type="text" name="iban" id="iban">
            </div>


            <input class="btn btn-dark my-3" type="submit" value="Create">
        </form>
        <span class="bg-success m-5 py-2 px-3 rounded">
            <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                Back
            </a>
        </span>
    </div>
@endsection
