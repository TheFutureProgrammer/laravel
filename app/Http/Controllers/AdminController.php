<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
       
        $labelsData = DB::table('departments')->select('name')->get();
        $labels = $labelsData->pluck('name'); // Assuming 'column1' is the label

        $valuesData = DB::table('enrollments')->pluck('id'); // Assuming 'column3' is the value


           return view('admin', [
        'labels' => $labels,
        'values' => $valuesData,
    ]);
    }
    public function students()
    {
        
        return view('students');
    }



    public function createStudent()
    {
        return view('admin.students.create');
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            // Add more validation rules as needed
        ]);

        Student::create($request->all());

        return redirect()->route('admin.students')->with('success', 'Student added successfully');
    }

    public function editStudent(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function updateStudent(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            // Add more validation rules as needed
        ]);

        $student->update($request->all());

        return redirect()->route('admin.students')->with('success', 'Student updated successfully');
    }

    public function deleteStudent(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students')->with('success', 'Student deleted successfully');
    }

}