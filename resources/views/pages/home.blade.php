@extends('layouts.index')
@section('content')
      <div id="page" style="margin-top: 100px;">
         <div class="container">
         <div id="slide-banner" style="position: relative;">
         <div>
            <a href="{{asset('tracks/'.'29/'.'remember-me'.'.html')}}" tabindex="-1">
            <img src="https://st-cdn.mix166.com/images/edm_home_featured/2017/08/23/1503474921-remember-me.jpg" alt="">
            </a>
         </div>
         <div>
            <a href="{{asset('mixset/'.'21/'.'ngay-mai-em-di'.'.html')}}" tabindex="-1">
            <img src="https://st-cdn.mix166.com/images/edm_home_featured/2017/08/02/1501656920-maxresdefault.jpg" alt="">
            </a>
         </div>
         <div>
            <a href="{{asset('tracks/'.'30/'.'vinh-quang-dang-cho-ta'.'.html')}}" tabindex="0">
            <img src="https://st-cdn.mix166.com/images/edm_home_featured/2017/08/03/1501751660-thumb-youtube-poster-ss-ngang-16-9-1.jpg" alt="">
            </a>
         </div>
         <div>
            <a href="{{asset('tracks/'.'31/'.'summersong'.'.html')}}" tabindex="-1">
            <img src="https://st-cdn.mix166.com/images/edm_home_featured/2017/04/19/1492595663-ready-for-the-summer.jpg" alt="">
            </a>
         </div>
         <div>
            <a href="{{asset('tracks/'.'32/'.'failing-into-you'.'.html')}}" tabindex="-1">
            <img src="https://st-cdn.mix166.com/images/edm_home_featured/2017/08/04/1501831935-untitled-1.jpg" alt="">
            </a>
         </div>   
         </div>
         <div class="main-content">
            <div class="row">
               <div class="col-md-9">
                  <div class="content-left">
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/2/mixset.html')}}">MiXsets</a></h3>
                        </div>
                        <div class="tab-content">
                           <div class="list-content">
                              @include('pages.listMix',['filemix' => $filemix])
                           </div>
                           <div class="more">
                              <a href="javascript:void(0)" id="getMoremix" data-currentPage="{{ $currentPage }}" data-amountItem="{{ $amountItem }}" title="">More</a>
                           </div>
                        </div>
                     </div>
                     <!-- end .home-section -->
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/3/tracks.html')}}">tracks</a></h3>
                        </div>
                        <div class="tab-content">
                           <div role="tabpanel" class="tab-pane active" id="track_fetured">
                              <div class="list-song">
                           @include('pages.listTrack',['filetrack' => $filetrack])
                              </div>
                              <div class="more more-song">
                                    <a href="javascript:void(0)" id="getMoretrack" data-currentPage="{{ $currentPage }}" data-amountItem="{{ $amountItem }}" title="">More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="home-section">
                        <div class="header">
                           <h3 class="title"><a href="{{asset('category/2/mixset.html')}}">VIDEOS</a></h3>
                        </div>
                        <div class="tab-content">
                           <div role="tabpanel" class="tab-pane active" id="video_fetured">
                           <div class="video-section list-video">
                              @include('pages.listVideo',['filevideo' => $filevideo])
                              </div>
                              <div class="more more-song" style="margin-top: -20px;">
                                 <a href="javascript:void(0)" id="getMorevideo" data-currentPage="{{ $currentPage }}" data-amountItem="{{ $amountItem }}" title="">More</a>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     <!-- end .home-section -->
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
                              <a href="category/4/charts.html" title="View all">View all</a>
                           </div>
                        </div>
                        <div class="widget-song-list">
                           <?php $i = 1 ?>
                           @foreach($topmixset as $value)
                           <div class="media">
                              <div class="media-left media-middle">
                                    <span class="ratings">
                                    {{$i++}}
                                                               </span>
                                    <span><span class="arrow"></span></span>
                              </div>
                              <div class="media-body">
                                 <div class="thumb">
                                    <div class="global-figure">
                                       <div class="global-image">
                                          <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2"><span style="background-image: url({{asset('storage/'.$value->artist->image)}}); width: 60px; height: 60px;"></span></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="media-right">
                                 <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2">{{$value->name}}</a></h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">{{$value->artist->name}}</a>
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
                              <a href="category/4/charts.html" title="View all">View all</a>
                           </div>
                        </div>
                        <div class="widget-song-list">
                        <?php $i = 1 ?>
                        @foreach($toptrack as $value)
                           <div class="media">
                              <div class="media-left"><span class="ratings">{{$i++}}</span></div>
                              <div class="media-body">
                                 <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Ngày Mai Em Đi 2017"></a></h2>
                                 <h3 class="global-author">
                                    <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">{{$value->name}}</a>
                                    -                                             <a href="/dj/touliver-2000017.html">{{$value->artist->name}}</a>
                                 </h3>
                                 <h3 class="global-tag">
                                    <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">#{{$value->genre->name}}</a>
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
               <!-- end .sidebar -->
            </div>
            <!-- end .container -->
         </div>
      </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
         $('#getMoremix').click(function(e) {
          //  e.preventDefault();
            var curPage = $(this).attr('data-currentpage');
            var amountItem = $(this).attr('data-amountitem');
            console.log(curPage);
            console.log(amountItem);
            getListMix($(this),curPage, amountItem);
          //  return false;
         });
            $('#getMoretrack').click(function(e) {
          //  e.preventDefault();
            var curPage = $(this).attr('data-currentpage');
            var amountItem = $(this).attr('data-amountitem');
            console.log(curPage);
            console.log(amountItem);
            getListTrack($(this),curPage, amountItem);
          //  return false;
         });

            $('#getMorevideo').click(function(e) {
          //  e.preventDefault();
            var curPage = $(this).attr('data-currentpage');
            var amountItem = $(this).attr('data-amountitem');
            console.log(curPage);
            console.log(amountItem);
            getListVideo($(this),curPage, amountItem);
          //  return false;
         });


         function getListMix(self, curPage, amount) {
          //  myData = { currentPage: curPage, amountItem: amount };
            myData = {};
            myData['current_page'] = parseInt(curPage) + 1;
            myData['amount_item'] = amount;

            myUrl = "{{ asset('getListMix') }}" + "?current_page=" + (parseInt(curPage) + 1) + "&amount_item="+ amount;
          //  console.log(myData);
            self.html('Loading....');
            $.ajax({
               type: 'GET',
               url: myUrl,
             //  data: myData,
            }).done(function(data, status , xhr) {
               $('.list-content').append(data.listMix);
               self.attr('data-currentPage', parseInt(data.currentPage) );
               self.attr('data-amountItem', parseInt(data.amountItem));
               self.html('MORE');
               console.log(data);
            });
         }

         function getListTrack(self, curPage, amount) {
          //  myData = { currentPage: curPage, amountItem: amount };
            myData = {};
            myData['current_page'] = parseInt(curPage) + 1;
            myData['amount_item'] = amount;

            myUrl = "{{ asset('getListTrack') }}" + "?current_page=" + (parseInt(curPage) + 1) + "&amount_item="+ amount;
          //  console.log(myData);
            self.html('Loading....');
            $.ajax({
               type: 'GET',
               url: myUrl,
             //  data: myData,
            }).done(function(data, status , xhr) {
               $('.list-song').append(data.listTrack);
               self.attr('data-currentPage', parseInt(data.currentPage) );
               self.attr('data-amountItem', parseInt(data.amountItem));
               self.html('MORE');
               console.log(data);
            });
         }

         function getListVideo(self, curPage, amount) {
          //  myData = { currentPage: curPage, amountItem: amount };
            myData = {};
            myData['current_page'] = parseInt(curPage) + 1;
            myData['amount_item'] = amount;

            myUrl = "{{ asset('getListVideo') }}" + "?current_page=" + (parseInt(curPage) + 1) + "&amount_item="+ amount;
          //  console.log(myData);
            self.html('Loading....');
            $.ajax({
               type: 'GET',
               url: myUrl,
             //  data: myData,
            }).done(function(data, status , xhr) {
               $('.video-section').append(data.listVideo);
               self.attr('data-currentPage', parseInt(data.currentPage) );
               self.attr('data-amountItem', parseInt(data.amountItem));
               self.html('MORE');
               console.log(data);
            });
         }

   });
</script>
@endsection