@extends('layout')

@section('content')
    <div class="col-3 my-3">

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
                <div class="my-4">
                    <input class="btn btn-dark mx-2" type="submit" value="Update">
                    <span class="bg-success py-2 px-4 rounded">
                        <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                            Back
                        </a>
                    </span>
                    
                </div>
            </div>

        </form>

    </div>
@endsection
