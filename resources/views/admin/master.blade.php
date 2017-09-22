
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Mix166</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('assets/bootstrap-min-only/bootstrap.min.css') !!}
    <!-- MetisMenu CSS -->
    {!! Html::style('assets/metisMenu/dist/metisMenu.css') !!}
    <!-- Timeline CSS -->
    {!! Html::style('assets/angular-timeline/dist/angular-timeline.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/sb-admin-2.css') !!}

    <!-- Morris Charts CSS -->
    {!! Html::style('css/morris.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('css/font.css') !!}



</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </ul>

        <!-- Sidebar -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-archive"></i> Category Manager<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{asset('admin/category/list')}}">Danh Sách Thể Loại</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/category/add')}}">Thêm Thể Loại</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-file"></i> File Manager<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{asset('admin/file/list')}}">Danh sách file</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/file/add')}}">Thêm file</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-archive"></i> Artists Manager<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{asset('admin/artist/list')}}">Danh sách ca sĩ</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/artist/add')}}">Thêm ca sĩ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-user"></i> User Manager<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{asset('admin/user/list')}}">Danh sách User</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/user/add')}}">Thêm User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-ge"></i> Genre Manager<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{asset('admin/genre/list')}}">Danh sách genre</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/genre/add')}}">Thêm genre</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</div>



<!-- jQuery -->
{!! HTML::script('assets/jquery/dist/jquery.min.js'); !!}
<!-- Bootstrap Core JavaScript -->
{!! HTML::script('assets/bootstrap/dist/js/bootstrap.min.js'); !!}
<!-- Metis Menu Plugin JavaScript -->
{!! HTML::script('assets/metisMenu/dist/metisMenu.min.js'); !!}
<!-- Custom Theme JavaScript -->
{!! HTML::script('js/sb-admin-2.js'); !!}
{!! HTML::script('js/ckeditor.js'); !!}

@yield('content')


</body>
</html>
