{{-- @extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">
        @foreach ($customers->accountings as $accounting)
            <div class="col-3 border border-2 ">

                <div class="fw-semibold text-center my-1">PLAN NUMBER: {{ $accounting->Month_of_the_year }}</div>

                <div><span class="fw-semibold">WO: </span>{{ $accounting->method_paid }}</div>
                <span><span class="fw-semibold">Goal: </span>{{ $accounting->paid }}</span>

                <div><span class="fw-semibold">Series: </span>{{ $accounting->IBAN }}</div>

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
@endsection --}}
