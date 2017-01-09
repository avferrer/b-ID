<?php
include("php/config.php");
include("php/verify.php");

$sqlPerson = $instance->prepare("SELECT * from user WHERE email = :p1");
$sqlPerson->bindParam(":p1",$email);
$sqlPerson->execute();

$person = $sqlPerson->fetchAll()[0];
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
    <title>Signup Wizard - bID - Blockchain world identification</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- Wizard CSS -->
    <link href="../plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
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
                <h4 class="page-title">Form Wizard</h4> </div>

            <?php echo breadcrumbs(); ?>
        </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Blockchain Identification submit</h3>
                <p class="text-muted m-b-30 font-13"> Enter in BID!</p>
                <div id="exampleBasic2" class="wizard">
                    <ul class="wizard-steps" role="tablist">
                        <li class="active" role="tab">
                            <h4><span><i class="ti-user"></i></span>Account</h4> </li>
                        <li role="tab">
                            <h4><span><i class="ti-credit-card"></i></span>Documents</h4> </li>
                        <li role="tab">
                            <h4><span><i class="ti-check"></i></span>Confirmation</h4> </li>
                    </ul>
                    <div class="wizard-content">
                        <div class="wizard-pane active" role="tabpanel">
                            <!-- Inicio Informações -->
                            <!--.row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-wrapper collapse in" aria-expanded="true">
                                            <div class="panel-body">
                                                <form action="save.php" method="POST">
                                                    <div class="form-body">
                                                        <h3 class="box-title">Person Info</h3>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="John doe" value="<?php echo $person["firstname"]; ?>"/> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe" value="<?php echo $person["lastname"]; ?>"> </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Gender</label>
                                                                    <select name="gender" class="form-control">
                                                                        <option value="M"<?php if($person["gender"] == "M") { ?> selected="selected"<?php } ?>>Male</option>
                                                                        <option value="F"<?php if($person["gender"] == "F") { ?> selected="selected"<?php } ?>>Female</option>


                                                                    </select> <span class="help-block"> Select your gender </span> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Date of Birth</label>
                                                                    <input type="text" class="form-control" name="Birth" placeholder="dd/mm/yyyy"> </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Relationship</label>
                                                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                        <option value="S">Single</option>
                                                                        <option value="M">Married</option>
                                                                        <option value="D">Divorced</option>
                                                                        <option value="W">Widower</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Who are</label>
                                                                    <div class="radio-list">
                                                                        <label class="radio-inline p-0">
                                                                            <div class="radio radio-info">
                                                                                <input type="radio" name="radio" id="student" value="student">
                                                                                <label for="student">Student </label>
                                                                            </div>
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <div class="radio radio-info">
                                                                                <input type="radio" name="radio" id="foreign" value="foreign">
                                                                                <label for="foreign">Foreign </label>
                                                                            </div>
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <div class="radio radio-info">
                                                                                <input type="radio" name="radio" id="refugee" value="refugee">
                                                                                <label for="refugee">Refugee </label>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <h3 class="box-title m-t-40">Address</h3>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="form-group">
                                                                    <label>Street</label>
                                                                    <input type="text" name="address" class="form-control" value="<?php echo $person["address"] ?>"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" name="city" class="form-control" value="<?php echo $person["city"] ?>"> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" name="state"  class="form-control" value="<?php echo $person["state"] ?>"> </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Post Code</label>
                                                                    <input type="text" name="code" class="form-control"> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select class="form-control">
                                                                        <option>--Select your Country--</option>
                                                                        <?php
                                                                          $countrySql = $instance->prepare("SELECT * FROM country");
                                                                          $countrySql->execute();
                                                                          foreach($countrySql->fetchAll() as $inf){
                                                                            ?><option value="<?php echo $inf["id"]; ?>"<?php if($person["country"] == $inf["id"]){ ?> selected="selected"<?php } ?>><?php echo $inf["name"]; ?></option><?php
                                                                          }
                                                                         ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                       <center> <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button></center>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--./row-->
                            <!-- Fim -->
                        </div>

                        <div class="wizard-pane" role="tabpanel">
                            <!-- Inicio Upload -->

                            <div class="row">
                                <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Front</h3>
                                        <label for="input-file-now-custom-3">Preferably the main document of your country with photo</label>
                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" data-default-file="plugins/bower_components/dropify/src/images/driver.jpg" /> </div>
                                </div>
                                <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Back</h3>
                                        <label for="input-file-now-custom-3"></label>
                                        <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="plugins/bower_components/dropify/src/images/driverback.jpg" /> </div>
                                </div>
                            </div>
                            <!-- Fim -->
                        </div>
                        <div class="wizard-pane" role="tabpanel">
                            <!-- Final -->

                            <center>If all the data has been entered successfully, you will receive your wallet & identification blockchain in up to 14 days</center><br />
                            <center>Click in Finish</center>
                            <!-- Fim -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->

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
<!-- Form Wizard JavaScript -->
<script src="../plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- FormValidation -->
<link rel="stylesheet" href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
<script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!-- Sweet-Alert  -->
<script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    (function () {
        $('#exampleBasic').wizard({
            onFinish: function () {
                swal("Completed!", "Registration completed");
            }
        });
        $('#exampleBasic2').wizard({
            onFinish: function () {
                swal("Completed!", "Registration completed");
            }
        });
        $('#exampleBasic2').wizard({
            onFinish: function () {
                swal("Completed!", "Registration completed");
            }
        });
        $('#exampleValidator').wizard({
            onInit: function () {
                $('#validation').formValidation({
                    framework: 'bootstrap'
                    , fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                }
                                , stringLength: {
                                    min: 6
                                    , max: 30
                                    , message: 'The username must be more than 6 and less than 30 characters long'
                                }
                                , regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/
                                    , message: 'The username can only consist of alphabetical, number, dot and underscore'
                                }
                            }
                        }
                        , email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required'
                                }
                                , emailAddress: {
                                    message: 'The input is not a valid email address'
                                }
                            }
                        }
                        , password: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                }
                                , different: {
                                    field: 'username'
                                    , message: 'The password cannot be the same as username'
                                }
                            }
                        }
                    }
                });
            }
            , validator: function () {
                var fv = $('#validation').data('formValidation');
                var $this = $(this);
                // Validate the container
                fv.validateContainer($this);
                var isValidStep = fv.isValidContainer($this);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }
                return true;
            }
            , onFinish: function () {
                $('#validation').submit();
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
        $('#accordion').wizard({
            step: '[data-toggle="collapse"]'
            , buttonsAppendTo: '.panel-collapse'
            , templates: {
                buttons: function () {
                    var options = this.options;
                    return '<div class="panel-footer"><ul class="pager">' + '<li class="previous">' + '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' + '</li>' + '<li class="next">' + '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' + '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' + '</li>' + '</ul></div>';
                }
            }
            , onBeforeShow: function (step) {
                step.$pane.collapse('show');
            }
            , onBeforeHide: function (step) {
                step.$pane.collapse('hide');
            }
            , onFinish: function () {
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
    })();
</script>
<!-- jQuery file upload -->
<script src="../plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez'
                , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                , remove: 'Supprimer'
                , error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            }
            else {
                drDestroy.init();
            }
        })
    });
</script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
