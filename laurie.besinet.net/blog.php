<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->



<head>

  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title id="i18n_title"></title>

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

  <!-- Analytics
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
  <div id="blog" class="page">
  	<div id="content" class="container">
      	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title i18n_blog"></h2>
                    <p class="i18n_blogtxt"></p>
                </div>
                <br>
                <div>

                  <!-- article a1 -->
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="myPicturesBox">
                          <a href="a1.php#a1"><div class="i18n_a1_pic"></div></a>
                      </div>
                    </div>
                    <div class="col-lg-8">
                          <div style="margin-left: 30px;">
                            <a href="a1.php#a1"><h2 class="i18n_a1_title title-description" style="text-transform: uppercase;"></h2></a>
                            <span class="i18n_a1_intro"></span>
                            <br>
                            <a href="a1.php#a1"><span class="i18n_url"></span></a>
                          </div>
                    </div>
                  </div>

                  <br>
                  <hr>

                  <!-- article a0 -->
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="myPicturesBox">
                          <a href="a0.php#a0">
                            <div class="i18n_a0_pic"></div>
                          </a>
                      </div>
                    </div>
                    <div class="col-lg-8">
                          <div style="margin-left: 30px;">
                            <a href="a0.php#a0"><h2 class="i18n_a0_title title-description" style="text-transform: uppercase;"></h2></a>
                            <span class="i18n_a0_intro"></span>
                            <br>
                            <a href="a0.php#a0"><span class="i18n_url"></span></a>
                          </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
        <!-- End Title Page -->

      </div>
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
  <script src="_include/js/main.js"></script> <!-- Defalit JS -->
  <script src="_include/js/i18next.js"></script> <!-- Translation -->
  <script src="_include/js/i18nextBrowserLanguageDetector.js"></script> <!-- Translation -->
  <script src="_include/js/trad_i18next_functions.js"></script>
  <script src="_include/js/trad_i18next_nz.js"></script> <!-- Translation -->
  <!-- End Js -->

</body>
</html>
