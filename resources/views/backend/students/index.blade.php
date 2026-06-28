@extends('backend.layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="page-sub-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item active">All Students</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary d-flex align-items-center gap-2 px-4">
                            <i class="fas fa-plus"></i>
                            <span>Add New Student</span>
                        </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <form method="GET" action="{{ route('student.index') }}">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <input type="text"
                                               name="name"
                                               class="form-control"
                                               placeholder="Search by name..."
                                               value="{{ request('name') }}">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="col-md-3 col-12">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    <a href="{{ route('student.index') }}" class="btn btn-secondary">Reset</a>
                                </div>
                            </div>
                        </form>

                        <!-- Table -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Mail</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>                                           
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{ route('student.show', $student->id) }}"
                                                       class="btn btn-sm bg-primary-light mr-2">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('student.edit', $student->id) }}"
                                                       class="btn btn-sm bg-primary-light mr-2">
                                                        <i class="far fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('student.destroy', $student->id) }}"
                                                          method="POST"
                                                          style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm bg-danger"
                                                                onclick="return confirm('Are you sure?')">
                                                            <i class="far fa-trash-alt text-white"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection