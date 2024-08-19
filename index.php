<!DOCTYPE html>
<?php include "header.php"  ?>
<title><?php echo $config["title"] ?> ghzali</title>

    <!-- nav header -->

    <!---------------------------------------->

    <!-- start Main -->

    <!-- End Main -->


    <!----------------------------------------->

    <!-- Start what ghzaly can do ? -->
    <style>
    @media (min-width: 768px) {
    .col-md-3 {
        -ms-flex: 0 0 20% !important;
        flex: 0 0 20% !important;
        max-width: 25%;
    }
}
</style>
    <div class="what-ghzaly-can-do-section first-color">
      <div class="container-fluid">
              <div class="what-ghzaly-can-do-head">
                  <h3 class="small-header">
                      Skills
                  </h3>
              </div>



              <div class="skills-showcase">
                <div class="skills-container">
                  <div class="skill-category">
                    <h3>Design</h3>
                    <ul class="skill-list">
                      <li class="skill-item" data-skill="Adobe Photoshop">
                        <span class="skill-name">Adobe Photoshop</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 90%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="Adobe Illustrator">
                        <span class="skill-name">Adobe Illustrator</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 85%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="Sketch">
                        <span class="skill-name">Sketch</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 80%;"></div></div>
                      </li>
                    </ul>
                  </div>

                  <div class="skill-category">
                    <h3>Programming</h3>
                    <ul class="skill-list">
                      <li class="skill-item" data-skill="HTML5">
                        <span class="skill-name">HTML5</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 95%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="CSS3">
                        <span class="skill-name">CSS3</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 90%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="JavaScript">
                        <span class="skill-name">JavaScript</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 85%;"></div></div>
                      </li>
                    </ul>
                  </div>

                  <div class="skill-category">
                    <h3>Tools</h3>
                    <ul class="skill-list">
                      <li class="skill-item" data-skill="Git">
                        <span class="skill-name">Git</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 88%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="VS Code">
                        <span class="skill-name">VS Code</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 92%;"></div></div>
                      </li>
                      <li class="skill-item" data-skill="Webpack">
                        <span the="skill-name">Webpack</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 78%;"></div></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <style>
                .skills-showcase {
                    max-width: 1000px;
                    margin: 0 auto;
                    padding: 40px 20px;
                    border-radius: 20px;
                }

                .skills-title {
                  text-align: center;
                  color: #ffffff;
                  font-size: 2.5em;
                  margin-bottom: 40px;
                  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                }

                .skills-container {
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: space-around;
                }

                .skill-category {
                  flex-basis: calc(33.333% - 40px);
                  margin-bottom: 40px;
                }

                .skill-category h3 {
                  color: #3498db;
                  font-size: 1.8em;
                  margin-bottom: 20px;
                  text-align: center;
                  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
                }

                .skill-list {
                  list-style: none;
                  padding: 0;
                }

                .skill-item {
                  background: rgba(255, 255, 255, 0.1);
                  border-radius: 10px;
                  padding: 15px;
                  margin-bottom: 15px;
                  transition: all 0.3s ease;
                  opacity: 0;
                  transform: translateY(20px);
                  transition: opacity 0.5s ease, transform 0.5s ease;
                }

                .skill-item:hover {
                  transform: translateY(-5px) !important;
                  box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
                }

                .skill-name {
                  display: block;
                  color: #ecf0f1;
                  font-size: 1.1em;
                  margin-bottom: 10px
                }

                .skill-bar {
                  height: 10px;
                  display: none;
                  background: rgba(255, 255, 255, 0.2);
                  border-radius: 5px;
                  overflow: hidden;
                }

                .skill-progress {
                  height: 100%;
                  background: linear-gradient(90deg, #3498db, #2ecc71);
                  border-radius: 5px;
                  transition: width 1s ease-in-out;
                }
                .skill-icon {
                  font-size: 2em; /* Adjust the size of icons */
                  color: #ccc; /* Default color */
                }

                .active-skill {
                  color: #2ecc71; /* Color when active */
                }

                @media (max-width: 768px) {
                  .skill-category {
                    flex-basis: 100%;
                  }
                }

            </style>

            <script>
            document.addEventListener('DOMContentLoaded', (event) => {
              const skillItems = document.querySelectorAll('.skill-item');

              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                  }
                });
              }, { threshold: 0.5 });

              skillItems.forEach(item => {
                observer.observe(item);
              });

              skillItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                  const icons = item.querySelectorAll('.skill-icon');
                  icons.forEach(icon => icon.classList.add('active-skill'));
                });

                item.addEventListener('mouseleave', () => {
                  const icons = item.querySelectorAll('.skill-icon');
                  icons.forEach(icon => icon.classList.remove('active-skill'));
                });
              });
            });
            </script>





              </div>
      </div>

    <!-- end what ghzaly can do -->
    <!-- start article -->
    <article class="AboutSection second-color">

        <div class="container">
          <div style="padding-bottom:48px">
            <h3 class="large-header">About me</h3>
            </div>
            <div class="timeline-container">
              <style>
                .timeline-container {
                  max-width: 800px;
                  margin: 0 auto;
                  padding: 40px 0;
                  font-family: 'Arial', sans-serif;
                }
                .timeline {
                    position: relative;
                    padding: 50px 0;
                }
                .timeline::before {
                  content: '';
                  position: absolute;
                  left: 50%;
                  top: 0;
                  bottom: 0;
                  width: 4px;
                  background: linear-gradient(to bottom, #3498db, #27ae60);
                  transform: translateX(-50%);
              }
                .timeline-item {
                  margin-bottom: 70px;
                  position: relative;
                  opacity: 0;
                  transform: translateY(20px);
                  transition: all 0.5s ease;
                }
                .timeline-item:last-child {
                  margin-bottom: 0;
                }
                .timeline-item:nth-child(odd) {
                  padding-right: calc(50% + 30px);
                  text-align: right;
                }
                .timeline-item:nth-child(even) {
                  padding-left: calc(50% + 30px);
                  text-align: left;
                }
                .timeline-content {
                  background: rgba(255,255,255,0.05);
                  padding: 25px;
                  border-radius: 15px;
                  box-shadow: 0 0 25px rgba(0,0,0,0.1);
                  transition: all 0.3s ease;
                  position: relative;
                }
                .timeline-content::before {
                  content: '';
                  position: absolute;
                  top: 20px;
                  width: 30px;
                  height: 2px;
                  background: #3498db;
                }
                .timeline-item:nth-child(odd) .timeline-content::before {
                  right: -30px;
                }
                .timeline-item:nth-child(even) .timeline-content::before {
                  left: -30px;
                }
                .timeline-content:hover {
                  transform: scale(1.05);
                  box-shadow: 0 0 35px rgba(52, 152, 219, 0.4);
                }
                .timeline-item h3 {
                  margin: 0 0 10px;
                  font-size: 24px;
                  color: #3498db;
                  text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
                }
                .timeline-item p {
                  margin: 0;
                  font-size: 18px;
                  color: #ecf0f1;
                }
                .timeline-date {
                  position: absolute;
                  top: 20px;
                  padding: 5px 15px;
                  background: #27ae60; /* Beautiful green color */
                  color: #fff;
                  border-radius: 20px;
                  box-shadow: 0 0 10px rgba(39, 174, 96, 0.5);
                }
                .timeline-item:nth-child(odd) .timeline-date {
                  left: -100px;
                }
                .timeline-item:nth-child(even) .timeline-date {
                  right: -100px;
                }
                @keyframes fadeInUp {
                  from {
                    opacity: 0;
                    transform: translateY(20px);
                  }
                  to {
                    opacity: 1;
                    transform: translateY(0);
                  }
                }
                @media (max-width: 768px) {
                  .timeline::before {
                    left: 30px;
                  }
                  .timeline-item {
                    padding-left: 80px !important;
                    text-align: left !important;
                  }
                  .timeline-content::before {
                    left: -50px !important;
                    width: 50px !important;
                  }
                  .timeline-date {
                    left: -80px !important;
                    top: -30px !important;
                  }
                }
              </style>

              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h3>Engineering Student at King Fahd University of Petroleum & Minerals</h3>
                    <p>Started my academic journey in engineering</p>
                  </div>
                  <div class="timeline-date">2017</div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h3>Began 3D Design</h3>
                    <p>Discovered my passion for 3D design and began developing my skills</p>
                  </div>
                  <div class="timeline-date">2017</div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h3>Started Freelancing</h3>
                    <p>Took my first step into the freelancing world, accepting independent projects</p>
                  </div>
                  <div class="timeline-date">2019</div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h3>Graduated as an Engineer</h3>
                    <p>Successfully completed my studies and earned a degree in engineering</p>
                  </div>
                  <div class="timeline-date">2022</div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h3>Co-founder of <a href="https://zohalstudios.com" target="_blank" style="color: inherit;">Zohal Studios</a></h3>
                    <p>Launched my own project, blending my passion for design with my engineering expertise</p>
                  </div>
                  <div class="timeline-date">2022</div>
                </div>
              </div>
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', (event) => {
                const timelineItems = document.querySelectorAll('.timeline-item');

                const observer = new IntersectionObserver((entries) => {
                  entries.forEach(entry => {
                    if (entry.isIntersecting) {
                      entry.target.style.animation = `fadeInUp 0.5s ease forwards ${entry.target.dataset.delay}`;
                    }
                  });
                }, { threshold: 0.5 });

                timelineItems.forEach((item, index) => {
                  item.dataset.delay = `${index * 0.2}s`;
                  observer.observe(item);
                });
              });
            </script>

                </div>
            </div>
            </div>
        </div>
    </article>


    <!----------------------------------------->

    <?php include "footer.php" ?>
  </body>
</html>
