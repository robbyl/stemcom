<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 7]>
                <link href="css/ie_style.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    </head>

    <body id="page5">
        <div id="main">
            <!-- header -->
            <div id="header">
                <!-- .address -->
                <div class="address"> <a href="#">www.stemcom.co.tz</a> </div>
                <!-- /.address -->
                <!-- .logo -->
                <div class="logo">
                    <h1><a href="index.html"><img src="images/the%20real%20stemcom%20logo.gif"  /></a></h1>
                </div>
                <!-- /.logo -->
                <form action="Contacts.php" id="search-form">
                    <fieldset>
                        <input type="text" class="text" /><input type="submit" value="Search" class="submit" />
                    </fieldset>
                </form>
            </div>
            <!-- content -->
            <div id="content">
                <div class="wrapper">
                    <div class="aside">
                        <p>Main menu</p>
                        <!-- .nav -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="Aboutus.html">About Us</a></li>
                            <li><a href="Services.html">Our Services</a></li>
                            <li><a href="Solutions.html">Our Solutions</a></li>
                            <li><a href="Products.html" >Our Products</a></li>
                            <li><a href="Divisions.html">Our Divisions</a></li>
                            <li><a href="Customers.html">Our Clients/Customers </a></li>
                            <li><a href="http://mail.stemcom.co.tz">WebMail</a></li>
                            <li><a href="Contacts.php" class="current">Contacts</a></li>
                        </ul>
                        <!-- /.nav -->
                        <!-- .box -->
                        <p>Browse</p>
                        <div class="box">
                            <div class="inner style8">
                                <ul class="list1 style10">
                                    <li><a href="DomainRegistration">Domain Registration & Hosting</a></li>
                                    <li><a href="AdvancedInfoSecurity.html">Advanced Info Security Systems</a></li>
                                    <li><a href="CloudComputing.html">Cloud Computing</a></li>
                                    <li><a href="WebsiteDesign.html">WebSite Design and Development</a></li>
                                    <li><a href="OperationsConsulting">Operations Consulting</a></li>
                                    <li><a href="AllianceTechnology.html">Alliance Technology Partner</a></li>
                                    <li><a href="ICTTechnicalTraining.html">ICT Technical Training</a></li>
                                    <li><a href="Jobs.html">Job Opportunities</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box -->

                    </div>
                    <div class="mainContent">
                        <div class="section">
                            <h2>Contact Information</h2>
                            <div class="wrapper"> <img src="images/map.jpg" alt="" class="img-indent" />
                                <dl class="address">
                                    <dt>Company name:<br />
                                        Date of incorporation:<br />
                                        Business address.</dt>
                                    <dd><span>Hotline: </span></dd>
                                    <dd><span>&nbsp;</span></dd>
                                    <dd class="alt">E-mail: </dd>
                                </dl>
                                <dl class="address last">
                                    <p><strong><span style="color: #ff6600">STEMCOM</span> <span style="color: #006699">TECHNOLOGIES</span></strong><br />
                                        11<sup>th</sup> August, 2010,<br />
                                        P.O.Box 13490, Dar es salaam.</p>
                                    <dd><span>+255 653 191 050</span></dd>
                                    <dd><span>+255 784 342 700</span></dd>
                                    <dd><span><strong><a href="mailto:info@stemcom.co.tz">info@stemcom.co.tz</a></strong></span></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="section">
                            <h3>Contact Form</h3>

                            <?php
                            if (isset($_GET['sent'])) {
                                if (!empty($_GET['sent'])) {
                                    $status = $_GET['sent'];
                                    if ($status === 'true') {
                                        echo '<div class="msg">Message has been sent!. thank you for your time</div>';
                                    } elseif ($status === 'false') {
                                        echo '<div class="error">There was an error sending message!. Please try again.</div>';
                                    }
                                }
                            }
                            ?>

                            <p> If you have anything to say, please don't hesitate to send us a message below. </p>
                            <p><span style="color: #ff6600">*</span> Indicating these fields are required.</p>

                            <form action="process_contacts.php" id="contacts-form" method="post">
                                <fieldset>
                                    <div class="col-1">
                                        <label for="text1"><span id="sprytextfield1">
                                                Full Name: <span style="color: #ff6600">*</span> <br />
                                                <input type="text" name="fullname" id="text1" />
                                                <span class="textfieldRequiredMsg"></span></span>
                                        </label>


                                        <label for="text2"><span id="sprytextfield2"> E-mail: <span style="color: #ff6600">*</span> <br />
                                                <input type="text" name="email" id="text2" />
                                                <span class="textfieldRequiredMsg"></span><span class="textfieldInvalidFormatMsg"></span></span>
                                        </label>


                                        <label>Fax:<br />
                                            <input type="text" name="fax" value=""/>
                                        </label>

                                    </div>
                                    <div class="col-2"> Message: <span style="color: #ff6600">*</span><br />
                                        <span id="sprytextarea1">
                                            <textarea name="message" id="textarea1" cols="45" rows="5"></textarea>
                                            <span class="textareaRequiredMsg"></span></span>

                                        <div class="alignright">
                                            <input name="" value="submit" type="submit" class="btns" />
                                            <input name="" value="clear" type="reset" class="btns" />
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="section">
                            <h3>Our Location</h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div id="footer">
                <div class="wrapper">
                    <div class="fleft">stemcom technologies&copy; 2010&nbsp; &nbsp; <a href="Privacy.html">Privacy Policy</a></div>
                    <div class="fright">
                        <!-- .nav -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a>|</li>
                            <li><a href="Aboutus.html">About</a>|</li>
                            <li><a href="Services.html">Services</a>|</li>
                            <li><a href="Solutions.html">Solutions</a>|</li>
                            <li><a href="Products.html">Products</a>|</li>
                            <li><a href="Divisions.html">Divisions</a>|</li>
                            <li><a href="Customers.html">Customers</a>|</li>
                            <li><a href="Contacts.php" class="current">Contacts</a></li>
                        </ul>
                        <!-- /.nav -->
                        <div class="alignright">stemcom technologies Tanzania Limited. Uhuru Road, Opposite Keys Hotel near Mnazi Mmoja.</div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
        </script>
    </body>
</html>