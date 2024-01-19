<?php
	include("check.php");	
	
	include("includes/connections.php");

    if($_REQUEST['project_id']){

		$datashow="SELECT * FROM `project_cost_analysis` WHERE project_id=".$_REQUEST['project_id'];

		$resrow=mysqli_query($con,$datashow);

		$data=mysqli_fetch_array($resrow);		

	}

    if(isset($_POST['add'])){
		
		$project_name=$_POST['project_name'];
        $event_name=$_POST['event_name'];
        $item_name=$_POST['item_name'];
        $customer_name=$_POST['customer_name'];
        $phonenumber=$_POST['phonenumber'];
        $mc_item_01=$_POST['mc_item_01'];
        $mc_unitcost_01=$_POST['mc_unitcost_01'];
        $mc_pricecharge_01=$_POST['mc_pricecharge_01'];
        $mc_units_01=$_POST['mc_units_01'];
        $mc_cost_01=$_POST['mc_cost_01'];
        $mc_revenue_01=$_POST['mc_revenue_01'];
        $mc_item_02=$_POST['mc_item_02'];
        $mc_unitcost_02=$_POST['mc_unitcost_02'];
        $mc_pricecharge_02=$_POST['mc_pricecharge_02'];
        $mc_units_02=$_POST['mc_units_02'];
        $mc_cost_02=$_POST['mc_cost_02'];
        $mc_revenue_02=$_POST['mc_revenue_02'];
        $totalcost_01=$_POST['totalcost_01'];
        $totalrevenue_01=$_POST['totalrevenue_01'];
        $lc_item_01=$_POST['lc_item_01'];
        $lc_unitcost_01=$_POST['lc_unitcost_01'];
        $lc_pricecharge_01=$_POST['lc_pricecharge_01'];
        $lc_units_01=$_POST['lc_units_01'];
        $lc_cost_01=$_POST['lc_cost_01'];
        $lc_revenue_01=$_POST['lc_revenue_01'];
        $lc_item_02=$_POST['lc_item_02'];
        $lc_unitcost_02=$_POST['lc_unitcost_02'];
        $lc_pricecharge_02=$_POST['lc_pricecharge_02'];
        $lc_units_02=$_POST['lc_units_02'];
        $lc_cost_02=$_POST['lc_cost_02'];
        $lc_revenue_02=$_POST['lc_revenue_02'];
        $totalrevenue_02=$_POST['totalrevenue_02'];
        $material_charge=$_POST['material_charge'];
        $artwork_fees=$_POST['artwork_fees'];
        $fixed_charges=$_POST['fixed_charges'];
        $total_discounts=$_POST['total_discounts'];
        $net_profits=$_POST['net_profits'];
		
		$sql = "INSERT INTO `project_cost_analysis`(`project_name`, `event_name`, `item_name`, `customer_name`, `phonenumber`, `mc_item_01`, `mc_unitcost_01`, `mc_pricecharge_01`, `mc_units_01`, `mc_cost_01`, `mc_revenue_01`, `mc_item_02`, `mc_unitcost_02`, `mc_pricecharge_02`, `mc_units_02`, `mc_cost_02`, `mc_revenue_02`, `totalcost_01`, `totalrevenue_01`, `lc_item_01`, `lc_unitcost_01`, `lc_pricecharge_01`, `lc_units_01`, `lc_cost_01`, `lc_revenue_01`, `lc_item_02`, `lc_unitcost_02`, `lc_pricecharge_02`, `lc_units_02`, `lc_cost_02`, `lc_revenue_02`, `totalrevenue_02`, `material_charge`, `artwork_fees`, `fixed_charges`, `total_discounts`, `net_profits`) VALUES ('$project_name','$event_name','$item_name','$customer_name','$phonenumber','$mc_item_01','$mc_unitcost_01','$mc_pricecharge_01','$mc_units_01','$mc_cost_01','$mc_revenue_01','$mc_item_02','$mc_unitcost_02','$mc_pricecharge_02','$mc_units_02','$mc_cost_02','$mc_revenue_02','$totalcost_01','$totalrevenue_01','$lc_item_01','$lc_unitcost_01','$lc_pricecharge_01','$lc_units_01','$lc_cost_01','$lc_revenue_01','$lc_item_02','$lc_unitcost_02','$lc_pricecharge_02','$lc_units_02','$lc_cost_02','$lc_revenue_02','$totalrevenue_02','$material_charge','$artwork_fees','$fixed_charges','$total_discounts','$net_profits')";
		
		mysqli_query($con, $sql);
		
		$msg="Sucessfully Created a Project Cost Analysis !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='project-cost-analysis.php';</script>";
	
		mysql_close($con);
		
	}


    if(isset($_POST['update'])) {

        $update = "UPDATE `project_cost_analysis` SET `project_name`='".$_POST['project_name']."',`event_name`='".$_POST['event_name']."',`item_name`='".$_POST['item_name']."',`customer_name`='".$_POST['customer_name']."',`phonenumber`='".$_POST['phonenumber']."',`mc_item_01`='".$_POST['mc_item_01']."',`mc_unitcost_01`='".$_POST['mc_unitcost_01']."',`mc_pricecharge_01`='".$_POST['mc_pricecharge_01']."',`mc_units_01`='".$_POST['mc_units_01']."',`mc_cost_01`='".$_POST['mc_cost_01']."',`mc_revenue_01`='".$_POST['mc_revenue_01']."',`mc_item_02`='".$_POST['mc_item_02']."',`mc_unitcost_02`='".$_POST['mc_unitcost_02']."',`mc_pricecharge_02`='".$_POST['mc_pricecharge_02']."',`mc_units_02`='".$_POST['mc_units_02']."',`mc_cost_02`='".$_POST['mc_cost_02']."',`mc_revenue_02`='".$_POST['mc_revenue_02']."',`totalcost_01`='".$_POST['totalcost_01']."',`totalrevenue_01`='".$_POST['totalrevenue_01']."',`lc_item_01`='".$_POST['lc_item_01']."',`lc_unitcost_01`='".$_POST['lc_unitcost_01']."',`lc_pricecharge_01`='".$_POST['lc_pricecharge_01']."',`lc_units_01`='".$_POST['lc_units_01']."',`lc_cost_01`='".$_POST['lc_cost_01']."',`lc_revenue_01`='".$_POST['lc_revenue_01']."',`lc_item_02`='".$_POST['lc_item_02']."',`lc_unitcost_02`='".$_POST['lc_unitcost_02']."',`lc_pricecharge_02`='".$_POST['lc_pricecharge_02']."',`lc_units_02`='".$_POST['lc_units_02']."',`lc_cost_02`='".$_POST['lc_cost_02']."',`lc_revenue_02`='".$_POST['lc_revenue_02']."',`totalrevenue_02`='".$_POST['totalrevenue_02']."',`material_charge`='".$_POST['material_charge']."',`artwork_fees`='".$_POST['artwork_fees']."',`fixed_charges`='".$_POST['fixed_charges']."',`total_discounts`='".$_POST['total_discounts']."',`net_profits`='".$_POST['net_profits']."' WHERE `project_id`='".$_POST['project_id']."'";
		
		mysqli_query($con, $update);
		
		$msg="Sucessfully Updated a Project Cost Analysis !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='project-cost-analysis.php';</script>";
	
		mysql_close($con);

    }

