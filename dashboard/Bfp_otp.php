<!DOCTYPE html>
<style>
.alert {
    padding: 20px;
    background-color: #444343;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
<?php
if(isset($_COOKIE['msg']))
{
echo "<div class='alert'>
<span class='closebtn'>&times;</span>
<center><strong>".$_COOKIE['msg']."</strong></center>
</div>";
setcookie("msg", "", time() - 3600);
}
?>
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
    <form method="post" action="Bfp_get_otp.php?mob=<?php $mob=$_GET['mob']; echo $mob; ?>">
      <div class="card-content center-align">
        <span class="card-title">OTP</span>
        <div class="row">


          <div class="input-field col s12">

            <label for="email">Email OTP</label>
            <input type="text"  name="otp" id="email" />
          </div>
        </div>
      </div>

      <div class="card-action right-align">

        <input type="submit" class="btn green" value="Confirm" name="sub">
      </div>
    </form>
  </div>
</div>

    </body>
  </html>
