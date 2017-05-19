<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?ver=<?php echo date("Y-m-dH:i:s"); ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="icon" href="assets/browser-icon.png">
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>

        <script type="text/javascript">
        function navRes() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
              x.className += " responsive";
          } else {
              x.className = "topnav";
          }
        }
        </script>

        <title>Anindya</title>

    </head>
    <body>

      <!-- navbar -->
      <ul class="topnav" id="myTopnav">
        <li><a class="smoothScroll" href="#home">Home</a></li>
        <li><a class="smoothScroll" href="#profile">Profile</a></li>
        <li><a class="smoothScroll" href="#story">Story</a></li>
        <li class=""><img src="assets/logo_anindya.png" alt="Logo"></li>
        <li><a class="smoothScroll" href="#maps">Maps</a></li>
        <li><a class="smoothScroll" href="#gallery">Gallery</a></li>
        <li><a class="smoothScroll" href="#product">Product</a></li>
        <li class="icon">
          <a href="javascript:void(0);" style="font-size:15px;" onclick="navRes()">☰</a>
        </li>
      </ul>

      <!-- carousel -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- @foreach ($covers as $cover) -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img class="first-slide" src="assets/background1-edit.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">

              <h1 class="name-anindya animated zoomInLeft">Anindya</h1>
              <p>Aliquam ac metus lorem. In in condimentum odio.<br>Nullam non lectus ipsum.</p>

              <!-- <h1 class="name-anindya animated zoomInLeft">{{ $cover->cover_judul }}</h1>
              <p>{{ $cover->cover_text }}<br>Nullam non lectus ipsum.</p> -->

            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/background1-edit.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="name-anindya">Kusuma</h1>
              <p>Aliquam ac metus lorem. In in condimentum odio.<br>Nullam non lectus ipsum.</p>

            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="assets/background1-edit.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="name-anindya">Putri</h1>
              <p>Aliquam ac metus lorem. In in condimentum odio.<br>Nullam non lectus ipsum.</p>

            </div>
          </div>
        </div>
      </div>
      <!-- @endforeach -->
    </div>

    <div class="row background-tablet">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="img-responsive">
          <img src="assets/background1-760.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- profile -->
    <div class="container-fluid page2">
      <div id="profile" class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5">
          <h1 class="profil-anindya">Anindya Kusuma Putri</h1>
          {!! $profile->profile_teks !!}
          <!-- <p>Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit.
          Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p> -->
          <hr style="border:1px solid #d2ad81;">
          <h3 style="font-family:ArnoPro;color:#d2ad81">Puteri Indonesia, 2015</h3>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    <!-- story -->
    <div class="container-fluid page3">
      <!-- <div id="story" class="row">
        <div class="col-md-5"></div>
        <div class="col-md-1">
          <img class="thousandpx-none" style="margin-top:100px;height:100px;width:100px;" src="assets/symbol_black.png" alt="Symbol">
        </div>
        <div class="col-md-4 col-xs-12">
          <h1 style="font-family:ArnoPro;color:#1e2832;margin-top:100px;">Volutpat eu rutrum sit</h1>
          <p>Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus. Duis nisi nunc,
          efficitur non concectour mollis, consecteur sed velut. Vivamus turpis set amet.</p>
        </div>
        <div class="col-md-2"></div>
      </div> -->

      @foreach ($stories as $story)
        <div id="story" class='row'>
          <div class="col-md-5"></div>
          <div class="col-md-1">
            <img class="thousandpx-none" style="margin-top:30px;height:100px;width:100px;" src="assets/symbol_black.png" alt="Symbol">
          </div>
          <div class="col-md-4 col-xs-12">
            <h1 style="margin-top:30px;font-family:ArnoPro;color:#1e2832;">{{ $story->story_title }}</h1>
            <p>{{ $story->story_text }}</p>
          </div>
          <div class="col-md-2"></div>
        </div>
      @endforeach

      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5">
          <hr style="margin-top:80px;border:1px solid #1e2832">
          <p style="text-align:right;color:#1e2832;">Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus. Duis nisi nunc,
          efficitur non concectour mollis.</p>
        </div>
        <div class="col-md-2"></div>
      </div>
      <img class="model-floating thousandpx-none" src="assets/model1.png" alt="Model">
    </div>

    <!-- maps -->
    <div class="container-fluid page4">
      <div id="maps" class="row">
        <!-- <div class="col-md-1"></div> -->
        <div style="margin-top:50px;" class="col-md-9 col-xs-12">
          <div id="map" style="width:100%;height:500px;"></div>
          <script type="text/javascript">
            function myMap(){
              //set the city Latitude and Longitude to variaable and set the marker
              <?php foreach($maps as $map) : ?>
                <?php $kota = $map->map_kota; ?>
                var <?php echo $kota; ?> = new google.maps.LatLng(<?php echo $map->map_latitude; ?>,<?php echo $map->map_longitude; ?>);
                var marker<?php echo $kota; ?> = new google.maps.Marker({position:<?php echo $kota; ?>});
              <?php endforeach; ?>

              var mapCanvas = document.getElementById("map");
              var mapOptions = {center: Jakarta, zoom: 3, mapTypeId: google.maps.MapTypeId.SATELLITE};
              var map = new google.maps.Map(mapCanvas, mapOptions);

              //set the marker and infowindow each marker
              <?php foreach($maps as $map) : ?>
              <?php $kota = $map->map_kota; ?>
                marker<?php echo $kota; ?>.setMap(map);
                google.maps.event.addListener(marker<?php echo $kota; ?>,'click',function(){
                    var infowindow = new google.maps.InfoWindow({
                    content:"<h2 id='event-title'><?php echo $map->map_judul; ?></h2>" +
                              "<div id='isi'>" +
                              "<img src='{{ url('uploads/'.$map->map_lokasi) }}' style='height:150px;width:110px;' >" +
                              "<h6> <?php echo $map->map_deskripsi; ?>" +
                              "</h6>" +
                              "</div>",
                    maxWidth: 250
                    });
                    infowindow.open(map,marker<?php echo $kota; ?>);
                  });
              <?php endforeach; ?>
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg7mSVc8PXLNtvlJPH9TBD21KHqkprnI8&callback=myMap"></script>
        </div>
        <!-- <div class="col-md-1"></div> -->
        <!-- <div class="col-md-1"></div> -->
        <div style="margin-top:150px;" class="col-md-3 col-xs-12">
          <img class="thousandpx-none" style="margin-left:100px;" src="assets/symbol_peach.png" alt="Symbol"><br>
          <h1 class="thousandpx-none" style="text-align:center;font-family:ArnoPro;color:#d2ac7f;">- Event Map -</h1>
          <p class="thousandpx-none" style="text-align:center;color:#d2ac7f;">Phasellus mollis odio maximus urna venenatis,
          et aliqete eros luctus duis nisi nunc liquet
          eros luctus duis nisi nunc</p>
        </div>
      </div>
    </div>

    <div class="container-fluid page5">
      <div id="gallery" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <hr class="thousandpx-none" style="border: 1px solid #d2ab82;width:500px;margin-top:70px;">
        </div>
        <div class="col-md-1">
          <img class="thousandpx-none" style="height:60px;width:60px;margin-left:60px;margin-top:40px;" src="assets/symbol_peach.png" alt="Symbol">
        </div>
        <div class="col-md-5">
          <hr class="thousandpx-none" style="border: 1px solid #d2ab82;width:500px;margin-top:70px;">
        </div>
        <div class="col-md-1"></div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <p class="thousandpx-none" style="text-align:center;margin-top:30px;color:#181617;">Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus duis nisi nunc liquet
          eros luctus duis nisi nunc</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 style="text-align:center;font-family:ArnoPro;font-size:50px;color:#d2ac7d;">- Gallery -</h1>
        </div>
      </div>

      <div style="" class="row">
        <!-- <div class="col-md-1"></div> -->
        <div class="row">
          @foreach ($galleries as $gallery)
          <div style="margin-top:20px;" class="col-xs-12 col-sm-4 col-md-3 ">

            <!-- <div style="margin-top:20px;" class="col-xs-12 col-sm-4 col-md-3 col-md-offset-2"> -->
              <div class="hovereffect">
                <img class="pic-effect img-responsive" src="{{ url('uploads/'.$gallery->gallery_lokasi) }}" alt="Gallery1">
                <div class="overlay">
                  <h2>{{ $gallery->gallery_judul }}</h2>
                  <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-instagram"></span>
                    </a>
                  </p>
                </div>
              </div>
            <!-- </div> -->
          </div>
          @endforeach
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 col-xs-12">
            <p style="text-align:center;margin-top:100px;color:#181617;">Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus duis nisi nunc liquet
            eros luctus duis nisi nunc</p>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>


    <div class="container page6">
      <div id="product" class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
            <h1 style="margin-top:50px;text-align:center;font-family:ArnoPro;font-size:60px;color:#d2ac7d;">- Best Product -</h1>
          </div>
      </div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <p style="text-align:center;color:#181617;">Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus duis nisi nunc liquet
          eros luctus duis nisi nunc</p>
        </div>
        <div class="col-md-4"></div>
      </div>

      <div style="margin-top:40px;" class="row">
        <!-- <div class="col-md-1"></div> -->
        @foreach ($products as $produk)
        <div style="margin-top:40px;" class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <img class="img-responsive" style="" src="{{ url('uploads/'.$produk->produk_lokasi) }}" alt="Sample">
        </div>
        <div style="padding-top:50px;background-color:#141e28;height:450px;padding-left:50px;padding-right:50px;" class="col-xs-12 col-sm-12 col-md-5">
          <h1 style="font-family:ArnoPro;color:#d3ac83;font-size:50px;">{{ $produk->produk_nama }}</h1>
          <p style="color:#c8c8ca;">{{ $produk->produk_deskripsi }}</p>
          <h1 style="font-family:ArnoPro;color:#d3ac83;font-size:30px;">{{ $produk->produk_harga }}</h1>
          <a class="button" href="#"><img class="button" src="assets/beli-produk.png" alt="Beli-Produk"></a>
        </div>
        @endforeach
        <!-- <div class="col-md-1"></div> -->
      </div>
    </div>

    <div style="margin-top:40px;" class="container-fluid foot-ntf">
      <div style="padding-top:30px;" class="row">
        <!-- <div class="col-md-1"></div> -->
        <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
          <!-- <img style="margin-left:100px;" src="assets/symbol_peach.png" alt="Symbol"> -->
          <h1 style="font-family:ArnoPro;color:#d1ac82;text-align:center;padding-top:60px;">Copyright</h1>
          <p style="color:#d1ac82;text-align:center;">&#169;2017 All right reserved.</p>
        </div>
        <!-- <div class="col-md-1"></div> -->
        <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
          <h1 style="font-family:ArnoPro;color:#d1ac82;text-align:left;">Puteri Indonesia 2015</h1>
          <p style="text-align:left;color:#d1ac82;margin-top:30px;">Phasellus mollis odio maximus urna venenatis,
          eros luctus duis nisi nunc</p>
          <p style="text-align:left;color:#d1ac82;margin-top:30px;">Phasellus mollis odio maximus urna venenatis,
          et aliquete eros luctus duis nisi nunc liquet mollis odio odio maximus urna
          liquet mollis odio maximus urna odio maximus eros</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
          <p style="text-align:left;color:#d1ac82;font-family:ArnoPro;font-size:35px;padding-top:10px;">Contact</p>
          <a href="#"><img style="margin-top:20px;margin-right:10px;" src="assets/tumblr.png" alt="Tumblr"></a>
          <a href="#"><img style="margin-right:10px;margin-top:20px;" src="assets/facebook.png" alt="Facebook"></a>
          <a href="#"><img style="margin-top:20px;" src="assets/twitter.png" alt="Twitter"></a>
          <a href="#"><img style="margin-top:30px;" src="assets/back-to-top.png" alt="Back-to-top"></a>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <script type="text/javascript">
        $(function(){
          var animationTada = 'animated tada';
          var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
          $('img.button').hover(function(){
              $(this).addClass(animationTada).one(animationEnd,function(){
                $(this).removeClass(animationTada);
              });
          });
        });
      </script>

      <script type="text/javascript">
          if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
          window.onmousewheel = document.onmousewheel = wheel;

          function wheel(event) {
            var delta = 0;
            if (event.wheelDelta) delta = event.wheelDelta / 50;
            else if (event.detail) delta = -event.detail / 3;

            handle(delta);
            if (event.preventDefault) event.preventDefault();
            event.returnValue = false;
          }

          var goUp = true;
          var end = null;
          var interval = null;

          function handle(delta) {
          var animationInterval = 8; //lower is faster
          var scrollSpeed = 50; //lower is faster

          if (end == null) {
            end = $(window).scrollTop();
          }
          end -= 20 * delta;
          goUp = delta > 0;

          if (interval == null) {
            interval = setInterval(function () {
              var scrollTop = $(window).scrollTop();
              var step = Math.round((end - scrollTop) / scrollSpeed);
              if (scrollTop <= 0 ||
                  scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
                  goUp && step > -1 ||
                  !goUp && step < 1 ) {
                clearInterval(interval);
                interval = null;
                end = null;
              }
              $(window).scrollTop(scrollTop + step );
            }, animationInterval);
          }
          }

      </script>

    </body>
</html>
