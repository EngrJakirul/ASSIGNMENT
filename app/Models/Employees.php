<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    private static $employee;
    private static $company_id;

    public static function createEmployees ($request)
    {
        self::$employee               = new Employees();
        self::$employee->company_id   = $request->company_id;
        self::$employee->name         = $request->name;
        self::$employee->email        = $request->email;
        self::$employee->phone        = $request->phone;
        self::$employee->save();
    }

    public static function updateEmployees($request, $id)
    {
        self::$employee = Employees::find($id);

        self::$employee->company_id   = $request->company_id;
        self::$employee->name         = $request->name;
        self::$employee->email        = $request->email;
        self::$employee->phone        = $request->phone;
        self::$employee->save();
    }

    public static function deleteEmployees($id)
    {
        self::$employee  = Employees::find($id);
        self::$employee->delete();
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }
}
