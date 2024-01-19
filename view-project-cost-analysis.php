<?php
	include("check.php");	
	
	include("includes/connections.php");

    if($_REQUEST['project_id']){

		$datashow="SELECT * FROM `project_cost_analysis` WHERE project_id=".$_REQUEST['project_id'];

		$resrow=mysqli_query($con,$datashow);

		$data=mysqli_fetch_array($resrow);		

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
        View Project Cost Analysis | Cerulean Bee
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
                        <h2>VIEW PROJECT COST ANALYSIS</h2>
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
                                                </label><br>
                                                <?php print strip_tags($data[1]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="event">Event
                                                </label><br>
                                                <?php print strip_tags($data[2]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="itemid">Item
                                                </label><br>
                                                <?php print strip_tags($data[3]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="customer_name">Customer Name</label><br>
                                                <?php print strip_tags($data[4]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone
                                                </label><br>
                                                <?php print strip_tags($data[5]);?>
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
                                                        <td><?php print strip_tags($data[6]);?></td>
                                                        <td><?php print strip_tags($data[7]);?></td>
                                                        <td><?php print strip_tags($data[8]);?></td>
                                                        <td><?php print strip_tags($data[9]);?></td>
                                                        <td><?php print strip_tags($data[10]);?></td>
                                                        <td><?php print strip_tags($data[11]);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php print strip_tags($data[12]);?></td>
                                                        <td><?php print strip_tags($data[13]);?></td>
                                                        <td><?php print strip_tags($data[14]);?></td>
                                                        <td><?php print strip_tags($data[15]);?></td>
                                                        <td><?php print strip_tags($data[16]);?></td>
                                                        <td><?php print strip_tags($data[17]);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><label>Total</label><br><?php print strip_tags($data[18]);?></td>
                                                        <td><label>Total</label><br><?php print strip_tags($data[19]);?></td>
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
                                                        <td><?php print strip_tags($data[20]);?></td>
                                                        <td><?php print strip_tags($data[21]);?></td>
                                                        <td><?php print strip_tags($data[22]);?></td>
                                                        <td><?php print strip_tags($data[23]);?></td>
                                                        <td><?php print strip_tags($data[24]);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php print strip_tags($data[26]);?></td>
                                                        <td><?php print strip_tags($data[27]);?></td>
                                                        <td><?php print strip_tags($data[28]);?></td>
                                                        <td><?php print strip_tags($data[29]);?></td>
                                                        <td><?php print strip_tags($data[30]);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><label>Total</label><br><?php print strip_tags($data[32]);?></td>
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
                                                    </label><br>
                                                    <?php print strip_tags($data[33]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="artworkfees">Artwork Fees
                                                    </label><br>
                                                    <?php print strip_tags($data[34]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="fixedcharges">Fixed Charges
                                                    </label><br>
                                                    <?php print strip_tags($data[35]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="totaldiscounts">Discounts
                                                    </label><br>
                                                    <?php print strip_tags($data[36]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="netprofit">Net Profit
                                                    </label><br>
                                                    <?php print strip_tags($data[37]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->                                
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
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