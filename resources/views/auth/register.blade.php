@extends('Layouts.app')
@section('content')
    <section class="usersignupform mx-auto loginborder mt-6">
        <h1 class="mt-12 text-center">User Register Form</h1>
        <div class="mx-auto w-50 mb-10 mt-4">
            <img src="{{ asset('Assets/Images/user.png') }}" width="100%" />
        </div>
        <div class="mx-auto w-75">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="form-label fw-bold fs-4 maintextcolor" />
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label fw-bold fs-4 maintextcolor" />

                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        autofocus autocomplete="username" required />

                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label fw-bold fs-4 maintextcolor" />

                    <x-text-input id="password" class="form-control" type="password" name="password"
                        autocomplete="current-password" required />

                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                        class="form-label fw-bold fs-4 maintextcolor" />

                    <x-text-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>


                    <div class="my-8 d-flex flex-wrap gap-3 justify-content-between">

                        <div class="my-3">
                            <button type="submit"
                                class="btn-solid bluebgcolor white-text fs-xl col-sm-12 col-md-5 col-lg-5 px-10">
                                {{ __('Signup') }}
                            </button>
                        </div>
                        <div class="my-3">
                            <div class="btn-solid bluebgcolor fs-xl px-8"> <a href="{{ route('home') }}"
                                    class=" white-text text-decoration-none">Home<i class="fa-solid fa-house"></i></a></div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
