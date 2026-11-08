@extends('Layouts.app')
@section('content')
    <section class="userloginform mx-auto loginborder mt-6">
        <h1 class="mt-12 text-center">Admin Login Form</h1>
        <div class="mx-auto w-75">
            <div class="mx-auto w-50 mb-10 mt-4">
                <img src="{{ asset('Assets/Images/user.png') }}" width="100%" />
            </div>
            <!-- Session Status -->

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label fw-bold fs-4 maintextcolor" />

                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />

                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label fw-bold fs-4 maintextcolor" />

                    <x-text-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                </div>

                {{-- Remember Me --}}
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">

                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember me') }}
                    </label>
                </div>

                {{-- Actions --}}
                <div class="d-flex justify-content-between align-items-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="link-secondary" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="my-8 d-flex flex-wrap gap-3 justify-content-between">

                    <div class="my-3">
                        <button type="submit"
                            class="btn-solid bluebgcolor white-text fs-xl col-sm-12 col-md-5 col-lg-5 px-9">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="my-3">
                        <div class="btn-solid bluebgcolor fs-xl"> <a href="{{ route('home') }}"
                                class=" white-text text-decoration-none">Home<i class="fa-solid fa-house"></i></a></div>
                    </div>

                </div>
            </form>

        </div>
    </section>
@endsection
