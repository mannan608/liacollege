@extends('backend.layouts.master')


@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">SEO Meta Management</li>
                    </ul>
                    <a href="{{ route('seo-meta.create') }}" class="btn btn-primary">
                        Add New SEO Meta
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table common-shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border-0 star-user table-hover table-center mb-0 datatable table-striped">
                                    <thead class="user-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>Path</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>OG Image</th>
                                            <th>SEO Results</th>
                                            <th>Google Scores</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($seoMetas as $seoMeta)
                                    
                                    <tr>
                                        <td>{{ $seoMeta->id }}</td> 
                                       <td>    {{ $seoMeta->path === '/' ? 'Home' : Str::title(str_replace('-', ' ', $seoMeta->path))    }}<td>{{ Str::limit($seoMeta->meta_title, 50) }}</td>
                                        <td>{{ Str::limit($seoMeta->meta_title, 50) }}</td>
                                        <td>{{ Str::limit($seoMeta->meta_description, 50) }}</td>
                                    
                                        <td>
                                            @if($seoMeta->og_image)
                                                <img src="{{ asset('uploads/seo/' . $seoMeta->og_image) }}" width="50" height="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                    
                                        {{-- SEO SCORE --}}
                                      <td>
                                        <div>
                                            <span style="font-size: 13px;">SEO SCORE: {{ $seoMeta->seo_result['score'] ?? 0 }}</span>
                                    
                                            <div class="d-flex  flex-column "  style="font-size: 13px; line-height: 16px;">
                                              
                                    
                                                <span>
                                                    H1 Count: {{ $seoMeta->seo_result['analysis']['h1_count'] ?? 0 }}
                                                </span>
                                    
                                                <span>
                                                    H 2 Count: {{ $seoMeta->seo_result['analysis']['h2_count'] ?? 0 }}
                                                </span>
                                                <span>
                                                    Internal links: {{ $seoMeta->seo_result['analysis']['internal_links'] ?? 0 }}
                                                </span>
                                                 <span>
                                                    External links: {{ $seoMeta->seo_result['analysis']['external_links'] ?? 0 }}
                                                </span>
                                                 <span>
                                                    Image alt tag missing: {{ $seoMeta->seo_result['analysis']['image_alt_missing'] ?? 0 }}
                                                </span>
                                                <span>
                                                    Canonical: {{ $seoMeta->seo_result['analysis']['has_canonical'] ?? 0 }}
                                                </span>
                                                 <span>
                                                   Og Tags: {{ $seoMeta->seo_result['analysis']['has_og_tags'] ?? 0 }}
                                                </span>
                                                <span>
                                                   Word Count: {{ $seoMeta->seo_result['analysis']['word_count'] ?? 0 }}
                                                </span>
                                                <span>
                                                   Keyword in Title: {{ $seoMeta->seo_result['analysis']['keyword_in_title'] ?? 0 }}
                                                </span>
                                                <span>
                                                   Keyword in Description: {{ $seoMeta->seo_result['analysis']['keyword_in_description'] ?? 0 }}
                                                </span>
                                                <span>
                                                   Keyword Density: {{ $seoMeta->seo_result['analysis']['keyword_density'] ?? 0 }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    
                                        {{-- GOOGLE SCORES --}}
                                        <td>
                                           -
                                        </td>
                                    
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{ route('seo-meta.edit', $seoMeta->id) }}" class="btn btn-sm bg-primary-light mr-2">
                                                    <i class="far fa-edit me-2"></i> Edit
                                                </a>
                                    
                                                <form action="{{ route('seo-meta.destroy', $seoMeta->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm bg-danger-light"
                                                        onclick="return confirm('Are you sure you want to delete this SEO meta?')">
                                                        <i class="far fa-trash-alt me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection