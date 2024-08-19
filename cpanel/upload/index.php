<!DOCTYPE html>
<head>
<?php
      include "../headElm.php";
?>
<title><?php echo $config["title"] ?> add-images</title>

    <link rel="stylesheet" href="../css/rtlbootstrap.css"/>
    <link rel="stylesheet" href="../css/Design.css"/>
    <link rel="stylesheet" href="add-images.css" />

  <body>


      <div class="Main-add-images container-fluid">

          <div class="big-cont container-fluid">
              <h3 class="large-header text-white">add images</h3>
          <div class="input-div">
            <label class="d-block" style="margin: 50px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Title
                    </h6>
                    <input class="input-space d-block" type="name" placeholder="Project title">

                </label>
            <label class="d-block" style="margin: 25px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Description
                    </h6>
                    <input class="input-space d-block" type="name" placeholder="Project description">

                </label>
            <label class="d-block" style="margin: 25px 0px 15px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Categories
                    </h6>
                  <select class="select-cont w-100">

                    <option value="1">nature</option>
                    <option value="2">characters</option>
                    <option value="3">animation</option>
                    <option value="4">random</option>

                  </select>
                </label>
              </div>
                <section class="upload-cont m-auto">


                    <header class="upload-header">

                        <ul class="ext-ul row">
                            <li class="ext-li col-md" style="
                            border-left: none;
                            border-right: none;
                            ">jpg.</li>
                            <li class="ext-li col-md" style="
                            border-left: none;
                            ">jpeg.</li>
                            <li class="ext-li col-md" style="border-left: none;">gif.</li>
                            <li class="ext-li col-md" style="border-left: none;">png.</li>
                        </ul>

                    </header>


                    <div id="drag-and-drop-zone" class="dm-uploader text-center">
                        <h3 class="mb-5 text-muted">Drag &amp; drop files here</h3>

                        <div class="btn btn-outline-dark text-white">
                            <span>Open the file Browser</span>
                            <input type="file" title="Click to add Files" multiple="">
                        </div>
                      </div>



                </section>
              <div class="input-div">
                <label class="d-block">

                    <input class="input-space d-block" type="name" placeholder="Video-link , after 2 seconds will sent automatic">
                    <span class="small left-span">

                       (: Upload Video on youtube and paste the url here

                    </span>
                </label>

              </div>

              <div class="imgs-parent">
                    <div class="dragDropParent">
                      <article class="images-uploaded-cont">
                          <header class="images-uploaded-header">

                             <span class="images-span-icon-image-title">

                                 <i _ngcontent-qgy-c9="" class="far fa-image fa-pad-right images-span-icon-image" aria-hidden="true"  style="font-size: 15px;" ></i>

                                <span class="images-span-title">set name/size  </span>

                                </span>

                            <img class="images-uploaded-img" src="../images/CenterCharacter.jpg">
                            <span class="images-span-icon">

                            <i class="far fa-trash-alt" aria-hidden="true"></i>

                              </span>

                          </header>
                          <section class="section-titles">
                              <input class="input-space" placeholder="image title/description" />

                          </section>
                    </article>
                  </div>
                    <div class="dragDropParent">                    <article class="images-uploaded-cont">
                          <header class="images-uploaded-header">

                             <span class="images-span-icon-image-title">

                                 <i _ngcontent-qgy-c9="" class="far fa-image fa-pad-right images-span-icon-image" aria-hidden="true"  style="font-size: 15px;" ></i>

                                <span class="images-span-title">set name/size  </span>

                                </span>

                            <img class="images-uploaded-img" src="../images/CenterCharacter.jpg">
                            <span class="images-span-icon">

                            <i class="far fa-trash-alt" aria-hidden="true"></i>

                              </span>

                          </header>
                          <section class="section-titles">
                              <input class="input-space" placeholder="image title/description" />

                          </section>
                    </article>
                    </div>

                    <div class="dragDropParent"></div>

                    <div class="dragDropParent"></div>

                    <div class="dragDropParent"></div>


                    </div>
              <button class="Big-button f-button ghzaly-black-button "> See it </button>
              <button class="Big-button s-button ghzaly-success-button "> Publish </button>
          </div>

      </div>
    <script src="../js/LibraryjQuery.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="add-images-js/drag-drop.js"></script>
    <script src="add-images-js/demo-config.js"></script>
    <script src="add-images-js/jquery.dm-uploader.min.js"></script>
  </body>
</html>
