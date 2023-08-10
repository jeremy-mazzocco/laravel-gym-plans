@extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        @foreach ($accounting as $accounting)
            <div class="col-12 border border-2 ">

                <div class="fw-semibold">Month: {{ $accounting->Month_of_the_year }}</div>

                <div><span class="fw-semibold">Pay method: </span>{{ $accounting->method_paid }}</div>
                <span>
                    <span class="fw-semibold">Paid: </span>
                    @if ($accounting->paid)
                        Yes
                    @else
                        No
                    @endif
                </span>

                <div><span class="fw-semibold">IBAN: </span>{{ $accounting->IBAN }}</div>

                <div class="d-flex justify-content-between">
                    <div class="bg-warning m-2 p-1 rounded">
                        <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
