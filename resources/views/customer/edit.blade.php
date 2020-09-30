@extends('partials.app')

@section('title', 'Edit Customer #'.$customer->id)

@section('content')

<form action="/customers/{{ $customer->id }}" method="POST">

    @method('PATCH')

    @include('customer.form')

    <button>Update Customer</button>

</form>

@endsection
