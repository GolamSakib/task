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
                            <h5 class="card-header">Edit Product</h5>
                            <div class="card-body">
                                <form action="{{ route('admin.products.update',['product'=>$product->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <div class="row">
                                            <div>
                                                <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Men"
                                                    id="html5-text-input" value="{{old('name',$product->name)}}" name="name">
                                            </div>
                                            <div>
                                                <label for="category_id" class="form-label">category</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select" id="category_id" name="category_id"
                                                    aria-label="Default select example">
                                                    <option disabled>select category</option>
                                                    @foreach ($categories as $key => $val)
                                                    <option value="{{ $val->id }}" @if ($val->id == $product->id) selected @endif>
                                                        {{ $val->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label for="html5-text-input" class="col-md-2 col-form-label">price</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" value="{{old('price',$product->price)}}" type="number" id="html5-text-input"
                                                    name="price">
                                            </div>
                                            <div>
                                                <label for="html5-text-input"
                                                    class="col-md-2 col-form-label">Quantity</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" value="{{old('quantity',$product->quantity)}}" type="number" id="html5-text-input"
                                                    name="quantity">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary">Update</button>
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
