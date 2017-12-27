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
  <div id="a1" class="page">
  	<div id="content" class="container">
        <div class="row">
            <div class="span12">
                <div>

                    <!-- plan -->
                    <ul class="breadcrumb">
                      <li class="active"><a class="i18n_home" href="index.php#work"></a> | </li>
                      <li><a class="external i18n_newzealand" href="blog.php#blog"></a> | </li>
                      <li><a class="i18n_a1_title" href="a1.php#a1"></a></li>
                    </ul>

                                          <br><br>

                    <!-- article -->
                    <h2 class="title-page i18n_a1_title" style="text-transform: uppercase; text-align: center;">Le grand départ</h2>
                    <p class="i18n_a1_intro"></p>
                    <p class="i18n_a1_content"></p>

                    <div style="padding: 0px; width: auto; height: auto;">
                      <div style="max-width: 1000px; margin-left: auto; margin-right: auto;position: relative;">

                        <img class="mySlides" src="./_include/img/nz/img01.JPG">
                        <img class="mySlides" src="./_include/img/nz/img02.JPG">
                        <img class="mySlides" src="./_include/img/nz/img09.JPG">
                        <img class="mySlides" src="./_include/img/nz/img13.JPG">

                        <a title="Next" class="fancybox-nav fancybox-next" onclick="plusDivs(+1)"><span><i class="font-icon-arrow-simple-right"></i></span></a>
                        <a title="Previous" class="fancybox-nav fancybox-prev" onclick="plusDivs(-1)"><span><i class="font-icon-arrow-simple-left"></i></span></a>
                      </div>
                    </div>

                    

                                          <br><br>

                    <!-- précedent / suivant -->
                    <ul class="pager">
                      <li><a href="a0.php#a0"><span class="i18n_previous"></span></a></li>
                      <li><a href="a2.php#a2"><span class="i18n_next"></span></a></li>
                    </ul>

                </div>

              </div>
            </div>
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
  <script src="_include/js/slide.js"></script> <!-- slider photo -->
  <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
  <script src="_include/js/main.js"></script> <!-- Defalit JS -->
  <script src="_include/js/i18next.js"></script> <!-- Translation -->
  <script src="_include/js/i18nextBrowserLanguageDetector.js"></script> <!-- Translation -->
  <script src="_include/js/trad_i18next_functions.js"></script>
  <script src="_include/js/trad_i18next_nz.js"></script> <!-- Translation -->
  <!-- End Js -->

</body>
</html>
