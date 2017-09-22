<div class="row">
   <div class="col-md-9">
      <div class="content-left">
         <h2 class="main-title">
            videos
         </h2>
         <div class="video-section list-video">
            <div class="row">
            @foreach($listVideo as $value)
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
                     </div>
                  </div>
                  <div class="caption">
                     <h1 class="global-name">
                        <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Remember Me (SlimV 2017 Mix)">{{$value->name}}</a>
                     </h1>
                     <h2 class="global-author">
                        <span>by
                        <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" title="Sơn Tùng M-TP">{{$value->artist->name}}</a>
                        </span>
                     </h2>
                     <span class="total-views">
                     535 view
                     </span>
                  </div>
               </div>
               @endforeach
            </div>
             {{$listtracks->links()}}
         </div>
      </div>
      <!-- end .content-left -->
   </div>
               <div class="col-md-3">
                  <!-- end .content-left -->
                  <div class="sidebar">
                     <!-- end .list-app -->
                     <div class="block-sidebar">
                        <div class="header">
                           <a href="#" title="">
                           <img src="https://st.mix166.com/html/images/right-logo.png">
                           </a>
                           <div class="type">
                              <span>top mixsets</span>
                              <a href="/charts/" title="View all">View all</a>
                           </div>
                        </div>
                        <div class="widget-song-list">
                           <?php $i = 1 ?>
                           @foreach($topmixset as $value)
                           <div class="media">
                              <div class="media-left media-middle">
                                 <div class="rank-up">
                                    <span class="ratings">
                                    {{$i++}}
                                                               </span>
                                    <span><span class="arrow"></span></span>
                                 </div>
                              </div>
                              <div class="media-body">
                                 <div class="thumb">
                                    <div class="global-figure">
                                       <div class="global-image">
                                          <a href="/mixsets/dusted-2-2000281.html" title="DUSTED 2"><span style="background-image: url({{asset('storage/'.$value->artist->image)}}); width: 60px; height: 60px;"></span></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="media-right">
                                 <h2 class="global-name"><a href="/mixsets/dusted-2-2000281.html" title="DUSTED 2">{{$value->name}}</a></h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}">{{$value->artist->name}}</a>
                                 </h3>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <!-- end .block-sidebar -->
                     <div class="block-sidebar list-top-track">
                        <div class="header">
                           <a href="#" title="">
                           <img src="https://st.mix166.com/html/images/right-logo.png">
                           </a>
                           <div class="type">
                              <span>top tracks</span>
                              <a href="/charts/" title="View all">View all</a>
                           </div>
                        </div>
                        <div class="widget-song-list">
                        <?php $i = 1 ?>
                        @foreach($toptrack as $value)
                           <div class="media">
                              <div class="media-left"><span class="ratings">{{$i++}}</span></div>
                              <div class="media-body">
                                 <h2 class="global-name"><a href="/tracks/ngay-mai-em-di-2017-2005300.html" title="Ngày Mai Em Đi 2017"></a></h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}">{{$value->name}}</a>
                                    -                                             <a href="/dj/touliver-2000017.html">{{$value->artist->name}}</a>
                                 </h3>
                                 <h3 class="global-tag">
                                    <a href="{{asset($value->genre->id.'/'.$value->genre->name)}}">#{{$value->genre->name}}</a>
                                 </h3>
                              </div>
                           </div>
                        @endforeach
                        </div>
                     </div>
                     <!-- end .block-sidebar -->
                     <!-- end .event-sidebar -->
                  </div>
               </div>
</div>