@extends('admin.master')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách User</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <table class="table tab-content table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $us)
                <tr>
                    <td>{{$us->id}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->level}}</td>
                    <td>{{$us->created_at}}</td>
                    <td>{{$us->updated_at}}</td>
                    <td><a href="{{asset('admin/user/edit/'.$us->id)}}">
                        <input type="button" class="btn btn-success" value="Edit"></a></td>
                     <td><a  onclick=""  href="{{asset('admin/user/delete/'.$us->id)}}">
                        <input type="button"  class="btn btn-danger" value="Delete" onclick="event"></a></td>
                </tr>
                @endforeach
                </tbody>

            </table>
           

        </div>
    </div>
<script type="text/javascript">
        $('.table tr input[value="Delete"]').click(function() {
            var name = $(this).parent().parent().parent().find('td:nth-child(2)').text();
            alert('Xóa ca sĩ '+ name);
        });

</script>


@endsection
