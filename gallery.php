<?php     

session_start(); // Start session at the very beginning

$request = $_SERVER['REQUEST_URI'];
$page = 'gallery'; // Default page

switch ($request) {

    case '/about' :
        require __DIR__ . '/about.php';
        break;
    default:
        http_response_code(404);
        //require __DIR__ . '/404.php';
        break;
}
$_SESSION['page'] = $page;

// Start output buffering to prevent "headers already sent" issues
ob_start();
?>  
<!DOCTYPE html>
<html lang="en" >

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/modal.js"></script>
  
<?php include 'includes/head.php' ?>

<body>
  <?php 
    include 'includes/navigation_bar.php';
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span class = "stroke">Shangilia</span></h1></br>
      <h2 ><mark>A picture speaks a thousand words.</mark></h2>
      <div class="d-flex">
        <!-- <a href="#faq" class="btn-get-started">Support Us</a> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    
    <!-- End Skills Section -->

  

    

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Gallery</h2> -->
          <h3>Check out our <span>Gallery</span></h3>
          <p>A picture is worth a thousand words.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-visit">Community Work</li>
              <li data-filter=".filter-retreat">Group Retreat</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-1.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>The road may be treaturous but we will reach our desitination</p>
              <a href="assets/img/portfolio/visit-1.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-2.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>Giving</p>
              <a href="assets/img/portfolio/visit-2.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-1.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Mix and Match</p>
              <a href="assets/img/portfolio/retreat-1.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-2.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Ladies and Gentlemen</p>
              <a href="assets/img/portfolio/retreat-2.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-3.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>Men at work, firewood collecting.</p>
              <a href="assets/img/portfolio/visit-3.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-6.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>Group Photo</p>
              <a href="assets/img/portfolio/visit-6.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-5.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>A united Shangilia</p>
              <a href="assets/img/portfolio/visit-5.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-3.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>The one and only Frenda</p>
              <a href="assets/img/portfolio/retreat-3.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visit">
            <img src="assets/img/portfolio/visit-4.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Visit - April 2021</h4>
              <p>Helping others</p>
              <a href="assets/img/portfolio/visit-4.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Visit - April 2021"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-12.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Shangilia members doing the #JerusalemaChallenge</p>
              <a href="assets/img/portfolio/retreat-12.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-5.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Pose for the camera</p>
              <a href="assets/img/portfolio/retreat-5.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-6.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Finance director and a balloon</p>
              <a href="assets/img/portfolio/retreat-6.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-7.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Ready to play pop the balloon</p>
              <a href="assets/img/portfolio/retreat-7.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-retreat">
            <img src="assets/img/portfolio/retreat-8.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Retreat - Dec 2020</h4>
              <p>Selfie time</p>
              <a href="assets/img/portfolio/retreat-8.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End portfolio Section -->

  
    
   
    
  </main><!-- End #main -->

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
              <strong>Phone:</strong>+254 799 515 669<br>
              <strong>Email:</strong> <a href="mailto:info@shangilia.org">info@shangilia.org</a><br>
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