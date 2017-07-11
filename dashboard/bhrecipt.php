<?php
include 'bhheader.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php
      include'bhsidenav.php';
     ?>
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
                <input type="text" class="form-control" placeholder="Enter RR Number">
              </div>

              <div class="col-md-4">
                <label>Enter RR Date</label>
                <input type="text" class="form-control" placeholder="Enter RR Date">
              </div>
              <div class="col-md-2">
                  <label>Type I</label>
                  <select class="form-control">
                    <option>Paid</option>
                    <option>Topay</option>
                    <option>Paid-cum-ToPay</option>
                  </select>
                </div>

                <div class="col-md-2">
                    <label>Type II</label>
                    <select class="form-control">
                      <option>Local</option>
                      <option>Foreign</option>
                    </select>
                  </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-4">
              <label>Enter FNR Number</label>
              <input type="text" class="form-control" placeholder="Enter FNR Number">
            </div>

            <div class="col-md-4">
              <label>Enter Invoice Date</label>
              <input type="text" class="form-control" placeholder="Enter Invoice Date">
            </div>
            <div class="col-md-4">
              <label>Enter Invoice Number</label>
              <input type="text" class="form-control" placeholder="Enter Invoice Number">
            </div>
          </div>
          <br>
          <div class="row">
          <div class="col-md-3">
            <label>Enter Zone Code</label>
            <input type="text" class="form-control" placeholder="Enter Zone Number">
          </div>

          <div class="col-md-3">
            <label>Enter Risk Rate</label>
            <select class="form-control">
              <option>OR</option>
              <option>RR</option>
            </select>
          </div>
          <div class="col-md-3">

            <label>HNDLD Type</label>
            <input type="text" class="form-control" placeholder="Handled By">
            </div>

          <div class="col-md-3">
            <label>Enter Rate Type</label>
            <input type="text" class="form-control" placeholder="Enter Rate Type">
          </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4">
          <label>Enter Total CHRG WT</label>
          <input type="text" class="form-control" placeholder="Enter Total CHRG WT">
        </div>

        <div class="col-md-4">
          <label>ENTER Chargable distance</label>
          <input type="text" class="form-control" placeholder="Enter Chargable Distance">
        </div>
        <div class="col-md-4">
          <label>Enter Rate</label>
          <input type="text" class="form-control" placeholder="Enter Rate">
        </div>
      </div>
      <br>

          <div class="form-group">
            <label>CHARGED VIA</label>
            <input type="text" class="form-control" placeholder="Enter Route">
          </div>
      <div class="row">
      <div class="col-md-10">
        <label>From Station/SIDING</label>
        <input type="text" class="form-control" placeholder="Enter Source Station">
      </div>
      <div class="col-md-2">
        <label>Station Code</label>
        <input type="text" class="form-control" placeholder="Enter Station Code">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-10">
      <label>TO Station/SIDING</label>
      <input type="text" class="form-control" placeholder="Enter Destination Station">
    </div>
    <div class="col-md-2">
      <label>Station Code</label>
      <input type="text" class="form-control" placeholder="Enter Station Code">
    </div>
  </div>
  <br>
    <div class="form-group">
      <label>Sender's Name</label>
      <input type="text" class="form-control" placeholder="Enter Sender's Name">
    </div>

    <div class="form-group">
      <label>Sender's Address</label>
      <input type="text" class="form-control" placeholder="Enter Sender's Address">
    </div>

    <div class="form-group">
      <label>CONSIGNEE NAME</label>
      <input type="text" class="form-control" placeholder="Enter consignee Name">
    </div>

    <div class="form-group">
      <label>CONSIGNEE ADDRESS</label>
      <input type="text" class="form-control" placeholder="Enter consignee Address">
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
                                  <input type="text" class="form-control" placeholder="Enter Commodity Code">
                                </div>
                                <div class="form-group">
                                  <label>NO OF ARTICLES</label>
                                  <input type="text" class="form-control" placeholder="Enter number of Articles">
                                </div>
                                <div class="form-group">
                                  <label>PACKAGE CODE</label>
                                  <input type="text" class="form-control" placeholder="Enter pckg code">
                                </div>
                              </div>
                              <div class="col-md-6 form-group">

                                <div class="form-group">
                                  <label>ACTUAL WEIGHT</label>
                                  <input type="text" class="form-control" placeholder="Enter actual weight">
                                </div>
                                <div class="form-group">
                                  <label>OVER WT. CHBL AT PUN RATE</label>
                                  <input type="text" class="form-control" placeholder="Enter Overweight chargeable Rate">
                                </div>

                              <div class="form-group">
                                <label>CHARGEABLE RATE</label>
                                <input type="text" class="form-control" placeholder="Enter chargeable RatE">
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
                   <input type="text" class="form-control" placeholder="Enter Amount">
                 </div>
                </td>
                 <td> <div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter Amount">
                 </div>
                </td>
                 <td><div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter Amount">
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
       </div-->
       <!-- textarea -->
               <div class="form-group">
                 <label>COMMODITY DESCRIPTION</label>
                 <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
               </div>
                    <button type="button" class="btn btn-block btn-primary">Primary</button>

 </div>

              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
      </div>

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
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
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
