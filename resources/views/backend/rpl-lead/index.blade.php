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
                    <li class="breadcrumb-item active">Lead Management</li>
                </ul>
            </div>
        </div>
        <div class="mb-4 d-flex justify-content-end">
          <a href="" class="btn btn-primary btn-sm py-2 px-4"> Export CSV </a>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table common-shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="leads" class="table border-0 star-user table-hover table-center mb-0 datatable table-striped">
                                <thead class="user-thread">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Mail</th>
                                        <th>Course</th>
                                        <th>Age</th>
                                        <th>Employment</th>
                                        <th>Experience</th>
                                        <th>Care Role</th>
                                        <th>Sector</th>
                                        <th>Documents</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->id }}</td>
                                        <td>{{ $lead->name }}</td>
                                        <td>{{ $lead->phone }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->course }}</td>
                                        <td>{{ $lead->age }}</td>
                                        <td>{{ $lead->employment_status }}</td>
                                        <td>{{ $lead->experience_years }}</td>
                                        <td>{{ $lead->care_role }}</td>
                                        <td>{{ implode(', ', $lead->sector ?? []) }}</td>
                                        <td>{{ implode(', ', $lead->documents ?? []) }}</td>

                                        <td class="text-end">
                                            <div class="actions">
                                                <!-- <a href="{{ route('rpl-lead.edit', $lead->id) }}" class="btn btn-sm bg-primary-light mr-2">
                                                    <i class="far fa-edit me-2"></i> Edit
                                                </a> -->
                                                <form action="{{ route('rpl-lead.destroy', $lead->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm bg-danger-light" onclick="return confirm('Are you sure you want to delete this SEO meta?')">
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

<script>
    $(document).ready(function () {
        new DataTable('#leads', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });
</script>