
                              <?php
                                 $data = $filetrack->where('category_id',3);
                              ?>
                              @foreach($data as $value)
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
                                       <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Friends">{{$value->name}}</a>
                                       </h2>
                                       <h3 class="global-author">
                                          <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}" title="Justin Bieber">{{$value->artist->name}}</a>
                                       </h3>
                                       <h3 class="global-tag">
                                          <a href="{{asset($value->genre->id.'/'.$value->genre->name)}}" title="Pop/Rock">{{$value->genre->name}}</a>
                                       </h3>
                                    </div>
                                    <div class="media-right">
                                       <div class="action">
                                          <ul class="user-action list-inline">
                                          </ul>
                                          <ul class="details list-inline">
                                             <li><a href="#" title="" class="play"><i class="flaticon-arrows"></i>960                            </a></li>
                                             <li><a href="#" title="" class="like"><i class="flaticon-favorite"></i>960                            </a></li>
                                             <li><a href="#" title="" class="comment"><i class="flaticon-other"></i>960</a>
                                             </li>
                                             <li><a href="#" title="" class="share"><i class="flaticon-connection"></i>960                            </a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              @endforeach
