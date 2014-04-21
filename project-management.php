<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Project Management | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description" content="Are you frustrated with your technology solutions? We can help. Let Techmerits manage your systems to minimize your technological frustrations. "/>
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
                         <li><a href="
about-us.html#mission-vision">Mission And Vission</a></li>
                    </ul>
                </li>
                <li><a href="management.html">Management</a>
          
                </li>
                <li><a href="services.html">Services</a>
          <ul>
          <li><a href="consulting.html">Consulting</a></li>
             <li><a href="testing-services.html">Testing Services</a></li>
                <li><a href="software-development-services.html">Development Services</a></li>
                <li><a class="active" href="project-management.html">Project Management</a></li>

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
            <li><a href="index.html">Home</a></li>
            <li>&#187;</li>
            <li>Project Management</li>
        </ul>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <img src="http://dummyimage.com/960x200/cccccc/ffffff.jpg" alt=""/>

        <h1>Project Management</h1>
        <p  style="font-weight: bold; font-style:italic;">Managing Technology, Optimizing Solutions</p>

        <p>Leading the technology consulting industry with its innovative methodologies, pioneering solutions, and dedicated services, Techmerits bridges the gap between performance-driven organizations and well-managed, perfectly executed technology projects. We provide our clients with unlimited support and management facilities whenever, wherever they need our expertise. With our automated tools, state of the art systems, and trained project managers, we can manage diverse IT projects solutions conveniently, efficiently, and flawlessly.</p>
        <p style="font-weight: bold;">Techmerits-Managing technology systems and solutions automatically.</p>

<h3>Our Key Management Services</h3>
<p>The core elements of our technology project management services are:</p>

<h2>Agile Project Management</h2>
<p>Being a value-driven methodology, agile project management enables organizations to deliver high quality results. While managing your unique project, we consider your business operations, requirements, priorities, and beyond. Our project managers work closely with our clients to track the project’s progress, issues, and results. </p>
<p>While using the agile management approach, we divide responsibility among different team members. And this is how we combine individual efforts to get you what you expect from our side-successful technology solutions.</p>
<h2>Waterfall Project Management </h2>
<p>Since waterfall approach is a sequential design procedure, each of its stages has to be completed in order. This methodology doesn’t allow errors or mistakes, so developers have to work carefully while preparing a plan. This is where the dedicated, expert managers, developers, and analysts of Techmerits prove their value. </p>
<p>From specifying project requirements to implementing different units and from integrating multiple units into a single system to testing the entire design, every step has to be executed professionally, efficiently to avoid costly errors. Techmerits employs specialized project managers who excel in waterfall model development and application. </p>

<p style="font-weight: bold;">Consult Techmerits today to look into our proven project management approaches.</p>
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
