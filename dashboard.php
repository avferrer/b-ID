<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Index - Global Blockchain Identification</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
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
                <h4 class="page-title">Dashboard</h4> </div>

            <?php echo breadcrumbs(); ?>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">

                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="fa fa-btc"></i>
                                    <h5 class="text-muted vb">Bitcoin Wallet</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">
                                        <?php

                                        ?>



                                    </h3> </div> <!-- VALOR CARTEIRA -->
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 row-in-br">

                            <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="fa fa-btc"></i>
                                <h5 class="text-muted vb">Pendent Bitcoin</h5> </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-danger">0</h3> </div> <!-- VALOR CARTEIRA -->
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">

                            <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="fa fa-btc"></i>
                                <h5 class="text-muted vb">Addresses</h5> </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-danger">
                                    <?php


                                    $file = file_get_contents("https://block.io/api/v2/get_address_by/?api_key=7d41-9571-22d5-807a&label=".$first);
                                    $object = json_decode($file);
                                    echo $object->data->address;
                                    ?>
                                    </h3> </div> <!-- VALOR CARTEIRA -->

                        </div>
                </div>
            </div>
        </div>
                <!-- HISTORY BOX -->
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">History
                        <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                            <select class="form-control pull-right row b-none">
                                <option>January 2017</option>
                            </select>
                        </div>
                    </h3>
                    <div class="row sales-report">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h2>JANUARY 2017</h2>
                            <p>TRANSATIONS</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 ">
                            <h1 class="text-right text-success m-t-20">$0,000</h1> </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th>BTC</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>VALOR</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="txt-oflo">evStarts Network</td>
                                <td><span class="label label-megna label-rounded">Receive</span> </td>
                                <td class="txt-oflo">January 08</td>
                                <td><span class="text-success">0.00000000 BTC</span></td>
                            </tr>

                            </tbody>
                        </table> <a href="#">Check all the sales</a> </div>
                </div>
            </div>


    <!-- /.container-fluid -->
    <?php include 'php/footer.php';?>
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
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>