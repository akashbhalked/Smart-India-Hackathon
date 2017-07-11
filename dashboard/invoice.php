           <?php
      include 'irailsessionchecker.php';
      include ("ieheader.php");
			?>
		   <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
            <?php
			include ("iesidenav.php");
			?>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <center><h1>
                        Receipt

                        </h1></center>
                </section>
                <form method="get" action="insertInvoice.php">
                    <section class="content">
                        <section class="invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                        <i class="fa fa-globe"></i> Bhilai Steel Plant
                                        <small class="pull-right">Date: <?php echo date("m/d/Y h:i:s a", time()); ?></small>
                                    </h2>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-3 left">
                                    <input type="text" class="form-control" name="rr" required="true" placeholder="Reciept # :">
                                </div>

                                <div class="col-md-3 right">
                                    <input type="text" class="form-control" name="co" placeholder="No of Wagon's Required :" id="nwag">
                                </div>
                                <div class="col-md-1 rigth">
                                    <button type="button" class="btn btn-block btn-primary" id="forgo">GO</button>
                                </div>
                            </div>
                            <br><br><br>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table-responsive">
                                    <table  class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th style="width:10%;">OWN</th>
                                                <th style="width:10%;">TYPE</th>
                                                <th>WGON NUMB.</th>
                                                <th>TARE (T)</th>
                                                <th>CMDT CODE</th>
                                                <th>GRSS WT</th>
                                                <th>ACTL WT</th>
                                                <th>PRM CC</th>
                                                <th>TOTAL</th>
                                                <th>NORM RATE</th>
                                                <th>PUN RATE</th>
                                                <th>CHBL WT </th>
                                            </tr>
                                        </thead>
                                        <div >
                                            <tr id="c0">
                                                <td>1</td>
                                                <td><div class="form-group">
                                                    <select class="form-control" name="wtype0">
                                                        <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
                                                    </select>
                                                    </div></td>
                                                <td> <div class="form-group">
                                                    <select class="form-control" name="box0">
                                                        <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
                                                    </select>
                                                    </div>
                                            </select>

                                            </td>
                                        <td>  <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="a0">
                                            </div>
                                        </td>
                                        <td>  <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="b0">
                                            </div>
                                        </td>
                                        <td>  <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="c0">
                                            </div>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i0"></td>
                                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j0"></td>
                                        </tr>
                                </div>
                                <div >
                                    <tr id="c1">
                                        <td><span id="inc1"></span> </td>
                                        <td><div class="form-group">
                                            <select class="form-control" name="wtype1">
                                            <option value="NW">NW</option>
                                            <option value="ER">ER</option>
                                            <option value="EC">EC</option>
                                            <option value="NF">NF</option>
                                            <option value="WR">WR</option>
                                            <option value="SE">SE</option>
                                            <option value="NR">NR</option>
                                            <option value="SEC">SEC</option>
                                            <option value="ECo">ECO</option>
                                            </select>
                                            </div></td>
                                        <td> <div class="form-group">
                                            <select class="form-control" name="box1">
                                                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
                                            </select>
                                            </div>
                                    </select>

                                    </td>
                                <td>  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a1">
                                    </div>
                                </td>
                                <td>  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b1">
                                    </div>
                                </td>
                                <td>  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c1">
                                    </div>
                                </td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i1"></td>
                                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j1"></td>
                                </tr>
                            </div>
                        <div>
                            <tr id="c2">
                                <td><span id="inc2"></span> </td>

                                <td><div class="form-group">
                                    <select class="form-control" name="wtype2">
                                        <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
                                    </select>
                                    </div></td>
                                <td> <div class="form-group">
                                    <select class="form-control" name="box2">
                                        <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
                                    </select>
                                    </div>
                            </select>

                            </td>
                        <td>  <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="a2">
                            </div>
                        </td>
                        <td>  <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="b2">
                            </div>
                        </td>
                        <td>  <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter consignee Name" name="c2">
                            </div>
                        </td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i2"></td>
                        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j2"></td>
                        </tr>
                    </div>

                <div>
                    <tr id="c3">
                        <td><span id="inc3"></span> </td>
                        <td><div class="form-group">
                            <select class="form-control" name="wtype3">
                                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
                            </select>
                            </div></td>
                        <td> <div class="form-group">
                            <select class="form-control" name="box3">
                                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
                            </select>
                            </div>
                    </select>

                    </td>
                <td>  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a3">
                    </div>
                </td>
                <td>  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b3">
                    </div>
                </td>
                <td>  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c3">
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i3"></td>
                <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j3"></td>
                </tr>
        </div>
        <div>
            <tr id="c4">
                <td><span id="inc4"></span> </td>
                <td><div class="form-group">
                    <select class="form-control" name="wtype4">
                        <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
                    </select>
                    </div></td>
                <td> <div class="form-group">
                    <select class="form-control" name="box4">
                        <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
                    </select>
                    </div>
            </select>

            </td>
        <td>  <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter consignee Name" name="a4">
            </div>
        </td>
        <td>  <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter consignee Name" name="b4">
            </div>
        </td>
        <td>  <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter consignee Name" name="c4">
            </div>
        </td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i4"></td>
        <td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j4"></td>
        </tr>
    </div>
<div>
    <tr id="c5">
        <td><span id="inc5"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype5">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box5">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a5">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b5">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c5">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i5"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j5"></td>
</tr>
</div>
<div>
    <tr id="c6">
        <td><span id="inc6"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype6">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box6">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a6">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b6">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c6">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i6"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j6"></td>
</tr>
</div>
<div>
    <tr id="c7">
        <td><span id="inc7"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype7">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box7">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a7">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b7">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c7">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i7"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j7"></td>
</tr>
</div>
<div>
    <tr id="c8">
        <td><span id="inc8"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype8">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box8">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a8">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b8">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c8">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i8"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j8"></td>
</tr>
</div>
<div>
    <tr id="c9">
        <td><span id="inc9"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype9">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box9">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a9">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b9">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c9">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i9"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j9"></td>
</tr>
</div>
<div>
    <tr id="c10">
        <td><span id="inc10"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype10">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box10">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a10">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b10">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c10">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i10"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j10"></td>
</tr>
</div>
<div>
    <tr id="c11">
        <td><span id="inc11"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype11">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box11">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a11">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b11">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c11">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i11"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j11"></td>
</tr>
</div>
<div>
    <tr id="c12">
        <td><span id="inc12"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype12">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box12">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a12">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b12">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c12">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i12"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j12"></td>
</tr>
</div>
<div>
    <tr id="c13">
        <td><span id="inc13"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype13">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box13">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a13">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b13">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c13">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i13"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j13"></td>
</tr>
</div>
<div>
    <tr id="c14">
        <td><span id="inc14"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype14">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box14">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a14">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b14">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c14">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i14"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j14"></td>
</tr>
</div>
<div >
    <tr id="c15">
        <td><span id="inc15"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype15">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box15">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a15">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b15">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c15">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i15"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j15"></td>
</tr>
</div>
<div >
    <tr id="c16">
        <td><span id="inc16"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype16">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box16">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a16">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b16">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c16">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i16"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j16"></td>
</tr>
</div>
<div>
    <tr id="c17">
        <td><span id="inc17"></span> </td>

        <td><div class="form-group">
            <select class="form-control" name="wtype17">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box17">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a17">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b17">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c17">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i17"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j17"></td>
</tr>
</div>

<div>
    <tr id="c18">
        <td><span id="inc18"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype18">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box18">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a18">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b18">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c18">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i18"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j18"></td>
</tr>
</div>
<div>
    <tr id="c19">
        <td><span id="inc19"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype19">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box19">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a19">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b19">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c19">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i19"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j19"></td>
</tr>
</div>
<div>
    <tr id="c20">
        <td><span id="inc20"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype20">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box20">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a20">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b20">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c20">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i20"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j20"></td>
</tr>
</div>
<div>
    <tr id="c21">
        <td><span id="inc21"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype21">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box21">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a21">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b21">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c21">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i21"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j21"></td>
</tr>
</div>
<div>
    <tr id="c22">
        <td><span id="inc22"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype22">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box22">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a22">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b22">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c22">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i22"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j22"></td>
</tr>
</div>
<div>
    <tr id="c23">
        <td><span id="inc23"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype23">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box23">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a23">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b23">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c23">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i23"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j23"></td>
</tr>
</div>
<div>
    <tr id="c24">
        <td><span id="inc24"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype24">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box24">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a24">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b24">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c24">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i24"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j24"></td>
</tr>
</div>
<div>
    <tr id="c25">
        <td><span id="inc25"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype25">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box25">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a25">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b25">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c25">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i25"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j25"></td>
</tr>
</div>
<div>
    <tr id="c26">
        <td><span id="inc26"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype26">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box26">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a26">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b26">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c26">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i26"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j26"></td>
</tr>
</div>
<div>
    <tr id="c27">
        <td><span id="inc27"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype27">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box27">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a27">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b27">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c27">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i27"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j27"></td>
</tr>
</div>
<div>
    <tr id="c28">
        <td><span id="inc28"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype28">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box28">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a28">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b28">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c28">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i28"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j28"></td>
</tr>
</div>
<div>
    <tr id="c29">
        <td><span id="inc29"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype29">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box29">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a29">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b29">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c29">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i29"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j29"></td>
</tr>
</div>
<div>
    <tr id="c30">
        <td><span id="inc30"></span> </td>
        <td><div class="form-group">
            <select class="form-control" name="wtype30">
                <option value="NW">NW</option>
                                                        <option value="ER">ER</option>
                                                        <option value="EC">EC</option>
                                                        <option value="NF">NF</option>
                                                        <option value="WR">WR</option>
                                                        <option value="SE">SE</option>
                                                        <option value="NR">NR</option>
                                                        <option value="SEC">SEC</option>
                                                        <option value="ECo">ECO</option>
            </select>
            </div></td>
        <td> <div class="form-group">
            <select class="form-control" name="box30">
                <option value="BOX">BOX</option>
                                                        <option value="BOXN">BOXN</option>
                                                        <option value="BOXN-HA">BOXN-HA</option>
                                                        <option value="BOXN-HS">BOXN-HS</option>
                                                        <option value="BOXN-HL">BOXN-HL</option>
                                                        <option value="BOXN-CR">BOXN-CR</option>
                                                        <option value="BOXN-LW">BOXN-LW</option>
                                                        <option value="BOXN-EL">BOXN-EL</option>
                                                        <option value="DCN">DCN</option>
                                                        <option value="DCNA">DCNA</option>
                                                        <option value="DCN">DCN</option>
            </select>
            </div>
    </select>

    </td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="a30">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="b30">
    </div>
</td>
<td>  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter consignee Name" name="c30">
    </div>
</td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="d30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="e30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="f30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="g30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="h30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="i30"></td>
<td><input type="text" class="form-control" placeholder="Enter consignee Name" name="j30"></td>
</tr>
</div>



</table>
</div>
<!-- /.col -->
</div>
<!-- /.row -->
<br><br>
<input type="submit" name="sub" class="btn btn-block btn-success" value="Submit" />
    </section>

<!-- Main content -->

<!-- /.row (main row) -->

</section>
</form>
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
<script src="js/jquery.min.js"></script>
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
<script src="js/wagon.js"></script>

</body>
</html>
