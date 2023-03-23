@extends('admin.master')
@section('title')
    ADD EMPLOYEES
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark text-uppercase ">
                <div class="card-header">
                    <div class="nav nav-pills card-header-pills">
                        <h2 class="card-title text-uppercase mb-4">ADD EMPLOYEES FORM</h2>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-uppercase text-success text-center">{{Session::get('message')}}</h3>
                    <form action="{{route('employee.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10">
                                <select name="company_id" id="" class="form-control">
                                    <option value="" disabled selected>Select Company</option>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-2 col-form-label">Employee Name</label>
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
                            <label for="website" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="tel" name="phone" class="form-control" id="phone" />
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

