<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<?php include("head.php"); ?>

<body class="together" onload="highligtmenu()">
  <!-- Header -->
  <?php include("header.php"); ?>
  <div class="hidden-if-small">
    <nav class="submenu-navbar" aria-label="breadcrumb navbar">
      <ol class="submenu-nav nav">
        <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="blog.php#blog">
          <span class="font-icon-arrow-round-up"></span>
          <span class="i18n_back"></span>
        </a>
        </li>
        <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="a0.php#a0">
          <span class="font-icon-arrow-round-left"></span>
          <span class="i18n_previous"></span>
        </a></li>
        <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="a2.php#a2">
          <span class="i18n_next"></span>
          <span class="font-icon-arrow-round-right"></span>
        </a></li>
      </ol>
    </nav>
  </div>

</div>
</header>
  <!-- End header -->

  <!-- Presentation Section -->
  <div id="a1" class="page">
  	<div id="content" class="container">
      <div>

          <!-- article -->
          <div>
            <div class="title-page">
              <h2 class="i18n_a1_title title-description" style="text-transform: uppercase;"></h2>
              <span class="i18n_a1_param"></span>
            </div>
            <div class="i18n_a1_intro"></div>
            <br><br>
            <div class="i18n_a1_content"></div>
          </div>

      </div>
    </div>
  </div>
  <!-- End presentation Section -->

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <!-- scripts -->
  <?php include("scripts.php"); ?>
  <script src="_include/js/trad_i18next_nz.js"></script> <!-- Translation -->


</body>
</html>
