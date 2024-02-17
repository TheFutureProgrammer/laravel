<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;

class AdminController extends Controller
{
    public function students()
    {
        $totalStudents = Student::count();
        $totalDepartments = Department::count();
        $totalEnrollments = Enrollment::count();

        // Create a chart to visualize data
        $studentsChart = Charts::create('bar', 'highcharts')
            ->title('Total Students')
            ->elementLabel('Total')
            ->labels(['Students'])
            ->values([$totalStudents]);

        // You can create more charts for other metrics

        return view('students', compact('totalStudents', 'totalDepartments', 'totalEnrollments', 'studentsChart'));
    }

    // public function createStudent()
    // {
    //     return view('admin.students.create');
    // }

    // public function storeStudent(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:students',
    //         // Add more validation rules as needed
    //     ]);

    //     Student::create($request->all());

    //     return redirect()->route('admin.students')->with('success', 'Student added successfully');
    // }

    // public function editStudent(Student $student)
    // {
    //     return view('admin.students.edit', compact('student'));
    // }

    // public function updateStudent(Request $request, Student $student)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:students,email,' . $student->id,
    //         // Add more validation rules as needed
    //     ]);

    //     $student->update($request->all());

    //     return redirect()->route('admin.students')->with('success', 'Student updated successfully');
    // }

    // public function deleteStudent(Student $student)
    // {
    //     $student->delete();
    //     return redirect()->route('admin.students')->with('success', 'Student deleted successfully');
    // }
}
