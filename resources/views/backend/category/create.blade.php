@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-sub-header d-flex justify-content-between align-items-center">

                            <a href="{{ route('categories.index') }}">Category List</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <form
                                action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}">

                                @csrf

                                @if (isset($category))
                                    @method('PUT')
                                @endif

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
@endsection
