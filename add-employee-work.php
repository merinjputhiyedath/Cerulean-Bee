<?php
	include("check.php");	
	
	include("includes/connections.php");

    if($_REQUEST['employee_id']){

		$datashow="SELECT * FROM `employee_work_log` WHERE employee_id=".$_REQUEST['employee_id'];

		$resrow=mysqli_query($con,$datashow);

		$data=mysqli_fetch_array($resrow);		

	}

    if(isset($_POST['add'])){
		
		$employee_id=$_POST['employee_id'];
        $employee_name=$_POST['employee_name'];
        $employee_phone=$_POST['employee_phone'];
        $work_type=$_POST['work_type'];
        $pd_date_01=$_POST['pd_date_01'];
        $pd_start_time_01=$_POST['pd_start_time_01'];
        $project_01=$_POST['project_01'];
        $art_item_01=$_POST['art_item_01'];
        $task_01=$_POST['task_01'];
        $end_time_01=$_POST['end_time_01'];
        $pd_date_02=$_POST['pd_date_02'];
        $pd_start_time_02=$_POST['pd_start_time_02'];
        $project_02=$_POST['project_02'];
        $art_item_02=$_POST['art_item_02'];
        $task_02=$_POST['task_02'];
        $end_time_02=$_POST['end_time_02'];
		
		$sql = "INSERT INTO `employee_work_log`(`employee_name`, `employee_phone`, `work_type`, `pd_date_01`, `pd_start_time_01`, `project_01`, `art_item_01`, `task_01`, `end_time_01`, `pd_date_02`, `pd_start_time_02`, `project_02`, `art_item_02`, `task_02`, `end_time_02`) VALUES ('$employee_name','$employee_phone','$work_type','$pd_date_01','$pd_start_time_01','$project_01','$art_item_01','$task_01','$end_time_01','$pd_date_02','$pd_start_time_02','$project_02','$art_item_02','$task_02','$end_time_02')";
		
		mysqli_query($con, $sql);
		
		$msg="Sucessfully Created a Employee work Log !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='employee-details.php';</script>";
	
		mysql_close($con);
		
	}

    if(isset($_POST['update'])) {

        $update = "UPDATE `employee_work_log` SET `employee_name`='".$_POST['employee_name']."',`employee_phone`='".$_POST['employee_phone']."',`work_type`='".$_POST['work_type']."',`pd_date_01`='".$_POST['pd_date_01']."',`pd_start_time_01`='".$_POST['pd_start_time_01']."',`project_01`='".$_POST['project_01']."',`art_item_01`='".$_POST['art_item_01']."',`task_01`='".$_POST['task_01']."',`end_time_01`='".$_POST['end_time_01']."',`pd_date_02`='".$_POST['pd_date_02']."',`pd_start_time_02`='".$_POST['pd_start_time_02']."',`project_02`='".$_POST['project_02']."',`art_item_02`='".$_POST['art_item_02']."',`task_02`='".$_POST['task_02']."',`end_time_02`='".$_POST['end_time_02']."' WHERE `employee_id` = '".$_POST['employee_id']."' ";
		
		mysqli_query($con, $update);
		
		$msg="Sucessfully Updated a Employee Work Log !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='employee-details.php';</script>";
	
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
        <?php if ($_REQUEST['employee_id']){ ?>
            Edit Employee Work Log | Cerulean Bee
            <?php } else { ?>
            Add Employee Work Log | Cerulean Bee
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
                    <?php if ($_REQUEST['employee_id']){ ?>
                        <h2>EDIT EMPLOYEE WORK LOG</h2>
                        <?php } else { ?>
                        <h2>ADD EMPLOYEE WORK LOG</h2>
                    <?php } ?>
                    </div>
                    <div class="col-md-2 p-bottom-25"> 
                        <a href="employee-details.php">
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
                                    <h4>Employee Information</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="employee_name">Employee Name
                                                    <sup>*</sup>
                                                </label>
                                                <input class="form-control" type="hidden" name="employee_id" value="<?php print strip_tags($data[0]);?>">
                                                <input type="text" name="employee_name" id="employee_name" class="text_field" placeholder="Last Name & First Name" value="<?php print strip_tags($data[1]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="employee_phone">Phone
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="employee_phone" id="employee_phone" class="text_field" placeholder="Enter Phone Number" value="<?php print strip_tags($data[2]);?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="work_type">Work Type
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="work_type" id="columns" class="text_field">
                                                        <option value="" selected disabled>Choose Employee Work Type</option>
                                                        <option value="Part Time" <?php if($data[3]=="Part Time") echo "selected"; ?>>Part Time</option>
                                                        <option value="Full Time"  <?php if($data[3]=="Full Time") echo "selected"; ?>>Full Time</option>
                                                    </select>
                                                    <span class="lnr icon-arrow-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- ends: .information_wrapper -->
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Project Details - 1</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pd_date_01">Date
                                                    </label>
                                                    <input type="date" name="pd_date_01" id="pd_date_01" class="text_field" placeholder="Enter Order Date" value="<?php print strip_tags($data[4]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pd_start_time_01">Start Time
                                                    </label>
                                                    <input type="time" name="pd_start_time_01" id="pd_start_time_01" class="text_field" placeholder="Enter Order Time" value="<?php print strip_tags($data[5]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="project_01">Project
                                                    </label>
                                                    <input type="text" name="project_01" id="project_01" class="text_field" placeholder="Enter Project Name" value="<?php print strip_tags($data[6]);?>"> 
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="art_item_01">Art Item
                                                    </label>
                                                    <input type="text" name="art_item_01" id="art_item_01" class="text_field" placeholder="Enter Art item" value="<?php print strip_tags($data[7]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="task_01">Task</label>
                                                    <input type="text" name="task_01" id="task_01" class="text_field" placeholder="Enter Task Name" value="<?php print strip_tags($data[8]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="end_time_01">End Time</label>
                                                    <input type="time" name="end_time_01" id="end_time_01" class="text_field" value="<?php print strip_tags($data[9]);?>">
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
                                    <h4>Project Details - 2</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pd_date_02">Date
                                                    </label>
                                                    <input type="date" name="pd_date_02" id="pd_date_02" class="text_field" placeholder="Enter Order Date" value="<?php print strip_tags($data[10]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pd_start_time_02">Start Time
                                                    </label>
                                                    <input type="time" name="pd_start_time_02" id="pd_start_time_02" class="text_field" placeholder="Enter Order Time" value="<?php print strip_tags($data[11]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="project_02">Project
                                                    </label>
                                                    <input type="text" name="project_02" id="project_02" class="text_field" placeholder="Enter Project Name" value="<?php print strip_tags($data[12]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="art_item_02">Art Item
                                                    </label>
                                                    <input type="text" name="art_item_02" id="art_item_02" class="text_field" placeholder="Enter Art item" value="<?php print strip_tags($data[13]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="task_02">Task</label>
                                                    <input type="text" name="task_02" id="task_02" class="text_field" placeholder="Enter Task Name" value="<?php print strip_tags($data[14]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="end_time_02">End Time</label>
                                                    <input type="time" name="end_time_02" id="end_time_02" class="text_field" value="<?php print strip_tags($data[15]);?>">
                                                </div>
                                            </div><!-- ends: .col-md-6 -->                                             
                                        </div><!-- ends: .row -->
                                    </div>
                                </div><!-- ends: .information__set -->
                            </div><!-- ends: .information_module -->
                        </div><!-- ends: .col-md-12 -->
                        
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <?php if ($_REQUEST['employee_id']){ ?>
                                    <button type="submit" name="update" class="btn btn--md btn-primary">Update</button>
                                    <a href="employee-details.php"><button type="button" class="btn btn-md btn-danger">Cancel</button></a>
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