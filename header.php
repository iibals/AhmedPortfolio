<?php
    include "config.php";
 ?>

  <!-- align = up and down and center , justify-conent = right center left , for items -->
  <html lang="<?php echo $config["lang"]?>" dir="<?php echo $config["dir"]?>">
  <head>
    <meta charset="utf-8">
    <!-- des -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/ghzalyWebSite/css/rtlbootstrap.css"/>
    <link rel="stylesheet" href="http://localhost/ghzalyWebSite/css/Design.css"/>
    <link rel="stylesheet" href="http://localhost/ghzalyWebSite/css/2024.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=New+Amsterdam&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c828d0f151.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Railway', 'Cairo', Arial, sans-serif !important;
        }
    </style>
  </head>
  <div class="loader-container">
    <div class="cube">
      <div class="side front"></div>
      <div class="side back"></div>
      <div class="side left"></div>
      <div class="side right"></div>
      <div class="side top"></div>
      <div class="side bottom"></div>
    </div>
  </div>
  <main class="container-fluid w-100 main-design">
    <nav class="navColor">
        <button class="menu-toggle">☰</button>
        <div class="nav-links container">
            <a href="http://localhost/ghzalyWebSite" class="nav-link active">Home</a>
            <a href="projects" class="nav-link" target="_blank">Projects</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
    </nav>

    <div class="container text-center">
       <div class="About ">
                  <div class="p-line">
                          <h1 class="AboutH3"><img class="hi"src="images/hi.svg"/> Hi, I am Ahmed Algazali!</h1><br>
                          <h2 class="AboutSpan typing-effect" id="typingSpan"></h2>
                  </div>
              </div>
            </div>
        <div class="custom-body">
                <swiper-container class="custom-swiper-container" effect="cards" grab-cursor="true" autoplay="true" autoplay-delay="1800" autoplay-disable-on-interaction="false" speed="600">
                  <!-- start loop here in the left -->
                  <swiper-slide class="custom-swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="1 / 3" style="width: 600px; z-index: 3; transform: translate3d(0px, 0px, 0px) rotateZ(0deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/theCube.png" alt="Slide 1"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 0; transition-duration: 0ms;"></div></swiper-slide>
                  <swiper-slide class="custom-swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 600px; z-index: 2; transform: translate3d(calc(7.25% - 600px), 0px, -100px) rotateZ(2deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/Character.jpg" alt="Slide 2"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1; transition-duration: 0ms;"></div></swiper-slide>
                  <swiper-slide class="custom-swiper-slide" role="group" aria-label="3 / 3" style="width: 600px; z-index: 1; transform: translate3d(calc(13% - 1200px), 0px, -200px) rotateZ(4deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/CenterCharacter.jpg" alt="Slide 3"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1; transition-duration: 0ms;"></div></swiper-slide>
                </swiper-container>
                <!-- don't miss with this -->
                <div class="cubeblock">
                  <div class="cube thecube" style="animation: auto ease 0s 1 normal none running none; transform: rotateX(237.014deg) rotateY(45.441deg);">
                    <div class="side front"></div>
                    <div class="side back"></div>
                    <div class="side left"></div>
                    <div class="side right"></div>
                    <div class="side top"></div>
                    <div class="side bottom"></div>
                  </div>
                </div>
                <!-- print deiffrent than the one -->
                <swiper-container class="custom-swiper-container" effect="cards" grab-cursor="true" autoplay="true" autoplay-delay="2000" autoplay-disable-on-interaction="false" speed="600">
                  <!-- start loop here in the right -->
                  <swiper-slide class="custom-swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="1 / 3" style="width: 600px; z-index: 3; transform: translate3d(0px, 0px, 0px) rotateZ(0deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/theCube.png" alt="Slide 1"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 0; transition-duration: 0ms;"></div></swiper-slide>
                  <swiper-slide class="custom-swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 600px; z-index: 2; transform: translate3d(calc(7.25% - 600px), 0px, -100px) rotateZ(2deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/Character.jpg" alt="Slide 2"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1; transition-duration: 0ms;"></div></swiper-slide>
                  <swiper-slide class="custom-swiper-slide" role="group" aria-label="3 / 3" style="width: 600px; z-index: 1; transform: translate3d(calc(13% - 1200px), 0px, -200px) rotateZ(4deg) scale(1); transition-duration: 0ms;"><img src="../ghzalyWebSite/images/CenterCharacter.jpg" alt="Slide 3"><div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1; transition-duration: 0ms;"></div></swiper-slide>
                </swiper-container>

                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                </div>
        <a href="projects-showcase/" target="_blank" class="btn btn-lg greatbtn">
            <span>More Projects</span>
            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
        </a>
      <script></script>

   <!-- <div class="Browsers">
     <img class="Browsers-imgs" src="images/FireFox.png" alt="FireFox icon">
     <img class="Browsers-imgs" src="images/Chrome.png" alt="Chomre icon">
   </div> -->
   </main>
