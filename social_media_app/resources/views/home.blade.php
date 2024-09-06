@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center bg-light p-5 shadow-sm rounded">
        <h1 class="display-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="lead">This is your dashboard. You can view your profile, manage your account, and more.</p>
        <hr class="my-4">
        <p>Click below to view your profile.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('profile.show') }}" role="button">
            <i class="fas fa-user-circle"></i> View Profile
        </a>
    </div>
</div>
@endsection
