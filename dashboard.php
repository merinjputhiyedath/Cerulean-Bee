<?php
	include("check.php");	
	
	include("includes/connections.php");
?>
<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Cerulean Bee</title>
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
            $currentPage ='dashboard';
            include('includes/header.php'); 
        ?>
        
        <div class="dashboard_contents p-top-150 p-bottom-150" style="min-height:63vh">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="primary">
                                <?php 
                                    $artwork = "SELECT * FROM artwork_order";

                                    if ($result = mysqli_query($con, $artwork)) {

                                        // Return the number of rows in result set
                                        $rowcount1 = mysqli_num_rows( $result );
                                        
                                        // Display result
                                        printf("%d\n", $rowcount1);
                                     }
                                ?>
                            </h1>
                            <p>Artwork Order</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="secondary">
                                <?php 
                                    $employee = "SELECT * FROM employee_work_log";

                                    if ($result = mysqli_query($con, $employee)) {

                                        // Return the number of rows in result set
                                        $rowcount2 = mysqli_num_rows( $result );
                                        
                                        // Display result
                                        printf("%d\n", $rowcount2);
                                     }
                                ?>
                            </h1>
                            <p>Employee Work Details</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="info">
                                <?php 
                                    $printorders = "SELECT * FROM printorder";

                                    if ($result = mysqli_query($con, $printorders)) {

                                        // Return the number of rows in result set
                                        $rowcount3 = mysqli_num_rows( $result );
                                        
                                        // Display result
                                        printf("%d\n", $rowcount3);
                                     }
                                ?>
                            </h1>
                            <p>Print Orders</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="danger">
                                <?php 
                                    $projectcost = "SELECT * FROM project_cost_analysis";

                                    if ($result = mysqli_query($con, $projectcost)) {

                                        // Return the number of rows in result set
                                        $rowcount3 = mysqli_num_rows( $result );
                                        
                                        // Display result
                                        printf("%d\n", $rowcount3);
                                     }
                                ?>
                            </h1>
                            <p>Project Cost Analysis</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                </div>
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->
    </section><!-- ends: .dashboard-area -->
    <!-- modal -->
    <div class="modal fade item_removal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Please confirm the removal of the item.</h4>
                    <div class="btns">
                        <a href="#" class="btn btn--md btn-danger">Confirm</a>
                        <a href="#" class="btn btn--md btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Cancel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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