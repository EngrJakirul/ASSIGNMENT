<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    private $companies, $company;

    public function addCompanies()
    {
        return view('admin.companies.add-companies.index');
    }
    public function createCompanies(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
        ],
        [
            'name.required' => 'Name filled is required'
        ]);

        Companies::createCompanies($request);
        return redirect('/add-company')->with('message', 'New Companies Create Successful');
    }

    public function editCompanies($id)
    {
        $this->company = Companies::find($id);
        return view('admin.companies.edit-companies.index', ['company' => $this->company]);
    }
    public function updateCompanies(Request $request, $id)
    {
        Companies::updateCompanies($request, $id);
        return redirect('/manage-company')->with('message', 'Companies Info Update Successful');

    }
    public function deleteCompanies($id)
    {
        Companies::deleteCompanies($id);
        return redirect()->back()->with('error', 'Subject Delete Successful');
    }
    public function manageCompanies()
    {
        $this->companies = Companies::orderBy('id', 'ASC')->paginate(10);
        return view('admin.companies.manage-companies.index', ['companies' => $this->companies]);
    }
}
