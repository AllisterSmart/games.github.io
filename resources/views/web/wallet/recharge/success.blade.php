<!-- File: resources/views/web/recharge/index.blade.php -->

@extends('web.layouts.app')

@section('content')
    <h1>Recharge Page</h1>

    <!-- Your recharge form goes here -->
    <form action="{{ route('recharge.process') }}" method="post">
        @csrf
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" required>
        <button type="submit">Recharge</button>
    </form>
@endsection
