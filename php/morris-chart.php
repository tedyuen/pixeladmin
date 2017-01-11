<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Morris Charts Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Product line Chart</h3>
                        <ul class="list-inline text-right">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iPhone</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>iPad</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #2c5ca9;"></i>iPod</h5> </li>
                        </ul>
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Site visit Chart</h3>
                        <ul class="list-inline text-right">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Site A View</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B View</h5> </li>
                        </ul>
                        <div id="morris-area-chart2"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Line Chart</h3>
                        <div id="morris-line-chart"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Donute Chart</h3>
                        <div id="morris-donut-chart"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Bar Chart</h3>
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Extra Area Chart</h3>
                        <ul class="list-inline text-center m-t-40">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #444b4c;"></i>Site A</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #808f8f;"></i>Site C</h5> </li>
                        </ul>
                        <div id="extra-area-chart"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
            <footer class="footer text-center"> 2016 &copy; Pixel Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <script src="js/morris-data.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>

</html>