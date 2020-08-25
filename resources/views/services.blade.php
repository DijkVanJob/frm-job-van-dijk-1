@extends('partials.app')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

    <p>Lorem ipsum dolor sit amet</p>

    <form action="/service" method="post">
        <input type="text" name="name" autocomplete="off">

        @csrf

        <button>Add Service</button>
    </form>

    <p style="color: red;">@error('name') {{ $message }} @enderror</p>

    <ul>
        @forelse($services as $service)
        <li>{{ $service->name }}</li>
        @empty
        <li>No services available</li>
        @endforelse
    </ul>
@endsection

