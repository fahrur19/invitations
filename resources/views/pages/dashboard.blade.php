<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="{{ asset ('/assets/img/aa.png') }}">
      <meta name="description" content="Free Bootstrap Theme by uicookies.com">
      <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
      <link href="https://fonts.googleapis.com/css?family=Alice|Zilla+Slab:400,700" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('/assets/css/styles-merged.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/css/style.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/font-awesome/css/font-awesome.min.css') }}">
      <style> 
         body{ 
         text-align: center; 
         font-family: sans-serif; 
         font-weight: 100; 
         } 
         h1{ 
         font-weight: 100; 
         font-size: 40px; 
         margin: 40px 0px 20px; 
         } 
         #clockdiv{ 
         font-family: sans-serif; 
         color: #fff; 
         display: inline-block; 
         font-weight: 100; 
         text-align: center; 
         font-size: 20px; 
         } 
         #clockdiv > div{ 
         padding: 7px; 
         border-radius: 3px; 
         background: #00000059; 
         display: inline-block; 
         } 
         #clockdiv div > span{ 
         padding: 10px; 
         border-radius: 3px; 
         background: #00000059;
         display: inline-block; 
         } 
         #smalltext{ 
         padding-top: 5px; 
         font-size: 16px; 
         } 
         div.ex3 {
        background-color: lightblue;
        width: 110px;
        height: 110px;
        overflow: auto;
      }
      </style>
   </head>
   <body>
      <!-- Fixed navbar -->
      <!-- navbar-fixed-top -->
      <nav class="navbar navbar-default probootstrap-navbar">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/dashboard">Fahrur <em>&amp;</em>  Wanti</a>
            </div>
            <div id="navbar-collapse" class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="home" data-nav-section="home">Home</a></li>
                  <li><a href="groom&bride" data-nav-section="groom-bride">Groom &amp; Bride</a></li>
                  <li><a href="/when&where" data-nav-section="when-where">When &amp; Where</a></li>
                  <li><a href="/gallery" data-nav-section="gallery">Gallery</a></li>
                  <li><a href="/register" data-nav-section="rsvp">Register</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="flexslider" data-section="home">
         <div class="container text-intro-wrap">
            <div class="row">
               <div class="col-md-12 text-center text-intro probootstrap-animate">
                  <div class="col-md-12 text-center probootstrap-animate">
                     <h2>Begins In</h2>
                  </div>
                  <div id="clockdiv">
                     <div>
                        <span class="days" id="day"></span> 
                        <div class="smalltext">Days</div>
                     </div>
                     <div>
                        <span class="hours" id="hour"></span> 
                        <div class="smalltext">Hours</div>
                     </div>
                     <div>
                        <span class="minutes" id="minute"></span> 
                        <div class="smalltext">Minutes</div>
                     </div>
                     <div>
                        <span class="seconds" id="second"></span> 
                        <div class="smalltext">Seconds</div>
                     </div>
                  </div>
                  <p id="demo"></p>
                  <!-- <h2>Fahrur <em>&amp;</em> Wanti</h2> -->
                  <!-- <h2> on --, -- &mdash; DKI Jakarta</h2> -->
                  <div class="col-md-12 text-center probootstrap-animate">
                     <h2 class="mt0">- Save Wedding Date -</h2>
                  </div>
               </div>
            </div>
         </div>
         <ul class="slides">
            <!-- <li style="background-image: url(assets/img/test.JPG)" data></li>
               <li style="background-image: url(assets/img/test1.JPG)"></li> -->
            <li style="background-image: url(assets/img/hero_bg_3.jpg)"></li>
            <li style="background-image: url(assets/img/hero_bg_1.jpg)"></li>
         </ul>
      </section>
      <section class="probootstrap-section probootstrap-section-colored probootstrap-wedding-countdown">
         <audio class="audio" autoplay="autoplay" controls >
            <source src="{{ asset('/assets/aa.mp3') }}" type="audio/mpeg"/>
         </audio>
         <div class="container">
            <div class="row">
               <!-- <div class="col-md-12 text-center probootstrap-animate"><h1>The Wedding Begins In</h1></div> -->
               <div class="col-md-12 probootstrap-animate">
                  <!-- <div class="date-countdown"></div>   -->
               </div>
            </div>
         </div>
      </section>
      <section class="probootstrap-section probootstrap-bg" data-section="groom-bride">
         <div class="container">
            <div class="row">
               <div class="col-md-12 probootstrap-groom-bride">
                  <div class="probootstrap-groom probootstrap-animate">
                     <figure>
                        <img src="{{ asset('/assets/img/test1.JPG') }}" class="img-responsive">
                     </figure>
                     <span class="probootstrap-caption">The Bride</span>
                     <h2 class="text-center">Tri Nurwanti</h2>
                     <h4 class="probootstrap-caption"> Putri Dari :</h4>
                     <h5 class="probootstrap-caption" >Bapak eyang akung & Ibu Eyang uti</h5>
                  </div>
                  <div class="probootstrap-divider probootstrap-animate"><span>&amp;</span></div>
                  <div class="probootstrap-bride probootstrap-animate">
                     <figure>
                        <img src="{{ asset('/assets/img/test.JPG') }}" class="img-responsive">
                     </figure>
                     <span class="probootstrap-caption">The Groom</span>
                     <h2 class="text-center">Fakhrur Rozi</h2>
                     <h4 class="probootstrap-caption"> Putra Dari :</h4>
                     <h5 class="probootstrap-caption" >Bapak & Ibu </h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="probootstrap-section probootstrap-section-colored" data-section="when-where">
         <div class="container">
            <div class="row mb40 text-center">
               <div class="col-md-12 probootstrap-animate">
                  <h2 class="mt0">When &amp; Where</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 probootstrap-animate">
                  <p><img src="{{ asset('/assets/img/akad.jpg') }}" class="img-responsive img-rounded"></p>
                  <h3>Wedding Ceremony</h3>
                  <p><i class="fa fa-calendar"> Minggu, -- -- 0000 </i></p>
                  <p><i class="fa fa-clock-o"> 07:00 WIB - Selesai </i></p>
                  <p><i class="fa fa-map-marker"> Jl. Taman Tirta Sunter 1 No.9, RT.8/RW.14, 
                     Sunter Jaya, Tj. Priok, Kota Jkt Utara </i>
                  </p>
               </div>
               <div class="col-md-6 probootstrap-animate">
                  <p><img src="{{ asset('/assets/img/resepsi.jpg') }}" class="img-responsive img-rounded"></p>
                  <h3>Wedding Party</h3>
                  <p><i class="fa fa-calendar"> Minggu, -- -- 0000 </i></p>
                  <p><i class="fa fa-clock-o"> 07:00 WIB - Selesai </i></p>
                  <p><i class="fa fa-map-marker"> Jl. Taman Tirta Sunter 1 No.9, RT.8/RW.14, 
                     Sunter Jaya, Tj. Priok, Kota Jkt Utara </i>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div id="map"></div>
      <section class="probootstrap-section" data-section="gallery">
         <div class="container">
            <div class="row mb40 probootstrap-animate">
               <div class="col-md-12 text-center">
                  <h2>Gallery</h2>
               </div>
            </div>
            <div class="row probootstrap-gutter30">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_3.jpg') }}" style="background-image: url(assets/img/img_3.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_3.jpg') }}" class="img-responsive"></div>
                        </a>
                     </div>
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_2.jpg') }}" style="background-image: url(assets/img/img_2.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_2.jpg') }}" class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-12 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_1.jpg') }}" style="background-image: url(assets/img/img_1.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_1.jpg') }}" class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-6">
                        <div class="row probootstrap-gutter30">
                           <div class="col-md-12 probootstrap-animate">
                              <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_4.jpg') }}" style="background-image: url(assets/img/img_4.jpg)">
                                 <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_4.jpg') }}" class="img-responsive"></div>
                              </a>
                           </div>
                           <div class="col-md-12 probootstrap-animate">
                              <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_5.jpg') }}" style="background-image: url(assets/img/img_5.jpg)">
                                 <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_5.jpg') }}" class="img-responsive"></div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image  height-2x image-popup" href="{{ asset('/assets/img/img_6.jpg') }}" style="background-image: url(assets/img/img_6.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_6.jpg') }}" class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END row -->
            <div class="row probootstrap-gutter30">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-6">
                        <div class="row probootstrap-gutter30">
                           <div class="col-md-12 probootstrap-animate">
                              <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_1.jpg') }}" style="background-image: url(assets/img/img_1.jpg)">
                                 <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_1.jpg') }}" class="img-responsive"></div>
                              </a>
                           </div>
                           <div class="col-md-12 probootstrap-animate">
                              <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_2.jpg') }}" style="background-image: url(assets/img/img_2.jpg)">
                                 <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_2.jpg') }}" class="img-responsive"></div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image  height-2x image-popup" href="{{ asset('/assets/img/img_3.jpg') }}" style="background-image: url(assets/img/img_3.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_3.jpg') }}" class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_4.jpg') }}" style="background-image: url(assets/img/img_4.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_4.jpg') }}"  class="img-responsive"></div>
                        </a>
                     </div>
                     <div class="col-md-6 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_5.jpg') }}" style="background-image: url(assets/img/img_5.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_5.jpg') }}"  class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
                  <div class="row probootstrap-gutter30">
                     <div class="col-md-12 probootstrap-animate">
                        <a class="probootstrap-image image-popup" href="{{ asset('/assets/img/img_6.jpg') }}" style="background-image: url(assets/img/img_6.jpg)">
                           <div class="probootstrap-image-for-popup"><img src="{{ asset('/assets/img/img_6.jpg') }}"  class="img-responsive"></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END row -->
         </div>
      </section>
      <section class="probootstrap-section probootstrap-border-top" data-section="rsvp">
         @include('layout.register')
      </section>
      <footer class="probootstrap-footer">
         <div class="container text-center">
            <div class="row">
               <div class="col-md-12">
                  &copy; 2019 Invitation <a href=""></a> <br> Created By <a href="">Fahrur Rozi Project</a>
               </div>
            </div>
         </div>
      </footer>
      <script src="{{ asset('/assets/js/scripts.min.js') }}"></script>
      <script src="{{ asset('/assets/js/custom.min.js') }}"></script>
      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="{{ asset ('/assets/js/google-map.js') }}"></script>
      <script> 
         var deadline = new Date("august 09, 2020 24:00:00").getTime(); 
         
         var x = setInterval(function() { 
         
         var now = new Date().getTime(); 
         var t = deadline - now; 
         var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
         var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
         var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
         var seconds = Math.floor((t % (1000 * 60)) / 1000); 
         document.getElementById("day").innerHTML =days ; 
         document.getElementById("hour").innerHTML =hours; 
         document.getElementById("minute").innerHTML = minutes;  
         document.getElementById("second").innerHTML =seconds;  
         if (t < 0) { 
                 clearInterval(x); 
                 document.getElementById("demo").innerHTML = "TIME UP"; 
                 document.getElementById("day").innerHTML ='0'; 
                 document.getElementById("hour").innerHTML ='0'; 
                 document.getElementById("minute").innerHTML ='0' ;  
                 document.getElementById("second").innerHTML = '0'; } 
         }, 1000); 
      </script> 
   </body>
</html>