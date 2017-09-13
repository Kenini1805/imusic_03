                              <div class="row">
                                 <?php
                                    $data = $filevideo->where('category_id',1);
                                ?>
                                @foreach($data as $value)
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
                                             03:23      </span>
                                          </div>
                                       </div>
                                       <div class="caption">
                                          <h1 class="global-name">
                                             <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}">{{$value->name}}</a>
                                          </h1>
                                          <h2 class="global-author">
                                             <span>by
                                             <a href="/dj/son-tung-m-tp-2000310.html" title="Sơn Tùng M-TP">{{$value->artist->name}}</a>
                                             </span>
                                          </h2>
                                          <span class="total-views">
                                          {{$value->view_count}}
                                          </span>
                                       </div>
                                    </div>
                                 @endforeach
                                 </div>