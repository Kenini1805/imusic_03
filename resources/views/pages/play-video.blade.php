<div class="play-music">
   <div class="play-music-bg"
      style="background-image: url(http://st.cdn.mix166.com/images/edm_mixs/2017/04/19/1492568470-summer-background-design1314-43.jpg);"></div>
   <div class="container">
                <div class="row">
               <div class="col-md-10 col-md-offset-1">
               <div class="player-box">
                  <div class="player-music">
                     <div class="play"
                        id="video">
                              <video poster="{{asset('storage/'.$filePlay->path_image_path)}}" controls>
                                <source src="{{asset('storage/'.$filePlay->path)}}" type="video/mp4">
                                <!-- Captions are optional -->
                                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default>
                              </video>
                        <br><br>
                        <div></div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
         <div class="row">
            <div class="col-md-2 hidden-sm">
               <div class="box-img" >
                  <img class="bgi img-circle"  src="{{asset('storage/'.$filePlay->artist->image)}}"
                     style="background-image: url();width: 200px;height: 200px "
                     alt="Summer Dreams - Best Of Vocal Deep House 2017 &amp; Tropical Music">
               </div>
            </div>
         <div class="col-md-10">
             <div class="player-info">
                     <div class="row">
                        <div class="col-lg-7 col-sm-6">
                           <h1 class="song-name">{{$filePlay->name}}
                           </h1>
                           <h2 class="song-singer">
                              <a href="{{asset($filePlay->artist->id.'/'.$filePlay->artist->slug_name.'.html')}}" title="V.A">{{$filePlay->artist->name}} </a>
                           </h2>
                           <div class="tags">
                              <ul class="list-inline">
                                 <li><a class="btn btn-tag btn-xs" href="{{asset($filePlay->genre->id.'/'.$filePlay->genre->name)}}"
                                    role="button">#{{$filePlay->genre->name}}</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                           <div class="pm-statistic">
                              <ul class="list-inline">
                                 <li>{{$filePlay->view_count}} <br><br>
                                    <small>PLAYS</small>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-md-9">
            <div class="content-left">
               <div class="row">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-9">
                           <div class="fb-comments" data-href="{{asset($filePlay->category->name.'/'.$filePlay->id.'/'.$filePlay->slug_name.'.html')}}" data-numposts="5" data-width="500"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="sidebar">
               <div class="play-music-list-related">
                  <h4 class="title">Related</h4>
                  <div class="auto-play">
                     <div class="checkbox checkbox-slider--b rtl">
                     </div>
                  </div>
                  @foreach($listconcern as $value) 
                  <div class="media">
                     <div class="media-left">
                        <a class="link-img" href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}"><img
                           src="{{asset('storage/'.$value->artist->image)}}"
                           style="background-image: url({{asset('storage/'.$value->path)}});"
                           alt=""></a>
                     </div>
                     <div class="media-body">
                        <h2 class="global-name">
                        <a href="{{asset('storage/'.$value->path)}}"></a>{{$value->name}}</h2>
                        <h3 class="global-author">
                                    <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}">{{$value->artist->name}}</a>
                        </h3>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>