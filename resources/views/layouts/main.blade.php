<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" /> 
        <link rel="shortcut icon" href="favicon.ico"/>    
      <title>Transelgonmillers</title>
      <style id="dynamic-css"></style>
      <style type="text/css">
      .preloader {position: fixed;left: 0;top: 0;width: 100%;height: 100%;background: #fff;text-align: center;z-index: 6001; }
      .preloader:after { content: ""; height: 100%; display: inline-block; vertical-align: middle; }
      .sk-cube-grid {width: 3.857rem;height: 3.857rem;margin: 0 auto;vertical-align: middle;display: inline-block; }
      .sk-cube-grid .sk-cube {width: 33%;height: 33%;background-color: #333;float: left;-webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; }
      .sk-cube-grid .sk-cube1 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      .sk-cube-grid .sk-cube2 {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s; }
      .sk-cube-grid .sk-cube3 {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s; }
      .sk-cube-grid .sk-cube4 {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s; }
      .sk-cube-grid .sk-cube5 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      .sk-cube-grid .sk-cube6 {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s; }
      .sk-cube-grid .sk-cube7 {
        -webkit-animation-delay: 0s;
        animation-delay: 0s; }
      .sk-cube-grid .sk-cube8 {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s; }
      .sk-cube-grid .sk-cube9 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      @-webkit-keyframes sk-cubeGridScaleDelay {
        0%, 70%, 100% {
          -webkit-transform: scale3D(1, 1, 1);
          transform: scale3D(1, 1, 1); }
        35% {
          -webkit-transform: scale3D(0, 0, 1);
          transform: scale3D(0, 0, 1); } }
      @keyframes sk-cubeGridScaleDelay {
        0%, 70%, 100% {
          -webkit-transform: scale3D(1, 1, 1);
          transform: scale3D(1, 1, 1); }
        35% {
          -webkit-transform: scale3D(0, 0, 1);
          transform: scale3D(0, 0, 1); } }
    </style>
  </head>
<body class="page-color-style-1 page-style-1">
   
    

                @include('layouts.includes.header')

                @yield('content')

                @include('layouts.includes.footer')
   
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">  
<link href="css/style.css" rel="stylesheet" type="text/css"/>  

<script>
  function subscribeForm() {
    $.ajax({
      type: 'POST', url: 'subscribeForm.php', data: $('#subscribe-form').serialize(), success: function (response) {
        $('.submit').html('send');
        $('#subscribe-form')[0].reset();
      }
    });
    return false;
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/all.js"></script>
<script src="js/jscolor.min.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>
<script src="js/jquery.classycountdown.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/color.picker.js"></script>

</body>
</html>	