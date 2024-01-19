<?php
	include("check.php");	
	
	include("includes/connections.php");

    $datashow="SELECT * FROM `printorder`";
	
	$result=mysqli_query($con, $datashow);
?>
<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Order | Cerulean Bee</title>
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
            $currentPage ='print_orders';
            include('includes/header.php'); 
        ?>

        <div class="dashboard_contents p-top-50 p-bottom-70" style="min-height:63vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 p-bottom-25"> 
                    <a href="add-print-order.php"><button class="btn btn--icon btn-md btn--round btn-secondary" style="float: right;">
                                <span class="icon-plus" style="padding-right: 10px;"></span>Add Print Order
                        </button></a>
                    </div>
                    <div class="col-md-12">
                    <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Order Date</th>
                                        <th>Delivered Date</th>
                                        <th>Total Price</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row=mysqli_fetch_array($result)) { ?>
                                        <tr>
                                        <td style="color : black; font-size : 16px;"><?php print $row[0]; ?></td>
                                        <td style="color : black; font-size : 16px;"><?php print $row[1]; ?></td>
                                        <td style="color : black; font-size : 16px;"><?php print $row[3]; ?></td>
                                        <td style="color : black; font-size : 16px;"><?php print $row[4]; ?></td>
                                        <td style="color : black; font-size : 16px;"><?php print $row[14]; ?></td>
                                        <td style="color : black; font-size : 16px;"><?php print $row[10]; ?></td>
                                        <td style="color : black; font-size : 16px;">
                                        <a href='view-print-order.php?customerid=<?= strip_tags($row['customerid'])?>'><button class="btn btn-primary mb-2 mr-2 square" title="View Details"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></button></a>
                                        <a href='add-print-order.php?customerid=<?= strip_tags($row['customerid'])?>'><button class="btn btn-warning mb-2 mr-2 square" title="Edit Details"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></button></a>
                                        <a href='delete.php?customerid=<?= strip_tags($row['customerid'])?>'><button class="btn btn-danger square" title="Delete Patient"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button></a>
                                        </td>  
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- Start Pagination -->
                        </div><!-- ends: .statement_table -->
                    </div><!-- end .col-lg-3 -->
                </div>
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