<?php
include 'irailsessionchecker.php';
include 'ieheader.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php
      include'iesidenav.php';
     ?>
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice

      </h1>

    </section>
<?php
include_once('config.php');
$rrnum=$_GET['rrnum'];
 $query = $connection->prepare("SELECT * FROM reciept where rrnum=$rrnum");
                     $query->execute();
                     $query->store_result();
                     $query->bind_result($rec['rid'],$rec['rrnum'], $rec['rrdate'],$rec['type1'],$rec['type2'],$rec['frnnum'],$rec['invdate'],$rec['invnum'],$rec['zonecode'],$rec['RiskRate'],$rec['handledBy'],$rec['rateType'],$rec['CHRG'],$rec['charDist'],$rec['rate'],$rec['charVia'],$rec['from'],$rec['fromStationCode'],$rec['to'],$rec['toStationCode'],$rec['sendName'],$rec['sendAdd'],$rec['congName'],$rec['congAdd'],$rec['commCode'],$rec['Artnum'],$rec['packCode'],$rec['actWt'],$rec['overWt'],$rec['charRate'],$rec['otherChar'],$rec['rebate'],$rec['paidOnChar'],$rec['underChar'],$rec['OverChar'],$rec['remark'],$rec['status'],$rec['byemp']);
                     $j=$query->num_rows;
                     for ($i=0;$i<$j;$i++)
                     {
                        $query->data_seek($i);
                        $query->fetch();
                        foreach ($rec as $key=>$value)
                        {
                            $result[$key]=$value;

                        }
                     }
