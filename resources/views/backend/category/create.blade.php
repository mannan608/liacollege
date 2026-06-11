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

                                <input type="text" name="name" placeholder="Category Name"
                                    value="{{ $category->name ?? old('name') }}">
                                <button type="submit">{{ isset($category) ? 'Update' : 'Create' }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
