<?php

    include("includes/connections.php");

    if(isset($_REQUEST['customer_id'])) {

        $artwork = "DELETE FROM `artwork_order` WHERE customer_id=".$_REQUEST['customer_id'];

        mysqli_query($con, $artwork);
		
		$msg="Record Successfully Deleted !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='artwork-order.php';</script>";
	
		mysql_close($con);
    }

    if(isset($_REQUEST['employee_id'])) {

        $artwork = "DELETE FROM `employee_work_log` WHERE employee_id=".$_REQUEST['employee_id'];

        mysqli_query($con, $artwork);
		
		$msg="Record Successfully Deleted !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='employee-details.php';</script>";
	
		mysql_close($con);
    }

    if(isset($_REQUEST['customerid'])) {

        $artwork = "DELETE FROM `printorder` WHERE customerid=".$_REQUEST['customerid'];

        mysqli_query($con, $artwork);
		
		$msg="Record Successfully Deleted !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='print-order.php';</script>";
	
		mysql_close($con);
    }

    if(isset($_REQUEST['project_id'])) {

        $artwork = "DELETE FROM `project_cost_analysis` WHERE project_id=".$_REQUEST['project_id'];

        mysqli_query($con, $artwork);
		
		$msg="Record Successfully Deleted !!";
				
		echo "<script type='text/JavaScript'>alert ('$msg');window.location.href='project-cost-analysis.php';</script>";
	
		mysql_close($con);
    }

?>