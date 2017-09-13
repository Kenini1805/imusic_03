
@extends('admin.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm Genre </h1>
                </div>
            </div>
        

        <!-- ... Your content goes here ... -->

            <form action="{{asset('admin/genre/add')}}" method="post" enctype="multipart/form-data" id="addcategory" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Thể Loại </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value="{!! old('name') !!} " name="name" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Thêm">
                    <input type="reset" class="btn btn-danger" value="Reset">

                </div>

            </form>

        </div>
    </div>
    <script type="text/javascript">
        $('.abc').submit(function()
            {
                var name = $.trim($('#name').val());
                var flag = true ;
                if(name.length>4)
                {
                    alert('Thêm thành công '+ name);
                }
                else
                {
                    alert('Thêm thất bại '+ name);
                    flag = false;
                }
                return flag;

            });
    </script>

@endsection