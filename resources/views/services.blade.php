@extends('partials.app')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

    <p>Lorem ipsum dolor sit amet</p>

    <ul>
        @forelse($services as $service)
        <li>{{ $service->name }}</li>
        @empty
        <li>No services available</li>
        @endforelse
    </ul>
@endsection

