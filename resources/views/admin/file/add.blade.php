
@extends('admin.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm File </h1>
                </div>
            </div>
        

        <!-- ... Your content goes here ... -->

            <form action="{{asset('admin/file/add')}}" method="post" enctype="multipart/form-data" id="addcategory" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Tên file </label>
                    <input class="form-control" id="name" type="text" placeholder="Input name" value=" " name="name" required>
                    <label>File</label>
                    <input class="form-control" id="file" type="file" placeholder="Input name"  name="file_add" required>
                    <label id="name_file_image_video" >Ảnh video</label>
                   <input class="form-control" id="file_image_video" type="file" placeholder="Input name"  name="file_image_video">
                </div>
                <div class="form-group">
                    <label>Choose category</label>
                    <select name="cate" id="cate"  class="form-control">
                        <option value="2">MIXSET</option>
                        <?php
                        foreach ($category as $cate) {
                            echo "<option value='" . $cate['id'] . "'>" . $cate['name'] . "</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                    <label>Choose Genre</label>
                    <select name="gen" id="gen"  class="form-control">
                        <option value="2">Vpop</option>
                        <?php
                        foreach ($genre as $gen) {
                            echo "<option value='" . $gen['id'] . "'>" . $gen['name'] . "</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                    <label>Choose Artist</label>
                    <select name="art" id="art"  class="form-control">
                        <option value="2">Hà Anh Tuấn</option>
                        <?php
                        foreach ($artist as $art) {
                            echo "<option value='" . $art['id'] . "'>" . $art['name'] . "</option>";
                        }
                        ?>
                    </select>
                    <label>Lượt xem </label>
                    <input class="form-control" id="view_count" type="text" placeholder="Input name" value="{!! old('name') !!} " name="view_count" required>
                    <label>Người up</label>
                    <input class="form-control" id="user" type="text" placeholder="Input name" value="{{ Auth::user()->id}} " readonly="true" name="user" required>
                </div>
               <div class="form-group">
                    <label>Trạng thái </label>
                    <select name="status"  autofocus>
                    <option value="1">Enabel</option>
                    <option value="0">Disable</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Thêm">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>

            </form>

        </div>
    </div>
    <script type="text/javascript">
            $('#file_image_video').hide();
            $('#name_file_image_video').hide();
            $('#file').change(function() {
                var file = $.trim($('#file').val());
                var style = file.substr(file.length - 3,3);
                if(style == 'mp4')
                {  
                    $('#file_image_video').show();
                    $('#name_file_image_video').show();
                }
                else {
                    $('#file_image_video').hide();
                    $('#name_file_image_video').hide();
                }
            });
            $('.abc').submit(function()
            {
                var name = $.trim($('#name').val());
                var file = $.trim($('#file').val());
                var style = file.substr(file.length - 3,3);
                console.log(style);
                var flag = true ;   
                if(style == 'mp3' || style == 'mp4')
                {
                    alert("Thêm thành công file");
                }
                else
                {
                    $("#file").text('Kiểm tra lại đuôi file  ');
                    alert("Thêm thất bại !");
                    flag = false;

                }
                return flag;
            });

</script>

@endsection