@extends('backend.layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <a class="breadcrumb-item active">Edit SEO Meta</a>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('seo-meta.update', $seoMeta->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">SEO Meta Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Path <span class="text-danger">*</span></label>
                                <input type="text" name="path"
                                       class="form-control @error('path') is-invalid @enderror"
                                       value="{{ old('path', $seoMeta->path) }}"
                                       placeholder="e.g., about, services, /">
                                @error('path')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                                <small class="form-text text-muted">The page path (e.g., 'about', 'services', '/')</small>
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title"
                                       class="form-control @error('meta_title') is-invalid @enderror"
                                       value="{{ old('meta_title', $seoMeta->meta_title) }}"
                                       placeholder="Enter meta title">
                                @error('meta_title')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description"
                                        class="form-control @error('meta_description') is-invalid @enderror"
                                        rows="4"
                                        placeholder="Enter meta description">{{ old('meta_description', $seoMeta->meta_description) }}</textarea>
                                @error('meta_description')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keywords"
                                        class="form-control @error('meta_keywords') is-invalid @enderror"
                                        rows="3"
                                        placeholder="Enter keywords separated by commas">{{ old('meta_keywords', $seoMeta->meta_keywords) }}</textarea>
                                @error('meta_keywords')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Canonical URL</label>
                                <input type="url" name="canonical_url"
                                       class="form-control @error('canonical_url') is-invalid @enderror"
                                       value="{{ old('canonical_url', $seoMeta->canonical_url) }}"
                                       placeholder="https://example.com/page">
                                @error('canonical_url')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Schema Markup (JSON-LD)</label>
                                <textarea name="schema_markup"
                                        class="form-control @error('schema_markup') is-invalid @enderror"
                                        rows="6"
                                        placeholder='{"@context": "https://schema.org", "@type": "WebPage", ...}'>{{ old('schema_markup', $seoMeta->schema_markup) }}</textarea>
                                @error('schema_markup')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Open Graph Image</h5>
                        </div>
                        <div class="card-body">
                            @if($seoMeta->og_image)
                                <div class="mb-3">
                                    <img src="{{ asset('uploads/seo/' . $seoMeta->og_image) }}" alt="Current OG Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                </div>
                            @endif
                            <div class="form-group mb-3">
                                <label>OG Image</label>
                                <input type="file" name="og_image"
                                       class="form-control @error('og_image') is-invalid @enderror"
                                       accept="image/*">
                                @error('og_image')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                                <small class="form-text text-muted">Recommended: 1200x630px, max 5MB</small>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Update SEO Meta</button>
                            <a href="{{ route('seo-meta.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection