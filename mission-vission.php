<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Consulting Services | Mission and Vission | Techmerits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description" content="Become a part of Techmerits to avail innovative software technology. Figure out the essence of our operations with our vision and mission statements."/>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
</head>
<body id="top">
<div class="wrapper col1">
    <div id="head">
        <h1><a href="#">Techmerits</a></h1>

         <div id="topnav">
            <ul>
                <li><a href="index.php">Home</a></li>
               <li><a href="about-us.php">About Us</a>

                    <ul>
                         <li><a href="mission-vission.php">Mission And Vission</a></li>
                    </ul>
                </li>
                <li><a href="management.php">Management</a>
          
                </li>
                <li><a href="#">Services</a>
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
        <img src="images/demo/mission-vission.jpg" alt=""/>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <h1>Mission and Vision </h1>
            <p style="font-weight: bold;font-style:italic;" >Delivering Results That Ensure Enterprise Value!</p>
            <p>At Techmerits, our vision, mission, and core values capture the essence of our operations and offered services. We are committed to delivering exceptional results to our clients, consisting of global organizations.</p>
            
            <h2>Our Vision</h2>
            <p>To serve as the leading and the most trusted technology partner for our clients all over the world.</p>
            <h2>Our Mission</h2>
            <p>To facilitate our clients by creating and implementing effective technology solutions that address and resolve their business issues. We recruit talented, passionate professionals who make significant contributions to the company’s success.</p>
            
            <h2>Our Values</h2>
            <p>Our values define the essence and form the culture of our company. </p>
            <ul>
            <li><p style="font-weight: bold">Our Workforce, Our Asset</p>
            <p>Having created a welcoming, encouraging environment, we facilitate our employees in their growth. At Techmerits, they challenge their abilities, ensure their development, and realize their potential.</p>
            </li>
            <li><p style="font-weight: bold">Client Value Recognition</p>
            <p>We develop long-term relationships with our clients and help them accomplish their business targets.</p>
            </li>
            <li><p style="font-weight: bold">Effective Network</p>
            <p>Capitalizing on effective tools and resources, we collaborate with the right service providers to deliver services to our clients, wherever they are.</p>
            <p style="font-weight: bold">Get in touch with Techmerits to explore and avail our technical expertise.</p>
            </li>
            <ul>
        </div>
        <div id="column">
            <div id="featured">

                <ul>
                    <li>
                        <h2>Indonectetus facilis leonib</h2>

                        <p class="imgholder"><img src="images/demo/240x90.gif" alt=""/></p>

                        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices
                            quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat.
                            Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>

                        <p class="more"><a href="#">Read More &raquo;</a></p>
                    </li>
                </ul>
            </div>
            <div class="holder">
                <div class="imgholder"><img src="images/demo/290x100.gif" alt=""/></div>
                <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>

                <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col5">
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
