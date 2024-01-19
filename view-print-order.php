<?php
	include("check.php");	
	
	include("includes/connections.php");
    
    if($_REQUEST['customerid']){

		$datashow="SELECT * FROM `printorder` WHERE customerid=".$_REQUEST['customerid'];

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
        View Print Order | Cerulean Bee
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
                        <h2>VIEW PRINT ORDER</h2>
                    </div>
                    <div class="col-md-2 p-bottom-25"> 
                        <a href="print-order.php">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Customer Information</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="customername">Customer Name
                                                </label><br>
                                                <?php print strip_tags($data[1]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="orderdate">Order Date
                                                </label><br>
                                                <?php print strip_tags($data[4]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailid">E-mail
                                                </label><br>
                                                <?php print strip_tags($data[2]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="artdate">Art/Slide Date</label><br>
                                                <?php print strip_tags($data[5]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phonenumber">Phone
                                                </label><br>
                                                <?php print strip_tags($data[3]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-bottom-50">
                                            <div class="form-group">
                                                <label for="duedate">Due Date
                                                </label><br>
                                                <?php print strip_tags($data[6]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="setupcharge">Setup Charge
                                                </label><br>
                                                <?php print strip_tags($data[7]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="apparelorderdate">Apparel Order Date
                                                </label><br>
                                                <?php print strip_tags($data[11]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deposit">Deposit
                                                </label><br>
                                                <?php print strip_tags($data[8]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="filmdate">Art/Film Date
                                                </label><br>
                                                <?php print strip_tags($data[12]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="discount">Discount
                                                </label><br>
                                                <?php print strip_tags($data[9]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="printdate">Print Date
                                                </label><br>
                                                <?php print strip_tags($data[13]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="totalcost">Total Cost
                                                </label><br>
                                                <?php print strip_tags($data[10]);?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="delivereddate">Delivered Date
                                                </label><br>
                                                <?php print strip_tags($data[14]);?>
                                            </div>
                                        </div>
                                    </div><!-- ends: .information_wrapper -->
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Artwork Items</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="basecolor">Base Color
                                                    </label><br>
                                                    <?php print strip_tags($data[15]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6 p-bottom-30">
                                                <div class="form-group">
                                                    <label for="vendorname">Vendor
                                                    </label><br>
                                                    <?php print strip_tags($data[16]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->

                                            
                                            <div class="col-md-4">
                                                <label>Size</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Number</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Add. Charge</label>
                                            </div>

                                            <!-- X-small -->
                                            <div class="col-md-4">
                                                <label for="xsmall">X-Small</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[17]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[18]);?>
                                                </div>
                                            </div>


                                            <!-- small -->
                                            <div class="col-md-4">
                                                <label for="small">Small</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[19]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[20]);?>
                                                </div>
                                            </div>

                                            <!-- Medium -->
                                            <div class="col-md-4">
                                                <label for="medium">Medium</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[21]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[22]);?>
                                                </div>
                                            </div>

                                            <!-- Large -->
                                            <div class="col-md-4">
                                                <label for="large">Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[23]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[24]);?>
                                                </div>
                                            </div>

                                            <!-- X-Large -->
                                            <div class="col-md-4">
                                                <label for="xlarge">X-Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[25]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[26]);?>
                                                </div>
                                            </div>

                                            <!-- XX-Large -->
                                            <div class="col-md-4">
                                                <label for="xxlarge">XX-Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[27]);?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-bottom-40">
                                                <div class="form-group">
                                                    <?php print strip_tags($data[28]);?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unitbaseprice">Per Unit Base Price
                                                    </label><br>
                                                    <?php print strip_tags($data[29]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="colorcharge">Color Charge
                                                    </label><br>
                                                    <?php print strip_tags($data[30]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="blankprice">Total Blank Price</label><br>
                                                    <?php print strip_tags($data[31]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->                                          
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Artwork Print</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="locationsize">Location Size
                                                    </label><br>
                                                    <?php print strip_tags($data[32]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="colorchange">#Color Charge
                                                    </label><br>
                                                    <?php print strip_tags($data[33]);?>
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="colorlist">Colors Lists
                                                    </label><br>
                                                    <?php print strip_tags($data[34]);?>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="finalcost">Total Cost
                                                    </label><br>
                                                    <?php print strip_tags($data[35]);?>
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