<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Development Services | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description" content="Looking to partner up with expert technology consultants? Techmerits, a leading technology consulting company, offers specialized software solutions."/>
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
             <li><a href="testing-services.php">Testing Services</a></li>
                <li><a class="active" href="software-development-services.php">Development Services</a></li>
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
            <li>Services-Development Services</li>
        </ul>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <img src="http://dummyimage.com/960x200/cccccc/ffffff.jpg" alt=""/>
        <h1>Software Devleopment Services</h1>
        <p style="font-weight: bold; font-style:italic;">Constantly Innovating for Your Development Edge!</p>
        <p>Techmerits is your ultimate partner for innovative, advanced, and functional technological solutions. With our experienced, multi-disciplinary experts, we work closely with our clients to design, develop, and implement customized solutions. Having access to the best technologies, resources, and tools, we utilize the latest strategies and practices to meet individual requirements and deliver the best possible services.</p>

        <p style="font-weight: bold; ">Revolutionary technology solutions for performance-driven organizations!</p>

        <h3>Our Focus Areas</h3>
        <p>The core elements of our technology development services are:</p>
        <h2>Microsoft.NET</h2>
        <p>
We are specialized in the existing and emerging trends of the Microsoft technology. Techmerits provides businesses with comprehensive roadmaps and strategies, thus helping them align their business targets with the latest technological developments. </p>
<p>Our cost-effective, scalable development solutions can make any.NET project a means to achieve great results and minimize development costs and time. Our dedicated developers excel in C#, ASP.NET, VB.NET, and more.</p>

<h2>SQL Server</h2>
<p>Techmerits offers database development solutions for the SQL Server platform. Bringing structure and value to your business data, our technology development experts plan, design, create, and test databases. Our offered services include:
</p>
<p style="font-weight: bold; ">
<ul>
<li>Database designing</li>
<li>Query development</li>
<li>Query optimization</li>
<li> Database testing services</li>
</ul>
</p>
<h2>Oracle</h2><p>
Our Oracle development solutions can develop and implement your Oracle software on time and on budget. We are equipped with adequate knowledge to solve diverse business challenges with Oracle methodologies and tools.</p>
<h2>ERP</h2>
<p>
Techmerits can bring flexibility, value, and efficiency to any business with its ERP development services. We can help you make the most of your ERP investments.</p>
<h2>Sharepoint</h2>
<p>
Manage your business data and applications with ease, speed, and efficiency. Rely on our technology development services to avail smart Sharepoint solutions. </p>

<h2>Java Technologies</h2>

<p>Making use of the Java platform, our experienced Java developers excel in resource management, debugging, testing, performance tuning, user interface strategies, and more.</p>
<h2>Bespoke Development</h2>
<p>Our Bespoke development, support, and maintenance services can add cost-efficiency, speed, and value to your business operations. Creating stand-alone, customised, or distributed software solutions, we work according to our clients’ specific needs and problems.</p>

<p style="font-weight: bold;">Gain control of your business with our technology development services.</p>

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