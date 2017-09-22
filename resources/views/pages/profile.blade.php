@extends('layouts.index')
@section('content')
<div id="page" class="container" style="margin-top: 0px;">
   <div class="profile">
      <div class="main-content">
      <div class="row">
      <div class="col-md-12">
      <div class="play-music">
         <div class="play-music-bg"
            style="background-image: url(http://st.cdn.mix166.com/images/edm_mixs/2017/04/19/1492568470-summer-background-design1314-43.jpg);"></div>
         <div class="container">
            <div class="play-music-header" style="background-image: url(asset('storage/'.$filePlay->file->artist->image)">
               <div class="row">
                  <div class="col-md-2 hidden-sm">
                     <div class="box-img" >
                        <img class="bgi"  src="{{asset('storage/'.$filePlay->file->artist->image)}}"
                           style="background-image: url();width: 200px;height: 200px "
                           alt="Summer Dreams - Best Of Vocal Deep House 2017 &amp; Tropical Music">
                     </div>
                  </div>
                  <div class="col-md-10 col-sm-12">
                     <div class="player-box">
                        <div class="player-info">
                           <div class="row">
                              <div class="col-lg-7 col-sm-6">
                                 <h1 class="song-name">{{$filePlay->file->name}}
                                 </h1>
                                 <h2 class="song-singer">
                                    <a href="{{asset($filePlay->file->artist->id.'/'.$filePlay->file->artist->slug_name.'.html')}}" title="V.A">{{$filePlay->file->artist->name}} </a>
                                 </h2>
                                 <div class="tags">
                                    <ul class="list-inline">
                                       <li>
                                       <a class="btn btn-tag btn-xs" href="{{asset($filePlay->file->genre->id.'/'.$filePlay->file->genre->name)}}"
                                          role="button">#{{$filePlay->file->genre->name}}</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-5 col-sm-6">
                                 <div class="pm-statistic">
                                    <ul class="list-inline">
                                       <li>{{$filePlay->file->view_count}}
                                       </li>
                                        <br><br>
                                       <li><small>PLAYS</small></li>
                                    </ul>
                                 </div>
                                    <div class="buy-share">
                                       <br><br>
                                       @if(Auth::check())
                                       <input type="text" hidden="true" id="user_idfavourite" name="" value="{{Auth::user()->id}}">
                                        <input type="text" hidden="true" id="file_idfavourite" name="" value="{{$filePlay->id}}">
                                       @if ($userfavorite != 1)
                                       <a href="javascript:void(0)" class="btn btn-outline btn-like"><i class="glyph-icon flaticon-favorite"></i>
                                       favorited</a>
                                       @else
                                       <a href="javascript:void(0)" class="btn btn-outline btn-like"><i class="glyph-icon flaticon-favorite"></i>
                                       favorite</a>
                                       @endif

                                       @else
                                       <a href="#loginhome" class="btn btn-outline btn-like"  data-toggle="modal" data-target="#loginhome"><i class="glyph-icon flaticon-favorite"></i>
                                       favorite</a>
                                       @endif
                                    </div>
                              </div>
                           </div>
                        </div>
                        <div class="player-music">
                           <div class="play"
                              id="audio">
                              <audio id="audio-play" controls>
                                 <source src="{{asset('storage/'.$filePlay->file->path)}}" type="audio/mp3">
                              </audio>
                              <br><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
         <div class="col-md-12">
               <div class="list-object">
                  <ul>
                     <li><a class="active" href="#" title="All">Danh sách yêu thích</a></li>
                  </ul>
               </div>
         </div>
         <div class="col-md-12">
            <div class="content-left">
               <!-- AlL-->
               <div class="home-section">
                  <div class="list-song">
                     <div role="tabpanel" class="tab-pane  active " id="list_fetured">
                        <div class="tablesaw-bar mode-stack"></div>
                        <table class="table" data-tablesaw-mode="stack" id="table-8556">
                           <thead>
                              <tr>
                                 <th align="left" style="width: 30% " > NAME</th>
                                 <th style="width: 30%" >CA SĨ</th>
                                 <th class="d1" style="width: 15%" >THỂ LOẠI</th>
                              </tr>
                           </thead>
                           <tbody class="data-song list-track">
                           @php $index = 0; @endphp
                     @foreach($filemix as $value)
                              <tr>
                                 <td>
                                    <span class="tablesaw-cell-content">
                                       <div class="media">
                                          <div class="media-left">
                                             <div class="thumb">
                                                <div class="global-figure">
                                                   <div class="global-image">
                                                      <a href="{{asset($value->file->category->name.'/'.$value->file->id.'/'.$value->file->slug_name.'.html')}}"><span style="background-image: url({{asset('storage/'.$value->file->artist->image)}}); width: 45px; height: 45px;"></span></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="media-body">
                                             <h2 class="song-name">
                                             <a href="{{ asset($value->file->category->name.'/'.$value->file->id.'/'.$value->file->slug_name.'.html') }}" data-id="{{ $value->file->id }}" data-name="{{ $value->file->name }}" data-index="{{ $index++ }}" data-artist = "{{ $value->file->artist->name }}" data-link="{{ 'storage/'.$value->file->path }}" data-genre = "{{ $value->file->genre->name }}" data-view="{{ $value->file->view_count }}" data-image ="{{ asset('storage/'.$value->file->artist->image) }}" title="Treasure">{{ $value->file->name }}</a>
                                             </h2>
                                          </div>
                                       </div>
                                    </span>
                                 </td>
                                 <td>
                                    <span class="tablesaw-cell-content">
                                       <p class="artists">
                                          <a href="{{asset($value->file->artist->id.'/'.$value->file->artist->slug_name.'.html')}}">{{$value->file->artist->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                                 <td class="d1">
                                    <span class="tablesaw-cell-content">
                                       <p class="genre">
                                          <a href="{{asset($value->file->genre->id.'/'.$value->file->genre->name)}}" title="Electronica">{{$value->file->genre->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                              </tr>
                     @endforeach
                        </tbody>
                       </table>
                     </div>
                  </div>
               </div>
               <!-- End All-->
               <!-- Begin mix-->
               <!-- End mix-->
               <!-- Begin track-->
               <!-- End track-->
               <!-- Begin video-->
               <!-- End video-->
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
@endsection
@push('script')
<script type="text/javascript">
    var ajaxFavorite = function(){
     // alert('click');
      var data = {
         "user_id" : $('#user_idfavourite').val(),
         "file_id" : $('#file_idfavourite').val(),
         "_token"  : "{{ csrf_token() }}"
      };

      var icon = '<i class="glyph-icon flaticon-favorite"></i>';

      $.ajax({
           url : "{{ asset('profiledisfavorite') }}",
           type : "POST",
           dataType: 'json',
           data: data,
       }).done(function(rs) {
            console.log('success');
            console.log(rs);
            $('.btn-like').html(icon + rs.text);
       }).fail(function() {
            console.log('error');
       });
   }

   $('.btn-like').click(function() {
      ajaxFavorite();
   });
</script>
@endpush
@push('script')
   <script type="text/javascript" src="{{ asset('js/playlist.js') }}"></script>
@endpush