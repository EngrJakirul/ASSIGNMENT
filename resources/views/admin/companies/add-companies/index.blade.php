@extends('admin.master')
@section('title')
    ADD COMPANIES
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark text-uppercase ">
                <div class="card-header">
                    <div class="nav nav-pills card-header-pills">
                        <h2 class="card-title text-uppercase mb-4">Add Companies Form</h2>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-uppercase text-success text-center">{{Session::get('message')}}</h3>
                    <form action="{{route('company.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-2 col-form-label">Companies Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" required />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control-file" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="website" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="website" class="form-control" id="website" />
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

