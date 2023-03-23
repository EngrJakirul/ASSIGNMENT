@extends('admin.master')
@section('title')
    MANAGE EMPLOYEES
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark text-uppercase ">
                <div class="card-header">
                    <div class="nav nav-pills card-header-pills">
                        <h2 class="text-2xl text-uppercase mb-4">MANAGE EMPLOYEES FORM</h2>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="table-primary">
                            <th class="">SL NO</th>
                            <th class="">Company Name</th>
                            <th class="">Employee Name</th>
                            <th class="">Email</th>
                            <th class="">Phone</th>
                            <th class="">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td class="table-primary text-center">{{$loop->iteration}}</td>
                                <td class="table-secondary text-start">{{$employee->company->name}}</td>
                                <td class="table-secondary text-start">{{$employee->name}}</td>
                                <td class="table-secondary text-start">{{$employee->email}}</td>
                                <td class="table-warning text-center">{{$employee->phone}}</td>
                                <td class="table-primary text-center">
                                    <a href="{{ route('employee.edit', [$employee->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('employee.delete', [$employee->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $employees->links() }}
@endsection

