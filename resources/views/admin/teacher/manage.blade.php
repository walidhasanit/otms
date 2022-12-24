@extends('admin.master')

@section('title')
    add category page
@endsection

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Category All Information</h4>
            <p class="text-success text-center">{{Session::get('message')}}</p>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->mobile}}</td>
                        <td><img src="{{asset($teacher->image)}}" height="80" width="100" alt=""/></td>
                        <td>{{$teacher->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            <a href="{{route('edit.teacher', ['id' => $teacher->id])}}" class="btn btn-outline-success">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('delete.teacher', ['id' => $teacher->id])}}" class="btn btn-outline-danger" onclick="return confirm('are you sure to delete this..')">
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
