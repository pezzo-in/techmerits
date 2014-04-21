
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Consulting Services | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description"
          content="Work with Techmerits team to avail innovative technology consulting services. Embrace success and enhance your business results with Techmerits. "/>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
</head>
<body id="top">
<div class="wrapper col1 header-master">
    <div id="head">
       <h1><a href="#"><img src="./images/demo/logo-bluebg.png" width="300" border="2" style="margin-top:50px"></a></h1>


        <div id="topnav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About Us</a>

                    <ul>
                        <li><a href="about-us.html#mission-vision">Mission And Vission</a></li>
                    </ul>
                </li>
                <li><a href="management.html">Management</a>

                </li>
                <li><a href="services.html">Services</a>
                    <ul>
                        <li><a class="active" href="consulting.html">Consulting</a></li>
                        <li><a href="testing-services.html">Testing Services</a></li>
                        <li><a href="software-development-services.html">Development Services</a></li>
                        <li><a href="project-management.html">Project Management</a></li>

                    </ul>
                </li>

                <li><a href="#contactform">Contact</a></li>
            </ul>
        </div>
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="submit" name="go" id="go" value="GO"/>
                    <input type="text" value="Search the site&hellip;"
                           onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;"/>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="wrapper col2">
    <div id="breadcrumb">
        <ul>
            <li class="first">You Are Here</li>
            <li>&#187;</li>
            <li><a href="index.html">Home</a></li>
            <li>&#187;</li>
            <li>Consulting</li>
        </ul>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <img src="http://dummyimage.com/960x200/cccccc/ffffff.jpg" alt=""/>

<<<<<<< HEAD
        <h1>Consulting</h1>
        <p  style="font-weight: bold; font-style:italic;">Helping Organizations Develop Confidence on Their Technology Solutions</p>
=======
        <h1>Services-Consulting</h1>
>>>>>>> 38df33c7e4509fc6e58fdeb36e3843b9b4273316

        <p style="font-weight: bold; font-style:italic;">Helping Organizations Develop Confidence on Their Technology
            Solutions</p>

        <p>At Techmerits, we excel in technology development, testing, management, and consulting services to equip
            organizations with the tools, solutions, and systems they need to ensure their success. Helping them make
            lasting improvements in their operations and procedures, we focus persistently on the benefits associated
            with business transformation.</p>

        <p style="font-weight: bold;">Step into the spotlight with our technology consulting services!</p>

        <h2>Turning Opportunities Into Results</h2>

        <p>Techmerits won’t let you miss any technology opportunity. Getting the most out of every procedure and system,
            we merge technology developments with our clients’ goals to help them stay on the top. Their success is our
            success. And we make every possible effort to deliver them the results they seek from us. With our
            consulting services, you can redefine the future of your business and workforce. </p>

        <p>To help our clients keep pace with industry trends and developments, Techmerits uses a mix of revolutionary
            thinking and useful advice. Marking the evolution of a technology revolution, Techmerits is here to
            accelerate your growth.</p>

        <p style="font-weight: bold;">We transform possibilities into products. Grow with Techmerits.</p>

        <h3>Our Key Services</h3>

        <p>The core elements of our technology consulting services are:</p>

        <h2>Project Based Consulting</h2>

        <p>We draw on our experienced staff, valuable resources, flexible strategies, and functional tools to resolve
            our clients’ complex technology challenges. Capitalize on our competent consultants and managers to
            optimize, create, and expand your unique technology project.</p>

        <h2>Product Based Consulting</h2>

        <p>Our consulting services can optimize your specific business products and solutions according to your needs.
            While working with us, you can enhance your business success, strengthen your confidence, and build
            value.</p>

        <h2>Testing Consulting</h2>

        <p>At Techmerits, we harness new technologies, implement advanced solutions, and ensure outcomes. We strive to
            redesign how businesses excel, how systems are implemented, and how industries evolve. With our testing
            consulting services, you not only get the benefit of future thinking, but we also help you realize your
            technology dreams.</p>

        <p style="font-weight: bold;">Looking to think ahead? Expedite your success with the expert team of
            Techmerits.</p>

    </div>
</div>
<div class="wrapper col5 footer-master">
    <div id="footer">
       <div id="contactform">
            <h2>Why Not Contact Us Today !</h2>
            <?php
// display form if user has not clicked submit
if (!isset($_POST["submit"]))
  {
  ?>
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <fieldset>
                    <legend>Contact Form</legend>
                    <label for="fullname">Name:
                        <input id="fullname" name="fullname" type="text" value=""/>
                    </label>
                    <label for="emailaddress" class="margin">Email:
                        <input id="emailaddress" name="emailaddress" type="text" value=""/>
                    </label>
                    <label for="phone">Telephone:
                        <input id="phone" name="phone" type="text" value=""/>
                    </label>
                    <label for="subject" class="margin">Subject:
                        <input id="subject" name="subject" type="text" value=""/>
                    </label>
                    <label for="message">Message:<br/>
                        <textarea id="message" name="message" cols="40" rows="4"></textarea>
                    </label>

                    <p>
                        <input id="submitform" name="submit" type="submit" value="Submit"/>
                        &nbsp;
                        <input id="resetform" name="resetform" type="reset" value="Reset"/>
                    </p>
                </fieldset>
            </form>
            <?php
  }
else
  // the user has submitted the form
  {
  // Check if the "from" input field is filled out
  if (isset($_POST["emailaddress"]))
    {
    $fullname=$_POST["fullname"];
    $from = $_POST["emailaddress"]; // sender
    $phone=$_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("harikrishna1989k@gmail.com",$subject,$message,"From: $from\n");
    echo "Your Message send successfully";
    }
  }
?>
        </div>
        <!-- End Contact Form -->
        <div id="compdetails">
            <div id="officialdetails">
                <h2>Company Information !</h2>
                <ul>
                    <li>Tech Merits</li>
                    <li>Registered in England &amp; Wales</li>
                    <li>Company No. xxxxxxx</li>
                    <li class="last">VAT No. xxxxxxxxx</li>
                </ul>
                <h2>Stay in The Know !</h2>

                <p><a href="#">Get Our E-Newsletter</a> | <a href="#">Grab The RSS Feed</a></p>
            </div>
            <div id="contactdetails">
                <h2>Our Contact Details !</h2>
                <ul>
                    <li>Tech Merits</li>
                    <li>Street Name &amp; Number</li>
                    <li>Town</li>
                    <li>Postcode/Zip</li>
                    <li>Tel: xxxxx xxxxxxxxxx</li>
                    <li>Fax: xxxxx xxxxxxxxxx</li>
                    <li>Email: info@domain.com</li>
                    <li class="last">LinkedIn: <a href="#">Company Profile</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!-- End Company Details -->
        <div id="copyright">
            <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Tech Merits</a></p>

            <p class="fl_right">A work of Pezzo</p>
            <br class="clear"/>
        </div>
        <div class="clear"></div>
    </div>
</div>
</body>
</html>
