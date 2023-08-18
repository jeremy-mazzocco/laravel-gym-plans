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

</div>
