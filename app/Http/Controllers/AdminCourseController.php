<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index', ['courses' => Course::orderBy('id', 'desc')->get(),]);
    }
    public function detail($id)
    {
        return view('admin.course.detail', ['course' => Course::find($id),]);
    }
    public function courseStatus($id)
    {

    }
    public function courseOfferStatus($id)
    {

    }
    public function delete($id)
    {

    }
}
