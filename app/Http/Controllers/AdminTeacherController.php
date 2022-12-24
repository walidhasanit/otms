<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect()->back()->with('message', 'teacher all info successfully');
    }
    public function manage()
    {
        return view('admin.teacher.manage', ['teachers' => Teacher::all(),]);
    }
    public function edit($id)
    {
        return view('admin.teacher.edit', ['teacher' => Teacher::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/manage/teacher')->with('message', 'update teacher  info successfully');

    }
    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/manage/teacher')->with('message', 'delete teacher  info successfully');

    }
}
