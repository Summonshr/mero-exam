<x-guest-layout>
    @auth
        <a href="{{route('dashboard')}}">Dashboard</a>
    @else
        <a href="{{route('register')}}">Register</a>
        <a href="{{route('login')}}">Login</a>
    @endauth

</x-guest-layout>
