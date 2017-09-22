@extends('admin.master')

@section('content') 
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách File</h1>
                </div>
            </div>
             <form id="search" class="navbar-form navbar-right hidden-sm" action="{{asset('admin/file/admin/search')}}" method="POST">
                                 {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-g">
                            <input id="search_input_text" type="text" class="form-control input-sm" name="keyword" value="" placeholder="Search">
                            <i class="flaticon-search"></i>
                        </div>
                        <!-- /input-group -->
                    </div>
                </form>
            <table class="table tab-content table-bordered">
                <thead>

                <tr>
                    <th>Id</th>
                    <th>Tên bài hát </th>
                    <th>File</th>
                    <th>File Ảnh Video</th>
                    <th>Category</th>
                    <th>Genre</th>
                    <th>Ca sĩ</th>
                    <th>Người up</th>
                    <th>Trạng thái</th>
                    <th>Lượt xem</th>
                    <th>Lượt xem theo tuần</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($file as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    @php $type = substr($value->path, strlen($value->path) - 3, 3); @endphp
                    <td>
                    @if($type == 'mp3') 
                        <audio controls>
                        <source src="{{asset('storage/'.$value->path)}}" autoplay="autoplay" preload ="auto" type="audio/mpeg">
                        </audio>
                     @elseif($type == 'mp4')
                     <video width="300" controls>
                      <source src="{{asset('storage/'.$value->path)}}" type="video/mp4">
                    </video>
                    @endif
                    @if($value['path_image_video']!=null)
                        <td><img width="200" src="{{asset('storage/'.$value->path_image_video)}}" width="300" ></td>
                        @else
                        <td>Null</td>

                    @endif
                    </td>
                    <td>{{$value->category->name}}</td>
                    <td>{{$value->genre->name}}</td>
                    <td>{{$value->artist->name}}</td>
                    <td>{{$value->user->name}}</td>
                    <td>{{$value->status}}</td> 
                    <td>{{$value->view_count}}</td>
                    <td>{{$value->viewcountweek}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td><a  class="btn btn-success" href="{{asset('admin/file/edit/'.$value->id)}}">Edit</td>
                     <td><a  onclick=""  href="{{asset('admin/file/delete/'.$value->id)}}">
                        <input type="button"  class="btn btn-danger" value="Delete"></a></td>
                </tr>
                @endforeach
                </tbody>

            </table>
           

        </div>
                        {{ $file->links() }}
    </div>
<script type="text/javascript">
        $('.table tr input[value="Delete"]').click(function() {
            var name = $(this).parent().parent().parent().find('td:nth-child(2)').text();
            alert('Xóa file '+ name);
        });

</script>

@endsection
