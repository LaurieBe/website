<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<?php include("head.php"); ?>

<body>
  <!-- Header -->
  <?php include("header.php"); ?>

  <!-- Presentation Section -->
  <div id="a0" class="page">
  	<div id="content" class="container">
        <div class="row">
            <div class="span12">
                <div>

                    <!-- plan -->
                    <br>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="active"><a class="i18n_home btn btn-secondary" role="button" href="index.php#work"></a></li>
                        <li><a class="external i18n_blog btn btn-secondary" role="button" href="blog.php#blog"></a></li>
                        <li><a class="i18n_a0_title active  btn btn-secondary" role="button" aria-current="page"href="a0.php#a0"></a></li>
                      </ol>
                    </nav>

                      <br><br>

                    <!-- article -->
                    <div>
                      <div class="title-page">
                        <h2 class="i18n_a0_title title-description" style="text-transform: uppercase;"></h2>
                        <span class="i18n_a0_param"></span>
                      </div>
                      <div class="i18n_a0_intro"></div>
                      <br><br>
                      <div class="i18n_a0_content"></div>


                    <br>

                    <!-- précedent / suivant -->
                    <div class="d-flex justify-content-center">
                      <nav aria-label="Page navigation">
                        <ul class="pagination">
                          <li><a href="a1.php#a1" class="btn btn-secondary" role="button"><span class="i18n_next"></span></a></li>
                        </ul>
                      </nav>
                    </div>

                </div>

              </div>
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
