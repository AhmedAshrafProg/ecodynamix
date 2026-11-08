@extends('Pages.MainLayout')
@section('title', 'About Us')

@section('content')

    <section class="container">
        <h4>About EcoDynamix</h4>
        <h1> Technical expertise. </h1>
        <h1> Clear communication. </h1>
        <h1 class="greencolor"> Practical solutions. </h1>
        <h1 class="my-8 greenline">Who We Are</h1>
    </section>
    <section class="container my-9">
        <p>EcoDynamix is an Egypt-based consultancy bringing together process safety, environmental and sustainability
            expertise, HSE visual communication, and business software solutions through specialist cooperation.</p>
        <p>Founded by Dr. Khaled Gamal and Araxy Vahan, EcoDynamix connects complementary professional backgrounds with a
            shared purpose: helping organizations turn complex requirements into practical action.</p>
        <p class="mb-12">We support organizations in understanding risks, managing environmental responsibilities,
            communicating
            effectively, and improving everyday operations. Our approach begins with understanding each organization’s needs
            and developing solutions suited to its people, priorities, and working environment.</p>
    </section>
    <section class="lightgreenabout p-12">
        <div>
            <div class="container">
                <h1 class="greenline">Our Three Pillars</h1>
                <p class="my-9">Our name reflects the three pillars that guide our work: <span class="fw-bold">Engineering,
                        Conservation, and
                        Optimization.
                    </span> </p>
            </div>
            <div class="contains-inline p-4">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="container">
                            <img src="{{ asset('Assets/Images/engineering-icon.png') }}" width="100px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title maintextcolor">Engineering</h3>
                            <h4 class="card-title greencolor">Understand risks. Strengthen safety.</h4>
                            <p class="card-text maintextcolor">We apply technical knowledge and structured assessment
                                methods to help
                                organizations identify hazards, evaluate risks, and strengthen process safety. Our focus is
                                on practical recommendations that support safer operations and informed decisions.</p>

                        </div>
                    </div>
                    <div class="card p-4">
                        <img src="{{ asset('Assets/Images/conservation-icon.png') }}" width="100px">
                        <div class="card-body">
                            <h3 class="card-title maintextcolor">Conservation</h3>
                            <h4 class="card-title greencolor">Protect resources. Support sustainability.</h4>
                            <p class="card-text maintextcolor">We Support organizations understand and manage environmental
                                impacts, meet
                                environmental requirements, and strengthen sustainability performance. From assessments and
                                monitoring to ESG reporting and carbon reduction planning, we support responsible
                                environmental management.</p>

                        </div>
                    </div>
                    <div class="card p-4">
                        <img src="{{ asset('Assets/Images/optimization-icon.png') }}" width="100px">
                        <div class="card-body">
                            <h3 class="card-title maintextcolor">Optimization</h3>
                            <h4 class="card-title greencolor">Improve systems. Make action clearer.</h4>
                            <p class="card-text maintextcolor"> We support organizations improve how information, processes,
                                and people
                                work together. Through visual communication and access to business software solutions, we
                                support clearer understanding, more consistent workflows, and effective everyday action.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-9">
        <div>
            <h1 class="greenline">What We Do</h1>
            <p class="my-9">We provide complementary services that connect technical assessment, environmental management,
                clear
                communication, and organizational systems.
            </p>
            <div>
                <div class="d-flex align-items-center  my-6">
                    <img width="90px" src="{{ asset('Assets/Images/process-safety-icon.png') }}" />
                    <h3 class="mx-7">Process Safety Consultancy</h3>
                </div>

                <p> We support organizations identify process hazards, assess potential consequences, evaluate safeguards,
                    and
                    strengthen risk management throughout their operations.</p>
                </p>
                <p>Our scope includes HAZOP, HAZID, Layers of Protection Analysis (LOPA), Quantitative Risk Assessment
                    (QRA), Fire and Explosion Risk Assessment (FERA), and Bow Tie analysis. We also support functional
                    safety, process safety management reviews, gap assessments, audits, emergency response and evacuation
                    planning, and process safety training.</p>
            </div>
            <div>
                <div class="d-flex align-items-center  my-6">
                    <img width="90px" src="{{ asset('Assets/Images/environmental-esg-icon.png') }}" />
                    <h3 class="mx-7">Environmental & ESG Systems</h3>
                </div>

                <p> We support organizations in assessing environmental and social risks, managing compliance requirements,
                    and developing practical approaches to sustainability.</p>
                </p>
                <p>Our services include environmental and social impact assessments and permitting, environmental site
                    assessments, compliance audits and regulatory consultation, air, water and noise modelling,
                    environmental monitoring and baseline surveys, and environmental and social due diligence.</p>
                <p>We also support sustainability and ESG reporting, carbon footprint calculations and reduction plans, and
                    air quality monitoring and management systems.</p>
            </div>
            <div>
                <div class="d-flex align-items-center  my-6">
                    <img width="90px" src="{{ asset('Assets/Images/visual-communication-icon.png') }}" />
                    <h3 class="mx-7">HSE Visual Systems & Communicationy</h3>
                </div>

                <p> We transform complex technical and organizational information into clear visual materials that people
                    can understand, remember, and use.</p>
                </p>
                <p>Our services include HSE infographics and visual summaries, safety signs and visual systems, document and
                    report design, training materials and presentations, icons and visual language, corporate and print
                    materials, awareness campaigns, and digital and social media visuals.</p>
                <p>Each solution is developed with attention to the audience, the message, and the environment in which it
                    will be used.</p>
            </div>
            <div>
                <div class="d-flex align-items-center my-6">
                    <img width="90px" src="{{ asset('Assets/Images/business-software-icon.png') }}" />
                    <h3 class="mx-7">Business Software Solutions</h3>
                </div>
                <p>Through our cooperation with MA Ocean 360, we support organizations in Egypt in exploring software
                    solutions for essential business activities.</p>
                </p>
                <p>The portfolio covers controlled document management, internal approvals and workflows, purchasing and
                    procurement, employee leave, project control, and service requests.</p>
                <p>EcoDynamix supports customer engagement, understanding business requirements, and commercial
                    coordination. MA Ocean 360 provides software development, technical implementation, maintenance, and
                    product support.</p>
            </div>
            <button type="button" class="btn-outline maintextcolor blueborder nohoverr my-8"> Explore Our Services
                <i class="fa-solid fa-arrow-right-long"></i>
            </button>
        </div>
    </section>
    <section>
        <div class="my-8 maintextcolor">
            <h2 class="text-center greenlinecenter"> Meet the <span class="greencolor"> Co-Founders</span></h2>
            <div class="d-flex gap-6 mx-auto w-75 my-6">
                <div class="text-center w-100">
                    <img src="{{ asset('Assets/Images/Dr. Khaled Gamal.png') }}" width="200px" class="rounded-circle" />
                    <h3 class="mt-4 mb-0">Dr. Khaled Gamal</h3>
                    <h4 class="greencolor my-0">Co-Founder | Chief Operating Officer</h4>
                    <p class="mb-6">Ph.D. in Environmental Science</p>
                    <p>Dr. Khaled is an environmental and sustainability consultant with extensive experience in
                        environmental assessment, management, sustainability, and HSE services.</p>
                    <p>His professional background includes consultancy and leadership roles, with project experience across
                        Egypt, the UAE, and Qatar in sectors including oil and gas, petrochemicals, power, and industrial
                        development.
                    </p>
                    <p>At EcoDynamix, he leads technical direction and operational coordination, bringing a practical
                        understanding of environmental challenges, regulatory engagement, and project delivery.</p>
                </div>
                <div class="separator"> </div>
                <div class="text-center w-100">
                    <img src="{{ asset('Assets/Images/Araxy Vahan.png') }}" width="200px" class="rounded-circle" />
                    <h3 class="mt-4 mb-0">Araxy Vahan</h3>
                    <h4 class="greencolor mb-11">Co-Founder | Chief Marketing Officer</h4>
                    <p>Araxy brings around 25 years of experience in the HSE services sector, with a
                        background in marketing, business development, and visual communication.</p>
                    <p>Her work includes corporate presentations, technical report design, training visuals, awareness
                        campaigns, exhibition materials, and digital content. She focuses on making complex information
                        easier to understand and apply.</p>
                    <p>At EcoDynamix, she leads marketing, brand development, and HSE visual systems and communication,
                        connecting organizational objectives with clear messages and practical visual materials. </p>
                </div>
            </div>

        </div>
    </section>


@endsection
