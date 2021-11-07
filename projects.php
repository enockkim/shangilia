<!DOCTYPE html>
<html lang="en" >

  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <?php include 'includes/head.php' ?>

<body>
  <?php 
    session_start();
    $page = 'projects';
    $_SESSION['page'] = $page;
    include 'includes/navigation_bar.php';
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center projects-bg">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> <span class = "stroke">Shangilia </span>Projects</h1></br>
      <h2><mark>We are a team focused on making the world a better place by starting projects that benefits our members and the community.</mark></h2>
      <div class="d-flex">
        <!-- <a href="#faq" class="btn-get-started">Support Us</a> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= 
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-smile"></i></div>
              <h4 class="title"><a href="">Community Work</a></h4>
              <p class="description">The main goal of Shangilia is to give back to the community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-money"></i></div>
              <h4 class="title"><a href="">Investment</a></h4>
              <p class="description">We also invest in projects that will be beneficial to the group and inturn to the community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-user-check"></i></div>
              <h4 class="title"><a href="">Membership</a></h4>
              <p class="description">We are a mix of focused men and women from different economic, social, and ethnic backgrounds one single mindset of helping others.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-church"></i></div>
              <h4 class="title"><a href="">Christianity</a></h4>
              <p class="description">We have a strong christian background with roots deep in the church.</p>
            </div> 
         </div>

        </div>

      </div>
    </section>End Featured Services Section -->



     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projects</h2>
          <h3>Check out our <span>Projects</span></h3>
          <p>Here are a few completed and future projects.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4><a href="#communityEvents">Community Events</a></h4>
              <p>Community events like visitations at shangilia are ongoin and will never stop.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="#environmentalWork">Environmental Work</a></h4>
              <p>God has gifted us with hsi beautiful and we must protect it as much as possible.
                Shangilia is planning events that engage the community in environmental work.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-task"></i></div>
              <h4><a href="#groupProjects">Group Projects</a></h4>
              <p>These include finiancial projects that aim at funding other group projects.</p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Community Events</a></h4>
              <p>Community events like visitations at shangilia are ongoin and will never stop.</p>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="#youthOutreach">Youth Outreach</a></h4>
              <p>Youths have a special place in the heart of Shangilia since all members are youths.
                Events are being planned to reach youths of in different stages of life, providing 
                spiritual nourishent, encourangement, career advice and technical trainings.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-run"></i></div>
              <h4><a href="#childrensDay">Childrens Day</a></h4>
              <p>A mega event is being planned for the children within Mogogosiek Area. 
                It will be full of fun and games and will take place at the end of 2021.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
   

      <!-- ======= Visits ======= -->
      <section id="communityEvents" class="services section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <!-- <h2>Projects</h2> -->
              <h3>Community Visits</h3>
              <p>We pride ourselves with the work we are doing with the community.</p>
            </div> 


            <div class="row">
              <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/visits.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Community Work is our main mission</h3>
                <p class="fst-italic">
                  Hebrews 13:16: Do not neglect to do good and to share what you have, for such sacrifices are pleasing to God.
                </p>
                <p>
                  Shangilia has always commited itself to giving back to the community. As a result we have been
                  able to visit multiple households and donate food and other goods. 
                </p>
              </div>            
            </div>            
    
          </div>
      </section>
      <!-- Visits -->

      <!-- ======= Environmental Work ======= -->
      <section id="environmentalWork" class="services">
        <div class="container" data-aos="fade-up">
        
          <div class="section-title">
            <!-- <h2>Projects</h2> -->
            <h3>Environmental Work</h3>
            <p>As avid christians we belive that taking care of the environment is service to God. During these times of increased pollution
              and climate change it is paramount that we do our part in keeping our planet clean.
            </p>
          </div> 
             
          <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Preserving our Environment</h3>
              <p>
                As Shangilia we have various projects being planned that go along withe environmental conservation. these
                include tree planting, trash collection and bush clearing.
              </p>
            </div>  
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/environmental.jpg" class="img-fluid" alt="">
            </div>
          
          </div>
          
        </div>
      </section>
      <!-- Environmental Work -->

      <!-- ======= Group Projects ======= -->
      <section id="groupProjects" class="services section-bg">
        <div class="container" data-aos="fade-up">
        
          <div class="section-title">
            <!-- <h2>Projects</h2> -->
            <h3>Group Projects</h3>
            <p>By investing in our group projects we are able to do more when it comes to helping others.
            </p>
          </div> 
             
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/group.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Group Projects</h3>
              <p>
                A percentage of our contributions go to self development as a group. The more we build the 
                financial capability of Shangilia the more we will be able to do for others.
              </p>
            </div>            
          </div>           

        </div>
      </section>
      <!-- Group Projects -->

      <!-- ======= Youth Outreach ======= -->
      <section id="youthOutreach" class="services">
        <div class="container" data-aos="fade-up">
        
          <div class="section-title">
            <!-- <h2>Projects</h2> -->
            <h3>Youth Outreach</h3>
            <p>Youths have a special place in our mission as we belive they are the future and the key to a better tommorow.
            </p>
          </div> 

          <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Youths</h3>
              <p>
                As Shangilia we are planning events that will engage, educate and support the youth in our
                community. These include career development seminars, sports days and youth trips. 
              </p>
            </div>  
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/youth.webp" class="img-fluid" alt="">
            </div>
          
          </div>          
             
        
        </div>
      </section>
      <!-- Youth Outreach -->      

      <!-- ======= Childrens Day ======= -->
      <section id="childrensDay" class="services section-bg">
        <div class="container" data-aos="fade-up">
        
          <div class="section-title">
            <!-- <h2>Projects</h2> -->
            <h3>Childrens' Day</h3>
            <p>December 2021, mark it in your calenders. We will have a mega event for all kids in the neighbouring community.
            </p>
          </div> 

          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/children.webp" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Childrens' Day</h3>
              <p>
                Children are a blessing. The saying goes, "It takes a village to raise a child.". Shangilia 
                is commited to providing children an opportunit to learn and have fun during the mega-event planned for December.
              </p>
            </div>            
          </div>              
             
        
        </div>
      </section>
      <!-- Childrens Day -->      

  <!-- Projects Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Please subscribe to our perodic news letter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Shangilia CBO<span></span></h3>
            <p>
              Bomet, KENYA</br>
              <strong>Phone:</strong> +254 712 345 678<br>
              <strong>Email:</strong> info@shangilia.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
          </br></br>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#clients">Partners</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Leadership</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">Support</a></li>
            </ul>
          </div>
   

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us on social media.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        Copyright &copy; 2021 <strong><span>Shangilia CBO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by Kimz with <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>