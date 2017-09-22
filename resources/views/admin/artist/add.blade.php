
@extends('admin.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm Ca Sĩ</h1>
                </div>
            </div>

        <!-- ... Your content goes here ... -->

            <form action="add" method="post" enctype="multipart/form-data" id="addartist" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Ca sĩ </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value="{!! old('name') !!} " name="name" required>
                </div>
                <div class="form-group">
                    <label>Giới thiệu </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value="{!! old('name') !!} " name="intro" required>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <br>
                    <div style="display: none" class="alert alert-danger" id="image_error" ></div>
                    <div style="display: none" class="alert alert-success" id="image_success" ></div>
                    <input id="image" class="form-control" type="file"  name="image" required>

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Thêm">
                    <input type="reset" class="btn btn-danger" value="Reset">

                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('.abc').submit(function()
            {
                var name = $.trim($('#name').val());
                var image = $.trim($('#image').val());
                var style = image.substr(image.length - 3,3)
                console.log(style);
                var flag = true ;   
                if(style == 'png' || style =='jpg')
                {
                    $("#image_success").show();
                    $('#image_success').text('Thêm thành công ca sĩ');
                    alert("Thêm thành công ca sĩ");

                }
                else 
                {
                    $("#image_error").show();
                    $("#image_error").text('Kiểm tra lại đuôi file  ');
                    alert("Thêm thất bại !");
                    flag = false;

                }
                return flag;
            });
        });
</script>
@endsection