@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url({{ asset('frontend/images/banner/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href='index.html'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about</li>
                        </ul>
                        <h2 class="section-title">About Leadership Institute Australia</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <!-- Header Section -->
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <h3 class="rts-section-title">Welcome to Leadership Institute Australia</h3>
                </div>
                <div class="col-lg-8 col-md-7">
                    <p class="rts-section-description">
                        At Leadership Institute Australia, we believe education should be practical, empowering, and career-focused. Our nationally recognized qualifications prepare students for real-world roles in community services, aged care, disability support, leadership, and management.
                    </p>
                    <!-- Brand Logos Section -->
                    <div class="row justify-content-center my-5">
                        <div class="col-md-6 col-sm-6 text-center mb-4">
                            <img src="{{ asset('frontend/images/brand/11.png')}}" class="img-fluid" style="max-height:150px;" alt="Brand 1" />
                        </div>
                        <div class="col-md-6 col-sm-6 text-center mb-4">
                            <img src="{{ asset('frontend/images/brand/2.png')}}" class="img-fluid" style="max-height:150px;" alt="Brand 2" />
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- About Details Section -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-about-details">
                        <div class="row g-4">
                            <!-- Course Feature 1 -->
                            <div class="col-md-4">
                                <div class="single-about-info text-center">
                                    <div class="mb-3">
                                        <img src="{{ asset('frontend/images/icon/11.svg')}}" alt="" class="mt-2" style="height: 50px;">
                                        <h3 class="title h6 text-white mt-2">Courses to suit your lifestyle</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="mb-0">At Upskilled, we know working professionals look to online learning when it comes to qualifying for tomorrow. Our interactive e-learning platform, MyUpskilled, offers the flexibility you need.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Feature 2 -->
                            <div class="col-md-4">
                                <div class="single-about-info text-center">
                                    <div class="mb-3">
                                        <img src="{{ asset('frontend/images/icon/12.svg')}}" alt="" class="mt-2" style="height: 50px;">
                                        <h3 class="title h6 text-white mt-2">Nationally Recognised Training</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="mb-0">Over 24 qualifications offered by Upskilled are nationally recognised, ensuring that the qualifications you earn are respected and valued by employers across Australia.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Feature 3 -->
                            <div class="col-md-4">
                                <div class="single-about-info text-center">
                                    <div class="mb-3">
                                        <img src="{{ asset('frontend/images/icon/13.svg')}}" alt="" class="mt-2" style="height: 50px;">
                                        <h3 class="title h6 text-white mt-2">Career-Focused Training</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="mb-0">The courses at Upskilled are designed with career outcomes in mind. They focus on practical skills and knowledge that are directly applicable to the workplace, enhancing your employability and career prospects.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .rts-section-padding {
            padding: 80px 0;
        }

        .rts-about-university {
            background-color: #ffffff;
        }

        .rts-section-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .rts-section-description {
            font-size: 16px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 30px;
        }

        .single-about-info {
            padding: 30px 20px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .single-about-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .single-about-info .title {
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .single-about-info .desc p {
            color: #666;
            line-height: 1.7;
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .rts-section-padding {
                padding: 50px 0;
            }
            
            .rts-section-title {
                font-size: 28px;
            }
            
            .single-about-info {
                margin-bottom: 20px;
            }
        }
    </style>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('frontend/images/banner/embark.png') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Quality Training Provider</h4>
                        <p>
                            For over a decade, Leadership Institute Australia has been dedicated to empowering individuals and organisations through high-quality vocational education and training. Our name reflects our commitment to developing strong leaders, skilled professionals, and capable community contributors.
                            <span class="d-block mb--30"></span>
                            Leadership Institute Australia is recognised as a trusted training provider, built on the expertise, passion, and continuous professional development of our training team. We are committed to maintaining the highest standards in education to ensure our students graduate with the knowledge, skills, and confidence needed to succeed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->


    <div class="rts-funfact rts-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">90%</h2>
                            <p>post-graduation success rate</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Top 10</h2>
                            <p>Colleges that Create Futures</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">No. 1</h2>
                            <p>in the nation for materials R&D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- mission -->
    <section class="rts-mission mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center rt-center">
                <div class="rts-section mb--50">
                    <h2 class="rts-section-title">Mission and Values</h2>
                </div>
            </div>
            <!-- mission -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-timeline-section">
                        <div class="rts-timeline-content">
                            <div class="left-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Diversity</h5>
                                    <p> To empower individuals through high-quality education and leadership development, equipping them with the skills, knowledge, and confidence to excel in their careers and make a meaningful impact in their communities.
                                    </p>
                                </div>
                            </div>
                            <div class="separator">
                            </div>
                            <div class="right-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Excellence</h5>
                                    <ul>
                                        <li>Excellence – We strive for the highest standards in education, training, and personal development.</li>
                                        <li>Integrity – We act with honesty, transparency, and accountability in everything we do.</li>
                                        <li>Innovation – We embrace creativity and continuously evolve to meet the needs of a changing world.</li>
                                        <li>Collaboration – We believe in the power of teamwork, community, and shared growth.</li>
                                        <li>Empowerment – We inspire and support individuals to unlock their full potential and achieve their goals.</li>
                                        <li>Respect – We honor diversity, inclusivity, and the unique contributions of every person.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission end-->
    <section class="feedback rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__9">
                        <h2 class="rts__section--title mb-0">Excellent</h2>
                        <div class="rts__rating--star my-2">
                            <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                        </div>
                        <img class="shape rt-shape__4" data-speed="0.04" src="{{ asset('frontend/images/logo/google.png') }}" style="height: 40px;" alt="Google Reviews">
                        <p class="rts__section--description">Based on <strong>70 reviews</strong></p>
                    </div>
                </div>
            </div>
            
            <!-- feedback slider -->
            @php
                $reviews = [
                    [
                        'name' => 'Carly Bishop',
                        'designation' => 'Individual Support',
                        'image' => 'author-1.png',
                        'rating' => 4,
                        'text' => "I highly recommend them, I was hired before finishing my placement and love working in this industry, my teacher helped me all the way through my course, found me placement, very friendly, professional and caring environment."
                    ],
                    [
                        'name' => 'Roslyn Brakes',
                        'designation' => 'Aged Care',
                        'image' => 'author-2.png',
                        'rating' => 4,
                        'text' => "I completed my certificate IV in ageing support and have no complaints. They explained everything I needed to know and were supportive the whole way through the course. They helped me to find work placement quickly. Highly Recommended."
                    ],
                    [
                        'name' => 'Jess Heffernan',
                        'designation' => 'Community Service',
                        'image' => 'author-3.png',
                        'rating' => 4,
                        'text' => "Had a great experience with them. great place to study. A huge thank you to olivia and margaret, i wouldn't have done it without your patience and support. They are well behaved and managed everything like butter."
                    ],
                ];
            @endphp
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__testimonial--active swiper swiper-data" data-swiper='{
                        "slidesPerView": 3,
                        "loop": true,
                        "speed": 1000,
                        "pagination": {
                            "el": ".rts__pagination",
                            "clickable": true
                        },
                        "autoplay": {
                            "delay": 7000
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1
                            },
                            "575": {
                                "slidesPerView": 1.5
                            },
                            "768": {
                                "slidesPerView": 2
                            },
                            "991": {
                                "slidesPerView": 2.2
                            },
                            "1201": {
                                "slidesPerView": 3
                            }
                        }
                    }'>
                        <div class="swiper-wrapper">
                            @foreach($reviews as $review)
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="rts__single--testimonial">
                                        <div class="rts__rating--star">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $review['rating'])
                                                    <i class="fa-sharp fa-solid fa-star" style="color: #e2b058;"></i>
                                                @else
                                                    <i class="fa-sharp fa-light fa-star" style="color: #e2b058;"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p class="rts__single--testimonial--text">
                                            {{ $review['text'] }}
                                        </p>
                                        <div class="rts__single--testimonial--author">
                                            <div class="rts__single--testimonial--author--meta">
                                                <div class="rts__author--img">
                                                    <img src="{{ asset('frontend/images/testimonial/' . $review['image']) }}" alt="{{ $review['name'] }}">
                                                </div>
                                                <div class="rts__author--info">
                                                    <h5 class="mb-0">{{ $review['name'] }}</h5>
                                                    <span class="designation">{{ $review['designation'] }}</span>
                                                </div>
                                            </div>
                                            <div class="rts__single--testimonial--quote">
                                                <img src="{{ asset('frontend/images/testimonial/quote.svg') }}" alt="quote">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single slide end -->
                            @endforeach
                        </div>
                        <div class="rts__pagination v__1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection