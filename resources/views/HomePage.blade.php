@extends('Pages.MainLayout')
@section('title', 'Home Page')

@section('content')
    <div class="mainbanner">
        <div class="container">
            <h5 class="greencolor my-5"> PEOPLE <i class="fa-solid fa-square mx-4"></i>
                ENVIRONMENT <i class="fa-solid fa-square mx-4"></i>
                BETTER OPERATIONS
            </h5>
            <h2 class="maintextcolor">Clear Solutions for Safer, </h2>
            <h2 class="greencolor my-0">Sustainable Operations</h2>
            <p class="maintextcolor my-0">
                Engineering . environmental and sustainability</p>
            <p class="maintextcolor my-0">services, supported by visual systems</p>
            <p class="maintextcolor my-0">and communication</p>
            <div class="mt-5">
                <button class="btn-solid white-text bgGreen">Discuss Your Project <i
                        class="fa-solid fa-arrow-right-long"></i></button>
                <button class="btn-outline maintextcolor blueborder nohoverr">Explore Our Services</button>
            </div>
        </div>
    </div>
    <div class=" container px-12 my-9">
        <div class="text-center">
            <h2 class="greencolor mb-6"><span class="maintextcolor">Our</span> Services</h2>
            <h4 class="maintextcolor mt-5">We Support organizations reduce risk improve performance and build more</h4>
            <h4 class="maintextcolor">responsible and sustainable operations. </h4>
        </div>
    </div>
    <div class=" container">
        <div class="contains-inline">
            <div class="card-group gap-4">
                <div class="card">
                    <img src="{{ asset('Assets/Images/1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"> <span class="greencolor">E</span><span
                                class="maintextcolor">NGINEERING</span>
                        </h4>
                        <p class="card-text maintextcolor !important">Turning technical expertise
                            into practical solutions for
                            safer, more efficient, and
                            sustainable operations.</p>
                        <button type="button" class="btn-solid white-text bgGreen my-4"><a
                                href="{{ route('safteyservice') }}" class="text-decoration-none white-text">Learn More <i
                                    class="fa-solid fa-arrow-right-long"></i></a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('Assets/Images/2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"> <span class="greencolor">C</span><span
                                class="maintextcolor">ONSERVATION</span>
                        </h4>
                        <p class="card-text maintextcolor !important">Supporting organizations protect
                            natural resources, reduce
                            environmental impact, and put
                            sustainability into practice.</p>
                        <button type="button" class="btn-solid white-text bgGreen my-4"><a
                                href="{{ route('conservation') }}" class="text-decoration-none white-text">Learn More <i
                                    class="fa-solid fa-arrow-right-long"></i></a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('Assets/Images/3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"> <span class="greencolor">O</span><span
                                class="maintextcolor">PTIMIZATION</span>
                        </h4>
                        <p class="card-text maintextcolor !important">Improving systems, processes,
                            and communication to support
                            informed decisions and stronger
                            environmental performance.</p>
                        <button type="button" class="btn-solid white-text bgGreen my-4"><a href="{{ route('optimize') }}"
                                class="text-decoration-none white-text">Learn More <i
                                    class="fa-solid fa-arrow-right-long"></i></a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="verylightgreencolor py-8 maintextcolor mt-8">
        <div class="container">
            <h2 class="text-center mb-8">Why <span class="greencolor">EcoDynamix</span></h2>
            <h4 class="text-center">A practical and integrated approach to environmental and sustainability
                challenges. </h4>
            <div class="d-flex mt-12 gap-5">
                <div>
                    <div class="d-flex align-items-start ">
                        <div class="lightgreencolor fs-xl px-5 py-4 rounded-circle my-4"><i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>
                                Integrated expertise
                            </h4>
                        </div>
                        <div>
                            <p> Engineering, environmental and sustainability knowledge working together. </p>

                        </div>

                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-start">
                        <div class="lightgreencolor bg-30 fs-xl px-5 py-4 rounded-circle my-4"><i
                                class="fa-regular fa-comment"></i>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>
                                Clear Communication
                            </h4>
                        </div>
                        <div>
                            <p> Complex information made clear for better decisions and stronger engagement. </p>

                        </div>

                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-start">
                        <div class="lightgreencolor fs-xl px-5 py-4 rounded-circle my-4"><i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>
                                Practical Solutions
                            </h4>
                        </div>
                        <div>
                            <p> Realistic, implmentable solutions that fit operational needs. </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-8 maintextcolor">
        <h2 class="text-center">Meet the <span class="greencolor"> Co-Founders</span></h2>
        <div class="d-flex gap-6 mx-auto width60 my-6">
            <div class="text-center w-100">
                <img src="{{ asset('Assets/Images/Dr. Khaled Gamal.png') }}" width="200px" class="rounded-circle" />
                <h3 class="mt-4 mb-0">Dr. Khaled Gamal</h3>
                <h4 class="greencolor my-0">Co-Founder | COO</h4>
                <p class="my-0">Environmental and Engineering proffessional</p>
                <p class="my-0">with a practical approach to safer more efficient</p>
                <p class="my-0">and more sustainable operations</p>
            </div>
            <div class="separator"> </div>
            <div class="text-center w-100">
                <img src="{{ asset('Assets/Images/Araxy Vahan.png') }}" width="200px" class="rounded-circle" />
                <h3 class="mt-4 mb-0">Araxy Vahan</h3>
                <h4 class="greencolor my-0">Co-Founder | CMO</h4>
                <p class="my-0">Sustainability and Commmunication proffessional</p>
                <p class="my-0">focused on turning complex information into clear</p>
                <p class="my-0">visual systems that drive understanding and action. </p>
                <h4></h4>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn-outline maintextcolor blueborder nohoverr">About Us
                <i class="fa-solid fa-arrow-right-long"></i>
            </button>
        </div>
    </div>

@endsection
