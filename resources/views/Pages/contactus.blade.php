@extends('Pages.MainLayout')

@section('content')
    <div class="container">

        <div class="grid-cols-2 grid">

            <!-- Left Side -->

            <div>

                <h4 class="greencolor">LET'S CONNECT</h4>

                <h1>
                    Contact Us
                </h1>

                <h2 class="description-title">
                    Let's build safer, more
                    sustainable operations.
                </h2>

                <p class="mt-3">
                    Tell us about your challenges and goals.
                    Let's explore how EcoDynamix can support
                    your next project.
                </p>

            </div>


            <!-- Right Side / Contact Form -->

            <div>

                <div>

                    <h2>
                        Send us a message
                    </h2>


                    <!-- Success Message -->

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    <!-- Validation Errors -->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Please check your form information.
                        </div>
                    @endif


                    <form action="{{ route('contacts.store') }}" method="POST">

                        @csrf

                        <!-- Full Name -->

                        <div class="mb-3">

                            <label class="form-label" for="fullname">
                                Full Name *
                            </label>

                            <input type="text" name="fullname" id="fullname"
                                class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}"
                                placeholder="Enter your full name" required>

                            @error('fullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Email -->

                        <div class="mb-3">

                            <label class="form-label" for="email">
                                Email *
                            </label>

                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="Enter your email" required>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Title -->

                        <div class="mb-3">

                            <label class="form-label" for="title">
                                Title *
                            </label>

                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                placeholder="Enter message title" required>

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <!-- company and phone -->
                        <div class="grid-cols-2 grid">


                            <div class="mb-3">

                                <label class="form-label" for="company">
                                    Company (optional)
                                </label>

                                <input type="text" name="company" id="company"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('company') }}"
                                    placeholder="Enter your company">

                                @error('company')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3">

                                <label class="form-label" for="phone">
                                    Phone (optional)
                                </label>

                                <input type="text" name="phone" id="phone"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('phone') }}"
                                    placeholder="Enter your phone number">

                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>



                        </div>

                        <!-- Subject / Message -->

                        <div class="mb-4">

                            <label class="form-label" for="subject">
                                How can we support? *
                            </label>

                            <textarea name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror"
                                placeholder="Tell us about your project, challenges, or goals..." required>{{ old('subject') }}</textarea>

                            @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Submit Button -->

                        <button type="submit" class="btn-solid bluebgcolor white-text w-100 py-4">
                            Send Message &nbsp; →
                        </button>

                        <p class="my-3">
                            We'll use your details to respond to your inquiry.
                        </p>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
