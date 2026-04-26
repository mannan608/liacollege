@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="breadcrumb-item active">{{ optional($review)->id ? 'Edit' : 'Add' }} Review</a>
                            <a href="{{ route('review.index') }}">Review List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ optional($review)->id
                                ? route('review.update', $review->id)
                                : route('review.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(optional($review)->id)
                                    @method('PUT')
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ optional($review)->name }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation"
                                                value="{{ optional($review)->designation }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Rating (1 to 5)</label>
                                            <select class="form-control" name="rating" id="rating">
                                                <option value="">Select Rating</option>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ optional($review)->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Description</label>
                                            <textarea name="description"
                                                class="form-control @error('description') is-invalid @enderror" rows="2"
                                                placeholder="Enter description">{{ old('description', $review->description ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Avatar</label>
                                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*" onchange="previewImage(event)">
                                            <div class="mt-2">
                                                <img id="file-preview" 
                                                    src="{{ optional($review)->avatar ? asset('uploads/reviews/' . $review->avatar) : '#' }}" 
                                                    alt="Preview" 
                                                    class="img-thumbnail" 
                                                    width="150" 
                                                    height="150" 
                                                    style="{{ optional($review)->avatar ? '' : 'display:none;' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                    function previewImage(event) {
                                        const input = event.target;
                                        const preview = document.getElementById('file-preview');

                                        if (input.files && input.files[0]) {
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                preview.src = e.target.result;
                                                preview.style.display = 'block';
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        } else {
                                            // If no new file selected, keep existing image visible
                                            preview.style.display = preview.src !== '#' ? 'block' : 'none';
                                        }
                                    }
                                    </script>
                                    <div class="col-12">
                                        <div class="student-submit d-flex">
                                            <a class="btn btn-secondary mr-2" href="{{ route('review.index') }}">Cancel</a>
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
@endsection