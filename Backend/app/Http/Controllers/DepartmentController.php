<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

    public function create(Request $request)
    {
        $department = Department::create([
            'name' => $request->name,
        ]);

        return response()->json($department, 201);
    }

    public function get($id)
    {
        $department = Department::findOrFail($id);

        return response()->json($department);
    }

    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $department->update([
            'name' => $request->name,
        ]);

        return response()->json($department);
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return response()->json(null, 204);
    }
}
