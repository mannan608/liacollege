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

        <div class="dashboard-nav ">
            <div class="nav-pill" data-target="planning" style="cursor: pointer">
                <div class="d-flex gap-3">
                    <div class="" style="font-size: 34px; color: #007bff">
                        <i class="fi fi-rr-paper-plane"></i>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        Assessment Planning
                        <span style="font-size: 12px">Jump to section</span>
                    </div>
                </div>
            </div>

            <div class="nav-pill" data-target="planning" style="cursor: pointer">
                <div class="d-flex gap-3">
                    <div class="" style="font-size: 34px; color: #007bff">
                        <i class="fi fi-rr-paper-plane"></i>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        Assessment Planning
                        <span style="font-size: 12px">Jump to section</span>
                    </div>
                </div>
            </div>

            <div class="nav-pill" data-target="planning" style="cursor: pointer">
                <div class="d-flex gap-3">
                    <div class="" style="font-size: 34px; color: #007bff">
                        <i class="fi fi-rr-paper-plane"></i>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        Assessment Planning
                        <span style="font-size: 12px">Jump to section</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assessment Section -->

        <section id="planning" class="section-card">

            <div class="mb-4">
                <h3 class="section-title">
                    📋 Assessment Planning
                </h3>

                <p class="section-subtitle">
                    Structured planning modules for academic assessments.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="resource-card">

                        <div class="d-flex gap-3">
                            <a href="#" class="badge-modern">
                                Preview
                            </a>
                            <a href="#" class="badge-download">
                                Download
                            </a>
                        </div>

                        <h5 class="mt-3">
                            AS - Assessment Planning
                        </h5>

                        <p>
                            Complete roadmap, milestones and rubrics.
                        </p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="resource-card">

                        <span class="badge-modern">
                            Collaborative
                        </span>

                        <h5 class="mt-3">
                            Group Assessment Framework
                        </h5>

                        <p>
                            Peer evaluation templates and planning guides.
                        </p>

                    </div>
                </div>

            </div>

        </section>

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
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #eff6ff;
            --success: #10b981;
            --text: #0f172a;
            --muted: #64748b;
            --border: #e2e8f0;
            --card: #ffffff;
        }

        body {
            background:
                radial-gradient(circle at top left, #dbeafe 0%, transparent 35%),
                radial-gradient(circle at top right, #ede9fe 0%, transparent 30%),
                #f8fafc;
        }

        .sectionList {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(14rem, 1fr));
            grid-gap: 0;
            gap: 18px;
            row-gap: 30px;
        }


        .dashboard-container {
            max-width: 1280px;
            margin: auto;
            padding: 24px;
        }

        .dashboard-header h2 {
            font-weight: 700;
            color: var(--text);
        }

        .dashboard-header p {
            color: var(--muted);
        }

        .dashboard-nav {
            position: sticky;
            top: 20px;
            z-index: 100;
            display: flex;
            gap: 24px;
            margin-bottom: 30px;
            padding: 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .8);
            backdrop-filter: blur(15px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        }

        .nav-pill {
            border: none;
            background: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            color: var(--text);
            transition: .3s;
            width: 33.33%;
            border: 1px solid var(--primary);
        }

        .nav-pill:hover {
            background: var(--primary);
            color: #fff;
        }

        .nav-pill .fi:hover {
            background: var(--primary);
            color: #fff;
        }

        .section-card {
            background: rgba(255, 255, 255, .85);
            backdrop-filter: blur(15px);
            border-radius: 30px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, .4);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .06);
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--text);
        }

        .section-subtitle {
            color: var(--muted);
        }

        .resource-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 20px;
            height: 100%;
            transition: .3s;
        }

        .resource-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .08);
        }

        .resource-card h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text);
        }

        .resource-card p {
            color: var(--muted);
            margin-bottom: 0;
        }

        .badge-modern {
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 50px;
            padding: 4px 14px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-download {
            background: #DA591F;
            color: white;
            border-radius: 50px;
            padding: 4px 14px;
            font-size: 12px;
            font-weight: 600;
        }

        .info-box {
            background: #eff6ff;
            border-left: 4px solid var(--primary);
            padding: 16px;
            border-radius: 12px;
        }

        @media(max-width:768px) {

            .dashboard-nav {
                overflow-x: auto;
                white-space: nowrap;
            }

            .section-card {
                padding: 20px;
            }

            .section-title {
                font-size: 22px;
            }
        }

        .search-wrapper {
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 16px 20px 16px 52px;
            border: 1px solid #007bff;
            border-radius: 50px;
            font-size: 1.02rem;
            transition: all 0.3s ease;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .search-input:focus {
            border-color: #007bff;
            box-shadow: 0 8px 25px rgba(0, 123, 255, 0.15);
            outline: none;
            transform: translateY(-2px);
        }

        .search-input::placeholder {
            color: #adb5bd;
            font-weight: 400;
        }

        /* Icon Styling */
        .search-box i.fa-search {
            font-size: 1.3rem;
            color: #6c757d;
            transition: color 0.3s;
        }

        .search-input:focus+i.fa-search,
        .search-input:focus~i.fa-search {
            color: #007bff;
        }
    </style>

@endsection
