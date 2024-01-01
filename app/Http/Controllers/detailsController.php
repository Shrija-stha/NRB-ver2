<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\details;

class detailsController extends Controller
{
    function DataInsert(Request $request)
    {
        $name = $request->input('name');
        $designation = $request->input('designation');
        $department = $request->input('department');
        $employee_code = $request->input('employee_code');
        $employee_name = $request->input('employee_name');
        $employee_designation = $request->input('employee_designation');
        $unit = $request->input('unit');
        $area = $request->input('area');

        $isInsertSuccress = details::insert([
            'name' => $name,
            'designation' => $designation,
            'department' => $department,
            'employee_code' => $employee_code,
            'employee_name' => $employee_name,
            'employee_designation' => $employee_designation,
            'unit' => $unit,
            'area' => $area

        ]);

        if ($isInsertSuccress) {
            echo "Inserted Successfully!";
            die();
        } else echo '<h1>Insert Failed</h1>';
    }
}
