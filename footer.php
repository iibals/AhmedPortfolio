<style>
.footerColor {
    background-color: #27ae60 !important;
}
.form-control {
    color: #fff;
    background-color: rgb(13 17 37);
    border: 1px solid #0d1125;
    border-radius: 0.25rem;
    transition: all 0.15s ease-in-out;
}
.form-control:focus {
    color: inherit !important;
    background-color: rgb(13 17 37);
    border-color: #0d1125;
    outline: 0;
    box-shadow: none;
}
.SentEmail {
    background-color: #0d1125;
    font-weight: normal;
}
.SentEmail:hover {
  color:#fff
}
body {
    background: #0d1125;
}
section#contact {
    border-radius: 60px 60px 0px 0px;
}
</style>
<section id="contact" class="contact-section py-5 text-white text-center footerColor">
        <div class="container">
            <h2 class="text-center mb-5">Contact Me</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="mb-3 text-left">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your name">
                        </div>
                        <div class="mb-3 text-left">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="your@email.com">
                        </div>
                        <div class="mb-3 text-left">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <a href="" class="btn btn-lg SentEmail greatbtn">
                            <span>Sent email</span>
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- start Social div -->
    <!-- <div class="Social text-center">
        <div class="row">
            <div class="col-md-6 row">

               <div class="col-md-5 blank-main-area"></div>


                <div class="col-md text-right">

                    <h6 class="header6">روابط سريعة</h6>

                    <ul class="parentList">

                        <li class="listOfparent">
                            <a class="one Pointer">» الرئيسية</a>
                        </li>
                        <li class="listOfparent">
                            <a class="Tow Pointer">» عني </a>
                        </li>
                        <li class="listOfparent">
                            <a class="Three Pointer">» أعمالي</a>
                        </li>
                        <li class="listOfparent ">
                            <a class="Four Pointer">» طرق التواصل</a>
                        </li>
                    </ul>

                   </div>

               </div>

               <div class="col-md-6 row">

                   <div class=col-md-5></div>


                    <div class="col-md-6 text-right">

                        <h6 class="header6">طرق التواصل</h6>

                        <ul class="parentList"  style="padding-inline-start: 23px;">
                            <li class="listOfSocial">

                                <span class="ConentOfSocial">
                                    <i class="fab fa-instagram"
                                       style="
                                            margin-left:2px;
                                            position: relative;
                                            top: 1px;"></i>
                                    <a href="https://www.instagram.com/ghzaly_3d/" target="_blank">ghzaly_3d@</a>
                                  </span>

                            </li>
                            <li class="listOfSocial">

                                <span class="ConentOfSocial">

                                    <i class="fab fa-whatsapp"
                                       style="margin-left:2px;"></i>
                                    <a href="https://api.whatsapp.com/send?phone=966599378646&text=%D8%A3%D9%87%D9%84%D8%A7%D9%8B%20%D9%88%D8%B5%D9%84%D8%AA%20%D8%A5%D9%84%D9%8A%D9%83%20%D8%B9%D8%A8%D8%B1%20%D9%85%D9%88%D9%82%D8%B9%D9%83%20%D8%A7%D9%84%D8%B4%D8%AE%D8%B5%D9%8A" target="_blank">00966599378646</a>

                                  </span>

                            </li>
                        </ul>

                       </div>

                   </div>


        </div>

    </div> -->
    <!-- end Social div -->


    <!----------------------------------------->


    <!-- start footer -->
    <footer class="container-fluid footerClass footerColor">

      <div class="container mainFooter text-center">
                 <span class="col footerSpan p-1">

                     Made with

                 <i class="fas fa-heart" aria-hidden="true" style="color:#d41b1b;"></i>

                      Programming and development by

                 <a href="https://twitter.com/prgbandar" target="_blank" class="myName">Bandar</a>


                     © <span id="currentDate"></span>

                 </span>
                    <script>
                    // Create a Date object
                    const currentYear = new Date().getFullYear();;

                    // Get the current date in a readable format
                    //const formattedDate = currentDate.getYear();

                    // Display the date in the HTML element with id "currentDate"
                    document.getElementById("currentDate").textContent = currentYear;
                    </script>
               </div>
        <button id="myBtn" class="btn">
          <i class="fas fa-arrow-up"></i>
      </button>
    </footer>

    <!-- End footer -->


<?php include "jsfiles.php"?>