?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Bhilai Steel Plant
            <small class="pull-right">Date: <?php echo $result['rrdate'];?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <b><p style="margin:0px;">RR No: &nbsp;&nbsp;&nbsp; <?php echo $result['rrnum'];?></p></b>

          <p style="margin:0px;"><b>FNR: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['frnnum'];?></b></p>
          <br>
          <p ><b>RISK RATE: &nbsp;&nbsp;</b><?php echo $result['RiskRate'];?></p>
          <p><b>ZONE CODE: </b>&nbsp;&nbsp;<?php echo $result['zonecode'];?></p>

        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <br><br><br><br><br><p><b>Type1:</b>&nbsp;&nbsp;<?php echo $result['type1'];?></p>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice: </b><?php echo $result['invnum'];?><br>
          <b>Date:&nbsp;&nbsp;</b><?php echo $result['invdate'];?><br>
          <br><br><br><p><b>Type2:&nbsp;&nbsp;</b><?php echo $result['type2'];?></p>
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
              <th>Rate </th>
              <th>Rate Type</th>
              <th>Chargeable Wt.</th>
              <th>Chargeable Distance</th>

            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $result['rate'];?></td>
              <td><?php echo $result['rateType'];?></td>
              <td><?php echo $result['CHRG'];?></td>
              <td><?php echo $result['charDist'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <p><b>Charged VIA: </b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['charVia'];?></p>
      <br><br>
      <div class="col-sm-4 invoice-col">
      <p style="margin:0px;"><b>Source Station : </b> <?php echo $result['from'];?></p>
      <p style="margin:0px;"><b>Destintion Station : </b><?php echo $result['to'];?></p>
      <br><br>
      <p><b>Sender's Name : </b><?php echo $result['sendName'];?></p>
      <p><b>Sender's Address : </b></p>
      <p><?php echo $result['sendAdd'];?></p>
      </div>

        <div class="col-sm-4 invoice-col">
        </div>
      <div class="col-sm-4 invoice-col">
          <b> CODE :  <?php echo $result['fromStationCode'];?></b><br>
          <b> CODE :  <?php echo $result['toStationCode'];?></b><br>
      <br><br>
      <p><b>Consignee Name : </b><?php echo $result['congName'];?></p>
      <p><b>Consignee Address :</b></p>
      <p><?php echo $result['congAdd'];?></p>

      </div>

      <br><br>
      <br><br><br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
              <th colspan="2">Description of Good </th>
              <th colspan="2">Weighment Particulars</th>


            </tr>
            </thead>
            <tbody>
            <tr>
              <td>CMDT</td>
              <td><?php echo $result['commCode'];?></td>
              <td>Actual Weight</td>
              <td><?php echo $result['actWt'];?></td>
            </tr>
            <tr>
              <td>NO OF ARTICLES</td>
              <td><?php echo $result['Artnum'];?></td>
              <td>Over WT. CHBL AT PUN RATE</td>
              <td><?php echo $result['overWt'];?></td>
            </tr>
            <tr>
              <td>PCKG CODE</td>
              <td><?php echo $result['packCode'];?></td>
              <td>CHARGEABLE RATE</td>
              <td><?php echo $result['charRate'];?></td>
            </tr>


          </table>
        </div>
      </div>
      <br>
      <p><b>Frieght: 02012</b></p>
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
              <th >OTHER  CHARGES </th>
              <th >REBATE</th>
              <th >PAID ON CHARGE</th>
              <th >UNDER CHARGE</th>
              <th >OVER CHARGE</th>


            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $result['otherChar'];?></td>
              <td><?php echo $result['rebate'];?></td>
              <td><?php echo $result['paidOnChar'];?></td>
              <td><?php echo $result['underChar'];?></td>
              <td><?php echo $result['OverChar'];?></td>

            </tr>

          </table>
        </div>
      </div>
      <p><b>TOTAL FREIGHT: 4493217</b></p>
      <br><br>



      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Sr. No</th>
              <th>OWN/</th>
              <th>TYPE</th>
              <th>WGON NUMB.</th>
              <th>CC (T)</th>
              <th>TARE (T)</th>
              <th>CMDT CODE</th>
              <th>GRSS WT</th>
              <th>ACTL WT</th>
              <th>PRM CC</th>
              <th>TOTAL</th>
              <th>NORM RATE</th>
              <th>PUN RATE</th>
              <th>CHBL WT</th>

            </tr>
            </thead>
            <tbody>
            <?php
            include_once('config.php');
            $rrnum=$_GET["rrnum"];
                $query = $connection->prepare("SELECT * FROM invoice where rrnum=$rrnum");

                     $query->execute();
                     $query->store_result();
                     $query->bind_result($rec['iid'],$rec['rrnum'], $rec['box'],$rec['wtype'],$rec['a'],$rec['b'],$rec['c'],$rec['d'],$rec['e'],$rec['f'],$rec['g'],$rec['h'],$rec['i'],$rec['j']);                // $j=$query->num_rows;
                      $j=$query->num_rows();
                      for($i=0;$i<$j;$i++)
                      {
                        $query->data_seek($i);
                        $query->fetch();
                        foreach($rec as $key=>$value)
                        {
                            $row[$key]=$value;
                        }
                    echo "<tr>";
                    echo "<td>" . $row['iid'] . "</td>";
                    echo "<td>" . $row['rrnum'] . "</td>";
                    echo "<td>" . $row['box'] . "</td>";
                    echo "<td>" . $row['wtype'] . "</td>";
                    echo "<td>" . $row['a'] . "</td>";
                    echo "<td>" . $row['b'] . "</td>";
                    echo "<td>" . $row['c'] . "</td>";
                    echo "<td>" . $row['d'] . "</td>";
                    echo "<td>" . $row['e'] . "</td>";
                    echo "<td>" . $row['f'] . "</td>";
                    echo "<td>" . $row['g'] . "</td>";
                    echo "<td>" . $row['h'] . "</td>";
                    echo "<td>" . $row['i'] . "</td>";
                    echo "<td>" . $row['j'] . "</td>";
                    echo "</tr>";
                        }


            ?>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- this row will not appear when printing -->



    </section>
    </section>
    <!-- /.content -->
  </div>
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
