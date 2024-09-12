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
            var validExtensions = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            if (!validExtensions.includes(file.type)) {
                alert('فقط ملفات الصور بصيغ jpg, jpeg, png, و gif مسموح بها.');
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
                                <iframe id="videoU" name="youtube_link" class="images-uploaded-img" src="${embedUrl}" allowfullscreen></iframe>
                            </div>
                            <span class="images-span-icon">
                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                            </span>
                        </header>
                        <section class="section-titles">
                            <input class="login-input w-100" id="inputTitle" placeholder="Video title/description" />
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

    // Automatically update title attribute when the input changes
    $(document).on('input', '#inputTitle', function() {
        var title = $(this).val();
        $(this).closest('.images-uploaded-cont').find('.images-uploaded-img').attr('title', title);
    });

});
