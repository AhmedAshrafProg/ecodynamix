@extends('admin.adminlayout')

@section('content')
    <div class="container py-5">

        {{-- PAGE HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold">Contact Details</h2>
                <p class="text-muted">View complete contact information.</p>
            </div>

            <a href="{{ route('admin.contacts.index') }}" class="btn-solid theme-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Contacts
            </a>

        </div>

        {{-- CONTACT CARD --}}
        <div class="card shadow-sm border-0">

            <div class="card-header white-text py-3" style="background-color: #272e69;">

                <h5 class="mb-0">
                    <i class="fa-solid fa-address-card"></i>
                    Contact Information
                </h5>

            </div>

            <div class="card-body p-4">

                <div class="row g-4">

                    {{-- FULL NAME --}}
                    <div class="col-md-6">
                        <label class="fw-bold text-muted">
                            Full Name
                        </label>
                        <p class="fs-5">
                            {{ $contact->fullname }}
                        </p>
                    </div>

                    {{-- EMAIL --}}
                    <div class="col-md-6">
                        <label class="fw-bold text-muted">
                            Email Address
                        </label>
                        <p class="fs-5">
                            {{ $contact->email }}
                        </p>
                    </div>

                    {{-- COMPANY --}}
                    <div class="col-md-6">
                        <label class="fw-bold text-muted">
                            Company
                        </label>
                        <p class="fs-5">
                            {{ $contact->company ?? 'Not provided' }}
                        </p>
                    </div>

                    {{-- PHONE --}}
                    <div class="col-md-6">
                        <label class="fw-bold text-muted">
                            Phone Number
                        </label>
                        <p class="fs-5">
                            {{ $contact->phone ?? 'Not provided' }}
                        </p>
                    </div>

                    {{-- TITLE --}}
                    <div class="col-md-12">
                        <label class="fw-bold text-muted">
                            Title
                        </label>
                        <p class="fs-5">
                            {{ $contact->title }}
                        </p>
                    </div>

                    {{-- Subject --}}
                    <div class="col-md-12">
                        <label class="fw-bold text-muted">
                            Supject
                        </label>
                        <p class="fs-5">
                            {{ $contact->subject }}
                        </p>
                    </div>

                </div>

            </div>

            {{-- CARD FOOTER --}}
            <div class="card-footer bg-white p-3 d-flex justify-content-end">

                <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn-solid theme-warning">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit Contact
                </a>

            </div>

        </div>

    </div>
@endsection
