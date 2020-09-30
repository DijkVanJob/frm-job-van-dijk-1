@extends('partials.app')

@section('title', 'Add New Customer')

@section('content')

<form action="/customers" method="POST">

    @include('customer.form')

    <button>Add new Customer</button>

</form>

@endsection