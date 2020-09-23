@extends('partials.app')

@section('title', 'Customers')

@section('content')

    <a href="/customers/create">Add New Customer</a>

    @forelse ($customers as $customer)
    <p><strong>{{ $customer->name }}</strong>({{ $customer->email }})</p>
    @empty
        <p>No customers to display.</p>
    @endforelse
    
@endsection