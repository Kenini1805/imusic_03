@extends('admin.master')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách Ca Sĩ</h1>
                </div>
            </div>
             <form id="search" class="navbar-form navbar-right hidden-sm" action="{{asset('admin/artist/admin/searchartist')}}" method="POST">
                                 {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-g">
                            <input id="search_input_text" type="text" class="form-control input-sm" name="keyword" value="" placeholder="Search">
                            <i class="flaticon-search"></i>
                        </div>
                        <!-- /input-group -->
                    </div>
                </form>

            <!-- ... Your content goes here ... -->
            <table class="table tab-content table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Introduce</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artist as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#intro">Xem chi tiết giới thiệu ca sĩ</button>
                    <span id="intro" class="collapse">{{$value->introduce}}</span>
                    </td>
                    <td><img width="200" class="img img-thumbnail" src="{{asset("storage/$value->image")}}"></td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td><a href="{{asset("admin/artist/edit/$value->id")}}">
                        <input type="button" class="btn btn-success" value="Edit"></a></td>
                     <td><a  onclick=""  href="{{asset('admin/artist/delete/'.$value->id)}}">
                        <input type="button"  class="btn btn-danger" value="Delete" onclick="event"></a></td>
                </tr>
                @endforeach
                </tbody>

            </table>

        </div>
                    <button class="btn btn-success"><a  href="{{asset('admin/artist/list')}}">List All</button>
    </div>
<script type="text/javascript">
        $('.table tr input[value="Delete"]').click(function() {
            var name = $(this).parent().parent().parent().find('td:nth-child(2)').text();
            alert('Xóa ca sĩ '+ name);
        });

</script>


@endsection
