<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students.dashboard', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // 1. Data Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'university' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'semester' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
        ]);

        // 2. Database me Data Insert karna
        Student::create($validated);

        // 3. Form par wapas redirect karna success message ke sath
        return redirect()->route('students.dashboard')->with('success', 'Student record created successfully!');
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.update', compact('student'));
    }
    public function update(request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id, 
            'university' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'semester' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
        ]);

        $student->update($validated);

        return redirect()->route('students.dashboard')->with('success', 'Student record updated successfully!');
    }

    public function destroy (string $id) {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.dashboard')->with('Student Deleted Successfulyy');
    }

    public function view (string $id) {
        $student = Student::findOrFail($id);
        return view('students.view' , compact('student'));
    }
}
