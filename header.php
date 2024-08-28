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
        <div class="nav-links">
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">Projects</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
        </div>
    </nav>

   <div style="    display: grid;
    place-items: center;height: 25%;">
    <style>
    .carousel-container {
        width: 100%;
        height: 400px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        cursor: grab;
        z-index:2;
    }

    .carousel {
        display: flex;
        place-items: center;
        margin: 0;
        padding: 0;
        list-style-type: none;
        gap: 20px;
        position: absolute;
        left: 0;
        transition: transform 0.2s ease;
    }

    .carousel li {
        flex-shrink: 0;
    }

    .carousel img {
        width: 600px;
        height: 400px;
        object-fit: cover;
    }
</style>
   <div class="About text-center">
              <div class="p-line">
                      <h1 class="AboutH3 typing-effect" id="typingHeader"></h1></br>
                      <h2 class="AboutSpan typing-effect" id="typingSpan"></h2>
              </div>
              <!-- <div class="p-line">
                      <h1 class="AboutH3 typing-effect" id="workEffect"></h1> </br>
                      <h2 class="AboutSpan typing-effect" id="workSince"> </h2>
              </div> -->
              <!-- <div class="p-line">
                      <h2 class="AboutH3">أصمم </h2>

                      <span class="AboutSpan"> على برنامج بلندر </span>
              </div> -->
          </div>
        </div>
        <style>
        .cubeblock {
            position: relative;
            display: flex;
            flex-direction: column;
            align-content: space-around;
            flex-wrap: wrap;
            height: 20%;
            z-index: 2;
        }
         </style>
        <div class="cubeblock">
          <div class="cube thecube">
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
            <div class="side top"></div>
            <div class="side bottom"></div>
          </div>
        </div>
        <style>
        .swiper-slide {
            width: 600px; /* أو أي عرض تفضله */
            height: 400px; /* أو أي ارتفاع تفضله */
        }

        .swiper-slide img {
            object-fit: cover;
            border: 1px solid rgb(50 50 50);
            border-radius: 7px;
        }
         </style>
        <div class="swiper-container carousel-container">
            <div class="swiper-wrapper carousel">
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/CenterCharacter.jpg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/Character.jpg" alt="Image 2">
                </div>
                <!-- يمكنك إضافة المزيد من الشرائح هنا إذا كنت ترغب -->
            </div>
        </div>
        <style>

        </style>
        <a href="projects-gallery/" class="btn btn-lg greatbtn">
            <span>More Projects</span>
            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
        </a>
      <script></script>

   <!-- <div class="Browsers">
     <img class="Browsers-imgs" src="images/FireFox.png" alt="FireFox icon">
     <img class="Browsers-imgs" src="images/Chrome.png" alt="Chomre icon">
   </div> -->
   </main>
