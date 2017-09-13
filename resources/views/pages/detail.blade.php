@extends('layouts.index')

@section('content')
      <div id="page" style="margin-top: 0px;">
         <div class="container">
            <div class="full-page">
               <div class="content-full">
                  <div class="tab-content">
                  @if($filePlay->category->name == 'mixset' || $filePlay->category->name == 'tracks' )
                    @include('pages.play-audio',['filePlay' => $filePlay,'listconcern' => $listconcern])
                  @endif
                  @if($filePlay->category->name == 'video' )
                     @include('pages.play-video',['filePlay' => $filePlay,'listconcern' => $listconcern])
                  @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection