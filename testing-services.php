<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Testing Services | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
     <meta name="description" content="Learn about the Techmerits’ technology testing services to ensure the safety and efficiency of your databases, mobile apps, SAP and SAS software."/>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
</head>
<body id="top">
<div class="wrapper col1 header-master">
    <div id="head">
       <h1><a href="#"><img src="./images/demo/logo-bluebg.png" width="300" border="2" style="margin-top:50px"></a></h1>


        <div id="topnav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a>

                    <ul>
                         <li><a href="
about-us.php#mission-vision">Mission And Vission</a></li>
                    </ul>
                </li>
                <li><a href="management.php">Management</a>
          
                </li>
                <li><a href="services.php">Services</a>
          <ul>
          <li><a href="consulting.php">Consulting</a></li>
             <li><a class="active" href="testing-services.php">Testing Services</a></li>
                <li><a href="software-development-services.php">Development Services</a></li>
                <li><a href="project-management.php">Project Management</a></li>

          </ul>
                </li>
             
             <li><a href="#contactform">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper col2">
    <div id="breadcrumb">
        <ul>
            <li class="first">You Are Here</li>
            <li>&#187;</li>
            <li><a href="index.php">Home</a></li>
            <li>&#187;</li>
            <li>Testing Services</li>
        </ul>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <img src="http://dummyimage.com/960x200/cccccc/ffffff.jpg" alt=""/>
        <h1>Testing Services</h1>
        <p style="font-weight: bold; font-style:italic;">Developing Fully Tested, Perfectly Implemented Technology Solutions</p>
        <p>Considering our clients’ requirements for quality assurance, we strive to test every technology solution, software, and system according to the most stringent industry standards. Supervised by a team of expert analysts, our testing procedures are designed to check every dimension, aspect, and element of the product. </p>
        <p style="font-weight: bold; ">Techmerits-Ready to become your centralize technology testing resource.</p>
        <h3>Our Key Services</h3>
        <p>The core elements of our technology testing services are:</p>
        <h2>Functional, Regression and End-to-End Testing</h2>
<p>Including a combination of performance, financial, and quality metrics, these services are used for compliance testing, product testing, lifecycle testing, and maintenance testing.</p>
<h2>Automated Testing</h2>
<p>Techmerits can design and create comprehensive test automation frameworks for its clients. With automated testing facilities, we minimize manual testing and help organizations save on time and money.</p>
<h2>Load and Performance Testing</h2>
<p>With this testing service, we can identify any website’s traffic capacity, bottlenecks, and the overall performance. We evaluate their response and functionality under varied load levels.  </p>
<h2>Mobile Application Testing </h2>
<p>Techmerits brings top of the line testing services for mobile applications. Our analysts invest their time and expertise to help you identify the defects and issues that are likely to affect your mobile apps. Test your mobile apps with Techmerits to launch a successful product.</p>
<h2>Browser Compatibility Testing</h2>
<p>With our testing tools, we ensure your website is compatible with the browsers commonly used.</p> 
<h2>SAP, Siebel and SAS Testing</h2>
<p>Testing SAP, Siebel, and SAS solutions, we help you reduce development and testing expenses. While working with us, you can comply with quality assurance standards with ease.</p>
<h2>Web Testing </h2>
<p>Techmerits makes it convenient for its clients to test their web apps for different devices and browsers. Ensure your users’ web experience by testing your app with Techmerits.</p>
<h2>Database Testing</h2>
<p>The dedicated analysts of Techmerits can validate the consistency, integrity, performance, and security of your database. </p>
<p style="font-weight: bold; ">Techmerits will never let you compromise on the security or efficiency of your technology systems.</p>

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