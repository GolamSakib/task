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
                            <h5 class="card-header">Create Categories</h5>
                            <div class="card-body">
                                <form action="{{ route('admin.categories.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="row">
                                            <div>
                                                <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Men" id="html5-text-input" name="name">
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
