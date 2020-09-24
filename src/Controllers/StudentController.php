<?php

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\HttpFoundation\Request;

class StudentController
{
  
    public function index()
    {
        $students = Student::get();
        return view('index.php', ['students' => $students]);
    }
    public function store(Request $request)
    {

        $students = Student::create($request->request->all());
        if ($students != null) {
            return redirect('/');
        }
    }

    public function create()
    {
       return view('create.php');
    }

    public function show($id)
    {
       
        $student = Student::find($id);
        
       return view('show.php', ['student' => $student]);
    }
    public function edit($id)
    {
        $student = Student::find($id);
       return view('edit.php', ['student' => $student]);
    }

    public function update(Request $request)
    {

        $result = Student::where('id', $request->request->get('id'))->update($request->request->all());


        if ($result) {
            return redirect('/');
        }
    }
    public function delete($id)
    {
        $result = Student::destroy($id);
        if ($result) {
            return redirect('/');
        }
    }
}
