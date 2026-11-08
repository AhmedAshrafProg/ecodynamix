@extends('Pages.MainLayout')
@section('title', 'Home Page')

@section('content')

    <div class="container">
        <h1 class="my-12">Engineering</h1>
        <div class="row align-items-center mb-5">

            <div class="col-4">
                <img src="{{ asset('Assets/Images/Process-safety-icon-about-us.png') }}" class="service-image" />
            </div>

            <div class="col-8">

                <h2>Process Safety Consultancy</h2>

                <ul class="listgreendots">
                    <li>HAZOP, HAZID and LOPA</li>
                    <li>QRA, FERA and Bow Tie analysis</li>
                    <li>SIMOPS and PHSER studies</li>
                    <li>Functional safety</li>
                    <li>Process safety management reviews</li>
                    <li>Gap assessments and process safety audits</li>
                    <li>Asset integrity and reliability assessments</li>
                    <li>Emergency response and evacuation planning</li>
                    <li>Process safety training</li>
                </ul>

            </div>

        </div>
    </div>
@endsection
