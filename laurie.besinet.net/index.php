<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<head>
  <meta name="keywords" content="agronomie, agronomy, farming, agriculture, engineer, ingenieur, agronome, agronomist, new technology, laurie, besinet, besine, bezine, bezinet"/>
  <meta name="date" content="2018-01-01"/>
  <title>Personal website | Laurie Besinet | Agro &amp; Tech</title>
  <meta name="description" content="Personal website about agronomy and technology">
  <link rel="canonical" href="https://laurie.besinet.net/index.php">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Personal website | Laurie Besinet | Agro &amp; Tech">
  <meta property="og:description" content="Personal website about agronomy and technology">
  <meta property="og:url" content="https://laurie.besinet.net/index.php">
  <meta property="og:site_name" content="Laurie Besinet | Agro &amp; Tech">
  <meta property="article:tag" content="AgTech">
  <meta property="article:tag" content="Agronomy">
  <meta property="article:tag" content="New technology">
  <meta property="article:section" content="AgTech">
  <meta property="article:published_time" content="2018-01-01T13:01:11+01:00">
  <meta property="article:modified_time" content="2018-01-10T15:23:05+01:00">
  <meta property="og:updated_time" content="2018-01-10T15:23:05+01:00">
  <meta property="og:image" content="http://laurie.besinet/_include/img/slider-images/image01.jpg">
  <meta property="og:image:width" content="1600">
  <meta property="og:image:height" content="1169">
  <?php include("head.php"); ?>

<body onload="highligtmenu()">
  <!-- Header -->
    <!-- Homepage Slider -->
      <div id="home-slider">
        <div class="overlay">
        </div>
        <!--  si ecran < 500 px -->
        <div class="slider-text" style="top: 50%;left: 50%;transform: translate(-50%, -50%);width: 100%;margin: 0px;height: 200px;">
          <div id="slidecaption" style="line-height: 100px;"></div>
        </div>
        <div class="control-nav">
          <a id="nextsection" href="#goUp" title="Go down"><i class="font-icon-arrow-simple-down"></i></a>
        </div>

      </div>

    <?php include("header.php"); ?>
        </div>
    </header>
  <!-- End header -->

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

  <!-- scripts -->
  <?php include("scripts.php"); ?>
  <script src="_include/js/trad_i18next.js"></script> <!-- Translation -->

</body>
</html>
