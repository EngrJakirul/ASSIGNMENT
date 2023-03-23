@extends('admin.master')
@section('title')
    MANAGE COMPANIES
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark text-uppercase ">
                <div class="card-header">
                    <div class="nav nav-pills card-header-pills">
                        <h2 class="text-2xl text-uppercase mb-4">MANAGE COMPANIES FORM</h2>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="table-primary">
                            <th class="">SL NO</th>
                            <th class="">Name</th>
                            <th class="">Email</th>
                            <th class="">Logo</th>
                            <th class="">Website</th>
                            <th class="">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td class="table-primary text-center">{{$loop->iteration}}</td>
                                <td class="table-secondary text-start">{{$company->name}}</td>
                                <td class="table-secondary text-start">{{$company->email}}</td>
                                <td class="table-success text-lowercase">
                                    <img src="{{$company->image}}" alt="" width="50" height="50">
                                </td>
                                <td class="table-warning text-center">{{$company->website}}</td>
                                <td class="table-primary text-center">
                                    <a href="{{ route('company.edit', [$company->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('company.delete', [$company->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $companies->links() }}
@endsection

