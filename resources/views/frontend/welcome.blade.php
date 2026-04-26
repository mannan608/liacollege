@extends('frontend.layouts.app')
@section('content')
    <!-- header banner -->
    <div class="banner v__3">
        <div class="banner__wrapper">
            <div class="swiper swiper-data" data-swiper='{
                    "slidesPerView":1,
                    "effect": "fade",
                    "loop": false,
                    "speed": 1000,
                    "autoplay":{
                        "delay":"7000"
                    }}'>

                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg" style="background-image: url({{ asset('frontend/images/banner/bn1.png') }});">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-10 col-sm-10">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <h2 class="banner__slides--content--title">
                                                    Leadership Institute Australia
                                                </h2>
                                                <p class="banner__slides--content--description">
                                                    Leadership Institute Australia is a nationally recognized training organization dedicated to delivering high-quality vocational education across community services, aged care, individual support, leadership, and project management.
                                                </p>
                                                <div class="banner__slides--content--btn">
                                                    <a class='rts-theme-btn btn-arrow' href="{{ url('about') }}">View Our Program
                                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slide -->

                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg" style="background-image: url({{ asset('frontend/images/banner/bn2.png') }});">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-10 col-sm-10">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <h2 class="banner__slides--content--title">
                                                    Leadership Institute Australia
                                                </h2>
                                                <p class="banner__slides--content--description">
                                                    Leadership Institute Australia is a nationally recognized training organization dedicated to delivering high-quality vocational education across community services, aged care, individual support, leadership, and project management.
                                                </p>
                                                <div class="banner__slides--content--btn">
                                                    <a class='rts-theme-btn btn-arrow' href="{{ url('about') }}">View Our Program
                                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- single slides -->
                </div>
            </div>
        </div>
    </div>
    <!-- header banner end -->
    <!-- our program -->
    <section class="program rts-section-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="rts__section--wrapper v__2">
                        <h2 class="rts__section--title text-capitalize mb-5">Courses We Offer</h2>
                        <p class="rts__section--description">Embark on a journey of knowledge, discovery, and growth at LIA College. Our admissions process is designed identify bright, motivated individuals who are eager contribute to our dynamic academic community.</p>
                        <div class="feature-list">
                            <p><i class="fa fa-check-square"></i> <span>Nationally Recognized Qualifications</span></p>
                            <p><i class="fa fa-check-square"></i> <span> Experienced Industry Trainers</span></p>
                            <p><i class="fa fa-check-square"></i> <span>Flexible Study Options</span></p>
                            <p><i class="fa fa-check-square"></i> <span>Student-Centred Support</span></p>
                            <p><i class="fa fa-check-square"></i> <span>Strong Industry Connections</span></p>
                            <p><i class="fa fa-check-square"></i> <span>Practical, Job-Ready Training</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-10 mt-5 mt-md-0">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6">
                            <div class="program__content">
                                <div class="rts__program--item v__2" style="background-image: url({{ asset('frontend/images/banner/individual.png') }});">
                                    <h5 class="rts__program--item--title"> Individual Support &  Aged Care</h5>
                                    <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at LIA College.</p>
                                    <a class='rts-nbg-btn btn-arrow' href="{{ url('individual-support') }}">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </span></a>
                                    <h5 class="rts__program--item--title--show"> Individual Support &  Aged Care</h5>
                                </div>
                                <!-- second one -->
                                <div class="rts__program--item v__2" style="background-image: url({{ asset('frontend/images/banner/leadership.png') }});">
                                    <h5 class="rts__program--item--title">Leadership Management</h5>
                                    <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at LIA College.</p>
                                    <a class='rts-nbg-btn btn-arrow' href="{{ url('leadership-management') }}">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </span></a>
                                    <h5 class="rts__program--item--title--show">Leadership Management</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="program__content mt--85">
                                <div class="rts__program--item v__2" style="background-image: url({{ asset('frontend/images/banner/community.png') }});">
                                    <h5 class="rts__program--item--title">Community Services</h5>
                                    <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at LIA College.</p>
                                    <a class='rts-nbg-btn btn-arrow' href="{{ url('community-services') }}">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </span></a>
                                    <h5 class="rts__program--item--title--show">Community Services</h5>
                                </div>
                                <!-- second one -->
                                <div class="rts__program--item v__2" style="background-image: url({{ asset('frontend/images/banner/project.png') }});">
                                    <h5 class="rts__program--item--title">Project Management</h5>
                                    <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at LIA College.</p>
                                    <a class='rts-nbg-btn btn-arrow' href="{{ url('project-management') }}">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </span></a>
                                    <h5 class="rts__program--item--title--show">Project Management</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our program end -->

    <!-- campus life start -->
    <div class="rts-campus pt--100 rts-campus-bg mobile-padding moving">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start">
                <div class="col-lg-6 col-xl-5 col-md-10 col-sm-11">
                    <div class="rts-left-section">
                        <h2 class="section-title rt-white mb--55">
                            Welcome to Leadership Institute Australia
                        </h2>
                        <a class='about-btn rts-nbg-btn btn-arrow 
                    rt-white' href="{{ url('about') }}">Learn More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-md-10 col-sm-11">
                    <div class="rts-right-section rt-relative">
                        <p class="rt-white mb--40">At Leadership Institute Australia, we believe education should be practical, empowering, and career-focused. Our nationally recognized qualifications prepare students for real-world roles in community services, aged care, disability support, leadership, and management.</p>
                        <img class="round" src="{{ asset('frontend/images/banner/embark.png') }}" alt="campus images">
                        <div class="rts-round-shape"></div>
                    </div>
                </div>
            </div>
            <div class="bottom-text rt-clip-text">About University</div>
            <div class="rt-shape">
                <img class="rt-shape__1" data-speed="0.04" src="{{ asset('frontend/images/feature/shape/01.png') }}" alt="Shape">
                <img class="shape rt-shape__2" data-speed="0.04" src="{{ asset('frontend/images/feature/shape/02.png') }}" alt="Shape">
                <img class="shape rt-shape__3" data-speed="0.04" src="{{ asset('frontend/images/feature/shape/03.png') }}" alt="Shape">
                <img class="shape rt-shape__4" data-speed="0.04" src="{{ asset('frontend/images/feature/shape/04.png') }}" alt="Shape">
            </div>
        </div>
    </div>
    <!-- campus life end -->
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
    <!-- campus life -->
    <div class="campus v__2 pt--120 pb--60">
        <div class="container">
            <div class="campus__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="campus__link">
                            <a class='campus__link--btn' href="#">
                                Campus Life
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campus__right--text">
                            <h2 class="campus__right--text--title">
                                Thriving Beyond Classes Campus Life at LIA
                            </h2>
                            <p class="campus__right--text--description">
                                Step into a World of Possibilities: LIA Campus Life is a Hub of Energy, Creativity, and Collaboration. Discover a Home Away from Home Where Every Moment Counts."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- apply start -->
    <section class="rts-application-area moving rts-section-padding v_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__9">
                        <h2 class="rts__section--title">Apply for Admission</h2>
                        <p class="rts__section--description">Welcome to the gateway of possibilities your admission to LIA College. At LIA, we understand.</p>
                    </div>
                </div>
            </div>
            <!-- application form -->
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div class="rts-admission-form-image">
                        <img src="{{ asset('frontend/images/banner/apply_for.png') }}" alt="">
                    </div>
                    <div class="rts-section-big-text">
                        Get Enrolled
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-5">
                    <div class="rts-application-form">
                        <div class="rts-application-form-content pt-0">
                            <iframe
                                src="https://api.leadconnectorhq.com/widget/form/1Ni72mn2z8UmAIoTePsS"
                                style="width:100%;height:100%;border:none;border-radius:3px"
                                id="inline-1Ni72mn2z8UmAIoTePsS" 
                                data-layout="{'id':'INLINE'}"
                                data-trigger-type="alwaysShow"
                                data-trigger-value=""
                                data-activation-type="alwaysActivated"
                                data-activation-value=""
                                data-deactivation-type="neverDeactivate"
                                data-deactivation-value=""
                                data-form-name="Website Homepage CTA Form"
                                data-height="757"
                                data-layout-iframe-id="inline-1Ni72mn2z8UmAIoTePsS"
                                data-form-id="1Ni72mn2z8UmAIoTePsS"
                                title="Website Homepage CTA Form"
                                    >
                            </iframe>
                            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rt-shape">
                <img src="{{ asset('frontend/images/feature/shape/01.svg') }}" data-speed="0.04" alt="shape" class="rt-shape__1">
                <img src="{{ asset('frontend/images/feature/shape/02.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__2">
                <img src="{{ asset('frontend/images/feature/shape/03.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__3">
                <img src="{{ asset('frontend/images/feature/shape/04.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__4">
                <img src="{{ asset('frontend/images/feature/shape/05.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__5">
            </div>
        </div>
    </section>
    <!-- apply end -->


    <!-- UPCOMING EVENT -->
    {{-- <section class="rts__section rts__light pt--120">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper rt__lowercase">
                    <h2 class="rts__section--title">Upcoming event</h2>
                    <div class="rts__section--link">
                        <a class='rts-nbg-btn btn-arrow' href='event.html'>View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- event content -->
            <div class="row g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href='event-details.html'>
                                <img src="{{ asset('frontend/images/event/01.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('frontend/images/icon/calendar.svg') }}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href='event-details.html'>
                                    Edu Fest 2023: Igniting Minds Off on
                                    Transforming Lives </a>
                            </h5>
                            <a class='rts__round--btn' href='event-details.html'>
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href='event-details.html'>
                                <img src="{{ asset('frontend/images/event/02.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('frontend/images/icon/calendar.svg') }}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href='event-details.html'>
                                    Sustainability Showcase: Green
                                    Living at LIA </a>
                            </h5>
                            <a class='rts__round--btn' href='event-details.html'>
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href='event-details.html'>
                                <img src="{{ asset('frontend/images/event/03.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('frontend/images/icon/calendar.svg') }}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href='event-details.html'>
                                    Career Carnival: Explore Your
                                    Professional Journey </a>
                            </h5>
                            <a class='rts__round--btn' href='event-details.html'>
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
            </div>
        </div>
    </section> --}}
    <!-- UPCOMING EVENT END -->
    <!-- brand slider -->
    <!--<div class="rts-brand v_1 rts-section-padding rts__light">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-md-center">-->
    <!--            <div class="col-lg-12 col-md-11">-->
    <!--                <div class="rts-brand-slider swiper swiper-data" data-swiper='{-->
    <!--                "slidesPerView":6,-->
    <!--                "loop": true,-->
    <!--                "autoplay":{-->
    <!--                    "delay":"3000"-->
    <!--                },-->
    <!--                "breakpoints":{-->
    <!--                    "320":{-->
    <!--                        "slidesPerView": 3,-->
    <!--                        "centeredSlides": true-->
    <!--                    },-->
    <!--                    "575":{-->
    <!--                        "slidesPerView": 4,-->
    <!--                        "centeredSlides": true-->
    <!--                    },-->
    <!--                    "768":{-->
    <!--                        "slidesPerView": 5,-->
    <!--                        "centeredSlides": true-->
    <!--                    },-->
    <!--                    "991":{-->
    <!--                        "slidesPerView": 6,-->
    <!--                        "centeredSlides": true-->
    <!--                    },-->
    <!--                    "1201":{-->
    <!--                        "slidesPerView": 6-->
    <!--                    }-->
    <!--                }-->
    <!--        }'>-->
    <!--                    <div class="swiper-wrapper">-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="single-brand-logo">-->
    <!--                                <a href="#">-->
    <!--                                    <img src="{{ asset('frontend/images/brand/11.png') }}" alt="">-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="single-brand-logo">-->
    <!--                                <a href="#">-->
    <!--                                    <img src="{{ asset('frontend/images/brand/2.png') }}" alt="">-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="single-brand-logo">-->
    <!--                                <a href="#">-->
    <!--                                    <img src="{{ asset('frontend/images/brand/3.png') }}" alt="">-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="single-brand-logo">-->
    <!--                                <a href="#">-->
    <!--                                    <img src="{{ asset('frontend/images/brand/44.png') }}" alt="">-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- brand slider end -->
    <!-- newsletter -->
    <div class="rts-newsletter v_1 rts-cta-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-newsletter-box" style="background-image: url({{ asset('frontend/images/newsletter/bg-1.jpg') }});">
                        <div class="rts-newsletter-box-content">
                            <h4 class="newsletter-title">Don’t Miss Awesome Story From Our Alumni
                            </h4>
                            <div class="newsletter-form w-530">
                                <form action="#">
                                    <input type="email" name="subscription" id="subscription" placeholder="Enter Your mail" required>
                                    <button type="submit" class="rts-nbg-btn btn-arrow">Subscribe <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter end -->
    @endsection