<?php
    include "headElm.php";
 ?>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navColor">

      <div class="container-fluid">

           <!-- <a class="navbar-brand font-weight-bold  text-right " href="#">
              <img src="images/javaImage.jpg" class="img-thumbnail header-image" alt="WebSite image"/>
          </a> -->

          <!-- button toggle for small screens -->
          <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarColor02"
                aria-controls="navbarColor02"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>



          <!-- button toggle for small screens -->



        <div class="navbar-collapse font-weight-bold collapse" id="navbarColor02">


          <div class="container ">

              <ul class="navbar-nav ml-auto p-0">
                <li class="nav-item" id="L1">
                  <a class="nav-link one">Home </a>
                </li>

                <li class="nav-item"> <!-- will be active after click it -->
                  <a class="nav-link Tow" id="L2">Services</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link Three" id="L3">About Me</a>
                </li>

                <li class="nav-item" >
                  <a class="nav-link Four" id="L4">Contact Me</a>
                </li>

              </ul>
          </div>
          <!-- <ul class="navbar-nav ml-auto">

            <li class="nav-link">
                  <select class="badge badge-light select-remove-arrow">
                      <option>EN</option>
                      <option>AR</option>
                  </select>
              </li>

            </ul> -->


      </div>
    </div>

  </nav>
  <!-- align = up and down and center , justify-conent = right center left , for items -->
  <main class="container-fluid w-100 main-design">
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
