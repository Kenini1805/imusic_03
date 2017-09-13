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
                          @foreach($listtracks as $value)
                           <tbody class="data-song list-track">
                              <tr>
                                 <td>
                                    <span class="tablesaw-cell-content">
                                       <div class="media">
                                          <div class="media-left">
                                             <div class="thumb">
                                                <div class="global-figure">
                                                   <div class="global-image">
                                                      <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}"><span style="background-image: url({{asset('storage/'.$value->artist->image)}}); width: 45px; height: 45px;"></span></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="media-body">
                                             <h2 class="song-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="Treasure">{{$value->name}}</a>
                                             </h2>
                                          </div>
                                       </div>
                                    </span>
                                 </td>
                                 <td>
                                    <span class="tablesaw-cell-content">
                                       <p class="artists">
                                          <a href="/dj/rhymastic-2000067.html" title="Rhymastic">{{$value->artist->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                                 <td class="d1">
                                    <span class="tablesaw-cell-content">
                                       <p class="genre">
                                          <a href="?genre=2000017" title="Electronica">{{$value->genre->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                                 <td>
                                             <div class="fb-share-button" data-href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                                 </td>
                              </tr>
                           </tbody>
                            @endforeach
                        </table>
                        {{$listtracks->links()}}
                     </div>