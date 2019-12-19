@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <form class="category" action="{{ url('add_category') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="c_name">Category Name</label>
                                <input type="text" name="c_name" class="form-control form-control-user" id="c_name"
                                       placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label for="c_details">Category Description</label>
                                <input type="text" name="c_details" class="form-control form-control-user"
                                       id="c_details"
                                       placeholder="Enter Category Description">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Submit
                            </button>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
@endsection
