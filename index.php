<?php     $request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/about' :
        require __DIR__ . '/about.php';
        break;
    default:
        http_response_code(404);
        //require __DIR__ . '/404.php';
        break;
}
?>  
<!DOCTYPE html>
<html lang="en" >

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/modal.js"></script>
  
<?php include 'includes/head.php' ?>

<body>
  <?php 
    session_start();
    $page = 'home';
    $_SESSION['page'] = $page;
    include 'includes/navigation_bar.php';
  ?>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero_index" class="d-flex align-items-center index-bg">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span class="stroke1">Welcome to </span><span class = "stroke">Shangilia</span></h1></br>
      <h2 class="stroke2">We are a team focused on making the world a better place.</h2>
      <div class="d-flex">
        <!-- <a href="#faq" class="btn-get-started">Support Us</a> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-smile"></i></div>
              <h4 class="title"><a href="projects.html">Community Work</a></h4>
              <p class="description">The main goal of Shangilia is to give back to the community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-money"></i></div>
              <h4 class="title"><a href="support.html">Investment</a></h4>
              <p class="description">We also invest in projects that will be beneficial to the group and inturn to the community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-user-check"></i></div>
              <h4 class="title"><a href="about.html">Membership</a></h4>
              <p class="description">We are a group of focused men and women from different economic, social, and ethnic backgrounds one single mindset of helping others.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-church"></i></div>
              <h4 class="title"><a href="about.html">Christianity</a></h4>
              <p class="description">We have a strong christian background with roots deep in the church.</p>
            </div> 
         </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <a href="about.html"><h2>About</h2></a> -->
          <h3>Find Out More <a href="about.html"><span>About Us</span></a></h3>
          <p>Shangilia is a CBO based in Kenya that impacts the community positively through community empowerment and outreach programs.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Community Work is our main mission</h3>
            <p class="fst-italic">
              Hebrews 13:16: Do not neglect to do good and to share what you have, for such sacrifices are pleasing to God.
            </p>
            <p>
              Shangilia first started with a group of freinds that decided to collect the money 
              they   had and visit a needy family with food stuffs, household items and good vibes.
              Shangilia has grown in numbers visiting more families and leaving them better than 
              they were before. It is our pleasure to help people, fellowship with them and let them 
              know that they are not alone.  
            </p>
            <div><a href="about.html"><button type="button" class="btn btn-success">Learn More</button></a></div>
          </div>            
        </div>

      </div>
    </section><!-- End About Section -->

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

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <a href="projects.html"><i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Homes Visited</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <a href="projects.html"><i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <a href="support.html"><i class="bx bx-money"></i>
              <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Shillings in Donations</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
             <a href="about.html"><i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
              <p>Members</p></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= 
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="section-title">
          <h3>Meet our <span>Partners</span></h3>         
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/sponsor-1.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/sponsor-2.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div> 

        </div>

      </div>
    </section> End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Projects</h2> -->
          <h3>Check out our <a href="projects.html"><span>Projects</span></a></h3>
          <p>Here are a few completed and future projects.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4><a href="projects.html#communityEvents">Community Events</a></h4>
              <p>Community events like visitations at shangilia are ongoin and will never stop.</p>       
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="projects.html#environmentalWork">Environmental Work</a></h4>
              <p>God has gifted us with hsi beautiful and we must protect it as much as possible.
                Shangilia is planning events that engage the community in environmental work.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-task"></i></div>
              <h4><a href="projects.html#groupProjects">Group Projects</a></h4>
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
              <h4><a href="projects.html#youthOutreach">Youth Outreach</a></h4>
              <p>Youths have a special place in the heart of Shangilia since all members are youths.
                Events are being planned to reach youths of in different stages of life, providing 
                spiritual nourishent, encourangement, career advice and technical trainings.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-run"></i></div>
              <h4><a href="assets/img/shangilia_na_watoto.jpg" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Shangilia na Watoto"><i class="bx "></i>Shangilia na Watoto</a></h4>
              <p>A mega event is being planned for the children within Mogogosiek Area. 
                It will be full of fun and games and will take place on December 27th, 2021 at 10:00 AM, Mogogosiek Baby Home.</p>
                <!-- <a href="#buyticket" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal">Buy Ticket</a> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

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

    <!-- ======= portfolio Section ======= 
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <h3>Check our <span>Gallery</span></h3>
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
              <a href="assets/img/portfolio/retreat-4.webp" data-portfolio="portfolioportfolio" class="portfolio-lightbox preview-link" title="Retreat - Dec 2020"><i class="bx bx-plus"></i></a>
              
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
    </section> End portfolio Section -->

    <!-- ======= Team Section ======= 
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Leadership</h2>
          <h3>Our Hardworking <span>Leaders</span></h3>
          <p>We are proud and blessed to have thes wonderful individuals as Shangilia leaders.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/blank.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Paul Bii</h4>
                <span>Director</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/deputy-director.webp" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Bernard Byegon</h4>
                <span>Deputy Director</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/blank.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Bernard Kirui</h4>
                <span>Finance Director</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/blank.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Faith Chepkemoi</h4>
                <span>Secretary General</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/blank.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Elly Mutai</h4>
                <span>Deputy Secretary General</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Team Section -->
    
    <!-- ======= Frequently Asked Questions Section ======= 
    <section id="faq" class="services  section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Support Us</h2>
          <h3>We welcome your <span>Support</span></h3>
          <p>Any and all support towards our goals is welcome.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="assets/img/mpesa.png" border="0" alt="PayPal Logo">            
              <h4><a href=""></a></h4>
              <p>We accept donations via M-Pesa. Details are below:
                <ul>
                    1. Pay Bill: 247247
                </ul>
                <ul>
                    2. Acc. No.: 05312345678
                </ul>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">            
              <h4><a href=""></a></h4>
              <p></br>We accept donations via PayPal. </br>
                Payments can be sent to the following PayPal account: <ul>shangilia@gmail.com</ul> 
              </p>
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
                  3. Acc. No.: 05312345678
                </ul>
              </p>
            </div>
          </div>
      </div>
    </section>End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Contact</h2> -->
          <a href="contact.html"><h3><span>Contact Us</span></h3></a>
          <p>Feel free to contact us. Call, text, or WhatsApp. Also connect with us through our social media profiles.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Bomet, Kenya</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@shangilia.org</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call | Text | WhatsApp</h3>
              <p>+254 799 515 669</p>
            </div>
          </div>

        </div>
<!--
        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.172497412727!2d35.269288971141464!3d-0.6179796981965908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182ba62684adc701%3A0x8fba9ecf4345a48d!2sMogogosiek!5e0!3m2!1sen!2ske!4v1619293157082!5m2!1sen!2ske" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    -->
    </section><!-- End Contact Section -->

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
            <h3>Contact Us<span></span></h3>
            <p>
              Bomet, KENYA</br>
              <strong>Phone:</strong> +254 799 515 669<br>
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
              <a href="https://twitter.com/shangiliagroup" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/Shangilia-Group-112974567708328/?ref=page_internal" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/shangilia_group/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
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


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
                  <!-- Modal -->
                  <div class="modal fade" id="buyticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Event Ticket</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="assets/api/mpesa.php">
                            <div class="form-group">
                              <label for="PhoneNumber">Phone Number</label>
                              <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter phone number">
                            </div>
                       
                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="BuyTicket" class="btn btn-primary" value="Buy Ticket" />
                          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
</body>

</html>