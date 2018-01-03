<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<?php include("head.php"); ?>

<body onload="highligtmenu()">
  <!-- Header -->
  <?php include("header.php"); ?>
      </div>
  </header>
  <!-- End header -->

  <!-- Presentation Section -->
  <div id="blog" class="page">
  	<div id="content" class="container">

    	<!-- Title Page -->
      <div class="row">
        <div class="span12">
          <div class="title-page">
            <h1 class="title i18n_blog"></h1>
            <p class="i18n_blogtxt"></p>
          </div>
        </div>
      </div>
      <!-- End Title Page -->

      <!-- articles -->
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
                  <a href="a1.php#a1"><span class="i18n_url"></span></a>
                </div>
          </div>
        </div>
        <!-- article a1 -->
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
                  <a href="a0.php#a0"><span class="i18n_url"></span></a>
                </div>
          </div>
        </div>
        <!-- fin article a0 -->

      </div>
      <!-- fin articles -->
    </div>
  </div>

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <!-- scripts -->
  <?php include("scripts.php"); ?>
  <script src="_include/js/trad_i18next_nz.js"></script> <!-- Translation -->

</body>
</html>
