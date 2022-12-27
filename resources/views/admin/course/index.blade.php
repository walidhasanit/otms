@extends('admin.master')

@section('title')
   admin manage course
@endsection

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Course All Information</h4>
            <p class="text-success text-center">{{Session::get('message')}}</p>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Fee</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$course->category->name}}</td>
                        <td>{{$course->title}}</td>
                        <td>{{$course->fee}}</td>
                        <td>
                            <img src="{{asset($course->image)}}" height="80" width="90" alt="">
                        </td>
                        <td>
                            <a href="{{route('admin.course-detail', ['id' => $course->id])}}" class="btn btn-outline-success">
                                <i class="fa fa-book"></i>
                            </a>
                            <a href="{{route('admin.course-status', ['id' => $course->id])}}" class="btn btn-outline-info">
                                <i class="fa fa-arrow-up"></i>
                            </a>
                            <a href="{{route('admin.course-offer-status', ['id' => $course->id])}}" class="btn btn-outline-primary">
                                <i class="fa fa-book-dead"></i>
                            </a>
                            <a href="{{route('admin.course-delete', ['id' => $course->id])}}" class="btn btn-outline-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
