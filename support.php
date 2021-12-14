<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>
<script src="assets/js/modal.js"></script>

<body>
  <?php 
    session_start();
    $page = 'support';
    $_SESSION['page'] = $page;
    include 'includes/navigation_bar.php';
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Support <span class = "stroke">Shangilia</span></h1></br>
      <h2><mark>Feel free to support our noble cause.</mark></h2>
      <div class="d-flex">
        <a href="#faq" class="btn-get-started">Support Us</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="services  section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Support Us</h2> -->
          <h3>We welcome your <span>Support</span></h3>
          <p>Any and all support towards our goals is welcome.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="assets/img/mpesa.png" border="0" alt="PayPal Logo">            
              <h4><a href=""></a></h4>
              <p>We accept donations via M-Pesa. Click the button below to donate:
                  <!-- Button trigger modal -->
                  <br/>
                  <br/>
                  <a href="#donate" role="button" class="btn btn-lg btn-success" data-bs-toggle="modal">
                    Donate
                  </a>

              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">            
              <h4><a href=""></a></h4>
              <p></br>We accept donations via PayPal. </br>
                Payments can be sent to the following PayPal account: <ul>shangiliaorg@gmail.com</ul> 
              </p>
              <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="QCBUU558SLQ4J" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="assets/img/equity.png" border="0" alt="PayPal Logo">            
              <h4><a href=""></a></h4>
              <p>We accept donations via direct deposits also.
                <ul>
                    1. Bank: Equity
                </ul>
                <ul>
                    2. Branch: Litein
                </ul>
                <ul>
                  3. Acc. No.: 
                </ul>
              </p>
            </div>
          </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

  
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
              <strong>Phone:</strong> +254 712 345 678<br>
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

                  <!-- Modal -->
                  <div class="modal fade" id="donate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Mpesa Donation</h5>
                        </div>
                        <div class="modal-body">
                        <form method = "post" action = "api/mpesaDonation.php">
                          <div class="form-row align-items-center">
                            <div class="col-auto">
                              <label class="sr-only" for="inlineFormInput">Phone Number</label>
                              <input type="text" class="form-control mb-2" id="phoneNumber" name="phoneNumber" placeholder="0712345678">
                            </div>
                            <div class="col-auto">
                              <label class="sr-only" for="inlineFormInputGroup">Amount</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">KES</div>
                                </div>
                                <input type="number" class="form-control" id="amount" placeholder="Amount" name="amount">
                              </div>
                            </div>
                            <div class="modal-footer">                              
                            <button type="button" id='closeModal' class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="Donate" class="btn btn-primary" value="Donate" />
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
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