@extends('layouts.index')

@section('content')
      <div id="page" style="margin-top: 0px;">
         <div class="container">
            <div class="full-page">
               <div class="content-full">
                  <div class="tab-content">
                    @if($cate->name =='video')
                      @include('pages.show-video', ['listVideo' =>  $listtracks])
                    @elseif($cate->name=='charts')
                      @include('pages.show-charts',['topmixset'=>$topmixset,'toptrack'=>$toptrack,'topvideo'=>$topvideo])
                    @else
                      @include('pages.show-music', ['listtracks' =>  $listtracks])
                    @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection