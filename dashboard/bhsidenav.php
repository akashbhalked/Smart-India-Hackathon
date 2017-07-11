<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $_SESSION['Busername'];?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="bhtranscation.php">
        <i class="fa fa-dashboard"></i> <span>Transcation</span>
      </a>
    </li>
    <!--li>
    <a href="transcation.php">
      <i class="fa fa-th"></i> <span>Transcation</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">new</small>
      </span>
    </a>
  </li-->

  <li>
  <a href="bhtranscation.php">
    <i class="fa fa-th"></i> <span>VIEW Recipt</span></a>
    <!--span class="pull-right-container">
      <small class="label pull-right bg-green">new</small>
    </span-->
  </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Status</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
        </span>          </a>
      <ul class="treeview-menu">
        <li><a href="bhapproved.php"><i class="fa fa-circle-o"></i>Approved</a></li>
        <li><a href="bhpending.php"><i class="fa fa-circle-o"></i>Pending</a></li>
        <li><a href="bherror.php"><i class="fa fa-circle-o"></i>Problem</a></li>
      </ul>
    </li>
    <!--li>
      <a href="irailemployee.php">
        <i class="fa fa-th"></i> <span>Employee details</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span>
      </a>
    </li-->
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>user Profile</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="bhupdatepass.php"><i class="fa fa-circle-o"></i>Change Password</a></li>
        <li><a href="bhupdatemobile.php"><i class="fa fa-circle-o"></i>Change Mobile Number</a></li>
        <!--li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li-->
      </ul>
      </li>
      <li>
      <a href="chat/" target="_blank">
        <i class="fa fa-th"></i> <span>chat system</span></a>
        <!--span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span-->
      </li>

      <li>
      <a href="bhlogout.php">
        <i class="fa fa-th"></i> <span>Logout</span>
        <span class="pull-right-container">
        </span>
      </a>
      </li>
    </li>
        </section>
<!-- /.sidebar -->
