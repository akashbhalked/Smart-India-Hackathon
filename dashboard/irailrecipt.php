<!DOCTYPE html>
<html>
<head>
<?php
include 'irailsessionchecker.php';
 ?>
<?php
if(isset($_GET['rrnum']))
$rrnum=$_GET['rrnum']
?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      //Date range as a button
      $('#daterange-btn').daterangepicker(
          {
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
          },
          function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
  </script>

  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['Rusername']; ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php
      include ('iesidenav.php');
     ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <form method="post" action="insertRecipt.php">
      <div class="row">

        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title" style="margin-left:40%;"><center> RR DETAILS </center></h3>
            </div>
            <div class="box-body">
              <div class="row">
              <div class="col-md-4">
                <label>Enter RR Number</label>
                <input type="" class="form-control" name="rrnum" value="<?php echo $rrnum; ?>" placeholder="Enter RR Number">
              </div>

              <div class="col-md-4">
                <label>Enter RR Date</label>
                <input type="date" class="form-control" name="rrdate" placeholder="Enter RR Date">
              </div>
              <div class="col-md-2">
                  <label>Type I</label>
                  <select name="type1" class="form-control">
                    <option value="Paid">Paid</option>
                    <option value="Topay">Topay</option>
                    <option value="Paid-cum-ToPay">Paid-cum-ToPay</option>
                  </select>
                </div>

                <div class="col-md-2">
                    <label>Type II</label>
                    <select  name="type2" class="form-control">
                      <option value="Local">Local</option>
                      <option value="Foreign">Foreign</option>
                    </select>
                  </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-4">
              <label>Enter FNR Number</label>
              <input type="text" class="form-control" name="frnnum" placeholder="Enter FNR Number">
            </div>

            <div class="col-md-4">
              <label>Enter Invoice Date</label>
              <input type="date" class="form-control" name="invdate" placeholder="Enter Invoice Date">
            </div>
            <div class="col-md-4">
              <label>Enter Invoice Number</label>
              <input type="text" class="form-control" name="invnum" placeholder="Enter Invoice Number">
            </div>
          </div>
          <br>
          <div class="row">
          <div class="col-md-3">
            <label>Enter Zone Code</label>
            <input type="text" class="form-control" name="zonecode" placeholder="Enter Zone Number">
          </div>

          <div class="col-md-3">
            <label>Enter Risk Rate</label>
            <select name="RiskRate" class="form-control">
              <option value="OR">OR</option>
              <option value="RR">RR</option>
            </select>
          </div>
          <div class="col-md-3">

            <label>HNDLD Type</label>
            <input type="text" name="handledBy" class="form-control" placeholder="Handled By">
            </div>

          <div class="col-md-3">
            <label>Enter Rate Type</label>
            <input type="text" class="form-control" name="rateType" placeholder="Enter Rate Type">
          </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4">
          <label>Enter Total CHRG WT</label>
          <input type="text" class="form-control" name="CHRG" placeholder="Enter Total CHRG WT">
        </div>

        <div class="col-md-4">
          <label>ENTER Chargable distance</label>
          <input type="text" class="form-control" name="charDist" placeholder="Enter Chargable Distance">
        </div>
        <div class="col-md-4">
          <label>Enter Rate</label>
          <input type="text" class="form-control" name="rate" placeholder="Enter Rate">
        </div>
      </div>
      <br>

          <div class="form-group">
            <label>CHARGED VIA</label>
            <input type="text" class="form-control" name="charVia" placeholder="Enter Route">
          </div>
      <div class="row">
      <div class="col-md-10">
        <label>From Station/SIDING</label>
        <input type="text" class="form-control" name="from" placeholder="Enter Source Station">
      </div>
      <div class="col-md-2">
        <label>Station Code</label>
        <input type="text" class="form-control" name="fromStationCode" placeholder="Enter Station Code">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-10">
      <label>TO Station/SIDING</label>
      <input type="text" class="form-control" name="to" placeholder="Enter Destination Station">
    </div>
    <div class="col-md-2">
      <label>Station Code</label>
      <input type="text" class="form-control" name="toStationCode" placeholder="Enter Station Code">
    </div>
  </div>
  <br>
    <div class="form-group">
      <label>Sender's Name</label>
      <input type="text" class="form-control" name="sendName" placeholder="Enter Sender's Name">
    </div>

    <div class="form-group">
      <label>Sender's Address</label>
      <input type="text" class="form-control" name="sendAdd" placeholder="Enter Sender's Address">
    </div>

    <div class="form-group">
      <label>CONSIGNEE NAME</label>
      <input type="text" class="form-control" name="congName" placeholder="Enter consignee Name">
    </div>

    <div class="form-group">
      <label>CONSIGNEE ADDRESS</label>
      <input type="text" class="form-control" name="congAdd" placeholder="Enter consignee Address">
    </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <h3 style="margin-left:25%;">DESCRIPTION OF GOOD</h3>
                </div>
                <div class="col-md-6 form-group">
                  <h3 style="margin-left:15%;">WEIGHMENT PARTICULARS</h3>
                </div>
              </div>

                            <div class="row">
                              <div class="col-md-6 form-group">
                                <div class="form-group">
                                  <label>COMMODITY CODE</label>
                                  <input type="text" class="form-control" name="commCode" placeholder="Enter Commodity Code">
                                </div>
                                <div class="form-group">
                                  <label>NO OF ARTICLES</label>
                                  <input type="text" class="form-control" name="Artnum" placeholder="Enter number of Articles">
                                </div>
                                <div class="form-group">
                                  <label>PACKAGE CODE</label>
                                  <input type="text" class="form-control" name="packCode" placeholder="Enter pckg code">
                                </div>
                              </div>
                              <div class="col-md-6 form-group">

                                <div class="form-group">
                                  <label>ACTUAL WEIGHT</label>
                                  <input type="text" class="form-control" name="actWt" placeholder="Enter actual weight">
                                </div>
                                <div class="form-group">
                                  <label>OVER WT. CHBL AT PUN RATE</label>
                                  <input type="text" class="form-control" name="overWt" placeholder="Enter Overweight chargeable Rate">
                                </div>

                              <div class="form-group">
                                <label>CHARGEABLE RATE</label>
                                <input type="text" class="form-control" name="charRate" placeholder="Enter chargeable Rate">
                              </div>
                            </div>
                          </div>
                            <hr>

                            <br>
        <div class="box">
           <div class="box-header">
             <h3 class="box-title">Condensed Full Width Table</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body with-border">
             <table class="table table-bordered">
               <tr>
                 <th style="width: 10px">#</th>
                 <th style="width: 5px">OTHER CHARGES</th>
                 <th style="width: 10px">REBATE</th>
                  <th style="width: 40px">PAID ON CHRG</th>
                  <th style="width: 8px">UNDER CHRG</th>
                   <th style="width: 40px">OVER CHRG</th>
               </tr>
               <tr>
                 <td>1.</td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" name="otherChar" placeholder="Enter Amount">
                 </div>
                </td>
                 <td> <div class="form-group">
                   <input type="text" class="form-control" name="rebate" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" name="paidOnChar" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" name="underChar" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" name="OverChar" placeholder="Enter Amount">
                 </div>
                </td>

               </tr>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->


       <!-- /.form group -->


       <!--div class="form-group row">
         <div class="col-md-12">
           <h2>ALLOCATION AND OTHER DETAILS</h2>
           <div class="form-group">
             <label>ACTT'S HEAD</label>
             <input type="text" class="form-control" placeholder="Enter ACTT'S HEAD">
           </div>
           <div class="form-group">
             <label>DEPT. TO BE DEBITED</label>
             <input type="text" class="form-control" placeholder="Enter DEPT. TO BE DEBITED">
             </div>
             <div class="form-group">
             <label>A. OFFICER</label>
             <input type="text" class="form-control" placeholder="Enter A. OFFICER NAME">
           </div>
         </div>
       </div--!>
       <!-- textarea -->
               <div class="form-group">
                 <label>COMMODITY DESCRIPTION</label>
                 <textarea class="form-control" name="remark" rows="3" placeholder="Enter ..."></textarea>
               </div>
                    <input type="submit" name="sub" class="btn btn-block btn-primary" value="Primary"/>

 </div>

              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
      </div>
    </form>
    </section>
        <!-- right col -->
  </div>
      <!-- /.row (main row) -->


    <!-- /.content -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">

        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
