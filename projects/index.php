<?php include "../headElm.php"?>
<title><?php echo $config["title"]?>Projects</title>
<link rel="stylesheet" href="projects.css" />

      <div class="Main-projects container-fluid pr-0 pl-0">
        <div class="container Main-container">
            <h3 class="large-header text-white text-center mb-5" style="width:233px"> JquerySlider</h3>
          <div class="d-flex justify-content-center">

            <!-- <button class="facebook-button"> <i class="fab fa-facebook-f"></i><span> Share</span> </button> -->

            <button class="twitter-button"><i class="fab fa-twitter"></i><span style="font-family: monospace;"> Tweet</span> </button>

                </div>
          <section class="image-big-Square text-center" >

            <div class="Slider-Container">
              <span id="slidersNumberElement" class="image-slidersCount small"></span>
              <!-- Slider Item 1 -->
              <div class="slider-item">
                <header class="image-big-Square-title">
                  <span id="sliderHeader"class="image-big-Square-title-real-title h4"></span>
                </header>
                <img class="full-width" src="https://wallpaperaccess.com/full/235700.jpg" alt="image" />
              </div>

              <!-- Slider Item 2 -->
              <div class="slider-item">
                <header class="image-big-Square-title">
                  <span id="sliderHeader"class="image-big-Square-title-real-title h4"></span>
                </header>
                <img class="vertically" src="../images/Character.jpg" alt="Testimage9" />
              </div>

              <!-- Slider Item 3 -->
              <div class="slider-item">
                <header class="image-big-Square-title">
                  <span id="sliderHeader" class="image-big-Square-title-real-title h4"></span>
                </header>
                <iframe class="full-width" src="https://www.youtube.com/embed/yxUyaHcqwrA" allow="autoplay; fullscreen" allowfullscreen alt="TestVideo"></iframe>
              </div>

              <!-- Repeat for other items -->
              <div class="slider-item">
                <header class="image-big-Square-title">
                  <span id="sliderHeader"class="image-big-Square-title-real-title h4"></span>
                </header>
                <img class="full-width" src="https://images.alphacoders.com/943/thumb-1920-943148.jpg" alt="image" />
              </div>

              <!-- Continue with other images and iframes as needed -->
            </div>


              <div id="nextButton" class="right-arrow-sliders">
                <i class="fas fa-chevron-circle-right"></i>
              </div>
              <div id="prevButton" class="left-arrow-sliders">
                <i class="fas fa-chevron-circle-left"></i>
              </div>

          </section>

          <div class="MultipleImages">

              <!-- fill it by Jquery Don't touch it :) -->

            </div>

          </div>
        </div>
        <section class="other-images">
           <div class="container">
            <div style="padding-bottom:48px">
                <h3 class="header-mostlikely large-header">You might like </h3>
                </div>

        </div>
          <div class="more-designs-show">
                <div class="design-container">
                    <img src="../images/Character.jpg">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-container">
                    <img src="../images/CenterCharacter.jpg">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-container">
                    <img src="../images/blender_icon.png">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-container">
                    <img src="../images/theCube.png">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div><div class="design-container">
                    <img src="../images/theCube.png">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div><div class="design-container">
                    <img src="../images/theCube.png">
                    <div class="design-shadow-box">
                        <div class="text-shadow-box">
                            <div class="text-shadow">
                                <span class="real-design-shadow-text">
                                    Bat Man design
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
<?php include "../footer.php"?>
<script src="projects.js"></script>
