@extends('backend.layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <a class="breadcrumb-item active">Add SEO Meta</a>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('seo-meta.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                                       class="form-control{{ $errors->has('path') ? ' is-invalid' : '' }}"
                                       value="{{ old('path') }}"
                                       placeholder="e.g., about, services, /">
                                @if($errors->has('path'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('path') }}</strong></span>
                                @endif
                                <small class="form-text text-muted">The page path (e.g., 'about', 'services', '/')</small>
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title"
                                       class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                       value="{{ old('meta_title') }}"
                                       placeholder="Enter meta title">
                                @if($errors->has('meta_title'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_title') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description"
                                        class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}"
                                        rows="4"
                                        placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                                @if($errors->has('meta_description'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_description') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Meta Keywords</label>
                                <textarea name="meta_keywords"
                                        class="form-control{{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}"
                                        rows="3"
                                        placeholder="Enter keywords separated by commas">{{ old('meta_keywords') }}</textarea>
                                @if($errors->has('meta_keywords'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('meta_keywords') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Canonical URL</label>
                                <input type="url" name="canonical_url"
                                       class="form-control{{ $errors->has('canonical_url') ? ' is-invalid' : '' }}"
                                       value="{{ old('canonical_url') }}"
                                       placeholder="https://example.com/page">
                                @if($errors->has('canonical_url'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('canonical_url') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Schema Markup (JSON-LD)</label>
                                <textarea name="schema_markup"
                                        class="form-control{{ $errors->has('schema_markup') ? ' is-invalid' : '' }}"
                                        rows="6"
                                        placeholder='{"@@context": "https://schema.org", "@@type": "WebPage", ...}'>{{ old('schema_markup') }}</textarea>
                                @if($errors->has('schema_markup'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('schema_markup') }}</strong></span>
                                @endif
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
                            <div class="form-group mb-3">
                                <label>OG Image</label>
                                <input type="file" name="og_image"
                                       class="form-control{{ $errors->has('og_image') ? ' is-invalid' : '' }}"
                                       accept="image/*">
                                @if($errors->has('og_image'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('og_image') }}</strong></span>
                                @endif
                                <small class="form-text text-muted">Recommended: 1200x630px, max 5MB</small>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Save SEO Meta</button>
                            <a href="{{ route('seo-meta.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
