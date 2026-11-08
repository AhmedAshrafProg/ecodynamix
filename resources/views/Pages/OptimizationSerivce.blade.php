@extends('Pages.MainLayout')
@section('title', 'Home Page')

@section('content')

    <div class="container">
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
