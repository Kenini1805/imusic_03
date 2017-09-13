
@extends('admin.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm User </h1>
                </div>
            </div>
        

        <!-- ... Your content goes here ... -->

            <form action="{{asset('admin/user/add')}}" method="post" enctype="multipart/form-data" id="addcategory" class="abc">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Tên admin </label>
                    <input class="form-control" id="name" type="text" placeholder="Nhập tên" value="{!! old('name') !!} " name="name" required="required">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input class="form-control" id="email" type="email" placeholder="Nhập email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Mật khẩu </label>
                    <input class="form-control" id="password" type="password" placeholder="Nhập mật khẩu"  name="password" required>
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu </label>
                    <input class="form-control" id="password_again" type="password" placeholder="Nhập lại mật khẩu"  name="password_again" required>
                </div>
                <div class="form-group">
                    <label>Level </label>
                    <select name="level" autofocus>
                    <option value="1">Admin</option>
                    <option value="0">Member</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Trạng thái </label>
                    <select name="status"  autofocus>
                    <option value="0">Enabel</option>
                    <option value="1">Disable</option>
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
        $('.abc').submit(function()
            {
                var password = $.trim($('#password').val());
                var password_again = $.trim($('#password_again').val());
                var name = $.trim($('#name').val());
                var flag = true ;
                if(password == password_again)
                {
                    alert('Thêm thành công '+ name);
                }
                else
                {
                    alert('Mật khẩu nhập lại không trùng với mật khẩu vừa lập ');
                    flag = false;
                }
                return flag;

            });
    </script>

@endsection