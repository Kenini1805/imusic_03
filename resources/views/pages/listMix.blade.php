<div role="tabpanel" class="tab-pane active" id="misset_fetured">
      <div class="wrap">
         <div class="wrap-pl">
         <?php
			$data = $filemix->where('category_id',2);
        ?>
		@foreach($data as $value)
            <div class="col-pl">
               <div class="playlist">
                  <div class="thumb">
                     <div class="global-figure">
                        <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Summer Vibe 2017" class="global-image">
                        <span style="background-image: url({{asset('storage/'.$value->artist->image)}})"></span>
                        </a>
                     </div>
                  </div>
                  <div class="caption">
                     <h2 class="global-name">
                        <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Summer Vibe 2017">{{$value->name}}</a>
                     </h2>
                     <h3 class="global-author">
                        <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" title="V.A">{{$value->artist->name}} </a>
                     </h3>
                  </div>
               </div>
            </div>
			@endforeach
         </div>
      </div>
   </div>