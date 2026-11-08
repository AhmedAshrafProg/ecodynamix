@extends('Pages.MainLayout')

@section('content')
    <div class="container">

        {{-- ENGINEERING --}}

        <h1 class="my-12">Engineering</h1>

        {{-- Process Safety Consultancy --}}

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


        {{-- SOFTWARE SOLUTIONS --}}

        <div class="row align-items-center my-12">

            <div class="col-4">
                <img src="{{ asset('Assets/Images/Business-software-icon-about-us.png') }}" class="service-image" />
            </div>

            <div class="col-8">

                <h2>Software Solutions</h2>

                <ul class="listgreendots">
                    <li>Environmental software solutions</li>
                    <li>Smart environmental management</li>
                    <li>Environmental monitoring and analysis</li>
                    <li>Smart health, safety and environmental systems</li>
                    <li>Digital sustainability and ESG reporting</li>
                    <li>Controlled project documentation management system</li>
                    <li>Administrative solutions (employee leave, purchasing and procurement, etc.)</li>
                </ul>

            </div>

        </div>


        {{-- CONSERVATION --}}

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


        {{-- OPTIMIZATION --}}

        <h1 class="my-12">Optimization</h1>

        <div class="row align-items-center mb-5">

            <div class="col-4">
                <img src="{{ asset('Assets/Images/HSE-visual-communication-icon-about-us.png') }}" class="service-image" />
            </div>

            <div class="col-8">

                <h2>HSE Visual Systems and Communication</h2>

                <ul class="listgreendots">
                    <li>HSE infographics and visual summaries</li>
                    <li>Safety signs and visual systems</li>
                    <li>HSE document and report design</li>
                    <li>Training materials and presentations</li>
                    <li>HSE icon systems and visual language</li>
                    <li>Corporate materials and print design</li>
                    <li>Posters and campaign materials</li>
                    <li>Digital content and social media visuals</li>
                </ul>

            </div>

        </div>

    </div>
@endsection
