
@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chỉnh Sửa Ca Sĩ</h1>
                </div>
            </div>
        

        <!-- ... Your content goes here ... -->

            <form action="{{asset('admin/artist/edit/'.$artist->id)}}" method="post" enctype="multipart/form-data" id="{{$artist->id}}" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Ca sĩ </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value= "{{$artist->name}}" name="name" required  >
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <br>
                    <div style="display: none" class="alert alert-danger" id="image_error" ></div>
                    <div style="display: none" class="alert alert-success" id="image_success" ></div>
                    <input id="image" class="form-control" type="file"  name="image" required value= "{{$artist->image}}" onchange="loadFile(event)">
                    <img width="200" class="img img-thumbnail" id="image_show" src="{{asset("storage/$artist->image")}}">

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Sửa">
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
                console.log(image);
                var flag = true ;
                if(style == 'png' || style =='jpg')
                {
                    $("#image_success").show();
                    $('#image_success').text('Sửa thành công ca sĩ');
                    alert("Sửa thành công ca sĩ");

                }
                else
                {
                    $("#image_error").show();
                    $("#image_error").text('Kiểm tra lại đuôi file  ');
                    alert("Sửa thất bại !");
                    flag = false;

                }
                return flag;
            });
        });

        function loadFile(event) {
            var output = document.getElementById('image_show');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
</script>
@endsection