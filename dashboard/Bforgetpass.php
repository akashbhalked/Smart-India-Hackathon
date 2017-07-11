<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      $(document).ready(function(){
            $(".button-collapse").sideNav();
      });
      $("#reset").on("click", function() {
  $('label').removeClass('active');
});
      </script>
      <style>
      .brand-logo{
        margin-left: 1em;
      }
      .center{
        margin-left: 1000px;
      }
      </style>
    </head>

    <body>
      <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Indian Railway</a></li>
        <li class="divider"></li>
    <li><a href="#!">Steel Plant</a></li>
  </ul>
      <nav>

    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <!-- Dropdown Trigger -->
      <!--li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="badges.html">Register</a></li>
        <!--li><a href="collapsible.html"></a></li>
        <li><a href="mobile.html">Mobile</a></li-->
      </ul>
      <!--ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Login as Indian Railway</a></li>
        <li><a href="sass.html">Login as Steel Plant</a></li>
        <li><a href="badges.html">Register</a></li>
        <!--li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li-->
      </ul>
    </div>
  </nav>

  <div class="valign-wrapper row login-box" style="margin-top:5em;">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="post" action="Bgen_otp.php">
      <div class="card-content center-align">
        <span class="card-title">Forget Password</span>
        <div class="row">


          <div class="input-field col s12">

            <label for="mob">Mobile</label>
            <input type="text" class="validate" name="mob" id="mob" />
          </div>
          <div class="input-field col s12">
            <label for="DOB">Date Of Birth (YYYY-MM-DD) </label>
            <input type="text" class="validate" name="dob" id="dob" />
          </div>
        </div>
      </div>
      <div class="card-action right-align">

        <input type="submit"  class="btn green" value="Forget Password" name="sub"/>
      </div>
    </form>
  </div>
</div>

    </body>
  </html>
