<?php
include("php/config.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>bID - Government Enrollment</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Wizard CSS -->
<link href="plugins/bower_components/register-steps/steps.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="step-register">
  <div class="register-box">
    <div class="">
      <a href="javascript:void(0)" class="text-center db m-b-40"><img src="plugins/images/eliteadmin-logo-dark.png" alt="Home" /><br/><img src="../plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
      <!-- multistep form -->
      <?php
        $e = $_GET["e"];
        if($e != NULL){
          $error["notnull"] = "<b>Oh no!</b> All of the fields are required!";
          $error["password"] = "<b>Oh no!</b> The passwords doesn't match!";
          if($e != "notnull" && $e != "password"){
            $error[$e] = "<b>Oh no!</b> We have a diferent error here!";
          }
          ?>
            <div class="alert alert-danger" role="alert"><?php echo $error[$e]; ?></div>
          <?php
        }
      ?>
      <form id="msform" action="php/form/newuser.php" method="post">
        <!-- progressbar -->
        <ul id="eliteregister">
        <li class="active">Account Setup</li>
        <li>Personal Details</li>
        <li>Address Details</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
        <h2 class="fs-title">Create your account</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <input type="password" name="cpass" placeholder="Confirm Password" />
        <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <select name="gender" class="form-control">
          <optgroup label="Gender"></optgroup>
          <option>--Select your Gender--</option>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
        <input type="text" name="phone" placeholder="Phone" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Address Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="jp" placeholder="Job position" />
        <input type="text" name="street" placeholder="Street" />
        <input type="text" name="city" placeholder="City" />
        <input type="text" name="state" placeholder="State" />
        <select class="form-control" name="country">
            <optgroup label="Country"></optgroup>
            <option>--Select your Country--</option>
            <?php
              $countrySql = $instance->prepare("SELECT * FROM country");
              $countrySql->execute();
              foreach($countrySql->fetchAll() as $inf){
                ?><option value="<?php echo $inf["id"]; ?>"><?php echo $inf["name"]; ?></option><?php
              }
             ?>
        </select>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" id="submit" />

        </fieldset>
        </form>
        <div class="clear"></div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="plugins/bower_components/register-steps/jquery.easing.min.js"></script>
<script src="plugins/bower_components/register-steps/register-init.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!-- Form Wizard JavaScript -->
<script src="plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- FormValidation -->
<link rel="stylesheet" href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
<script>
  $("#submit").on('click', function(){
    form.submit();
  });
</script>


</body>
</html>
