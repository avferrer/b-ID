<?php
  include("php/config.php");
  include("php/verify.php");

  $sqlPerson = $instance->prepare("SELECT * from user WHERE email = :p1");
  $sqlPerson->bindParam(":p1",$email);
  $sqlPerson->execute();

  $person = $sqlPerson->fetchAll()[0];

  $search = $_GET["search"];
  if($search){
      $sqlSearch = $instance->prepare("SELECT * from user WHERE code = :p1");
      $sqlSearch->bindParam(":p1",$search);
      $sqlSearch->execute();
      if($sqlSearch->rowCount() > 0){
        $personSearch = $sqlSearch->fetchAll()[0];
        $ok = 1;
      }else{
        $ok = 0;
      }
  }

  $gender["M"] = "Male";
  $gender["F"] = "Female";

  $category["student"] = "Student";
  $category["student"] = "Foreign";
  $category["refugee"] = "Refugee";
  $category[""] = "Null";
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
    <title>Search - bID - Blockchain Identification</title>
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
                <h4 class="page-title">Starter Page</h4> </div>

            <?php echo breadcrumbs(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <?php if($ok == 1) { ?><div class="panel-heading"> INFORMATION</div>
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <h3 class="box-title">Person Info</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">First Name:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["firstname"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Last Name:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["lastname"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Gender:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $gender[$personSearch["gender"]]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php if($personSearch["birth"] != NULL){ echo date("m/d/Y",strtotime($personSearch["birth"])); }else{ echo "Null"; } ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Category:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $category[$personSearch["type"]]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">DOC:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <input type="button" value="Show DOC" class="btn btn-info"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <h3 class="box-title">Address</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Address:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["address"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">City:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["city"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">State:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["state"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Post Code:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo $personSearch["zip"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Country:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> <?php echo searchCountry($personSearch["country"]); ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-info"> <i class="fa fa-pencil"></i> Edit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><?php }elseif($search != NULL && $ok == 0) { ?><h3>No results found for this code.</h3><?php } ?>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php include 'php/right-sidebar.php';?>
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
