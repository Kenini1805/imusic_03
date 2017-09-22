@extends('layouts.index')

@section('content')
      <div id="page" style="margin-top: 0px;">
         <div class="container">
            <div class="full-page">
               <div class="content-full">
                  <div class="tab-content">
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
                          @foreach($data as $value)
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
                                          <a href="{{asset($value->artist->id.'/'.$value->artist->slug_name.'.html')}}">{{$value->artist->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                                 <td class="d1">
                                    <span class="tablesaw-cell-content">
                                       <p class="genre">
                                          <a href="{{asset($value->genre->id.'/'.$value->genre->name)}}" title="Electronica">{{$value->genre->name}}</a>
                                       </p>
                                    </span>
                                 </td>
                              </tr>
                           </tbody>
                            @endforeach
                        </table>
                        {{$data->links()}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection