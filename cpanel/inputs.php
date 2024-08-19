<section class="container-fluid text-center text-white p-0 Section-login">
    <h3 class="mt-3">Fill fields</h3>
    <div class="container Cont-login">
        <div class="Close_Cont">
        <form><form>

            <label class="text-left">
                <span class="small left-span">skilles</span>
                <input class="login-input text-left" type="name" placeholder="Yourskills">

            </label>
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
              <h3 class="mt-3">Your socials</h3>
              <label class="text-left">
                  <span class="small left-span">instagram</span>
                  <input class="login-input text-left" type="name" placeholder="https://www.instagram.com/ghzaly_3d for example">
                  <span class="small left-span">facebook</span>
                  <input class="login-input text-left" type="name" placeholder="https://www.instagram.com/ghzaly_3d for example">
                  <span class="small left-span">Twitter/X</span>
                  <input class="login-input text-left" type="name" placeholder="https://www.instagram.com/ghzaly_3d for example">
                  <span class="small left-span">linkedin</span>
                  <input class="login-input text-left" type="name" placeholder="https://www.instagram.com/ghzaly_3d for example">
                  <span class="small left-span">Tik Tok</span>
                  <input class="login-input text-left" type="name" placeholder="https://www.instagram.com/ghzaly_3d for example">

              </label>
              <a href="#" class="btn btn-lg greatbtn">
                    <span>Save</span>
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </a>
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
