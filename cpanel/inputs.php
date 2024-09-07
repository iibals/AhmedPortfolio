<section class="container-fluid text-center text-white p-0 Section-login">
    <div class="container Cont-login">
        <div class="Close_Cont">
          <script>
          function validateForm() {
              var inputs = document.querySelectorAll('input[type="text"]');
              for (var i = 0; i < inputs.length; i++) {
                  if (inputs[i].value.includes('<script>') || inputs[i].value.includes('</script>')) {
                      alert('Invalid input detected!');
                      return false;
                  }
              }
              return true;
          }
          </script>

        <form>

              <h3 class="mt-3">Your story</h3>
              <div id="job-fields">
                  <label class="text-left">
                      <span class="small left-span">Main point</span>
                      <input class="login-input text-left" type="text" placeholder="Jobname">
                      <span class="small left-span">career[Dec]</span>
                      <input class="login-input text-left" type="text" placeholder="Talk about the job">
                      <span class="small left-span">Date number</span>
                      <input class="login-input text-left" type="text" placeholder="just write the year">
                  </label>
              </div>

              <button class="greatbtn btn-lg mt-1" onclick="addFields(event)" style="font-family: auto;cursor: pointer;font-weight: normal;font-size: 21px;">add more career points +</button>
            </form>

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

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Sanitize and prepare statements to prevent SQL Injection
                $instagram = $conn->real_escape_string($_POST['instagram']);
                $facebook = $conn->real_escape_string($_POST['facebook']);
                $twitter = $conn->real_escape_string($_POST['twitter']);
                $linkedin = $conn->real_escape_string($_POST['linkedin']);
                $tiktok = $conn->real_escape_string($_POST['tiktok']);

                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO social_links (instagram, facebook, twitter, linkedin, tiktok) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $instagram, $facebook, $twitter, $linkedin, $tiktok);

                // Execute and redirect
                if ($stmt->execute()) {
                    $stmt->close();
                    // Redirect to prevent re-posting
                    header("Location: cpanel.php?success=1");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                    $stmt->close();
                }
            }

            if (isset($_GET['success']) && $_GET['success'] == 1) {
                // Fetch the last inserted data
                $query = "SELECT instagram, facebook, twitter, linkedin, tiktok FROM social_links ORDER BY id DESC LIMIT 1";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $instagram = $row['instagram'];
                    $facebook = $row['facebook'];
                    $twitter = $row['twitter'];
                    $linkedin = $row['linkedin'];
                    $tiktok = $row['tiktok'];
                } else {
                    echo "No results found.";
                }
            }
            $conn->close();
            ?>


                <form action="cpanel.php" method="POST" onsubmit="return validateForm()">
                    <h3 class="mt-3">Your Socials</h3>
                    <label class="text-left">
                        <span class="small left-span">Instagram</span>
                        <input class="login-input text-left" name="instagram" type="text" value="<?php echo htmlspecialchars($instagram); ?>" placeholder="https://www.example.com/ghzaly_3d for example">
                        <span class="small left-span">Facebook</span>
                        <input class="login-input text-left" name="facebook" type="text" value="<?php echo htmlspecialchars($facebook); ?>"placeholder="https://www.example.com/ghzaly_3d for example">
                        <span class="small left-span">Twitter/X</span>
                        <input class="login-input text-left" name="twitter" type="text" value="<?php echo htmlspecialchars($twitter); ?>"placeholder="https://www.example.com/ghzaly_3d for example">
                        <span class="small left-span">LinkedIn</span>
                        <input class="login-input text-left" name="linkedin" type="text" value="<?php echo htmlspecialchars($linkedin); ?>"placeholder="https://www.example.com/ghzaly_3d for example">
                        <span class="small left-span">TikTok</span>
                        <input class="login-input text-left" name="tiktok" type="text" value="<?php echo htmlspecialchars($tiktok); ?>"placeholder="https://www.example.com/ghzaly_3d for example">
                    </label>
                    <button type="submit" class="btn btn-lg greatbtn">
                        <span>Save</span>
                        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    </button>
                </form>

            </div>
        </div>
    </section>
    <script>
    function addFields(event) {
        event.preventDefault(); // منع تحديث الصفحة
        var jobFields = document.getElementById('job-fields');
        var newFields = document.createElement('label');
        newFields.className = 'text-left';
        newFields.innerHTML = `
            <hr>
            <span class="small left-span">Main point</span>
            <input class="login-input text-left" type="text" placeholder="Jobname">
            <span class="small left-span">career[Dec]</span>
            <input class="login-input text-left" type="text" placeholder="Talk about the job">
            <span class="small left-span">Date number</span>
            <input class="login-input text-left" type="text" placeholder="just write the year">

        `;
        jobFields.appendChild(newFields);
    }
</script>
<style>
/* greatbtn changes check before copy it like a dumb ass */
.greatbtn {
    display: inline-flex;
    align-items: center;
    overflow: hidden;
    position: relative;
    width: auto;
    z-index: 2;
    background-color: rgb(39 174 96);
    border: 1px solid #b7c4d94a;
    font-weight: bold;
    text-decoration: none;
    border-radius: 6px;
    color: #f9f9f9;
    transition: all .2s ease-in-out;
    margin-bottom: 20px;
}
.greatbtn:hover {
    color: #030303;
}
.greatbtn:active {
    background-color: rgb(255 255 255 / 0.4) ;
}
.greatbtn i {
    transform: translateY(-400%);
    transition: transform 0.5s ease;
    margin-right: 0px !important;
}

.greatbtn:hover i {
    transform: translateX(0);
    display: block;
}

.greatbtn span {
    transition: all 0.5s ease;
    margin-right: -16px ;
}

.greatbtn:hover span {
    margin-right: 16px; /* يمكن تعديلها حسب الحاجة لإعطاء مساحة للأيقونة عند ظهورها */
}
</style>
