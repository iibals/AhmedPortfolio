<?php include "../headElm.php";
?>
<title><?php echo $config["title"] ?>cPanel</title>
<link rel="stylesheet" href="css/cpanel.css" />
<link rel="stylesheet" href="css/upload.css" />
<link rel="stylesheet" href="css/manage.css" />

<div class="Main-login container-fluid">
    <h1 class="large-header mb-4 text-center">Control panel</h1>
      <div class="container big-Cont p-0" id="remoteCont">
          <div data-file="inputs.php" class="remote inputs" id="fill">inputs</div>
          <div data-file="upload.php" class="remote" id="upload">Upload</div>
          <div data-file="manage.php" class="remote" id="mng">Manage</div>
          <section class="container-fluid text-center text-white p-0 Section-login" id="fileDisplay">
            <?php include "upload.php" ?>
          </section>
          </div>
        </div>
<?php include "../jsfiles.php"?>

<script>

$('#remoteCont .remote').on('click', function() {

  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
  } else {
    $(this).addClass("active");
    $(this).siblings('div.active').removeClass('active');
  }
});
$("#remoteCont .remote").on('click', function(){
  if (!$(this).hasClass("active")) {
						let file = $(this).data('');
					} else {
						let file = $(this).data('file');
						let fileDisplay = $('#fileDisplay');

						fileDisplay.fadeOut(400, function() {

							fileDisplay.load(file, function() {

								fileDisplay.fadeIn(400);

							});
						});
					}
  let fileDisplay = $('#fileDisplay');
  if ($("#remoteCont .remote").hasClass("remote")) {
      fileDisplay.fadeIn(400);
  } else {
      fileDisplay.fadeOut(400);
  }

})

</script>
<?php
$conn->close();
 ?>
