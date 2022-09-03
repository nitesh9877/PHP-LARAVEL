<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Fetch all data from database

    public function employeeData()       
    {
        return response()->json(Employee::all(), 200);
    }

    
    // Fetch specific data from database

    public function employeespecificData($id)    
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'Employee not found'], 404);
        }
        else{
            return response()->json($employee::find($id),200);
        }
        
    }

    // Add Employee data from database

    public function addemployeeData(Request $request)
    {
        $employee = Employee::create($request->all());
        return response($employee, 201);
    }

    // Update Employee data from database
    public function updateemployeeData(Request $request, $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'Employee not found'], 404);
        }               
        else{
        $employee -> update($request->all());
        return response($employee, 200);

        }

    }

    // Delete Employee data from database
    public function deleteemployeeData(Request $request, $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'Employee not found'], 404);
        }
        else{
        $employee -> delete($request->all());
        return response($employee, 204);
        
        }

    }

}                      
