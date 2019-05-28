<?php require_once 'header.php' ?>
<div class="co-wrapper">
  <canvas id="canvas" width="100vw" height="100vh"></canvas>
  <div class="banner" role="banner">
    <header id="co-header" class="header">
      <div class="co-menu">
        <div class="co-mobile-menu" id="mobile-menu">
          <div class="humberger">
            <span class="bar bar-1"></span>
            <span class="bar bar-2"></span>
            <span class="bar bar-3"></span>
          </div>
        </div>
        <div class="header-branding-area">
          <div class="co-branding">
            <img src="#" alt="404 coworking space">
          </div>
        </div>
        <nav class="co-nav" role="navigation">
          <ul id="nav">
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">About</a> </li>
            <li> <a href="#">Benefits</a> </li>
            <li> <a href="#">pricing</a> </li>
            <li> <a href="#">Events</a> </li>
            <li> <a href="#">Contac us</a> </li>
            <li> <a href="#" class="special">Book now</a> </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="co-address">
      <div class="wrapper">
        <div class="address">
          <p>Olympic Estate, Olympic Kibera</p>
        </div>
        <div class="link">
          <ul>
            <li> <a href="#"><i class="fab fa-facebook-square"></i></a> </li>
            <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="co-hero" id="banner">
      <div class="scrolls">
        <div class="scroll scroll-left" onclick="plusSlides(-1)">
          <a href="#" id="prevBtn"><i class="fas fa-angle-left"></i></a>
        </div>
        <div class="scroll scroll-right" onclick="plusSlides(1)">
          <a href="#" id="nextBtn"><i class="fas fa-angle-right"></i></a>
        </div>
      </div>
      <div class="co-banner-slider">
        <div class="slider fade">
          <div class="slider-content">
            <div class="slider-header">
              <h1>Stay productive with modern workspace and co-working solutions</h1>
            </div>
            <div class="slider-info">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="#" class="co-btn">learn more</a>
            </div>
          </div>
        </div>
        <div class="slider fade">
          <div class="slider-content">
            <div class="slider-header">
              <h1>Creative coworking startup take off here</h1>
            </div>
            <div class="slider-info">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="#" class="co-btn">learn more</a>
            </div>
          </div>
        </div>
        <div class="slider fade">
          <div class="slider-content">
            <div class="slider-header">
              <h1>The collaboration of a talented community</h1>
            </div>
            <div class="slider-info">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="#" class="co-btn">learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="lines" style="text-align: center;">
        <span class="line" onclick="currentSlide(1)"></span>
        <span class="line" onclick="currentSlide(2)"></span>
        <span class="line" onclick="currentSlide(3)"></span>
      </div>
    </div>

    <!-- <section class="co-services section">
      <div class="center-wrapper services">
        <div class="service services-box">
          <p>Freelaner</p>
          <a href="#">Learn more</a>
        </div>
        <div class="service services-box">
          <p>Startup</p>
          <a href="#">Learn more</a>
        </div>
        <div class="service services-box">
          <p>Inventor</p>
          <a href="#">Learn more</a>
        </div>
        <div class="service services-box">
          <p>Business</p>
          <a href="#">Learn more</a>
        </div>
        <div class="service services-box">
          <p>Agency</p>
          <a href="#">Learn more</a>
        </div>
      </div>
      </div>
    </section> -->

    <section class="section cont">
      <div class="center-wrapper">
        <div class="co-center">
          <div class="co-sub-title">
            <h3>Learn and grow</h3>
          </div>
        </div>
      </div>
    </section>

  </div>
</div>
<?php require_once 'footer.php'?>
