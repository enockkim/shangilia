  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between head_size">
      <div class="contact-info d-flex align-items-center logo ">
        <a href="index.php" class="logo"><img src="assets/img/shangilia-logo-icon.webp" alt="Shangilia"> Shangilia Group</a>
        <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@shangilia.com">shangiliaorg@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 712 345 678</span></i> -->
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/shangiliagroup" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/Shangilia-Group-112974567708328/?ref=page_internal" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/shangilia_group/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class=" container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.php">Shangilia<span></span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/shangilia-logo-icon.webp" alt="Shangilia"> Shangilia</a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <?php 
            $page = $_SESSION['page']; 
            switch($page){
              case 'home';
          ?>
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link active" href="index.php">Home</a></li>
            <li><a class="nav-link" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link" href="projects.php">What We Do</a></li>
            <li><a class="nav-link " href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link" href="support.php">Get Involved</a></li>
            <li><a class="nav-link" href="contact.php">Contact Us</a></li>
          <?php break;
              case 'about'; ?>
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link active" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link" href="projects.php">What We Do</a></li>
            <li><a class="nav-link " href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link" href="support.php">Get Involved</a></li>
            <li><a class="nav-link" href="contact.php">Contact Us</a></li>
          <?php break;
              case 'projects'; ?>            
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link active" href="projects.php">What We Do</a></li>
            <li><a class="nav-link " href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link" href="support.php">Get Involved</a></li>
            <li><a class="nav-link" href="contact.php">Contact Us</a></li>
          <?php break;
              case 'gallery'; ?>
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link" href="projects.php">What We Do</a></li>
            <li><a class="nav-link active" href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link" href="support.php">Get Involved</a></li>
            <li><a class="nav-link" href="contact.php">Contact Us</a></li>
          <?php break;
              case 'support'; ?>
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link" href="projects.php">What We Do</a></li>
            <li><a class="nav-link" href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link active" href="support.php">Get Involved</a></li>
            <li><a class="nav-link" href="contact.php">Contact Us</a></li>
          <?php break;
              case 'contact'; ?>
            <!-- <script>if page == "index"</script> -->
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="about.php">About Us</a></li>
            <!-- <li><a class="nav-link" href="#clients">Partners</a></li> -->
            <li><a class="nav-link" href="projects.php">What We Do</a></li>
            <li><a class="nav-link " href="gallery.php">Resources</a></li>
            <!-- <li><a class="nav-link" href="leadership.php">Leadership</a></li> -->
            <li><a class="nav-link" href="support.php">Get Involved</a></li>
            <li><a class="nav-link active" href="contact.php">Contact Us</a></li> 
          <?php break; 
              }?>              
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->