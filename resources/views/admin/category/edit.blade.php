@extends('admin.master')

@section('title')
    edit category page
@endsection

@section('body')
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Category form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('update.category', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$category->name}}" name="name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Category Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control">{{$category->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Category Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file">
                            <img src="{{asset($category->image)}}" height="90" width="100" alt=""/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" {{$category->status == 1 ? 'checked' : ''}} type="radio" name="status" value="1" >Published
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" {{$category->status == 0 ? 'checked' : ''}}  type="radio" name="status" value="0">Unpublished
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input type="submit"  value="Update Category"  class="btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
