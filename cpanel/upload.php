<?php
// معلومات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahmedDb";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    echo("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>






<link rel="stylesheet" href="css/upload.css">

</style>
    <h3 class="mt-3">Upload</h3>


      <div class="Main-add-images container-fluid">
        <form action="cPanel.php" method="POST" enctype="multipart/form-data" id="uploadForm">
            <div class="input-div">
                <!-- Title -->
                <label class="d-block" style="margin: 50px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                        Title
                    </h6>
                    <input class="login-input" type="text" name="title" placeholder="Project title" required>
                </label>

                <!-- Description -->
                <label class="d-block" style="margin: 25px 0px 0px 0px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                        Description
                    </h6>
                    <input class="login-input" type="text" name="description" placeholder="Project description" required>
                </label>

                <!-- Categories -->
                <label class="d-block" style="margin: 25px 0px 15px;">
                    <h6 class="Title-header left-span" style="margin-bottom:1px;">
                        Categories
                    </h6>
                    <select class="select-cont" name="category" required>
                        <option value="nature">Nature</option>
                        <option value="characters">Characters</option>
                        <option value="animation">Animation</option>
                        <option value="random">Random</option>
                    </select>
                </label>
            </div>

            <!-- File upload section -->
            <section class="upload-cont m-auto">
                <header class="upload-header">
                    <ul class="ext-ul row">
                        <li class="ext-li col-md" style="border-left: none; border-right: none;">.jp.</li>
                        <li class="ext-li col-md" style="border-left: none;">.jpeg</li>
                        <li class="ext-li col-md" style="border-left: none;">.gif</li>
                        <li class="ext-li col-md" style="border-left: none;">.png</li>
                    </ul>
                </header>

                <div id="drag-and-drop-zone" class="dm-uploader text-center">
                    <h3 class="mb-5 text-muted">Drag Or drop files here</h3>
                    <div class="btn btn-outline-dark text-white">
                        <span>Open the file Browser</span>
                        <input id="file" type="file" name="media" title="Click to add Files" accept="image/*" style="display:none;">

                    </div>
                </div>
            </section>

            <!-- YouTube Link -->
            <div class="input-div">
                <label class="d-block">
                    <input class="login-input" type="text" name="youtube_link" id="youtube" placeholder="Please enter the video link. After 2 seconds, it will be automatically displayed">
                    <span class="link-span">Upload Video on YouTube and paste the URL here</span>
                </label>
            </div>

            <!-- Drag and Drop Area -->
            <div class="dragDropParent">
                <!-- حقل مخفي لتخزين روابط YouTube -->
                <input type="hidden" name="hidden" id="hidden">
            </div>

            <button  id="uploadButton" type="submit" name="submit" class="btn btn-lg greatbtn">
                <span>Upload</span>
                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
            </button>
        </form>



          </div>

      </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
<script src="js/upload.js"></script>
