@extends('layout')

@section('content')
    <div class="text-center">
        <h3>New Bill</h3>
        <form method="POST" action="{{ route('accounting.store') }}">

            @csrf
            @method('POST')

            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">


            <input class="btn btn-primary my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
