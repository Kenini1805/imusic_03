@extends('layouts.index')
@section('content')
<div class="chart-body">
   <div class="row">
      <div class="col-md-offset-4 ">
         <div class="chart-block">
            <h3 class="chart-block-title"><span>Danh sách tìm kiếm</span></h3>   
            <div class="chart-block-list">
            @foreach($results as $value)
               <div class="media">
                  <div class="media-left">
                     <div class="box ">
                        <div class="img">
                           <a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2">
                           <img src="{{asset('storage/'.$value->artist->image)}}" class="bgi" style="background-image: url({{asset('storage/'.$value->artist->image)}});" alt="DUSTED 2"></a>
                        </div>
                     </div>
                  </div>
                  <div class="media-body">
                     <h2 class="global-name"><a href="{{asset($value->category->name.'/'.$value->id.'/'.$value->slug_name.'.html')}}" title="DUSTED 2">{{$value->name}}</a></h2>
                     <h3 class="global-author">
                        <a href="/dj/dj-dustee-2000022.html" title="DJ DUSTEE">{{$value->artist->name}}</a>
                     </h3>
                     <h4 class="global-tag">
                        <a href="{{asset($value->genre->id.'/'.$value->genre->name)}}" title="#Electro House">#{{$value->genre->name}}</a>
                     </h4>
                  </div>
               </div>
                @endforeach
            </div>
         </div>
      </div>
</div>
</div>
@endsection