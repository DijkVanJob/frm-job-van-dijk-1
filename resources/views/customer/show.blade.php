@extends('partials.app')

@section('title', 'Customer '.$customer->name)

@section('content')
    <a href="/customers">Previous page</a>

    <p><strong>Name</strong></p>
    <p>{{ $customer->name }}</p>

    <p><strong>Email</strong></p>
    <p>{{ $customer->email }}</p>

    <div>    
        <a href="/customers/{{ $customer->id }}/edit">Edit Customer</a> 
        
        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('DELETE')

            @csrf

            <button>Delete</button>
        </form>
    </div>
@endsection
