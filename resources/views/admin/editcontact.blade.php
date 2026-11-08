@extends('admin.adminlayout')

@section('content')
    <div class="container py-5">

        {{-- PAGE HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold">Edit Contact</h2>
                <p class="text-muted">
                    Update contact information.
                </p>
            </div>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Contacts
            </a>

        </div>

        {{-- EDIT FORM --}}
        <div class="card shadow-sm border-0">

            <div class="card-header white-text py-3" style="background-color: #272e69;">

                <h5 class="mb-0">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit Contact Information
                </h5>

            </div>

            <div class="card-body p-4">

                <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row g-4">

                        {{-- FULL NAME --}}
                        <div class="col-md-6">

                            <label for="fullname" class="form-label fw-bold">
                                Full Name
                            </label>

                            <input type="text" name="fullname" id="fullname"
                                class="form-control @error('fullname') is-invalid @enderror"
                                value="{{ old('fullname', $contact->fullname) }}" required>

                            @error('fullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- EMAIL --}}
                        <div class="col-md-6">

                            <label for="email" class="form-label fw-bold">
                                Email Address
                            </label>

                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $contact->email) }}" required>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- COMPANY --}}
                        <div class="col-md-6">

                            <label for="company" class="form-label fw-bold">
                                Company
                            </label>

                            <input type="text" name="company" id="company"
                                class="form-control @error('company') is-invalid @enderror"
                                value="{{ old('company', $contact->company) }}">

                            @error('company')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- PHONE --}}
                        <div class="col-md-6">

                            <label for="phone" class="form-label fw-bold">
                                Phone Number
                            </label>

                            <input type="text" name="phone" id="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone', $contact->phone) }}">

                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- TITLE --}}
                        <div class="col-md-12">

                            <label for="title" class="form-label fw-bold">
                                Title
                            </label>

                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $contact->title) }}" required>

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-md-12">

                            <label for="subject" class="form-label fw-bold">
                                subject
                            </label>

                            <input type="text" name="subject" id="subject"
                                class="form-control @error('subject') is-invalid @enderror"
                                value="{{ old('title', $contact->subject) }}" required>

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    {{-- FORM BUTTONS --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">

                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>

                        <button type="submit" class="btn-solid white-text" style="background-color: #272e69;">

                            <i class="fa-solid fa-floppy-disk"></i>
                            Save Changes

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection
