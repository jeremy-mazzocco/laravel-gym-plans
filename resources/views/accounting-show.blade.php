{{-- @extends('layout')

@section('content')
    <div class="container-fluid w-75 row m-auto">

        <div class="bg-dark m-2 px-4 py-1 rounded">
            <a href="{{ route('accounting.create', $accounting->id) }}" class="text-decoration-none text-light">
                Create
            </a>
        </div>

        @foreach ($accountings as $accounting)
            <div class="col-12 border border-2 ">

                <div class="fw-semibold my-2">Month: {{ $accounting->Month_of_the_year }}</div>

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

                <div class="d-flex">
                    <div class="bg-success m-2 px-4 py-1 rounded">
                        <a href="{{ route('customers.show') }}" class="text-decoration-none text-secondary-emphasis">
                            Back
                        </a>
                    </div>

                    <div class="bg-dark m-2 px-4 py-1 rounded">
                        <a href="{{ route('accounting.edit', $accounting->id) }}" class="text-decoration-none text-light">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection --}}
