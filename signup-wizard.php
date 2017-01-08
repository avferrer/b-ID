<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>bID - Blockchain world identification</title>
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
                                                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="John doe"/> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe"> </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Gender</label>
                                                                    <select name="gender" class="form-control">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female
                                                                        <option value="other">Other</option>
                                                                        <option value="nazist">Nazist</option>


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
                                                                        <option value="Category 1">Single</option>
                                                                        <option value="Category 2">Married</option>
                                                                        <option value="Category 3">Divorced</option>
                                                                        <option value="Category 4">Widower</option>
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
                                                                                <input type="radio" name="radio" id="radio1" value="option1">
                                                                                <label for="radio1">Student </label>
                                                                            </div>
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <div class="radio radio-info">
                                                                                <input type="radio" name="radio" id="radio2" value="option2">
                                                                                <label for="radio2">Foreign </label>
                                                                            </div>
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <div class="radio radio-info">
                                                                                <input type="radio" name="radio" id="radio3" value="option3">
                                                                                <label for="radio3">Refugee </label>
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
                                                                    <input type="text" name="street" class="form-control"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" name="city" class="form-control"> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" name="state"  class="form-control"> </div>
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
                                                                        <option value="AFG">Afghanistan</option>
                                                                        <option value="ALA">Åland Islands</option>
                                                                        <option value="ALB">Albania</option>
                                                                        <option value="DZA">Algeria</option>
                                                                        <option value="ASM">American Samoa</option>
                                                                        <option value="AND">Andorra</option>
                                                                        <option value="AGO">Angola</option>
                                                                        <option value="AIA">Anguilla</option>
                                                                        <option value="ATA">Antarctica</option>
                                                                        <option value="ATG">Antigua and Barbuda</option>
                                                                        <option value="ARG">Argentina</option>
                                                                        <option value="ARM">Armenia</option>
                                                                        <option value="ABW">Aruba</option>
                                                                        <option value="AUS">Australia</option>
                                                                        <option value="AUT">Austria</option>
                                                                        <option value="AZE">Azerbaijan</option>
                                                                        <option value="BHS">Bahamas</option>
                                                                        <option value="BHR">Bahrain</option>
                                                                        <option value="BGD">Bangladesh</option>
                                                                        <option value="BRB">Barbados</option>
                                                                        <option value="BLR">Belarus</option>
                                                                        <option value="BEL">Belgium</option>
                                                                        <option value="BLZ">Belize</option>
                                                                        <option value="BEN">Benin</option>
                                                                        <option value="BMU">Bermuda</option>
                                                                        <option value="BTN">Bhutan</option>
                                                                        <option value="BOL">Bolivia, Plurinational State of</option>
                                                                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                                        <option value="BIH">Bosnia and Herzegovina</option>
                                                                        <option value="BWA">Botswana</option>
                                                                        <option value="BVT">Bouvet Island</option>
                                                                        <option value="BRA">Brazil</option>
                                                                        <option value="IOT">British Indian Ocean Territory</option>
                                                                        <option value="BRN">Brunei Darussalam</option>
                                                                        <option value="BGR">Bulgaria</option>
                                                                        <option value="BFA">Burkina Faso</option>
                                                                        <option value="BDI">Burundi</option>
                                                                        <option value="KHM">Cambodia</option>
                                                                        <option value="CMR">Cameroon</option>
                                                                        <option value="CAN">Canada</option>
                                                                        <option value="CPV">Cape Verde</option>
                                                                        <option value="CYM">Cayman Islands</option>
                                                                        <option value="CAF">Central African Republic</option>
                                                                        <option value="TCD">Chad</option>
                                                                        <option value="CHL">Chile</option>
                                                                        <option value="CHN">China</option>
                                                                        <option value="CXR">Christmas Island</option>
                                                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                                                        <option value="COL">Colombia</option>
                                                                        <option value="COM">Comoros</option>
                                                                        <option value="COG">Congo</option>
                                                                        <option value="COD">Congo, the Democratic Republic of the</option>
                                                                        <option value="COK">Cook Islands</option>
                                                                        <option value="CRI">Costa Rica</option>
                                                                        <option value="CIV">Côte d'Ivoire</option>
                                                                        <option value="HRV">Croatia</option>
                                                                        <option value="CUB">Cuba</option>
                                                                        <option value="CUW">Curaçao</option>
                                                                        <option value="CYP">Cyprus</option>
                                                                        <option value="CZE">Czech Republic</option>
                                                                        <option value="DNK">Denmark</option>
                                                                        <option value="DJI">Djibouti</option>
                                                                        <option value="DMA">Dominica</option>
                                                                        <option value="DOM">Dominican Republic</option>
                                                                        <option value="ECU">Ecuador</option>
                                                                        <option value="EGY">Egypt</option>
                                                                        <option value="SLV">El Salvador</option>
                                                                        <option value="GNQ">Equatorial Guinea</option>
                                                                        <option value="ERI">Eritrea</option>
                                                                        <option value="EST">Estonia</option>
                                                                        <option value="ETH">Ethiopia</option>
                                                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                                                        <option value="FRO">Faroe Islands</option>
                                                                        <option value="FJI">Fiji</option>
                                                                        <option value="FIN">Finland</option>
                                                                        <option value="FRA">France</option>
                                                                        <option value="GUF">French Guiana</option>
                                                                        <option value="PYF">French Polynesia</option>
                                                                        <option value="ATF">French Southern Territories</option>
                                                                        <option value="GAB">Gabon</option>
                                                                        <option value="GMB">Gambia</option>
                                                                        <option value="GEO">Georgia</option>
                                                                        <option value="DEU">Germany</option>
                                                                        <option value="GHA">Ghana</option>
                                                                        <option value="GIB">Gibraltar</option>
                                                                        <option value="GRC">Greece</option>
                                                                        <option value="GRL">Greenland</option>
                                                                        <option value="GRD">Grenada</option>
                                                                        <option value="GLP">Guadeloupe</option>
                                                                        <option value="GUM">Guam</option>
                                                                        <option value="GTM">Guatemala</option>
                                                                        <option value="GGY">Guernsey</option>
                                                                        <option value="GIN">Guinea</option>
                                                                        <option value="GNB">Guinea-Bissau</option>
                                                                        <option value="GUY">Guyana</option>
                                                                        <option value="HTI">Haiti</option>
                                                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                                                        <option value="VAT">Holy See (Vatican City State)</option>
                                                                        <option value="HND">Honduras</option>
                                                                        <option value="HKG">Hong Kong</option>
                                                                        <option value="HUN">Hungary</option>
                                                                        <option value="ISL">Iceland</option>
                                                                        <option value="IND">India</option>
                                                                        <option value="IDN">Indonesia</option>
                                                                        <option value="IRN">Iran, Islamic Republic of</option>
                                                                        <option value="IRQ">Iraq</option>
                                                                        <option value="IRL">Ireland</option>
                                                                        <option value="IMN">Isle of Man</option>
                                                                        <option value="ISR">Israel</option>
                                                                        <option value="ITA">Italy</option>
                                                                        <option value="JAM">Jamaica</option>
                                                                        <option value="JPN">Japan</option>
                                                                        <option value="JEY">Jersey</option>
                                                                        <option value="JOR">Jordan</option>
                                                                        <option value="KAZ">Kazakhstan</option>
                                                                        <option value="KEN">Kenya</option>
                                                                        <option value="KIR">Kiribati</option>
                                                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                                                        <option value="KOR">Korea, Republic of</option>
                                                                        <option value="KWT">Kuwait</option>
                                                                        <option value="KGZ">Kyrgyzstan</option>
                                                                        <option value="LAO">Lao People's Democratic Republic</option>
                                                                        <option value="LVA">Latvia</option>
                                                                        <option value="LBN">Lebanon</option>
                                                                        <option value="LSO">Lesotho</option>
                                                                        <option value="LBR">Liberia</option>
                                                                        <option value="LBY">Libya</option>
                                                                        <option value="LIE">Liechtenstein</option>
                                                                        <option value="LTU">Lithuania</option>
                                                                        <option value="LUX">Luxembourg</option>
                                                                        <option value="MAC">Macao</option>
                                                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                                        <option value="MDG">Madagascar</option>
                                                                        <option value="MWI">Malawi</option>
                                                                        <option value="MYS">Malaysia</option>
                                                                        <option value="MDV">Maldives</option>
                                                                        <option value="MLI">Mali</option>
                                                                        <option value="MLT">Malta</option>
                                                                        <option value="MHL">Marshall Islands</option>
                                                                        <option value="MTQ">Martinique</option>
                                                                        <option value="MRT">Mauritania</option>
                                                                        <option value="MUS">Mauritius</option>
                                                                        <option value="MYT">Mayotte</option>
                                                                        <option value="MEX">Mexico</option>
                                                                        <option value="FSM">Micronesia, Federated States of</option>
                                                                        <option value="MDA">Moldova, Republic of</option>
                                                                        <option value="MCO">Monaco</option>
                                                                        <option value="MNG">Mongolia</option>
                                                                        <option value="MNE">Montenegro</option>
                                                                        <option value="MSR">Montserrat</option>
                                                                        <option value="MAR">Morocco</option>
                                                                        <option value="MOZ">Mozambique</option>
                                                                        <option value="MMR">Myanmar</option>
                                                                        <option value="NAM">Namibia</option>
                                                                        <option value="NRU">Nauru</option>
                                                                        <option value="NPL">Nepal</option>
                                                                        <option value="NLD">Netherlands</option>
                                                                        <option value="NCL">New Caledonia</option>
                                                                        <option value="NZL">New Zealand</option>
                                                                        <option value="NIC">Nicaragua</option>
                                                                        <option value="NER">Niger</option>
                                                                        <option value="NGA">Nigeria</option>
                                                                        <option value="NIU">Niue</option>
                                                                        <option value="NFK">Norfolk Island</option>
                                                                        <option value="MNP">Northern Mariana Islands</option>
                                                                        <option value="NOR">Norway</option>
                                                                        <option value="OMN">Oman</option>
                                                                        <option value="PAK">Pakistan</option>
                                                                        <option value="PLW">Palau</option>
                                                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                                                        <option value="PAN">Panama</option>
                                                                        <option value="PNG">Papua New Guinea</option>
                                                                        <option value="PRY">Paraguay</option>
                                                                        <option value="PER">Peru</option>
                                                                        <option value="PHL">Philippines</option>
                                                                        <option value="PCN">Pitcairn</option>
                                                                        <option value="POL">Poland</option>
                                                                        <option value="PRT">Portugal</option>
                                                                        <option value="PRI">Puerto Rico</option>
                                                                        <option value="QAT">Qatar</option>
                                                                        <option value="REU">Réunion</option>
                                                                        <option value="ROU">Romania</option>
                                                                        <option value="RUS">Russian Federation</option>
                                                                        <option value="RWA">Rwanda</option>
                                                                        <option value="BLM">Saint Barthélemy</option>
                                                                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                        <option value="KNA">Saint Kitts and Nevis</option>
                                                                        <option value="LCA">Saint Lucia</option>
                                                                        <option value="MAF">Saint Martin (French part)</option>
                                                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                                                        <option value="WSM">Samoa</option>
                                                                        <option value="SMR">San Marino</option>
                                                                        <option value="STP">Sao Tome and Principe</option>
                                                                        <option value="SAU">Saudi Arabia</option>
                                                                        <option value="SEN">Senegal</option>
                                                                        <option value="SRB">Serbia</option>
                                                                        <option value="SYC">Seychelles</option>
                                                                        <option value="SLE">Sierra Leone</option>
                                                                        <option value="SGP">Singapore</option>
                                                                        <option value="SXM">Sint Maarten (Dutch part)</option>
                                                                        <option value="SVK">Slovakia</option>
                                                                        <option value="SVN">Slovenia</option>
                                                                        <option value="SLB">Solomon Islands</option>
                                                                        <option value="SOM">Somalia</option>
                                                                        <option value="ZAF">South Africa</option>
                                                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="SSD">South Sudan</option>
                                                                        <option value="ESP">Spain</option>
                                                                        <option value="LKA">Sri Lanka</option>
                                                                        <option value="SDN">Sudan</option>
                                                                        <option value="SUR">Suriname</option>
                                                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                                                        <option value="SWZ">Swaziland</option>
                                                                        <option value="SWE">Sweden</option>
                                                                        <option value="CHE">Switzerland</option>
                                                                        <option value="SYR">Syrian Arab Republic</option>
                                                                        <option value="TWN">Taiwan, Province of China</option>
                                                                        <option value="TJK">Tajikistan</option>
                                                                        <option value="TZA">Tanzania, United Republic of</option>
                                                                        <option value="THA">Thailand</option>
                                                                        <option value="TLS">Timor-Leste</option>
                                                                        <option value="TGO">Togo</option>
                                                                        <option value="TKL">Tokelau</option>
                                                                        <option value="TON">Tonga</option>
                                                                        <option value="TTO">Trinidad and Tobago</option>
                                                                        <option value="TUN">Tunisia</option>
                                                                        <option value="TUR">Turkey</option>
                                                                        <option value="TKM">Turkmenistan</option>
                                                                        <option value="TCA">Turks and Caicos Islands</option>
                                                                        <option value="TUV">Tuvalu</option>
                                                                        <option value="UGA">Uganda</option>
                                                                        <option value="UKR">Ukraine</option>
                                                                        <option value="ARE">United Arab Emirates</option>
                                                                        <option value="GBR">United Kingdom</option>
                                                                        <option value="USA">United States</option>
                                                                        <option value="UMI">United States Minor Outlying Islands</option>
                                                                        <option value="URY">Uruguay</option>
                                                                        <option value="UZB">Uzbekistan</option>
                                                                        <option value="VUT">Vanuatu</option>
                                                                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                                        <option value="VNM">Viet Nam</option>
                                                                        <option value="VGB">Virgin Islands, British</option>
                                                                        <option value="VIR">Virgin Islands, U.S.</option>
                                                                        <option value="WLF">Wallis and Futuna</option>
                                                                        <option value="ESH">Western Sahara</option>
                                                                        <option value="YEM">Yemen</option>
                                                                        <option value="ZMB">Zambia</option>
                                                                        <option value="ZWE">Zimbabwe</option>
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
                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" data-default-file="../plugins/bower_components/dropify/src/images/driver.jpg" /> </div>
                                </div>
                                <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Back</h3>
                                        <label for="input-file-now-custom-3"></label>
                                        <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="../plugins/bower_components/dropify/src/images/driverback.jpg" /> </div>
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