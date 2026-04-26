@extends('backend.layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="page-sub-header d-flex justify-content-between align-items-center">
                        <span>{{ optional($category)->id ? 'Edit' : 'Add' }} Category</span>
                        <a href="{{ route('category.index') }}">Category List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <form 
                            action="{{ optional($category)->id ? route('category.update', $category->id) : route('category.store') }}" 
                            method="POST" 
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @if(optional($category)->id)
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Name</label>
                                        <input type="text"
                                            name="name"
                                            class="form-control"
                                            value="{{ old('name', $category->name ?? '') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Parent Category</label>
                                        <select name="parent_id" class="form-control">
                                            <option value="">Select Category</option>

                                            @foreach($categories as $parent)
                                                <option value="{{ $parent->id }}"
                                                    {{ old('parent_id', optional($category)->parent_id) == $parent->id ? 'selected' : '' }}>
                                                    {{ $parent->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Description</label>
                                        <textarea
                                            name="description"
                                            rows="4"
                                            class="form-control"
                                        >{{ old('description', optional($category)->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Banner</label>
                                        <input type="file"
                                            name="banner"
                                            class="form-control"
                                            accept="image/*"
                                            onchange="previewBanner(event)">
                                        
                                        <div class="mt-2">
                                            <img id="banner-preview"
                                                src="{{ optional($category)->banner ? asset('uploads/categories/' . $category->banner) : '' }}"
                                                class="img-thumbnail"
                                                width="150"
                                                style="{{ optional($category)->banner ? '' : 'display:none;' }}">

                                        </div>
                                    </div>
                                </div>

                                {{-- Actions --}}
                                <div class="col-12">
                                    <div class="d-flex">
                                        <a href="{{ route('category.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Banner Preview --}}
<script>
function previewBanner(event) {
    const img = document.getElementById('banner-preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.style.display = 'block';
}
</script>
@endsection