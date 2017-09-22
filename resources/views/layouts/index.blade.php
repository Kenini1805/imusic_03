<html lang="en" class=" responsejs ">
   <head>
      <title>Mix166 - Listen to EDM &amp; Mixset</title>
      {!! Html::style('css/bootstrap.min.css') !!}
      {!! Html::style('css/icon.css') !!}
      {!! Html::style('assets/font-awesome-animation/dist/font-awesome-animation.css') !!}
      {!! Html::style('css/slick-slide.css') !!}
      {!! Html::style('css/stylesheet.css') !!}
      {!! Html::style('assets/plyr/dist/plyr.css') !!}
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <style type="text/css">
        .slick-slide {
            height: auto !important;
        }
      </style>
   </head>
   <body>
      {!! HTML::script('js/loginfb.js'); !!}
      {!! HTML::script('assets/jquery/dist/jquery.min.js'); !!}

      @include('layouts.header')
      <!-- end #header -->
      @yield('content')
      <!-- end #page -->
      @include('layouts.footer')
      @include('loginhome.loginform')
      @include('loginhome.forgetpass')
      @include('loginhome.createaccount')

      <!-- end #footer -->
      @stack('script')
      {!! HTML::script('js/lib.js'); !!}
      {!! HTML::script('assets/bootstrap-min-only/bootstrap.min.js'); !!}
      {!! HTML::script('js/slick.slide.js'); !!}
      {!! HTML::script('js/start.js'); !!}
      {!! HTML::script('js/function.js'); !!}
      {!! HTML::script('js/cdn.afterglow.js'); !!}
      {!! HTML::script('assets/plyr/dist/plyr.js'); !!}
      <script>plyr.setup();</script>

   </body>

</html>