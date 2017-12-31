<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<?php include("head.php"); ?>

<body>
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

  <!-- scripts -->
  <?php include("scripts.php"); ?>
  <script src="_include/js/trad_i18next.js"></script> <!-- Translation -->

</body>
</html>
