<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Corporation | Full Width</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
    <script type="text/javascript" src="js/validate.js"></script>
</head>
<body id="top">
    <?php include 'header.php'; ?>
    <div class="wrapper col2">
        <div id="breadcrumb">
            <ul>
                <li class="first">
                    You Are Here
                </li>
                <li>
                    &#187;
                </li>
                <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                &#187;
            </li>
            <li class="actpage">
                    Careers
                </li>
            </ul>
        </div>
    </div>
    <div id="gallery">
        <img src="images/demo/consulting.jpg" alt=""/>

        <div class="clear"></div>
    </div>
    <div class="wrapper col4">
        <div id="container"><h2>Careers</h2>

            <h2>Apply below for an amazing career</h2>
            <div id="contactform" style="float:left;">


                
                <form enctype="multipart/form-data" name="Form" method="post" action="upload.php">
                    <fieldset>
                        <legend>
                            Contact Form
                        </legend>
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


                        <label for="message" style="width:auto">Message:
                            <textarea id="message" name="message" cols="40" rows="4"></textarea> </label>

                            <label for="browse" style="width:100%;">Resume:
                                <input id="file" name="attachment" type="file" value="UPLOAD" style="width:98%;" />
                            </label>

                            <p>
                                <input id="submitform" name="submit" type="submit" value="Submit" onclick="return ValidateForm()" />
                                &nbsp;
                                <input id="resetform" name="resetform" type="reset" value="Reset"/>
                            </p>
                        </fieldset>
                    </form>
                    
                </div>

            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
    </html>
