<link rel="stylesheet" href="css/upload.css">
<style>
<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ahmedDb";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

?>
/* .big-Cont {
  height: 1650px;
} */

</style>
    <h3 class="mt-3">Upload</h3>


      <div class="Main-add-images container-fluid">

          <div class="input-div">
            <label class="d-block" style="margin: 50px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Title
                    </h6>
                    <input class="login-input" type="name" placeholder="Project title">

                </label>
            <label class="d-block" style="margin: 25px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Description
                    </h6>
                    <input class="login-input" type="name" placeholder="Project description">

                </label>
            <label class="d-block" style="margin: 25px 0px 15px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                       Categories
                    </h6>
                  <select class="select-cont">

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
                        <h3 class="mb-5 text-muted">Drag Or drop files here</h3>

                        <div class="btn btn-outline-dark text-white">
                            <span>Open the file Browser</span>
                            <input type="file" title="Click to add Files" multiple="" style="display:none;">
                        </div>
                    </div>



                </section>
              <div class="input-div">
                <label class="d-block">

                    <input class="login-input" type="name" id="youtube" placeholder="Please enter the video link. After 2 seconds, it will be automatically displayed">
                    <span class="link-span">

                        Upload Video on youtube and paste the url here

                    </span>
                </label>

              </div>

            <form action="" method="POST">
                <div class="dragDropParent"></div>

                <button type="submit" class="btn btn-lg greatbtn">
                  <span>Upload</span>
                  <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </button>
            </form>

          </div>

      </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>

<script>
$(document).ready(function() {
    var $dropZone = $('#drag-and-drop-zone');
    var $dragDropParent = $('.dragDropParent');
    var maxUrlLength = 70; // Maximum allowed URL length

    $dropZone.find('input[type="file"]').on('click', function(e) {
        e.stopPropagation();
    });

    $dropZone.on('click', function() {
        $(this).find('input[type="file"]').click();
    });

    $dropZone.on('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragging');
    });

    $dropZone.on('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragging');
    });

    $dropZone.on('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragging');
        var files = e.originalEvent.dataTransfer.files;
        handleFiles(files);
    });

    $dropZone.find('input[type="file"]').on('change', function(e) {
        var files = this.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(function(file) {
            if (!file.type.startsWith('image/')) {
                alert('فقط ملفات الصور مسموح بها.');
                return;
            }
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgSrc = e.target.result;

                // Create an image to get its dimensions
                var img = new Image();
                img.onload = function() {
                    var width = img.width;
                    var height = img.height;

                    var html = `
                        <article class="images-uploaded-cont">
                            <header class="images-uploaded-header">
                                <span class="images-span-icon-image-title">
                                    <i class="far fa-image fa-pad-right images-span-icon-image" aria-hidden="true"></i>
                                    <span class="images-span-title">${width}x${height}</span>
                                </span>
                                <div class="video-or-image">
                                    <img id="imgU" class="images-uploaded-img" src="${imgSrc}">
                                </div>
                                <span class="images-span-icon">
                                    <i class="far fa-trash-alt" aria-hidden="true"></i>
                                </span>
                            </header>
                            <section class="section-titles">
                                <input class="login-input w-100" placeholder="Image title/description" />
                                <select class="select-cont w-100">
                                    <option value="fullwidth">Full width</option>
                                    <option value="Vertically">Vertically</option>
                                </select>
                            </section>
                        </article>
                    `;
                    $dragDropParent.append(html);
                    initializeSortable();
                };
                img.src = imgSrc;
            };
            reader.readAsDataURL(file);
        });
        // Clear the input after processing
        $dropZone.find('input[type="file"]').val('');
    }

    $(document).on('click', '.images-span-icon', function() {
        $(this).closest('.images-uploaded-cont').remove();
    });

    function initializeSortable() {
        new Sortable($dragDropParent[0], {
            animation: 150,
            onEnd: function(evt) {
                console.log('تم إعادة ترتيب الصور.');
            }
        });
    }

    initializeSortable();

    // Function to handle YouTube link input
    $('#youtube').on('input', function() {
        var link = $(this).val();

        // Check if URL length exceeds the limit
        if (link.length > maxUrlLength) {
            $('.link-span').text('URL is too long. Please shorten it.');
            return;
        }

        var videoId = extractVideoID(link);
        if (videoId) {
            $('.link-span').text('Valid URL. Please wait...'); // Show a success message
            setTimeout(function() { // Delay the execution by 2 seconds
                var embedUrl = `https://www.youtube.com/embed/${videoId}`;
                var videoEmbedHtml = `
                    <article class="images-uploaded-cont">
                        <header class="images-uploaded-header">
                            <span class="images-span-icon-image-title">
                                <i class="far fa-image fa-pad-right images-span-icon-image" aria-hidden="true"></i>
                                <span class="images-span-title">YouTube Video</span>
                            </span>
                            <div class="video-or-image">
                                <iframe id="videoU" class="images-uploaded-img" src="${embedUrl}" allowfullscreen></iframe>
                            </div>
                            <span class="images-span-icon">
                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                            </span>
                        </header>
                        <section class="section-titles">
                            <input class="login-input w-100" placeholder="Video title/description" />
                            <select class="select-cont w-100 " disabled>
                                <option value="fullwidth">Full width</option>
                                <option value="Vertically">Vertically</option>
                            </select>
                        </section>
                    </article>
                `;
                $dragDropParent.append(videoEmbedHtml);
                $('#youtube').val(''); // Clear the YouTube link input after processing
                initializeSortable();
                $('.link-span').text(''); // Clear the message after embedding the video
            }, 2000); // 2000 milliseconds = 2 seconds
        } else {
            // Display error message if the link is not a valid YouTube link
            $('.link-span').text('Invalid YouTube URL. Please try again.');
        }
    });

    function extractVideoID(url) {
        var videoID = null;
        var regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
        var match = url.match(regex);
        if (match && match[1]) {
            videoID = match[1];
        }
        return videoID;
    }
});


</script>
