@extends('layouts.index')

@section('content')
<div id="page" style="margin-top: 0px;">
   <div class="profile">
      <div class="profile-bg" style="background-image: url({{asset('storage/'.$infosinger->image)}});"></div>
      <div class="container">
         <div class="profile-header">
            <div class="row">
               <div class="col-sm-4 col-md-2">
                  <div class="box-img">
                     <img class="bgi" style="background-image: url({{asset('storage/'.$infosinger->image)}});width: 200px;height: 200px" alt="">
                  </div>
               </div>
               <div class="col-sm-8 col-md-10">
                  <div class="profile-box profile-artist">
                     <div class="row">
                        <div class="col-md-3">
                           <h1 class="profile-name">{{$infosinger->name}}</h1>
                        </div>
                        <div class="col-md-9">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="list-object">
                     <ul>
                        <li><a class="active" href="/dj/soobin-hoang-son-2000078.html" title="All">All</a></li>
                     </ul>
                  </div>
               </div>
            <div class="col-md-12">
               <div class="home-section">
                  <div class="header">
                     <h3 class="title"><a href="#">About</a></h3>
                  </div>
                  <span>{{$infosinger->introduce}}</span>
                  <div class="more more-song">
                  </div>
               </div>
            </div>
            </div>
               <div class="col-md-9">
                  <div class="content-left">
                     <!-- AlL-->
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/2/mixset.html')}}">mixset</a></h3>
                        </div>
                        <div class="list-song">
                        @foreach($filemix as $value)
                           <div class="media">
                              <div class="media-left">
                                 <div class="thumb">
                                    <div class="global-figure">
                                       <div class="global-image">
                                          <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">
                                          <span style="background-image: url({{asset('storage/'.$value->artist->image)}}); width: 80px; height: 80px;"></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="media-body">
                                 <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" >{{$value->name}}</a>
                                 </h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" >{{$value->artist->name}}</a>
                                 </h3>
                                 <h3 class="global-tag"> 
                                    <a href="#" title="Hardstyle">{{$value->genre->name}}</a>
                                 </h3>
                              </div>
                              <div class="media-right">
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/3/tracks.html')}}">tracks</a></h3>
                        </div>
                        <div class="list-song">
                        @foreach($filetrack as $value)
                           <div class="media">
                              <div class="media-left">
                                 <div class="thumb">
                                    <div class="global-figure">
                                       <div class="global-image">
                                          <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">
                                          <span style="background-image: url({{asset('storage/'.$value->artist->image)}}); width: 80px; height: 80px;"></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="media-body">
                                 <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" >{{$value->name}}</a>
                                 </h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" >{{$value->artist->name}}</a>
                                 </h3>
                                 <h3 class="global-tag">
                                    <a href="#" title="Hardstyle">{{$value->genre->name}}</a>
                                 </h3>
                              </div>
                              <div class="media-right">
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/1/video.html')}}">Videos</a></h3>
                        </div>
                        <div class="list-video">
                           <div class="row">
                           @foreach($filevideo as $value)
                              <div class="col-xs-6 col-sm-6 col-md-3">
                                 <div class="video">
                                    <div class="thumb">
                                       <div class="global-figure">
                                          <div class="global-image">
                                             <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">
                                             <span style="background-image: url({{asset('storage/'.$value->path_image_video)}})"></span>
                                             </a>
                                          </div>
                                       </div>
                                       <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="" class="global-action">
                                       <span class="video-play">
                                       <i class="flaticon-arrows"></i>
                                       </span>
                                       </a>
                                       <span class="video-time">
                                       03:46      </span>
                                    </div>
                                 </div>
                                 <div class="caption">
                                    <h1 class="global-name">
                                       <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">{{$value->name}}</a>
                                    </h1>
                                    <h2 class="global-author">
                                       <span>by
                                       <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" title="Soobin Hoàng Sơn">{{$value->artist->name}}</a>
                                    </h2>
                                    <span class="total-views">
                                    {{$value->view_count}}
                                    </span>
                                 </div>
                              </div>
                              @endforeach
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
</div>
@endsection