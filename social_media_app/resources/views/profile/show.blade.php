@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>{{ __('Your Profile') }}</h4>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
