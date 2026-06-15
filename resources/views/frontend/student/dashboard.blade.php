@extends('frontend.layouts.app')
@section('title', 'Student Dashboard')


@section('content')

    <div class="dashboard-container mt-5">

        {{-- <div class="dashboard-header mb-4">
            <!-- Beautiful Search Bar -->
            <div class="search-wrapper mb-5">
                <div class="mb-5">
                    <div class="position-relative mx-auto">
                        <div class="input-group input-group-lg shadow-sm">
                            <span class="input-group-text bg-white border-end-0 rounded-start-pill ps-4">
                                <i class="fas fa-search text-muted fs-4"></i>
                            </span>
                            <input type="text" id="courseSearch"
                                class="form-control border-start-0 border-2 rounded-end-pill py-3"
                                placeholder="Search courses, documents, assessments..." style="font-size: 1.05rem;">
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <div class="">
            @php
                $icons = [
                    'fi fi-rr-book',
                    'fi fi-rr-graduation-cap',
                    'fi fi-rr-computer',
                    'fi fi-rr-briefcase',
                    'fi fi-rr-stethoscope',
                    'fi fi-rr-palette',
                    'fi fi-rr-globe',
                    'fi fi-rr-chart-line',
                ];
            @endphp
            <div class="dashboard-nav">
                @foreach ($courses as $category => $items)
                    @php
                        $icon = $icons[$loop->index % count($icons)];
                    @endphp

                    <div class="nav-pill" data-target="section-{{ Str::slug($category) }}" style="cursor:pointer">

                        <div class="d-flex gap-3">
                            <div style="font-size:34px;color:#007bff">
                                <i class="{{ $icon }}"></i>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <h4 class="m-0 p-0">{{ $category }}</h4>
                                <span style="font-size:12px">Jump to section</span>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- Dynamic Sections --}}
            <div class="">

                @foreach ($courses as $category => $items)
                    @php
                        $icon = $icons[$loop->index % count($icons)];
                    @endphp
                    <section id="section-{{ Str::slug($category) }}" class="section-card">

                        <div class="mb-4">
                            <h3 class="section-title d-flex gap-3 align-items-center">
                                <i class="{{ $icon }}"></i> {{ $category }}
                            </h3>

                            <p class="section-subtitle">
                                Resources available under {{ $category }}.
                            </p>
                        </div>
                        <div class="row g-4">
                            @foreach ($items as $course)
                                <div class="col-lg-6">
                                    <div class="resource-card">
                                        <div class="resource-header">
                                            <div class="resource-icon">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                            </div>

                                            <div>
                                                <h5 class="line-clamp-2">{{ $course->title }}</h5>
                                            </div>
                                        </div>

                                        <div class="resource-desc">
                                            <p >
                                            {!! $course->description !!}
                                        </p>
                                        </div>

                                        <div class="resource-files mt-4">
                                            <div class="resource-files-header">
                                                <span>AP Templates</span>
                                                <span class="file-count">1 File</span>
                                            </div>

                                            <div class="file-item">
                                                <a href="#" class="file-info">
                                                    <div class="pdf-icon">
                                                        <i class="fi fi-tr-file-pdf"></i>
                                                    </div>
                                                    <h6 class="line-clamp-1">{{ $course->title }}</h6>
                                                </a>

                                                <a href="{{ route('document.download', $course->id) }}"
                                                    class="download-btn">
                                                    <i class="fi fi-rr-download"></i>
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </section>
                @endforeach
            </div>
        </div>

        <!-- Documents -->

        <section id="documents" class="section-card">

            <div class="mb-4">
                <h3 class="section-title">
                    📄 Documents & References
                </h3>

                <p class="section-subtitle">
                    Access official documents and references.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="resource-card">

                        <h5>
                            Academic Integrity Guidelines
                        </h5>

                        <p>
                            Latest university policy document.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="resource-card">

                        <h5>
                            Submission Checklist
                        </h5>

                        <p>
                            Final year assessment guide.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="resource-card">

                        <h5>
                            Strategic Planning Guide
                        </h5>

                        <p>
                            Detailed planning document.
                        </p>

                    </div>

                </div>

            </div>

            <div class="info-box mt-4">
                💡 Need assistance? Contact your academic advisor.
            </div>

        </section>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            document
                .querySelectorAll(".nav-pill")
                .forEach(button => {

                    button.addEventListener("click", () => {

                        const target =
                            document.getElementById(
                                button.dataset.target
                            );

                        if (!target) return;

                        const offset = 100;

                        const top =
                            target.getBoundingClientRect().top +
                            window.pageYOffset -
                            offset;

                        window.scrollTo({
                            top,
                            behavior: "smooth"
                        });

                    });

                });

        });
    </script>


@endsection
