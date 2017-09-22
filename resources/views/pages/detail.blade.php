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

@push('script')
<script type="text/javascript">
    var ajaxFavorite = function(){
     // alert('click');
      var data = {
         "user_id" : $('#user_idfavourite').val(),
         "file_id" : $('#file_idfavourite').val(),
         "_token"  : "{{ csrf_token() }}"
      };

      var icon = '<i class="glyph-icon flaticon-favorite"></i>';
     // console.log(data);

      $.ajax({
           url : "{{ asset('profiledisfavorite') }}",
           type : "POST",
           dataType: 'json',
           data: data,
       }).done(function(rs) {
            console.log('success');
            console.log(rs);
            $('.btn-like').html(icon + rs.text);
       }).fail(function() {
            console.log('error');
       });
   }

   $('.btn-like').click(function() {
      ajaxFavorite();
   });
</script>
@endpush