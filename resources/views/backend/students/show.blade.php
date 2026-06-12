@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="breadcrumb-item active">Category Details</a>
                            <a href="{{ route('category.index') }}"><Caption></Caption>ategory List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Category Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="fw-semibold text-muted">Avatar</label><br />
                                    @if(!empty($category->avatar))
                                        <img src="{{ asset('uploads/categories/' . $category->avatar) }}" alt="Avatar" style="max-width: 100px; max-height: 100px;" />
                                    @else
                                        <p class="mb-0 text-muted">No file attached</p>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <label class="fw-semibold text-muted">Name</label>
                                    <p class="mb-0">{{ $category->name ?? '—' }}</p>
                                </div>
                                <div class="col-md-2">
                                    <label class="fw-semibold text-muted">Designation</label>
                                    <p class="mb-0">{{ $category->designation ?? '—' }}</p>
                                </div>
                                <div class="col-md-2">
                                    <label class="fw-semibold text-muted">Rating</label>
                                    <p class="mb-0">{{ $category->rating ?? '—' }}</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-semibold text-muted">category</label>
                                    <p class="mb-0">{{ $category->description ?? '—' }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="card-footer text-end bg-white">
                            <a href="{{ route('category.index') }}" class="btn btn-sm btn-outline-secondary">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
