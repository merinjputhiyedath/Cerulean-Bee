<?php
	include("check.php");	
	
	include("includes/connections.php");
    
    if($_REQUEST['customerid']){

		$datashow="SELECT * FROM `printorder` WHERE customerid=".$_REQUEST['customerid'];

		$resrow=mysqli_query($con,$datashow);

		$data=mysqli_fetch_array($resrow);		

	}

    if(isset($_POST['add'])){
		
		$customername=$_POST['customername'];
        $emailid=$_POST['emailid'];
        $phonenumber=$_POST['phonenumber'];
        $orderdate=$_POST['orderdate'];
        $artdate=$_POST['artdate'];
        $duedate=$_POST['duedate'];
        $setupcharge=$_POST['setupcharge'];
        $deposit=$_POST['deposit'];
        $discount=$_POST['discount'];
        $totalcost=$_POST['totalcost'];
        $apparelorderdate=$_POST['apparelorderdate'];
        $filmdate=$_POST['filmdate'];
        $printdate=$_POST['printdate'];
        $delivereddate=$_POST['delivereddate'];
        $basecolor=$_POST['basecolor'];
        $vendorname=$_POST['vendorname'];
        $xsnumber=$_POST['xsnumber'];
        $xscharge=$_POST['xscharge'];
        $snumber=$_POST['snumber'];
        $scharge=$_POST['scharge'];
        $mnumber=$_POST['mnumber'];
        $mcharge=$_POST['mcharge'];
        $lnumber=$_POST['lnumber'];
        $lcharge=$_POST['lcharge'];
        $xlnumber=$_POST['xlnumber'];
        $xlcharge=$_POST['xlcharge'];
        $xxlnumber=$_POST['xxlnumber'];
        $xxlcharge=$_POST['xxlcharge'];
        $unitbaseprice=$_POST['unitbaseprice'];
        $colorcharge=$_POST['colorcharge'];
        $blankprice=$_POST['blankprice'];
        $locationsize=$_POST['locationsize'];
        $colorchange=$_POST['colorchange'];
        $colorlist=$_POST['colorlist'];
        $finalcost=$_POST['finalcost'];
		
		$sql = "INSERT INTO `printorder`(`customername`, `emailid`, `phonenumber`, `orderdate`, `artdate`, `duedate`, `setupcharge`, `deposit`, `discount`, `totalcost`, `apparelorderdate`, `filmdate`, `printdate`, `delivereddate`, `basecolor`, `vendorname`, `xsnumber`, `xscharge`, `snumber`, `scharge`, `mnumber`, `mcharge`, `lnumber`, `lcharge`, `xlnumber`, `xlcharge`, `xxlnumber`, `xxlcharge`, `unitbaseprice`, `colorcharge`, `blankprice`, `locationsize`, `colorchange`, `colorlist`, `finalcost`) VALUES ('$customername','$emailid','$phonenumber','$orderdate','$artdate','$duedate','$setupcharge','$deposit','$discount','$totalcost','$apparelorderdate','$filmdate','$printdate','$delivereddate','$basecolor','$vendorname','$xsnumber','$xscharge','$snumber','$scharge','$mnumber','$mcharge','$lnumber','$lcharge','$xlnumber','$xlcharge','$xxlnumber','$xxlcharge','$unitbaseprice','$colorcharge','$blankprice','$locationsize','$colorchange','$colorlist','$finalcost')";
		
		mysqli_query($con, $sql);
		
		$msg="Sucessfully Created a Print Order !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='print-order.php';</script>";
	
		mysql_close($con);
		
	}

    if(isset($_POST['update'])) {

        $update = "UPDATE `printorder` SET `customername`='".$_POST['customername']."',`emailid`='".$_POST['emailid']."',`phonenumber`='".$_POST['phonenumber']."',`orderdate`='".$_POST['orderdate']."',`artdate`='".$_POST['artdate']."',`duedate`='".$_POST['duedate']."',`setupcharge`='".$_POST['setupcharge']."',`deposit`='".$_POST['deposit']."',`discount`='".$_POST['discount']."',`totalcost`='".$_POST['totalcost']."',`apparelorderdate`='".$_POST['apparelorderdate']."',`filmdate`='".$_POST['filmdate']."',`printdate`='".$_POST['printdate']."',`delivereddate`='".$_POST['delivereddate']."',`basecolor`='".$_POST['basecolor']."',`vendorname`='".$_POST['vendorname']."',`xsnumber`='".$_POST['xsnumber']."',`xscharge`='".$_POST['xscharge']."',`snumber`='".$_POST['snumber']."',`scharge`='".$_POST['scharge']."',`mnumber`='".$_POST['mnumber']."',`mcharge`='".$_POST['mcharge']."',`lnumber`='".$_POST['lnumber']."',`lcharge`='".$_POST['lcharge']."',`xlnumber`='".$_POST['xlnumber']."',`xlcharge`='".$_POST['xlcharge']."',`xxlnumber`='".$_POST['xxlnumber']."',`xxlcharge`='".$_POST['xxlcharge']."',`unitbaseprice`='".$_POST['unitbaseprice']."',`colorcharge`='".$_POST['colorcharge']."',`blankprice`='".$_POST['blankprice']."',`locationsize`='".$_POST['locationsize']."',`colorchange`='".$_POST['colorchange']."',`colorlist`='".$_POST['colorlist']."',`finalcost`='".$_POST['finalcost']."' WHERE `customerid`='".$_POST['customerid']."'";
		
		mysqli_query($con, $update);
		
		$msg="Sucessfully Updated a Print Order !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='print-order.php';</script>";
	
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
         <?php if ($_REQUEST['customerid']){ ?>
            Edit Print Order | Cerulean Bee
            <?php } else { ?>
            Add Print Order | Cerulean Bee
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
                        <?php if ($_REQUEST['customerid']){ ?>
                            <h2>EDIT PRINT ORDER</h2>
                            <?php } else { ?>
                            <h2>ADD PRINT ORDER</h2>
                        <?php } ?>
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
                <form method="post" class="setting_form">
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
                                                    <sup>*</sup>
                                                </label>
                                                <input class="form-control" type="hidden" name="customerid" value="<?php print strip_tags($data[0]);?>">
                                                <input type="text" name="customername" id="customername" class="text_field" placeholder="Last Name & First Name" value="<?php print strip_tags($data[1]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="orderdate">Order Date
                                                </label>
                                                <input type="date" name="orderdate" id="orderdate" class="text_field" value="<?php print strip_tags($data[4]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailid">E-mail
                                                </label>
                                                <input type="text" name="emailid" id="emailid" class="text_field" placeholder="Email address" value="<?php print strip_tags($data[2]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="artdate">Art/Slide Date</label>
                                                <input type="date" name="artdate" id="artdate" class="text_field" value="<?php print strip_tags($data[5]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phonenumber">Phone
                                                </label>
                                                <input type="text" name="phonenumber" id="phonenumber" class="text_field" placeholder="Phone Number including Country Code" value="<?php print strip_tags($data[3]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-bottom-50">
                                            <div class="form-group">
                                                <label for="duedate">Due Date
                                                </label>
                                                <input type="date" name="duedate" id="duedate" class="text_field" value="<?php print strip_tags($data[6]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="setupcharge">Setup Charge
                                                </label>
                                                <input type="text" name="setupcharge" id="setupcharge" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[7]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="apparelorderdate">Apparel Order Date
                                                </label>
                                                <input type="date" name="apparelorderdate" id="apparelorderdate" class="text_field" value="<?php print strip_tags($data[11]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deposit">Deposit
                                                </label>
                                                <input type="text" name="deposit" id="deposit" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[8]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="filmdate">Art/Film Date
                                                </label>
                                                <input type="date" name="filmdate" id="filmdate" class="text_field" value="<?php print strip_tags($data[12]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="discount">Discount
                                                </label>
                                                <input type="text" name="discount" id="discount" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[9]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="printdate">Print Date
                                                </label>
                                                <input type="date" name="printdate" id="printdate" class="text_field" value="<?php print strip_tags($data[13]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="totalcost">Total Cost
                                                </label>
                                                <input type="text" name="totalcost" id="totalcost" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[10]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="delivereddate">Delivered Date
                                                </label>
                                                <input type="date" name="delivereddate" id="delivereddate" class="text_field" value="<?php print strip_tags($data[14]);?>">
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
                                                    </label>
                                                    <input type="text" name="basecolor" id="basecolor" class="text_field" placeholder="Enter Base Color" value="<?php print strip_tags($data[15]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6 p-bottom-30">
                                                <div class="form-group">
                                                    <label for="vendorname">Vendor
                                                    </label>
                                                    <input type="text" name="vendorname" id="vendorname" class="text_field" placeholder="Enter Vendor Name" value="<?php print strip_tags($data[16]);?>">
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
                                                    <input type="text" name="xsnumber" id="xsmall" class="text_field" value="<?php print strip_tags($data[17]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="xscharge" id="xsmall" class="text_field" value="<?php print strip_tags($data[18]);?>">
                                                </div>
                                            </div>


                                            <!-- small -->
                                            <div class="col-md-4">
                                                <label for="small">Small</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="snumber" id="small" class="text_field" value="<?php print strip_tags($data[19]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="scharge" id="small" class="text_field" value="<?php print strip_tags($data[20]);?>">
                                                </div>
                                            </div>

                                            <!-- Medium -->
                                            <div class="col-md-4">
                                                <label for="medium">Medium</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="mnumber" id="medium" class="text_field" value="<?php print strip_tags($data[21]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="mcharge" id="medium" class="text_field" value="<?php print strip_tags($data[22]);?>">
                                                </div>
                                            </div>

                                            <!-- Large -->
                                            <div class="col-md-4">
                                                <label for="large">Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="lnumber" id="large" class="text_field" value="<?php print strip_tags($data[23]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="lcharge" id="large" class="text_field" value="<?php print strip_tags($data[24]);?>">
                                                </div>
                                            </div>

                                            <!-- X-Large -->
                                            <div class="col-md-4">
                                                <label for="xlarge">X-Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="xlnumber" id="xlarge" class="text_field" value="<?php print strip_tags($data[25]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="xlcharge" id="xlarge" class="text_field" value="<?php print strip_tags($data[26]);?>">
                                                </div>
                                            </div>

                                            <!-- XX-Large -->
                                            <div class="col-md-4">
                                                <label for="xxlarge">XX-Large</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="xxlnumber" id="xxlarge" class="text_field" value="<?php print strip_tags($data[27]);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-bottom-40">
                                                <div class="form-group">
                                                    <input type="text" name="xxlcharge" id="xxlarge" class="text_field" value="<?php print strip_tags($data[28]);?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unitbaseprice">Per Unit Base Price
                                                    </label>
                                                    <input type="text" name="unitbaseprice" id="unitbaseprice" class="text_field" placeholder="Enter Base Price" value="<?php print strip_tags($data[29]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="colorcharge">Color Charge
                                                    </label>
                                                    <input type="text" name="colorcharge" id="colorcharge" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[30]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="blankprice">Total Blank Price</label>
                                                    <input type="text" name="blankprice" id="blankprice" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[31]);?>"> 
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
                                                    </label>
                                                    <input type="text" name="locationsize" id="locationsize" class="text_field" placeholder="Enter Location Size" value="<?php print strip_tags($data[32]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="colorchange">#Color Charge
                                                    </label>
                                                    <input type="text" name="colorchange" id="colorchange" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[33]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="colorlist">Colors Lists
                                                    </label>
                                                    <textarea type="textarea" name="colorlist" id="colorlist" class="text_field" placeholder="Enter Colors List"><?php print strip_tags($data[34]);?></textarea>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="finalcost">Total Cost
                                                    </label>
                                                    <input type="text" name="finalcost" id="finalcost" class="text_field" placeholder="Total Cost" value="<?php print strip_tags($data[35]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->                                         
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <?php if ($_REQUEST['customerid']){ ?>
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