<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    public function index()
    {
        return view('teacher.course.index',['categories' => Category::where('status', 1)->get(),]);
    }
    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message', 'course all info successfully');
    }
    public function manage()
    {
        return view('teacher.course.manage', ['courses' => Course::where('teacher_id', Session::get('teacher_id'))->orderBy('id', 'desc')->get(),]);
    }
    public function edit($id)
    {
        return view('teacher.course.edit', ['course' => Course::find($id), 'categories' => Category::where('status', 1)->get(), ]);
    }
    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/manage/course')->with('message', 'course update info successfully');

    }
    public function delete($id)
    {

    }
}
