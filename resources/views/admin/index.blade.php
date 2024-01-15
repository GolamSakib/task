@extends('admin.layouts.master')
@section('content')
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


                <div class="row h-100">
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
                                    <tr>
                                        <td><i class="ti ti-brand-angular ti-lg text-danger me-3"></i> <span
                                                class="fw-medium">Angular Project</span></td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
