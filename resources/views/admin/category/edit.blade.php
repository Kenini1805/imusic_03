
@extends('admin.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa Thể Loại </h1>
                </div>
            </div>
        

        <!-- ... Your content goes here ... -->

            <form action="{{asset('admin/category/edit/'.$category->id)}}" method="post" enctype="multipart/form-data" id="{{$category->id}}" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Thể Loại </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value="{{$category->name}}" name="name" required >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Sửa">
                    <input type="reset" class="btn btn-danger" value="Reset">

                </div>

            </form>

        </div>
    </div>

@endsection