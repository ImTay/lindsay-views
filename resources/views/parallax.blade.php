
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="Materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="Materialize/templates/parallax-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="assets/css/unslider.css">
  <link rel="stylesheet" href="assets/css/unslider-dots.css">
</head>
<body>
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="parallax" class="brand-logo"><img src="https://seaturtles.org/wp-content/uploads/2014/01/turtle-icon-new.png" alt="" ></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Book Now</a></li>
          <li><a href="rooms-and-rates">Rooms &amp; Rates</a></li>
          <li><a href="about">About us</a></li>
          <li><a href="#">Activities</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Book Now</a></li>
          <li><a href="rooms-and-rates">Rooms &amp; Rates</a></li>
          <li><a href="about">About us</a></li>
          <li><a href="#">Activities</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">&nbsp;</h1>
        <div class="row center">
          <div class="input-field col s5">
            <label for="check_in" class="checkin-label">Check In</label>
          </div>
          <div class="input-field col s5">  
           <label for="check_out" class="checkin-label">Check Out</label>
          </div>
          <div class="input-field col s2">  
           <label for="people" class="checkin-label"># People</label>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s5">
            <input placeholder="Click to choose" type="date" class="datepicker">
          </div>
          <div class="input-field col s5">
            <input placeholder="Click to choose" type="date" class="datepicker">
          </div>
          <div class="input-field col s2">
            <select>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        <!--<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 button-home">Book</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="http://api.ning.com/files/qSAS7eZtx6D17xN7buDpPsJAZ0IbKQ9luk08HJsYn1j8rtXOrq7YTWlnlOWcCfwMn369Ag-jN6C6TB4WgQvP0MhpXjtZI8TT/3d_lux~uxury_homes_las_vegas.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row center valign-wrapper" id="block">
        <div class="col s12 m4 l2 valign-wrapper home-email-wrapper valign">
          <h4 class="flow-text valign">Discounts and Exclusive Offers</h4>
        </div>
        <div class="input-field col s12 m5 l7 valign-wrapper home-email-wrapper valign">
          <input id="email" type="email" placeholder="Email" class="validate valign">
        </div>
        <div class="input-field col s12 m3 l3 valign-wrapper home-email-wrapper valign">
          <button class="btn waves-effect waves-light button-home" id="home-email-button" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="row no-pad-bot">
      <div class="container">
        <div class="row">
          <div class="col s12 m4 fire-1">
            <div class="icon-block">
              <div class="center">
                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 button-home">About us</a>
                <p class="flow-text home-line-height">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam officia laboriosam aut adipisci amet doloribus ipsa quia inventore illo, consequuntur debitis error sunt sequi ducimus consequatur fuga nobis facere odio.</p>
              </div>
            </div>
          </div>

          <div class="col s12 m4 fire-2">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">group</i></h2>

              <div class="center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 button-home">Gallery</a>
                <p class="flow-text home-line-height">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam officia laboriosam aut adipisci amet doloribus ipsa quia inventore illo, consequuntur debitis error sunt sequi ducimus consequatur fuga nobis facere odio.</p>
              </div>
            </div>
          </div>

          <div class="col s12 m4 fire-3">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">settings</i></h2>

              <div class="center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 button-home">Rooms &amp; Rates</a>
                <p class="flow-text home-line-height">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam officia laboriosam aut adipisci amet doloribus ipsa quia inventore illo, consequuntur debitis error sunt sequi ducimus consequatur fuga nobis facere odio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://www.funchap.com/wp-content/uploads/2015/08/nice-caribbean-beach-wallpaper-2015.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row valign-wrapper" id="block">
        <div class="col s12 m6 center valign">
          <h3>Testimonials</h3>
          <div class="my-slider">
            <ul>
              <li>
                <p>12121212Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolore repudiandae fugit maiores rem ad molestiae architecto aspernatur voluptatibus, ducimus, eius distinctio saepe quam eum fugiat earum debitis. Repellat, sed.</p>
              </li>
              <li>
                <p>1313131313Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolore repudiandae fugit maiores rem ad molestiae architecto aspernatur voluptatibus, ducimus, eius distinctio saepe quam eum fugiat earum debitis. Repellat, sed.</p>
              </li>
              <li>
                <p>141414141414Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolore repudiandae fugit maiores rem ad molestiae architecto aspernatur voluptatibus, ducimus, eius distinctio saepe quam eum fugiat earum debitis. Repellat, sed.</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col s12 m6 center">
          <div class="some-pannel">
            <div class="map-wrapper">
              <div id="googleMap" style="width:100%;height:100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25622.113183988953!2d174.68094955136624!3d-36.60798901925338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d2471b0e383c5%3A0x500ef6143a2fe20!2sRed+Beach!5e0!3m2!1sen!2snz!4v1468540068488" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Luxury living, ready for you.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="Materialize/templates/parallax-template/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l2 s12 center">
          <a href="#"><img src="https://seaturtles.org/wp-content/uploads/2014/01/turtle-icon-new.png" alt="" width="100px"></a>
          <p class="grey-text text-lighten-4">Seaside B&amp;B</p>
          <p class="grey-text text-lighten-4">Red Beach Marellen</p>
        </div>
        <div class="col l4 push-l1 m4 s12">
          <ul class="footer-contact">
            <li class="valign-wrapper">
              <img src="assets/img/tel.png" class="valign" alt="">
              <p  class="valign">+64 021 090 910</p></li>
            <li class="valign-wrapper">
              <img src="assets/img/at.png" alt="">
              <p>lindsay@watkins.com</p></li>
            <li class="valign-wrapper">
              <img src="assets/img/loc.png" alt=""> 
              <p>26 Fake St Hamilton <br> New Zealand</p></li>
          </ul>
        </div>
        <div class="col l2 push-l1 m4 s12">
          <p>SITEMAP</p>
          <ul>
            <li><a class="white-text" href="#!">Rooms &amp; Rates</a></li>
            <li><a class="white-text" href="#!">About Us </a></li>
            <li><a class="white-text" href="#!">Contact </a></li>
            <li><a class="white-text" href="#!">Book a Room </a></li>
            <li><a class="white-text" href="#!">Activites</a></li>
          </ul>
        </div>
        <div class="col l2 push-l1 m4 s12">
          <p>SUPPORT</p>
          <ul>
            <li><a class="white-text" href="#!">FAQ</a></li>
            <li><a class="white-text" href="#!">Contact Us</a></li>
            <li><a class="white-text" href="#!">Live Chat</a></li>
            <li><a class="white-text" href="#!">Phone us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Developed by <a class="brown-text text-lighten-3" href="http://developersquared.co.nz">Developer Squared</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/home-page.js"></script>
  <script src="Materialize/dist/js/materialize.js"></script>
  <script src="pickadate.js-3.5.6/lib/picker.js"></script>
  <script src="assets/js/unslider-min.js"></script>

  <script src="Materialize/templates/parallax-template/js/init.js"></script>
  </body>
</html>
