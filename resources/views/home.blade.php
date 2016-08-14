<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Icons -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jQuery Link -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<script>
 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>

    <style>

    .navbar-fix{
        z-index: 10;
        background-color: rgba(255,255,255,0);
    }
    .header-banner{
        height: 600px;
        /*background-image: url("http://www.villacora.it/images/loop/02.jpg");*/
        backgroud-color: white;
        background-position: center;
    }
    .book-home{
        width: 100%;
    }
    .discount-band{
        height: 150px;
        background-color: blue;
    }
    .promo-band{   
        height: 350px;
        background-image: url("http://www.villacora.it/images/loop/02.jpg");
        background-position: center;
        /*background-color: red;*/
    }
    .home-promo-icon{
        margin: 40px 0;
        color: #ee6e73;
        font-size: 7rem;
        display: block;
    }
    .testimonial-band{
        height: 50vh;
        background-color: green
    }
    .footer{
        height: 25vh;
    }
}
    </style>
</head>
<body>

 <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
        </ul>
      </div>
    </nav>
</div>
<div class="container-fluid main-cont">
    <div class="row">
        <div class="col s12 header-banner valign-wrapper">
                <div class="valign container-fluid book-home">
                    <div class="row">
                        <div class="col s4">
                            <input type="date" class="datepicker">
                        </div>
                        <div class="col s4">
                            <input type="date" class="datepicker">
                        </div>
                        <div class="col s4">
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col s12 discount-band">
            <div class="col s5">
                <h3>Discounts and Exclusive Offers</h3>
            </div>
            <div class="input-field col s7">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col s12 promo-band">
            <div class="row">

              <div class="col s4">
                <!-- Promo Content 1 goes here -->
                <div class="center promo promo-example">
                    <i class="material-icons home-promo-icon">group</i>
                    <p class="promo-caption">User Experience Focused</p>
                    <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
                </div>
              </div>
              <div class="col s4">
                <!-- Promo Content 2 goes here -->
                <div class="center promo promo-example">
                    <i class="material-icons home-promo-icon">group</i>
                    <p class="promo-caption">User Experience Focused</p>
                    <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
                </div>
              </div>
              <div class="col s4">
                <!-- Promo Content 3 goes here -->
                <div class="center promo promo-example">
                    <i class="material-icons home-promo-icon">group</i>
                    <p class="promo-caption">User Experience Focused</p>
                    <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
                </div>
              </div>

            </div>
        </div>
        <div class="col s12 testimonial-band">

        </div>
        <div class="col s12 footer">

        </div>
    </div>
</div>
</body>
<script>
    
$(document).ready(function() {
    $('select').material_select();
});
</script>
</html>
