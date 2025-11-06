@extends('auth.app')

@section('content')


<main>
    <h1>Welcome {{ $user['name'] }}</h1>
    <h1> {{ $user['email'] }}</h1>

    <form method="POST" action="{{ route('auth.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</main>
@endsection