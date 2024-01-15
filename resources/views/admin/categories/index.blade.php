@extends('admin.layouts.master')
@section('content')
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="d-flex justify-content-end mb-3">
                    <a type="button" href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
                <div class="row h-75">
                    <div class="card">
                        <h5 class="card-header">categories</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @forelse ($categories as $key => $val)
                                        <tr>
                                            <td>{{ $categories->firstItem() + $key }}</td>
                                            <td>{{ $val->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary me-2" href="{{ route('admin.categories.edit', ['category' => $val->id]) }}">
                                                Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="{{ route('admin.categories.destroy', ['category' => $val->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                Delete
                                                </a>

                                                <form  id="delete-form" action="{{ route('admin.categories.destroy', ['category' => $val->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No Records Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $categories->links() }}
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
