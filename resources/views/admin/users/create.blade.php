@extends('admin.layouts.master')
@section('content')
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->


            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- HTML5 Inputs -->
                        <div class="card mb-4">
                            <h5 class="card-header">Create New User</h5>
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="row">
                                            <div>
                                                <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="user name"
                                                    id="html5-text-input" name="name" required>
                                            </div>
                                            <div>
                                                <label for="is_admin" class="col-md-2 col-form-label">User Type</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select" id="is_admin" name="is_admin"
                                                    aria-label="Default select example" required>
                                                    <option disabled selected>select User Type</option>
                                                    <option value=1>Admin</option>
                                                    <option value=0>User</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="html5-text-input" class="col-md-2 col-form-label">email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" value="{{old('email')}}" type="email" id="html5-text-input"
                                                    name="email" required>
                                            </div>
                                            <div>
                                                <label for="html5-text-input"
                                                    class="col-md-2 col-form-label">Password</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" value="{{old('password')}}" type="password" id="html5-text-input"
                                                    name="password" required>
                                            </div>
                                            <div>
                                                <label for="html5-text-input"
                                                    class="col-md-4 col-form-label">Confirm Password</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control"  name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- / Content -->




            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">

            </footer>
            <!-- / Footer -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
