@extends('layouts.full')

@section('content')
    <h1 class="text-center font-weight-bold mb-4">{{ __('auth.login-title') }}</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group px-4">
            <label for="email">{{ __('auth.email') }}</label>
            <input id="email" name="email" type="email" class="form-control" required>
        </div>

        <div class="form-group px-4">
            <label for="email">{{ __('auth.password') }}</label>
            <input id="email" name="email" type="email" class="form-control" required>
        </div>

        <div class="form-group px-4 mb-0">
            <button type="submit" class="btn btn-link text-dark font-weight-bold btn-block">
                {{ __('Let me in') }}
            </button>

            {{--@if (Route::has('password.request'))--}}
                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                    {{--{{ __('Forgot Your Password?') }}--}}
                {{--</a>--}}
            {{--@endif--}}
        </div>
    </form>
@endsection
