@extends('layouts.full')

@section('content')
    <h1 class="text-center font-weight-bold mb-4">{{ __('auth.register-title') }}</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group px-4">
            <label for="name">{{ __('auth.name') }}</label>
            <input id="name" name="name" type="text" class="form-control" required>
        </div>

        <div class="form-group px-4">
            <label for="email">{{ __('auth.email') }}</label>
            <input id="email" name="email" type="email" class="form-control" required>
        </div>

        <div class="form-group px-4">
            <label for="phone">{{ __('auth.phone') }}<small class="text-muted"> {{ __('Optional') }}</small></label>
            <input id="phone" name="phone" type="tel" class="form-control">
        </div>

        <div class="form-group px-4">
            <label for="password">{{ __('auth.password') }}</label>
            <input id="password" name="password" type="password" class="form-control" required>
        </div>

        <div class="form-group px-4">
            <label for="password_confirmation">{{ __('auth.password-confirm') }}</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
        </div>

        <div class="form-group px-4 mb-0">
            <button type="submit" class="btn btn-link text-dark font-weight-bold btn-block">
                {{ __('Save data') }}
            </button>

            {{--@if (Route::has('password.request'))--}}
            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
            {{--{{ __('Forgot Your Password?') }}--}}
            {{--</a>--}}
            {{--@endif--}}
        </div>
    </form>
@endsection
