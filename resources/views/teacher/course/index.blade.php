@extends('teacher.master')

@section('title')
    add category page
@endsection

@section('body')
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Course form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('new.course')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option value="">--Select Category Name--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Course Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Course Objective</label>
                        <div class="col-sm-9">
                            <input type="text" name="objective" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Course Fee</label>
                        <div class="col-sm-9">
                            <input type="number" name="fee" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Starting Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="starting_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Course Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Course Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input type="submit"  value="Create New Course"  class="btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
