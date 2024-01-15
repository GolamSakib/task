@extends('admin.layouts.master')
@section('content')
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="d-flex justify-content-end mb-3">
                    <a type="button" href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a>
                </div>
                <div class="row h-75">
                    <div class="card">
                        <h5 class="card-header">Users</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @forelse ($users as $key => $val)
                                        <tr>
                                            <td>{{ $users->firstItem() + $key }}</td>
                                            <td>{{ $val->name }}</td>
                                            <td>{{ $val->email }}</td>
                                            <td>{{ $val->is_admin==1?"Admin":"user" }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary me-2" href="{{ route('admin.users.edit', ['user' => $val->id]) }}">
                                                    Edit
                                                    </a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('admin.users.destroy', ['user' => $val->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                    Delete
                                                    </a>
                                                    <form  id="delete-form" action="{{ route('admin.users.destroy', ['user' => $val->id]) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No Records Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme"></footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
