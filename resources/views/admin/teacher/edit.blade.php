@extends('admin.master')

@section('title')
    add teacher page
@endsection

@section('body')
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Teacher form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('update.teacher', ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$teacher->name}}" name="name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" value="{{$teacher->email}}" name="email" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{$teacher->mobile}}" name="mobile" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$teacher->address}}"  name="address" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file">
                            <img src="{{asset($teacher->image)}}" alt="" height="80" width="100">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" {{$teacher->status == 1 ? 'checked' : ''}} type="radio" name="status" value="1">Published
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" {{$teacher->status == 0 ? 'checked' : ''}} type="radio" name="status" value="0">Unpublished
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input type="submit"  value="Update  Teacher"  class="btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
