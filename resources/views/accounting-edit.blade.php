@extends('layout')

@section('content')
    <div class="col-3 my-2 border border-2">

        <form method="POST" action="{{ route('accounting.update', $account->id) }}">

            @csrf
            @method('PUT')

            <div class="fs-6 my-2">

                <div class="my-1">
                    <label class="fw-semibold" for="month">Month: </label>
                    <input type="text" name="month" id="month" value="{{ $account->Month_of_the_year }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="method">Pay method: </label>
                    <input type="text" name="method" id="method" value="{{ $account->method_paid }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="paid">Paid: </label>
                    <input type="text" name="paid" id="paid" value="{{ $account->paid }}">
                </div>

                <div class="my-1">
                    <label class="fw-semibold" for="iban">IBAN: </label>
                    <input type="text" name="iban" id="iban" value="{{ $account->IBAN }}">
                </div>

                <input class="btn btn-dark my-3" type="submit" value="UPDATE">
            </div>
            <div class="bg-success m-2 px-4 py-1 rounded">
                <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                    Back
                </a>
            </div>

        </form>

    </div>
@endsection
