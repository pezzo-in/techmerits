<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Technology Services Consulting | Home | Techmerits </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta name="description"
          content="Looking to partner up with expert technology consultants? Techmerits, a leading technology consulting company, offers specialized software solutions."/>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
</head>
<body id="top">
<?php include 'header.php'; ?>
<div class="wrapper col2">
<div id="gallery">

<style>
    .captionOrange, .captionBlack {
        color: #fff;
        font-size: 20px;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
    }

    .captionOrange {
        background: #EB5100;
        background-color: rgba(235, 81, 0, 0.6);
    }

    .captionBlack {
        font-size: 16px;
        background: #000;
        background-color: rgba(0, 0, 0, 0.4);
    }

    a.captionOrange, A.captionOrange:active, A.captionOrange:visited {
        color: #ffffff;
        text-decoration: none;
    }

    a.captionOrange:hover {
        color: #eb5100;
        text-decoration: underline;
        background-color: #eeeeee;
        background-color: rgba(238, 238, 238, 0.7);
    }

    .bricon {
        background: url(img/browser-icons.png);
    }
</style>
<!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
<!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
    jQuery(document).ready(function ($) {
        //Reference http://www.jssor.com/development/slider-with-slideshow.html
        //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

        var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out L
            ,
            { $Duration: 1200, $SlideOut: true, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
        ];

        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 0,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },

            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
            },

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
            },

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
            }
        };

        var jssor_sliderb = new $JssorSlider$("sliderb_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_sliderb.$SetScaleWidth(Math.min(parentWidth, 950));
            else
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $(window).bind('resize', ScaleSlider);
        }
        //responsive code end
    });
</script>
<!-- Jssor Slider Begin -->
<!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
<div id="sliderb_container" style="position: relative; width: 600px; height: 300px; overflow: hidden;">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
        <div>
            <img u=image src="images/demo/gallery_11.jpg"/>
        </div>
        <div>
            <img u=image src="images/demo/gallery_22.jpg"/>
        </div>
        <div>
            <img u=image src="images/demo/gallery_33.jpg"/>
        </div>
    </div>


    <style>

        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }

        .jssorb01 div {
            background-color: gray;
        }

        .jssorb01 div:hover, .jssorb01 .av:hover {
            background-color: #d3d3d3;
        }

        .jssorb01 .av {
            background-color: #fff;
        }

        .jssorb01 .dn, .jssorb01 .dn:hover {
            background-color: #555555;
        }
    </style>
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
    </div>
    <!-- Bullet Navigator Skin End -->

    <!-- Arrow Navigator Skin Begin -->
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l              (normal)
        .jssora05r              (normal)
        .jssora05l:hover        (normal mouseover)
        .jssora05r:hover        (normal mouseover)
        .jssora05ldn            (mousedown)
        .jssora05rdn            (mousedown)
        */
        .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(img/a17.png) no-repeat;
            overflow: hidden;
        }

        .jssora05l {
            background-position: -10px -40px;
        }

        .jssora05r {
            background-position: -70px -40px;
        }

        .jssora05l:hover {
            background-position: -130px -40px;
        }

        .jssora05r:hover {
            background-position: -190px -40px;
        }

        .jssora05ldn {
            background-position: -250px -40px;
        }

        .jssora05rdn {
            background-position: -310px -40px;
        }
    </style>
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
    <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
    <!-- Trigger -->
</div>
<!-- Jssor Slider End -->
<div class="clear"></div>
</div>
</div>
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <h2>ABOUT TECHMERITS</h2>

            <p style="font-weight: bold;">
                Making technology solutions a reality - From creation to implementation!
            </p>

            <p>
                Techmerits, a name associated with reliable technology consultation services, is the choice of
                performance-driven organizations all over the world. Specialized in professional consulting, technology
                solution development, software testing, and people management, Techmerits help organizations streamline
                their operations, add value to their offerings, and facilitate their workforce.
            </p>

            <p style="font-weight: bold">
                Techmerits is all about:
            </p>
            <ul style="list-style-type:none;">
                <li>
                    Innovative ideas
                </li>
                <li>
                    Solid performance
                </li>
                <li>
                    Exceptional workforce
                </li>
                <li>
                    Guaranteed results
                </li>
                <li>
                    Client service
                </li>
            </ul>
            <p>
            Bringing years of experience at the same platform, our dedicated employees invest their time, effort, and
            energy to provide you with the technological solutions you need to maximize your success.
            </p>

            <h2>PROGRESSING WITH THE CHANGING TECHNOLOGY</h2>

            <p style="font-weight: bold">
                We are moving forward with the ever-changing technology. Are you?
            </p>

            <p>
                With Techmerits, you work with technology experts who not only understand your technology initiatives,
                but also develop the strategies just perfect for your technology investments. Our workforce is
                specialized in Java and Microsoft technologies. Our exclusive software development and testing services
                make us a trustworthy, experienced technology partner.
            </p>

            <h2>TECHMERITS-INSPIRING LIVES WITH INNOVATIVE IDEAS</h2>

            <p>
                At Techmerits, we have merged advanced technology with management strategies. We deliver functional
                solutions to our clients that enhance productivity, restructure global operations, and ensure
                transformation. We help you get a competitive advantage!
            </p>

            <p style="font-weight: bold">
                Let our digital solutions and services revolutionize the present and future of your business.
            </p>

            <p>
                Techmerits is passionate about devising, offering, and implementing the right solutions for its clients,
                employees, and its communities. Regardless of the industry you serve or the software solutions you need,
                we are here to share your ambition.
            </p>

            <p style="font-weight: bold">
                Consult the dedicated workforce of Techmerits today to keep pace with technological developments.
            </p>

            <!--<div class="homecontent">
            <ul>
            <li>
            <p class="imgholder"><img src="images/demo/286x100-2.jpg" alt=""/></p>

            <h2>Mission</h2>

            <p>To facilitate our clients by creating and implementing effective technology solutions that address and resolve their business issues. We recruit talented, passionate professionals who make significant contributions to the company’s success.</p>

            <p class="readmore"><a href="
            #">Read More &raquo;</a></p>
					</li>
					<li class="last">
					<p class="imgholder"><img src="images/demo/286x100-1.jpg" alt=""/></p>

					<h2>vision</h2>

					<p>To serve as the leading and the most trusted technology partner for our clients all over the world.</p>

					<p class="readmore"><a href="
					#">Read More &raquo;</a></p>
					</li>
					</ul>
					<div class="clear"></div>
					</div>-->

        </div>

        <div id="column">
            <div class="featured">
                <ul>
                    <li>
                        <h4>Development Services</h4>

                        <p class="imgholder"><img src="images/demo/project-based-consulting.jpg" alt=""/>
                        </p>

                        <p>
                            Techmerits is your ultimate partner for innovative, advanced, and functional technological solutions. With our experienced, multi-disciplinary experts, we work closely...
                        </p>

                        <p class="more">
                            <a href="consulting.php#project-based">Read More &raquo;</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="featured">
                <ul>
                    <li>
                        <h4>Testing Services</h4>

                        <p class="imgholder"><img src="images/demo/product-based-consulting.jpg" alt=""/>
                        </p>

                        <p>
                            Considering our clients' requirements for quality assurance, we strive to test every technology solution, software, and system according to the most stringent industry standards...
                        </p>

                        <p class="more">
                            <a href="consulting.php#product-based">Read More &raquo;</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
