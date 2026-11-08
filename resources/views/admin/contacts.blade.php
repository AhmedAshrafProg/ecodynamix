@extends('admin.adminlayout')

@section('title', 'Contact Inquiries')

@section('content')

    <!-- PAGE HEADER -->

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">

        <div>

            <h1 class="fw-bold">Contact Inquiries</h1>

            <p class="text-secondary mb-0">
                Manage messages received through your website.
            </p>

        </div>

        <span class="badge rounded-pill bg-primary-subtle text-primary p-3">
            Contact Management
            <i class="bi bi-info-circle ms-2"></i>
        </span>

    </div>


    <!-- STATISTICS -->

    <div class="grid grid-cols-4 gap-3 mb-4">

        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3">
                <div class="text-secondary">Total Inquiries</div>

                <h2 class="fw-bold">
                    {{ count($contacts) }}
                </h2>

                <i class="bi bi-envelope fs-3 text-primary"></i>
            </div>

        </div>


        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3">
                <div class="text-secondary">Contact Messages</div>

                <h2 class="fw-bold">
                    {{ count($contacts) }}
                </h2>

                <i class="bi bi-chat-left-text fs-3 text-success"></i>
            </div>

        </div>


        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3">
                <div class="text-secondary">Companies</div>

                <h2 class="fw-bold">
                    {{ $contacts->pluck('company')->filter()->unique()->count() }}
                </h2>

                <i class="bi bi-building fs-3 text-warning"></i>
            </div>

        </div>


        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3">
                <div class="text-secondary">Current Page</div>

                <h2 class="fw-bold">
                    {{ $contacts->currentPage() }}
                </h2>

                <i class="bi bi-file-earmark-text fs-3 text-secondary"></i>
            </div>

        </div>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>
    @endif


    <!-- CONTACTS TABLE + DETAILS -->

    <div class="row g-3">


        <!-- CONTACTS TABLE -->

        <div class="col-12 col-xl-7">

            <div class="card border-0 shadow-sm p-3">


                <!-- SEARCH -->

                <form method="GET" action="{{ route('admin.contacts.index') }}" class="row g-2 mb-3">

                    <div class="col-12">

                        <div class="input-group">

                            <span class="input-group-text bg-white">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text" name="search" class="form-control" placeholder="Search inquiries..."
                                value="{{ request('search') }}">

                            <button type="submit" class="btn btn-primary">
                                Search
                            </button>

                        </div>

                    </div>

                </form>


                <!-- TABLE -->

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>Contact</th>

                                <th>Company</th>

                                <th>Email</th>

                                <th>Received</th>

                                <th>Action</th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($contacts as $contact)
                                <tr>
                                    <td>

                                        <a href="{{ route('admin.contacts.index', array_merge(request()->query(), ['selected' => $contact->id])) }}"
                                            class="fw-bold text-decoration-none text-dark">

                                            {{ $contact->fullname }}

                                        </a>
                                    </td>
                                    <td>
                                        <div class="small text-secondary">

                                            {{ $contact->company ?: 'No company' }}

                                        </div>

                                    </td>


                                    <td>

                                        {{ $contact->email }}

                                    </td>


                                    <td class="text-nowrap">

                                        {{ $contact->created_at->format('d M Y') }}

                                    </td>


                                    <td>

                                        <a href="{{ route('admin.contacts.show', $contact->id) }}"
                                            class="btn-solid bluebgcolor white-text">

                                            <i class="bi bi-eye"></i>
                                            View

                                        </a>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4" class="text-center py-4">

                                        <i class="bi bi-inbox fs-1 text-secondary"></i>

                                        <p class="text-secondary mb-0">
                                            No inquiries found.
                                        </p>

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->

                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                    <small class="text-secondary">

                        Showing {{ $contacts->firstItem() ?? 0 }}

                        -

                        {{ $contacts->lastItem() ?? 0 }}

                        of {{ $contacts->total() }} inquiries

                    </small>

                    {{ $contacts->appends(request()->except('page'))->links('pagination::bootstrap-5') }}

                </div>


            </div>

        </div>
    </div>

@endsection
