@extends('Pages.MainLayout')
@section('title', 'Home Page')

@section('content')
    <div class="container">
        <h1 class="my-12">Conservation</h1>

        <div class="row align-items-center my-12">

            <div class="col-4">
                <img src="{{ asset('Assets/Images/Environmental-ESG-icon-about-us.png') }}" class="service-image" />
            </div>

            <div class="col-8">

                <h2>Environmental and ESG Systems</h2>

                <ul class="listgreendots">
                    <li>Environmental and Social Impact Assessment (ESIA), and permitting</li>
                    <li>Environmental Site Assessment (ESA)</li>
                    <li>Environmental auditing and regulatory compliance consultation</li>
                    <li>Environmental modelling: air, water and noise</li>
                    <li>Environmental monitoring and baseline surveys</li>
                    <li>Sustainability reporting and ESG</li>
                    <li>Carbon footprint calculations and reduction plans</li>
                    <li>Air Quality and Monitoring Management Systems (AQMS)</li>
                    <li>Environmental and social due diligence</li>
                </ul>

            </div>

        </div>
    </div>
@endsection
