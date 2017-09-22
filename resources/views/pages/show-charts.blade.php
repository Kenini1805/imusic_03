<div class="chart-body">
   <div class="row">
      <div class="col-sm-4">
         <div class="chart-block">
            <h3 class="chart-block-title"><span>MIXSETS</span></h3>
            <div class="chart-block-list">
             <?php $i = 1 ?>
			@foreach($topmixset as $value)
               <div class="media">
                  <div class="media-left">
                     <div class="box ">
                        <div class="rank">
                           <span>{{$i++}}</span>
                        </div>
                        <div class="img">
                           <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2">
                           <img src="{{asset('storage/'.$value->artist->image)}}" class="bgi" style="background-image: url({{asset('storage/'.$value->artist->image)}});" alt="DUSTED 2"></a>
                        </div>
                     </div>
                  </div>
                  <div class="media-body">
                     <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2">{{$value->name}}</a></h2>
                     <h3 class="global-author">
                        <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" title="DJ DUSTEE">{{$value->artist->name}}</a>
                     </h3>
                     <h4 class="global-tag">
                        <a href="/mixsets/?genre=2000005" title="#Electro House">#{{$value->genre->name}}</a>
                     </h4>
                  </div>
               </div>
				@endforeach
            </div>
         </div>
      </div>
      <div class="col-sm-4">
         <div class="chart-block">
            <h3 class="chart-block-title"><span>TRACKS</span></h3>
            <div class="chart-block-list">
            <?php $i = 1 ?>
            @foreach($toptrack as $value)
            <div class="media">
               <div class="media-left">
                  <div class="box ">
                     <div class="rank">
                        <span>{{$i++}}</span>
                     </div>
                     <div class="img">
                        <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Ngày Mai Em Đi 2017">
                        <img src="{{asset('storage/'.$value->artist->image)}}" class="bgi" style="background-image: url({{asset('storage/'.$value->artist->image)}});" alt="Ngày Mai Em Đi 2017"></a>
                     </div>
                  </div>
               </div>
               <div class="media-body">
                  <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Ngày Mai Em Đi 2017">{{$value->name}}</a></h2>
                  <h3 class="global-author">
                     <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Soobin Hoàng Sơn">{{$value->artist->name}}</a>
                  </h3>
                  <h4 class="global-tag">
                     <a href="/tracks/?genre=2000004" title="#Dance">#{{$value->genre->name}}</a>
                  </h4>
               </div>
            </div>
            @endforeach
			</div>
		</div>
	</div>
<div class="col-sm-4">
   <div class="chart-block chart-block-video">
      <h3 class="chart-block-title"><span>VIDEOS</span></h3>
      <div class="chart-block-list">
        <div class="media-left">
        <?php $i = 1 ?>
        	@foreach($topvideo as $value)
         <div class="media">
            <div class="media-left">
               <div class="box ">
                  <div class="rank">
                     <span>{{$i++}}</span>
                  </div>
                  <div class="img">
                     <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Purple Lamborghini (Suicide Squad OST)">
                     <img src="{{asset('storage/'.$value->path_image_video)}}" class="bgi" style="background-image: url({{asset('storage/'.$value->path_image_video)}});" alt="Purple Lamborghini (Suicide Squad OST)"></a>
                  </div>
               </div>
            </div>
	            <div class="media-body">
	               <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Purple Lamborghini (Suicide Squad OST)">{{$value->name}}</a></h2>
	               <h3 class="global-author">
	                  <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Skrillex">{{$value->artist->name}}</a>
	               </h3>
	               <h4 class="global-tag">
	                  <a href="/genre/hip-hop-rap-2000002.html" title="#Hip-Hop/Rap">#{{$value->genre->name}}</a>
	               </h4>
	            </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
</div>
</div>