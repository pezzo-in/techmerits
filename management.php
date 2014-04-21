<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Management | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description" content="Looking for efficient technology consulting services? Review the service portfolio of Techmerits to avail reliable, exclusive technology solutions."/>
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
                <li><a class="active" href="management.php">Management</a>
          
                </li>
                <li><a href="services.php">Services</a>
          <ul>
          <li><a href="consulting.php">Consulting</a></li>
             <li><a href="testing-services.php">Testing Services</a></li>
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
    <div id="gallery">
        <img src="images/demo/management.jpg" alt=""/>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <h1>Management</h1>
            <p>Techmerits, stepping into the technology industry, has a vast experience of working with global organizations. Offering varied consulting services, including solution development, solution implementation, people management, and software testing, the company has everything you need to take your business to the top.</p>
            <p>We develop, support, and maintain all kinds of software according to our clients’ specific needs. Get associated with Techmerits to make our ground-breaking solutions a part of your operations.</p>
            <h2>Delivering Value To...</h2>
            <ul>
            <li><p style="font-weight: bold">Clients</p></li>
            <li><p style="font-weight: bold">Employees</p></li></ul>
            <p>With our extensive experience in the technology consulting services, we are equipped with the best tools, resources, and information to deliver quality solutions to our clients. Maintaining a positive, encouraging environment in our organization, we ensure our employees get the maximum opportunities to learn and improve.</p>
            <p style="font-weight: bold; font-style:italic;">Stay connected with Techmerits!</p>
            <h2>Industry Insights</h2>
            <p>Having a unique industry-specific focus, Techmerits strives to empower its clients with its distinctive solutions. We design, build, and implement superior solutions based on the Microsoft, Oracle, Java, ERP, and many other technologies. We believe in constant improvements. And this is why we stay abreast of the latest technologies related to our clients’ and our own services.</p>
            <p style="font-weight: bold">We are the platform where performance and results are guaranteed.</p>
            
            <p style="font-weight: bold">Techmerits is just a call away. Contact us now to learn more about the extraordinary results we can offer to your business.</p>
        </div>
         <div id="column">
            <div id="featured">
                <ul>
                    <li>
                        <h2>Agile Project Management</h2>

                        <p class="imgholder"><img src="images/demo/240x90.gif" alt=""/></p>

                        <p>Being a value-driven methodology, agile project management enables organizations to deliver high quality results...</p>

                        <p class="more"><a href="#">Read More &raquo;</a></p>
                    </li>
                </ul>
            </div>
            <div id="featured">
                <ul>
                    <li>
                        <h2>Waterfall Project Management </h2>

                        <p class="imgholder"><img src="images/demo/240x90.gif" alt=""/></p>

                        <p>Since waterfall approach is a sequential design procedure, each of its stages has to be completed in order...</p>

                        <p class="more"><a href="#">Read More &raquo;</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
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
