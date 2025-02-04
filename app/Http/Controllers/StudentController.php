<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students=Student::all();
        return view("pages.student.index",compact('students'));
    }


    public function create()
    {
        return view("pages.student.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'roll'=>'required|min:2',
            'phone'=>'required|min:5',
            'address'=>'required',
            'photo'=>'required|image|mimes:jpg,jpeg,png|max:10240'
        ]);
        $student=new Student();
        $student->name=$request->name;
        $student->roll=$request->roll;
        $student->phone=$request->phone;
        $student->address=$request->address;
        $photoname=$request->name.".".$request->file('photo')->extension();
        $request->file('photo')->move(public_path('photo'), $photoname);

        $student->photo= $photoname;
        if($student->save()){
            return redirect('/student')->with('success','successfully created');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $student=Student::find($id);
        return view('pages.student.update',compact('student'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