?>
<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if ($_REQUEST['project_id']){ ?>
            Edit Project Cost Analysis | Cerulean Bee
            <?php } else { ?>
            Add Project Cost Analysis | Cerulean Bee
        <?php } ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="vendor_assets/css/animate.css">
    <link rel="stylesheet" href="vendor_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="vendor_assets/css/owl.carousel.css">
    <link rel="stylesheet" href="vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="vendor_assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor_assets/css/slick.css">
    <link rel="stylesheet" href="vendor_assets/css/trumbowyg.min.css">
    <link rel="stylesheet" href="vendor_assets/css/venobox.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->
</head>

<body class="dashboard-page preload">
    
    <?php include('includes/breadcrumb.php'); ?>

    <section class="dashboard-area">
        
    
        <?php 
            include('includes/header.php'); 
        ?>

        <div class="dashboard_contents p-top-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                    <?php if ($_REQUEST['project_id']){ ?>
                        <h2>EDIT PROJECT COST ANALYSIS</h2>
                        <?php } else { ?>
                        <h2>ADD PROJECT COST ANALYSIS</h2>
                    <?php } ?>
                    </div>
                    <div class="col-md-2 p-bottom-25"> 
                        <a href="project-cost-analysis.php">
                            <button class="btn btn--icon btn-md btn--round btn-secondary" style="float: right;">
                                <span class="icon-minus" style="padding-right: 10px;"></span>Back
                            </button>
                        </a>
                    </div>
                </div>
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->

        <div class="dashboard_contents p-bottom-70">
            <div class="container">
                <form method="post" class="setting_form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Project Cost Analysis</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectname">Project Name
                                                </label>
                                                <input class="form-control" type="hidden" name="project_id" value="<?php print strip_tags($data[0]);?>">
                                                <input type="text" name="project_name" id="projectname" class="text_field" placeholder="Enter Project Name" value="<?php print strip_tags($data[1]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="event">Event
                                                </label>
                                                <input type="text" name="event_name" id="event" class="text_field" placeholder="Enter Event Name" value="<?php print strip_tags($data[2]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="itemid">Item
                                                </label>
                                                <input type="text" name="item_name" id="itemid" class="text_field" placeholder="Enter Item Name" value="<?php print strip_tags($data[3]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="customer_name">Customer Name</label>
                                                <input type="text" name="customer_name" id="customer_name" class="text_field" placeholder="Enter Customer Name" value="<?php print strip_tags($data[4]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone
                                                </label>
                                                <input type="text" name="phonenumber" id="phonenumber" class="text_field" placeholder="Phone Number including Country Code" value="<?php print strip_tags($data[5]);?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="withdraw_table_header">
                                                <h4>Material Costs</h4>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table withdraw__table">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Per-Unit Cost</th>
                                                        <th>Price Charged</th>
                                                        <th>Units</th>
                                                        <th>Cost</th>
                                                        <th>Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" name="mc_item_01" id="item01" class="text_field" value="<?php print strip_tags($data[6]);?>"></td>
                                                        <td><input type="text" name="mc_unitcost_01" id="perunitcost01" class="text_field" value="<?php print strip_tags($data[7]);?>"></td>
                                                        <td><input type="text" name="mc_pricecharge_01" id="pricecharged01" class="text_field" value="<?php print strip_tags($data[8]);?>"></td>
                                                        <td><input type="text" name="mc_units_01" id="unit01" class="text_field" value="<?php print strip_tags($data[9]);?>"></td>
                                                        <td><input type="text" name="mc_cost_01" id="cost01" class="text_field" value="<?php print strip_tags($data[10]);?>"></td>
                                                        <td><input type="text" name="mc_revenue_01" id="revenue01" class="text_field" value="<?php print strip_tags($data[11]);?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="mc_item_02" id="item01" class="text_field" value="<?php print strip_tags($data[12]);?>"></td>
                                                        <td><input type="text" name="mc_unitcost_02" id="perunitcost01" class="text_field" value="<?php print strip_tags($data[13]);?>"></td>
                                                        <td><input type="text" name="mc_pricecharge_02" name="mc_pricecharge_02" id="pricecharged01" class="text_field" value="<?php print strip_tags($data[14]);?>"></td>
                                                        <td><input type="text" name="mc_units_02" id="unit01" class="text_field" value="<?php print strip_tags($data[15]);?>"></td>
                                                        <td><input type="text" name="mc_cost_02" id="cost01" class="text_field" value="<?php print strip_tags($data[16]);?>"></td>
                                                        <td><input type="text" name="mc_revenue_02" id="revenue01" class="text_field" value="<?php print strip_tags($data[17]);?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><label>Total</label><input type="text" name="totalcost_01" id="revenue01" class="text_field" value="<?php print strip_tags($data[18]);?>"></td>
                                                        <td><label>Total</label><input type="text" name="totalrevenue_01" id="revenue01" class="text_field" value="<?php print strip_tags($data[19]);?>"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="withdraw_table_header">
                                                <h4>Labour Costs</h4>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table withdraw__table">
                                                <thead>
                                                    <tr>
                                                        <th>Employee</th>
                                                        <th>Task</th>
                                                        <th>Time</th>
                                                        <th>Wage Rate</th>
                                                        <th>Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" name="lc_item_01" id="item01" class="text_field" value="<?php print strip_tags($data[20]);?>"></td>
                                                        <td><input type="text" name="lc_unitcost_01" id="perunitcost01" class="text_field" value="<?php print strip_tags($data[21]);?>"></td>
                                                        <td><input type="text" name="lc_pricecharge_01" id="pricecharged01" class="text_field" value="<?php print strip_tags($data[22]);?>"></td>
                                                        <td><input type="text" name="lc_units_01" id="unit01" class="text_field" value="<?php print strip_tags($data[23]);?>"></td>
                                                        <td><input type="text" name="lc_cost_01" id="cost01" class="text_field" value="<?php print strip_tags($data[24]);?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="lc_item_02" id="item01" class="text_field" value="<?php print strip_tags($data[26]);?>"></td>
                                                        <td><input type="text" name="lc_unitcost_02" id="perunitcost01" class="text_field" value="<?php print strip_tags($data[27]);?>"></td>
                                                        <td><input type="text" name="lc_pricecharge_02" id="pricecharged01" class="text_field" value="<?php print strip_tags($data[28]);?>"></td>
                                                        <td><input type="text" name="lc_units_02" id="unit01" class="text_field" value="<?php print strip_tags($data[29]);?>"></td>
                                                        <td><input type="text" name="lc_cost_02" id="cost01" class="text_field" value="<?php print strip_tags($data[30]);?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><label>Total</label><input type="text" name="totalrevenue_02" id="revenue01" class="text_field" value="<?php print strip_tags($data[32]);?>"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- ends: .information_wrapper -->
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Total Money Received</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="materialcharge">Material Charge
                                                    </label>
                                                    <input type="text" name="material_charge" id="materialcharge" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[33]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="artworkfees">Artwork Fees
                                                    </label>
                                                    <input type="text" name="artwork_fees" id="artworkfees" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[34]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="fixedcharges">Fixed Charges
                                                    </label>
                                                    <input type="text" name="fixed_charges" id="fixedcharges" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[35]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="totaldiscounts">Discounts
                                                    </label>
                                                    <input type="text" name="total_discounts" id="totaldiscounts" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[36]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="netprofit">Net Profit
                                                    </label>
                                                    <input type="text" name="net_profits" id="netprofit" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[37]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->                                
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                                                
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <?php if ($_REQUEST['project_id']){ ?>
                                    <button type="submit" name="update" class="btn btn--md btn-primary">Update</button>
                                    <a href="print-order.php"><button type="button" class="btn btn-md btn-danger">Cancel</button></a>
                                    <?php } else { ?>
                                    <button type="submit" name="add" class="btn btn--md btn-primary">Save Change</button>
                                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                                    <?php } ?>
                                </div>   
                            </div>
                        </div><!-- ends: .col-md-12 -->
                    </div><!-- ends: .row -->
                </form><!-- end /form -->
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->

            
    </section><!-- ends: .dashboard-area -->
    
    
    <?php include('includes/footer.php'); ?>

    <!-- inject:js-->
    <script src="vendor_assets/js/jquery/jquery-1.12.4.min.js"></script>
    <script src="vendor_assets/js/jquery/uikit.min.js"></script>
    <script src="vendor_assets/js/bootstrap/popper.js"></script>
    <script src="vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="vendor_assets/js/chart.bundle.min.js"></script>
    <script src="vendor_assets/js/grid.min.js"></script>
    <script src="vendor_assets/js/jquery-ui.min.js"></script>
    <script src="vendor_assets/js/jquery.barrating.min.js"></script>
    <script src="vendor_assets/js/jquery.countdown.min.js"></script>
    <script src="vendor_assets/js/jquery.counterup.min.js"></script>
    <script src="vendor_assets/js/jquery.easing1.3.js"></script>
    <script src="vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="vendor_assets/js/owl.carousel.min.js"></script>
    <script src="vendor_assets/js/select2.full.min.js"></script>
    <script src="vendor_assets/js/slick.min.js"></script>
    <script src="vendor_assets/js/tether.min.js"></script>
    <script src="vendor_assets/js/trumbowyg.min.js"></script>
    <script src="vendor_assets/js/venobox.min.js"></script>
    <script src="vendor_assets/js/waypoints.min.js"></script>
    <script src="theme_assets/js/dashboard.js"></script>
    <script src="theme_assets/js/main.js"></script>
    <script src="theme_assets/js/map.js"></script>
    <!-- endinject-->
</body>

</html>