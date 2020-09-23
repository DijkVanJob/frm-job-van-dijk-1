@extends('partials.app')

@section('title', 'Add New Customer')

@section('content')

<form action="/customers" method="POST">

    <div>
        <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{ old('name') }}">
        @error('name') <p style="color: red;">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" autocomplete="off" value="{{ old('email') }}">
        @error('email') <p style="color: red;">{{ $message }}</p> @enderror
    </div>

    @csrf

    <button>Add new Customer</button>

</form>

@endsection