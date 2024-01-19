<?php
	include("check.php");	
	
	include("includes/connections.php");

    if($_REQUEST['customer_id']){

		$datashow="SELECT * FROM `artwork_order` WHERE customer_id=".$_REQUEST['customer_id'];

		$resrow=mysqli_query($con,$datashow);

		$data=mysqli_fetch_array($resrow);		

	}

    if(isset($_POST['add'])){
		
		$customer_name=$_POST['customer_name'];
        $email_id=$_POST['email_id'];
        $phone_number=$_POST['phone_number'];
        $discount_rate=$_POST['discount_rate'];
        $order_date=$_POST['order_date'];
        $approved_date=$_POST['approved_date'];
        $scheduled_print_date=$_POST['scheduled_print_date'];
        $total_price=$_POST['total_price'];
        $apparel_item=$_POST['apparel_item'];
        $event_name=$_POST['event_name'];
        $base_color=$_POST['base_color'];
        $theme_name=$_POST['theme_name'];
        $max_colors=$_POST['max_colors'];
        $art_location_01=$_POST['art_location_01'];
        $description_01=$_POST['description_01'];
        $cost_01=$_POST['cost_01'];
        $employee_01=$_POST['employee_01'];
        $complete_date_01=$_POST['complete_date_01'];
        $colors_01=$_POST['colors_01'];
        $art_location_02=$_POST['art_location_02'];
        $description_02=$_POST['description_02'];
        $cost_02=$_POST['cost_02'];
        $employee_02=$_POST['employee_02'];
        $complete_date_02=$_POST['complete_date_02'];
        $colors_02=$_POST['colors_02'];
		
		$sql = "INSERT INTO `artwork_order`(`customer_name`, `email_id`, `phone_number`, `discount_rate`, `order_date`, `approved_date`, `scheduled_print_date`, `total_price`, `apparel_item`, `event_name`, `base_color`, `theme_name`, `max_colors`, `art_location_01`, `description_01`, `cost_01`, `employee_01`, `complete_date_01`, `colors_01`, `art_location_02`, `description_02`, `cost_02`, `employee_02`, `complete_date_02`, `colors_02`) VALUES ('$customer_name','$email_id','$phone_number','$discount_rate','$order_date','$approved_date','$scheduled_print_date','$total_price','$apparel_item','$event_name','$base_color','$theme_name','$max_colors','$art_location_01','$description_01','$cost_01','$employee_01','$complete_date_01','$colors_01','$art_location_02','$description_02','$cost_02','$employee_02','$complete_date_02','$colors_02')";
		
		mysqli_query($con, $sql);
		
		$msg="Sucessfully Created a Artwork Order !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='artwork-order.php';</script>";
	
		mysql_close($con);
		
	}


    if(isset($_POST['update'])){
		
        $update = "UPDATE `artwork_order` SET `customer_name`='".$_POST['customer_name']."',`email_id`='".$_POST['email_id']."',`phone_number`='".$_POST['phone_number']."',`discount_rate`='".$_POST['discount_rate']."',`order_date`='".$_POST['order_date']."',`approved_date`='".$_POST['approved_date']."',`scheduled_print_date`='".$_POST['scheduled_print_date']."',`total_price`='".$_POST['total_price']."',`apparel_item`='".$_POST['apparel_item']."',`event_name`='".$_POST['event_name']."',`base_color`='".$_POST['base_color']."',`theme_name`='".$_POST['theme_name']."',`max_colors`='".$_POST['max_colors']."',`art_location_01`='".$_POST['art_location_01']."',`description_01`='".$_POST['description_01']."',`cost_01`='".$_POST['cost_01']."',`employee_01`='".$_POST['employee_01']."',`complete_date_01`='".$_POST['complete_date_01']."',`colors_01`='".$_POST['colors_01']."',`art_location_02`='".$_POST['art_location_02']."',`description_02`='".$_POST['description_02']."',`cost_02`='".$_POST['cost_02']."',`employee_02`='".$_POST['employee_02']."',`complete_date_02`='".$_POST['complete_date_02']."',`colors_02`='".$_POST['colors_02']."' WHERE `customer_id` = '".$_POST['customer_id']."' ";
		
		mysqli_query($con, $update);
		
		$msg="Sucessfully Updated a Artwork Order !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='artwork-order.php';</script>";
	
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
            <?php if ($_REQUEST['customer_id']){ ?>
                Edit Artwork Order | Cerulean Bee
                <?php } else { ?>
                Add Artwork Order | Cerulean Bee
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
                        <?php if ($_REQUEST['customer_id']){ ?>
                            <h2>EDIT ARTWORK ORDER</h2>
                            <?php } else { ?>
                            <h2>ADD ARTWORK ORDER</h2>
                        <?php } ?>
                    </div>
                    <div class="col-md-2 p-bottom-25"> 
                        <a href="artwork-order.php">
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
                                                <label for="customer_name">Customer Name
                                                    <sup>*</sup>
                                                </label>
                                                <input class="form-control" type="hidden" name="customer_id" value="<?php print strip_tags($data[0]);?>">
                                                <input type="text" name="customer_name" id="customer_name" class="text_field" placeholder="Last Name & First Name" value="<?php print strip_tags($data[1]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="order_date">Order Date
                                                </label>
                                                <input type="date" name="order_date" id="order_date" class="text_field" value="<?php print strip_tags($data[5]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email_id">E-mail
                                                </label>
                                                <input type="text" name="email_id" id="email_id" class="text_field" placeholder="Email address" value="<?php print strip_tags($data[2]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dateapproved">Date Approved</label>
                                                <input type="date" name="approved_date" id="dateapproved" class="text_field" value="<?php print strip_tags($data[6]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone
                                                </label>
                                                <input type="text" name="phone_number" id="phonenumber" class="text_field" placeholder="Phone Number including Country Code" value="<?php print strip_tags($data[3]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="scheduleddate">Scheduled Print Date
                                                </label>
                                                <input type="date" name="scheduled_print_date" id="scheduleddate" class="text_field" value="<?php print strip_tags($data[7]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="discount">Discount
                                                </label>
                                                <input type="text" name="discount_rate" id="discount" class="text_field" placeholder="Enter Discount" value="<?php print strip_tags($data[4]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="totalprice">Total Price </label>
                                                <input type="text" name="total_price" id="totalprice" class="text_field" placeholder="Total Price" value="<?php print strip_tags($data[8]);?>">
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
                                                    <label for="apparelitem">Apparel / Item
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" name="apparel_item" id="apparelitem" class="text_field" placeholder="Enter Items" value="<?php print strip_tags($data[9]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="event">Event
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" name="event_name" id="event" class="text_field" placeholder="Enter Event Name" value="<?php print strip_tags($data[10]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="basecolor">Base Color
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" name="base_color" id="basecolor" class="text_field" placeholder="Base Color" value="<?php print strip_tags($data[11]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="theme">Theme
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" name="theme_name" id="theme" class="text_field" placeholder="Enter Theme Name" value="<?php print strip_tags($data[12]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="maxcolors">Maximum Colors <sup>*</sup></label>
                                                    <input type="text" name="max_colors" id="maxcolors" class="text_field" placeholder="Enter Colors" value="<?php print strip_tags($data[13]);?>">
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
                                    <h4>Artwork Details</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="apparelitem">Art Location
                                                    </label>
                                                    <input type="text" name="art_location_01" id="apparelitem" class="text_field" placeholder="Enter Items" value="<?php print strip_tags($data[14]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="event">Description
                                                    </label>
                                                    <input type="text" name="description_01" id="event" class="text_field" placeholder="Enter Event Name" value="<?php print strip_tags($data[15]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="basecolor">Cost
                                                    </label>
                                                    <input type="text" name="cost_01" id="basecolor" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[16]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="theme">Employee
                                                    </label>
                                                    <input type="text" name="employee_01" id="theme" class="text_field" placeholder="Enter Employee Name" value="<?php print strip_tags($data[17]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="maxcolors">Complete Date</label>
                                                    <input type="date" name="complete_date_01" id="maxcolors" class="text_field" value="<?php print strip_tags($data[18]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="theme">Colors
                                                        <sup>*</sup>
                                                    </label>
                                                    <textarea type="textarea" name="colors_01" id="theme" class="text_field" placeholder="Enter Colors"><?php print strip_tags($data[19]);?></textarea>
                                                </div>
                                            </div>                                          
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Artwork Details</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="apparelitem">Art Location
                                                    </label>
                                                    <input type="text" name="art_location_02" id="apparelitem" class="text_field" placeholder="Enter Items" value="<?php print strip_tags($data[20]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="event">Description
                                                    </label>
                                                    <input type="text" name="description_02" id="event" class="text_field" placeholder="Enter Event Name" value="<?php print strip_tags($data[21]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="basecolor">Cost
                                                    </label>
                                                    <input type="text" name="cost_02" id="basecolor" class="text_field" placeholder="Enter Amount" value="<?php print strip_tags($data[22]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="theme">Employee
                                                    </label>
                                                    <input type="text" name="employee_02" id="theme" class="text_field" placeholder="Enter Employee Name" value="<?php print strip_tags($data[23]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="maxcolors">Date Complete</label>
                                                    <input type="date" name="complete_date_02" id="maxcolors" class="text_field" value="<?php print strip_tags($data[24]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="theme">Colors
                                                    </label>
                                                    <textarea type="textarea" name="colors_02" id="theme" class="text_field" placeholder="Enter Colors"><?php print strip_tags($data[25]);?></textarea>
                                                </div>
                                            </div>                                          
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">

                            <?php if ($_REQUEST['customer_id']){ ?>
                                <button type="submit" name="update" class="btn btn--md btn-primary">Update</button>
                                <a href="artwork-order.php"><button type="button" class="btn btn-md btn-danger">Cancel</button></a>
                                <?php } else { ?>
                                <button type="submit" name="add" class="btn btn--md btn-primary">Save Change</button>
                                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                                <?php } ?>
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