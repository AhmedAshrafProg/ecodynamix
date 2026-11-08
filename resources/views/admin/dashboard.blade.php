@extends('admin.adminlayout')

@section('title', 'Admin Overview')

@section('content')

    <!-- PAGE HEADER -->

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>
            <h1 class="fw-bold mb-1">Dashboard Overview</h1>

            <p class="text-secondary mb-0">
                Welcome back, Admin! Here's what's happening with your website.
            </p>
        </div>

        <div>
            <span class="badge bg-success-subtle text-success p-3 rounded-pill">
                <i class="bi bi-circle-fill me-2"></i>
                System Operational
            </span>
        </div>

    </div>


    <!-- STATISTICS CARDS -->

    <div class="grid grid-cols-4 gap-3 mb-4">

        <!-- CONTACTS -->

        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3 h-100">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-secondary mb-2">Total Inquiries</p>

                        <h2 class="fw-bold mb-1">124</h2>

                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            12% this month
                        </small>
                    </div>

                    <div class="bg-primary-subtle text-primary rounded-circle p-3">
                        <i class="bi bi-envelope fs-3"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- USERS -->

        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3 h-100">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-secondary mb-2">Website Visitors</p>

                        <h2 class="fw-bold mb-1">2,450</h2>

                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            8% this month
                        </small>
                    </div>

                    <div class="bg-success-subtle text-success rounded-circle p-3">
                        <i class="bi bi-people fs-3"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- SERVICES -->

        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3 h-100">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-secondary mb-2">Active Services</p>

                        <h2 class="fw-bold mb-1">8</h2>

                        <small class="text-secondary">
                            Available services
                        </small>
                    </div>

                    <div class="bg-warning-subtle text-warning rounded-circle p-3">
                        <i class="bi bi-briefcase fs-3"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- PROJECTS -->

        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card border-0 shadow-sm p-3 h-100">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-secondary mb-2">Projects</p>

                        <h2 class="fw-bold mb-1">16</h2>

                        <small class="text-success">
                            5 completed
                        </small>
                    </div>

                    <div class="bg-info-subtle text-info rounded-circle p-3">
                        <i class="bi bi-folder2-open fs-3"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- CHART + QUICK ACTIONS -->

    <div class="row g-3 mb-4">

        <!-- WEBSITE ACTIVITY -->

        <div class="col-12 col-xl-8">

            <div class="card border-0 shadow-sm p-4 h-100">

                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">

                    <div>
                        <h5 class="fw-bold mb-1">Website Activity</h5>

                        <p class="text-secondary small mb-0">
                            Monthly website visitors
                        </p>
                    </div>

                    <span class="badge bg-primary-subtle text-primary p-2">
                        Last 6 Months
                    </span>

                </div>


                <!-- STATIC BAR CHART -->

                <div class="d-flex align-items-end justify-content-around" style="height:230px; gap:15px;">

                    @php
                        $months = [
                            ['name' => 'May', 'height' => 45],
                            ['name' => 'Jun', 'height' => 65],
                            ['name' => 'Jul', 'height' => 55],
                            ['name' => 'Aug', 'height' => 80],
                            ['name' => 'Sep', 'height' => 70],
                            ['name' => 'Oct', 'height' => 100],
                        ];
                    @endphp

                    @foreach ($months as $month)
                        <div class="d-flex flex-column align-items-center justify-content-end h-100 flex-fill">

                            <div class="bg-primary rounded-top w-50"
                                style="height: {{ $month['height'] }}%; min-height:20px;">
                            </div>

                            <small class="text-secondary mt-2">
                                {{ $month['name'] }}
                            </small>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>


        <!-- QUICK ACTIONS -->

        <div class="col-12 col-xl-4">

            <div class="card border-0 shadow-sm p-4 h-100">

                <h5 class="fw-bold mb-3">Quick Actions</h5>

                <p class="text-secondary small">
                    Manage your website quickly.
                </p>


                <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-primary text-start mb-3 p-3">

                    <i class="bi bi-envelope me-2"></i>
                    View Contact Inquiries

                    <i class="bi bi-arrow-right float-end"></i>

                </a>


                <a href="/" target="_blank" class="btn btn-outline-success text-start mb-3 p-3">

                    <i class="bi bi-globe me-2"></i>
                    Visit Website

                    <i class="bi bi-arrow-up-right float-end"></i>

                </a>

            </div>

        </div>

    </div>

@endsection
