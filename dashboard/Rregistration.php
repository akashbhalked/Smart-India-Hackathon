<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/styles.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
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

            <div class="nav-wrapper" style="background-color:#3C8DBC;">
                <a href="#!" class="brand-logo">Logo</a>
                <!--a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
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

        <div class="valign-wrapper row login-box" style="margin-top:5em; margin-left:30%";>
            <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4" style="width:80%">
                <form method="post" action="Rregister.php">
                    <div class="card-content center-align">
                        <span class="card-title"><b>Indian Railway Registration Panel</b></span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" class="validate" name="email" id="email" />
                                <label for="email">Email</label>
                                <span class="form-error" id="email-err"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="fname" id="firstname" />
                                <label for="firstname">First name</label>
                                <span class="form-error" id="firstname-err"></span>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="lname" id="secondname" />
                                <label for="secondname">Second name</label>
                                <span class="form-error" id="secondname-err"></span>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="uname" id="uname" class="validate" />
                                <label for="eid">Employee ID</label>
                                <span class="form-error" id="eid-err"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" class="validate" name="password" id="password"    />
                                <label for="password">Password</label>
                                <span class="form-error" id="password-err"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div id="pswd_info">
                                <h5>Password must meet the following requirements:</h5>
                                <ul class="pswd_rules">
                                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" class="validate" name="rep-password" id="rep-password" />
                                <label for="rep-password">Repeat Password</label>
                                <span class="form-error" id="rep-password-err"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col s12">
                                +91
                                <div class="input-field inline">
                                    <input type="number" class="validate" name="mob" id="mob" data-length="10" />
                                    <label for="phone">Phone Number</label>
                                    <span class="form-error" id="phone-err"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="position" id="position" />
                                <label for="pos">Position</label>
                                <span class="form-error" id="pos-err"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="date" class="validate" name="dob" id="dob" />

                                <label for="dob">DOB (DD/MM/YYYY)</label>
                            </div>
                        </div>
                        <!--
<div class="row">
<div class="input-field col s12">
<input type="email" class="validate" name="email" id="email" />
<label for="email">DOB</label>
</div>
</div>
-->


                    </div>
                    <div class="right-align">
                        <a href="login.php">Already a User?</a>
                    </div>
                    <div class="card-action right-align">

                        <input type="submit" class="btn green" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
        <p id="dshow"></p>

        <script type="text/javascript" src="js/val.js"></script>

    </body>
</html>
