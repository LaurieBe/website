<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->



<head>

  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title class="i18n_title"></title>

  <meta name="description" content="Insert Your Site Description" />

  <!-- Mobile Specifics -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true"/>
  <meta name="MobileOptimized" content="320"/>

  <!-- Mobile Internet Explorer ClearType Technology -->
  <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

  <!-- Bootstrap -->
  <link href="_include/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="_include/css/main.css" rel="stylesheet">

  <!-- Supersized -->
  <link href="_include/css/supersized.css" rel="stylesheet">
  <link href="_include/css/supersized.shutter.css" rel="stylesheet">

  <!-- FancyBox -->
  <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

  <!-- Font Icons -->
  <link href="_include/css/fonts.css" rel="stylesheet">

  <!-- Shortcodes -->
  <link href="_include/css/shortcodes.css" rel="stylesheet">

  <!-- Responsive -->
  <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="_include/css/responsive.css" rel="stylesheet">

  <!-- Supersized -->
  <link href="_include/css/supersized.css" rel="stylesheet">
  <link href="_include/css/supersized.shutter.css" rel="stylesheet">

  <!-- Google Font -->
  <link href='_include/css/css?family=Titillium+Web.css' rel='stylesheet' type='text/css'>

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="#">

  <link rel="apple-touch-icon" href="#">
  <link rel="apple-touch-icon" sizes="114x114" href="#">
  <link rel="apple-touch-icon" sizes="72x72" href="#">
  <link rel="apple-touch-icon" sizes="144x144" href="#">

  <!-- Modernizr -->
  <script src="_include/js/modernizr.js"></script>

  <!-- Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66628748-4', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- End Analytics -->
</head>

<body>

  <!-- This section is for Splash Screen -->
  <div class="ole">
    <section id="jSplash">
    	<div id="circle"></div>
    </section>
  </div>
  <!-- End of Splash Screen -->

  <!-- Header -->
  <?php include("header.php"); ?>


  <!-- Presentation Section -->
  <div id="work" class="page">
  	<div id="content" class="container">
    	<!-- Title Page-->
      <div>
        <div class="title-page">
            <h2 class="title i18n_welcome"></h2>
            <h3 class="i18n_hello"></h3>
        </div>
        <i><p class="i18n_hello2" style="text-align:center"></p></i>
        <br>
        <p class="i18n_instructions"></p>
      </div>

      <!-- End Title Page -->

      <!-- Portfolio Projects -->
      <div>
      	<section id="projects">
        	<ul id="thumbs">
            <div class="row">

	            <!-- Item Project and Filter Name -->
                <li class="item-thumbs col-lg-6">
                  <h3 class="i18n_resume"></h3>

                	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="My resume" href="cv.php#resume" class="external" style="max-width: 525px;">
                  	<span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                  </a>
                  <!--Thumb Image and Description -->

                  <img src="_include/img/work/thumbs/image-01.jpg" alt="cv" style="max-width: 525px;">
                </li>
            	<!-- End Item Project -->

	            <!-- Item Project and Filter Name -->
            	<li class="item-thumbs col-lg-6">
                <h3 class="i18n_newzealand"></h3>

              	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
              	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="My Journey in New Zealand" href="blog.php#blog" class="external" style="max-width: 525px;">
                  	<span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                </a>

                <!-- Thumb Image and Description -->
                <img src="_include/img/work/thumbs/image-02.jpg" alt="nz" style="max-width: 525px;">
              </li>
          	  <!-- End Item Project -->

            </div>
          </ul>
        </section>
      </div>
      <!-- End Portfolio Projects -->

      </div>
  </div>
  <!-- End presentation Section -->


  <!-- Footer -->
  <?php include("footer.php"); ?>

  <!-- Js -->
  <script src="_include/js/jquery.min.js"></script> <!-- jQuery Core -->
  <script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
  <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
  <script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
  <script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
  <script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
  <script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
  <script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
  <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
  <script src="_include/js/main.js"></script> <!-- Default JS -->
  <script src="_include/js/i18next.js"></script> <!-- Translation -->
  <script src="_include/js/i18nextBrowserLanguageDetector.js"></script> <!-- Translation -->
  <script src="_include/js/trad_i18next_functions.js"></script>
  <script src="_include/js/trad_i18next.js"></script> <!-- Translation -->
  <!-- End Js -->

</body>
</html>
