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
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About Us</a>

                    <ul>
                         <li><a href="
about-us.html#mission-vision">Mission And Vission</a></li>
                    </ul>
                </li>
                <li><a href="management.html">Management</a></li>
                 <li><a class="active" href="services.html">Services</a>
          <ul>
            <li><a href="consulting.html">Consulting</a></li>
            <li><a href="testing-services.html">Testing Services</a></li>
            <li><a  href="software-development-services.html">Development Services</a></li>
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
            <li>Services-Development Services</li>
        </ul>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <img src="http://dummyimage.com/960x200/cccccc/ffffff.jpg" alt=""/>
        <h1>Services</h1>
        <h3>Software development services</h3>
        <p>We offer software development services to our clients, as part of our software development services, we make sure that we understand our client business and assess system and provide appropriate solutions which support and maintain your future growth and success.</p>
        <p>Our key competences </p>
         <p>
            <ul>
            <li>System analysis.</li>
             <li>Design and development.</li>
            <li>Application redesign & migration.</li>
            <li>Application maintenance.</li>
            <li>Mobile application development</li>
            </ul>
            </p>
            <p>Make Techmerits as your partner in developing and implementing of your software products and our experienced developers who will help you in understand your business goals and provide best quality service</p>
            <h3>Testing services</h3>
            <p>Techmerits has a broad experience in Software Testing services along with strong industry knowledge, we understand the importance of testing services to our customers business and thereby provide high quality and comprehensive testing solutions of software applications and products with very quick turnaround</p>
            <p>Our testing services includes </p>
            <p><ul>
            <li>Functional, Regression and end to end testing</li>
            <li>Automated testing</li>
            <li>Load and Performance testing</li>
            <li>Mobile application testing </li>
            <li>Browser Compatibility Testing</li>
            <li>SAP, Siebel and SAS Testing</li>
            <li>Web testing </li>
            <li>Database testing</li>
            </ul></p>
            <h3>Project Management</h3>
            <p>Techmerits leadership team is specialized in Agile and Waterfall methodologies. We leverage our experience in project management with various clients across the globe and our proven approaches and tools for project planning, tracking and reporting. We believe in Team work and team motivation which is essential for any project success.</p>
            <h3>Competencies</h3>
            <h2>Java</h2>
            <p>We offer services in Enterprise Technology Design & Development using Java as an Application Development platform. Our competencies in Java are,</p>
            <p><ul><li>End to End Design and Implementation of J2EE applications</li>
            <li>Enhancing existing J2EE applications for new features and functionality with quick turnaround time. </li>
            <li>Porting of applications from other architectures to J2EE Framework</li>
            <li>Testing Services including Black Box and White box, load and performance testing of J2EE Components and complete applications.</li>
            <li>Integrating J2EE applications with other back office applications</li>
            </ul></p>
            <h2>.NET</h2>
            <p>At Techmerits, The Offshore Development protects the client's proprietary software and new development specifications with high levels of security. Clients retain full ownership of all intellectual property rights and software source code at the completion of the project, core competencies in .NET</p>
            <p><ul><li>Architecture and design evaluation</li>
            <li>System design and application development</li>
            <li>Migrating legacy applications to .Net </li></ul></p>
            <h2>Testing</h2>
            <p>Our goal is to provide unique software testing services to our customers and we offer complete end-to-end testing coverage for our Client's products by bringing the best testing practices and strategies. </p>

        
        
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
