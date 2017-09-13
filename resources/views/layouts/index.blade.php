<html lang="en" class=" responsejs ">
   <head>
      <title>Mix166 - Listen to EDM &amp; Mixset</title>
      <base href="{{asset('')}}">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/icon.css" media="screen">
      <link rel="stylesheet" type="text/css" href="assets/font-awesome-animation/dist/font-awesome-animation.css">
      <link rel="stylesheet" type="text/css" href="css/slick-slide.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen">
      <link rel="stylesheet" href="css/plyr.css">
      <style type="text/css">
        .slick-slide {
            height: auto !important;
        }
      </style>
   </head>
   <body>
      <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '335111906949315',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

      @include('layouts.header')
      <!-- end #header -->
      @yield('content')
      <!-- end #page -->
      @include('layouts.footer')
      @include('loginhome.loginform')
      @include('loginhome.forgetpass')
      @include('loginhome.createaccount')

      <!-- end #footer -->
      <script type="text/javascript" src="js/lib.js"></script>
      <script type="text/javascript" src="assets/bootstrap-min-only/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/slick.slide.js"></script>
      <script type="text/javascript" src="js/start.js"></script>
      <script type="text/javascript" src="js/function.js"></script>
      <script type="text/javascript" src="js/cdn.afterglow.js"></script>
      <script src="js/plyr.js"></script>
      <script>plyr.setup();</script>

   </body>

</html>