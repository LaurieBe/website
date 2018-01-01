<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"> <!--<![endif]-->

<!-- Head -->
<?php include("head.php"); ?>

<body data-spy="scroll" data-target="#menu-cv" data-offset="170">

  <!-- Header -->
  <?php include("header.php"); ?>

        <div class="hidden-if-small">
          <nav id="menu-cv" class="submenu-navbar navbar">
            <ul class="submenu-nav nav">
              <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="#experience1">Experiences</a></li>
              <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="#studies1">Studies</a></li>
              <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="#skills1">Skills</a></li>
              <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="#project1">Project</a></li>
              <li class="nav-item"><a class="nav-link btn btn-secondary" role="button" href="#interests1">Interests</a></li>
            </ul>
          </nav>
        </div>
      </div>

  </header>
  <!-- End header -->


  <!-- page -->
  <div id="resume" class="page">
    <div id="content" class="container">

      <form>
        <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
      </form>
      <script type="text/javascript">
      function imprimer_page(){
        window.print();
      }
      </script>



        <!-- Title Page -->
        <div>
          <div class="title-page">
            <h1 class="title i18n_resume" ></h1>
          </div>
          <i><p class="i18n_hello2" style="text-align:center"></p></i>
        </div>
        <!-- End Title Page -->

        <!----------------------------- Start Experiences ----------------------------->
        <div id="experience1">

          <!--Start Titre Experiences-->
          <div class="row">
            <div class="col-lg-12">
              <h2 class=" i18n_experiences title-description"></h2>
              <p class="i18n_job_comment"></p>
            </div>
          </div>

          <!--Fin Titre Experiences-->

          <!--start Weenat-->
          <div>
            <h3 class="i18n_job_wnt_entr"></h3>
            <blockquote>

              <div class="row">
                <div class="col-lg-12">
                  <i><p class="i18n_job_wnt_desc"></p></i>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_wnt_date1" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_job_wnt_title1"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_wnt_text1">
                </div>
              </div>


              <!-- Start Toggle -->
              <div class="accordion" id="toggleArea">

                <!-- start wnt mission 1-->
                <div>
                  <div class="accordion-group">
                    <div class="accordion-heading togglize">
                      <a class="accordion-toggle i18n_job_wnt_mission1" data-toggle="collapse" data-parent="#" href="#collapseOne"></a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <span class="i18n_job_wnt_proj1"></span>
                      </div>
                    </div>
                  </div>
                  <div class="skills">#TeamWork #NeedIdentification #Specification</div>


                </div>
                <!-- end wnt mission 1-->

                <!-- start wnt mission 2-->
                <div>
                  <div class="accordion-group">
                    <div class="accordion-heading togglize">
                      <a class="accordion-toggle i18n_job_wnt_mission2" data-toggle="collapse" data-parent="#" href="#collapseTwo"></a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <span class="i18n_job_wnt_proj2"></span>
                      </div>
                    </div>
                  </div>
                  <div class="skills">#Arguing #Redacting #Planning #Budgeting #MarketAnalysis</div>
                </div>
                <!-- end wnt mission 2-->

                <!-- start wnt mission 3-->
                <div>
                  <div class="accordion-group">
                    <div class="accordion-heading togglize">
                      <a class="accordion-toggle i18n_job_wnt_mission3" data-toggle="collapse" data-parent="#" href="#collapseThird"></a>
                    </div>
                    <div id="collapseThird" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <span class="i18n_job_wnt_proj3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="skills">#Negotiating #Fieldwork #Empathy #CustomerSatisfaction #Prioritizing #Anticipating</div>
                </div>
                <!-- end wnt mission 3-->

                <!-- start wnt mission 4-->
                <div>
                  <div class="accordion-group">
                    <div class="accordion-heading togglize">
                      <a class="accordion-toggle i18n_job_wnt_mission4" data-toggle="collapse" data-parent="#" href="#collapseFour"></a>
                    </div>
                    <div id="collapseFour" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <span class="i18n_job_wnt_proj4"></span>
                      </div>
                    </div>
                  </div>
                  <div class="skills">#EventOrganisation #Communication #SocialNetworkManagement</div>
                </div>
                <!-- end wnt mission 4-->
              </div>
              <!-- End Toggle -->

            </blockquote>
          </div>
          <!-- End Weenat-->



          <!--start Pioneer-->
          <div>

            <h3 class="i18n_job_pio_entr"></h3>
            <blockquote>

              <div class="row">
                <div class="col-lg-12">
                  <i><p class="i18n_job_pio_desc"></p></i>
                </div>
              </div>


              <!-- Start pio job 1 -->
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_pio_date1" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_job_pio_title1"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_pio_text1">
                </div>
              </div>


              <!-- start pio mission 1-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_pio_mission1" data-toggle="collapse" data-parent="#" href="#collapseFive"></a>
                  </div>
                  <div id="collapseFive" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_pio_proj1"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#RemoteWork #TimeManagement</div>
              </div>
              <!-- end pio mission 1-->

              <!-- start pio mission 2-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_pio_mission2" data-toggle="collapse" data-parent="#" href="#collapseSix"></a>
                  </div>
                  <div id="collapseSix" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_pio_proj2"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#VideoEditing</div>
              </div>
              <!-- end pio mission 2-->
              <!-- End pio job 1 -->


              <!-- Start pio job 2 -->
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_pio_date2" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_job_pio_title2"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_pio_text2">
                </div>
              </div>



              <!-- start pio mission 3-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_pio_mission3" data-toggle="collapse" data-parent="#" href="#collapseSeven"></a>
                  </div>
                  <div id="collapseSeven" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_pio_proj3"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#RiskManagement #ProjectManagement #Survey #Statistic</div>
              </div>
              <!-- end pio mission 3-->
              <!-- End pio job 2 -->
            </blockquote>
          </div>
          <!-- End Pioneer-->



          <!--start NS-->
          <div>

            <h3 class="i18n_job_ns_entr"></h3>
            <blockquote>

              <div class="row">
                <div class="col-lg-12">
                  <i><p class="i18n_job_ns_desc"></p></i>
                </div>
              </div>


              <!-- Start NS job 1 -->
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_ns_date1" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_job_ns_title1"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_ns_text1">
                </div>
              </div>


              <!-- start NS mission 1-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_ns_mission1" data-toggle="collapse" data-parent="#" href="#collapseHeight"></a>
                  </div>
                  <div id="collapseHeight" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_ns_proj1"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#HACCP #Rigor</div>
              </div>
              <!-- end NS mission 1-->
              <!-- End NS job 1 -->
            </blockquote>
          </div>
          <!-- End NS-->



          <!--start ane-->
          <div>

            <h3 class="i18n_job_ane_entr"></h3>
            <blockquote>

              <div class="row">
                <div class="col-lg-12">
                  <i><p class="i18n_job_ane_desc"></p></i>
                </div>
              </div>


              <!-- Start ane job 1 -->
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_ane_date1" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                <h4 class="spec i18n_job_ane_title1"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_ane_text1">
                </div>
              </div>


              <!-- start ane mission 1-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_ane_mission1" data-toggle="collapse" data-parent="#" href="#collapseNine"></a>
                  </div>
                  <div id="collapseNine" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_ane_proj1"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#GoodLaboratoryPractices #English</div>
              </div>
              <!-- end ane mission 1-->
              <!-- End ane job 1 -->
            </blockquote>
          </div>
          <!-- End ane-->



          <!--start Lamouthe-->
          <div>

            <h3 class="i18n_job_lam_entr"></h3>
            <blockquote>
              <div class="row">
                <div class="col-lg-12">
                  <i><p class="i18n_job_lam_desc"></p></i>
                </div>
              </div>


              <!-- Start Lamouthe job 1 -->
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_job_lam_date1" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_job_lam_title1"></h4>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 i18n_job_lam_text1">
                </div>
              </div>


              <!-- start Lamouthe mission 1-->
              <div>
                <div class="accordion-group">
                  <div class="accordion-heading togglize">
                    <a class="accordion-toggle i18n_job_lam_mission1" data-toggle="collapse" data-parent="#" href="#collapseTen"></a>
                  </div>
                  <div id="collapseTen" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <span class="i18n_job_lam_proj1"></span>
                    </div>
                  </div>
                </div>
                <div class="skills">#FarmWork #Vegetal #Animal</div>
              </div>
              <!-- end Lamouthe mission 1-->
              <!-- End Lamouthe job 1 -->
            </blockquote>
          </div>
          <!-- End Lamouthe-->



          <div class="row">
            <div class="col-lg-12">
              <i>
                <p class="i18n_job_ref"></p>
              </i>
            </div>
          </div>

        </div>
        <!--End Experiences-->
            <hr>

        <!--------------------------- Start Etudes ----------------------------->
        <div id="studies1">

          <!-- Title Section -->
          <div>
            <h2 class="title-description i18n_etu"></h2>
          </div>
          <!-- End Title Section -->

          <!-- Start Purpan -->
          <div>
            <h3 class="i18n_etu_pur_eco"></h3>
            <blockquote>
              <div class="row">
                <div class="col-lg-12">
                  <i><span class="i18n_etu_pur_desc" style="margin-bottom: 30px"></span></i>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_etu_pur_date" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_etu_pur_titre"></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 i18n_etu_pur_details">
                </div>
              </div>
            </blockquote>
          </div>
          <!-- End Purpan -->



          <!-- Start Fortaleza -->
          <div>
            <h3 class="i18n_etu_for_eco"></h3>
            <blockquote>
              <div class="row">
                <div class="col-lg-12">
                  <i><span class="i18n_etu_for_desc" style="margin-bottom: 30px"></span></i>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <span class="i18n_etu_for_date" style="line-height: 34px;"></span>
                </div>
                <div class="col-lg-8">
                  <h4 class="spec i18n_etu_for_titre"></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 i18n_etu_for_details">
                </div>
              </div>
            </blockquote>
          </div>
          <!-- End Fortaleza -->

        </div>
        <!--Fin Etudes-->
            <hr>

        <!--------------------------- Start Compétences --------------------------->
        <div id="skills1">

          <!-- Title Section -->
          <div>
            <h2 class="title-description i18n_comp"></h2>
          </div>
          <!-- End Title Section -->

          <!-- start content skills-->
          <div class="row">

            <div class="col-lg-12">
              <h3 class="i18n_comp_hard"></h3>
              <div class="i18n_comp_hard_skills"></div>

            </div>

            <div class="col-md-6">
              <h3 class="i18n_comp_soft"></h3>
              <div class="i18n_comp_soft_skills"></div>

            </div>

            <div class="col-md-6">
              <h3 class="i18n_comp_lang"></h3>
              <ul><li class="i18n_comp_lang_skills1"></li>
              <li class="i18n_comp_lang_skills2"></li>
              <li class="i18n_comp_lang_skills3"></li>
              <li class="i18n_comp_lang_skills4"></li></ul>
            </div>
          </div>
          <!-- End content skills-->

        </div>
        <!--Fin Compétences-->
            <hr>

        <!--------------------------- Start Projects --------------------------->
        <div id="project1">

          <!-- Title Section -->
          <div>
            <h2 class="title-description i18n_proj"></h2>
            <p class="i18n_proj_comment"></p>
          </div>
          <!-- End Title Section -->

          <!-- Start Projects details -->
          <div class="row">

            <!-- Start Projet 1-->
          	<div class="col-lg-4 col-md-6 col-sm-12 profile">
                <!-- Start photo -->
                <div class="item-thumbs">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Creation of my website" href="_include/img/work/full/image-03-full.jpg">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <!-- Thumb Image and Description -->
                    <span class="i18n_proj_website_pic"></span>
                  </div>
                <!-- End photo -->
                <h3 class="profile-name i18n_proj_website_title"></h3>


            </div>
            <!-- End Projet 1 -->

            <!-- Start Projet 2 -->
          	<div class="col-lg-4 col-md-6 col-sm-12 profile">
              <!-- Start photo -->
              <div class="item-thumbs">
                  <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                  <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Plastic Recycling" href="_include/img/work/full/image-04-full.jpg">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                  </a>
                  <!-- Thumb Image and Description -->
                  <span class="i18n_proj_plastic_pic"></span>
              </div>
              <!-- End photo -->
              <h3 class="profile-name i18n_proj_plastic_title"></h3>


            </div>
            <!-- End Projet 2 -->

            <!-- Start Projet 3 -->
          	<div class="col-lg-4 col-md-6 col-sm-12 profile">
              <!-- Start photo -->
              <div class="item-thumbs">
                  <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                  <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Students Association" href="_include/img/work/full/image-05-full.jpg">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                  </a>
                  <!-- Thumb Image and Description -->
                  <span class="i18n_proj_student_pic"></span>
              </div>
              <!-- End photo -->
              <h3 class="profile-name i18n_proj_student_title"></h3>


            </div>
            <!-- End Projet 3 -->

          </div>
          <!-- End Projects details -->

        </div>
        <!--Fin Projects-->
            <hr>

        <!--------------------------- Start Interets --------------------------->
        <div id="interests1">

          <!-- Title Section -->
          <div>
            <h2 class="title-description i18n_hob"></h2>
          </div>
          <!-- End Title Section -->

          <!-- start interets -->
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_winter_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-01.jpg" alt="Ski">
              </div>
              <h3 class="i18n_hob_winter_title"></h3>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_summer_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-05.jpg" alt="Dive">
              </div>
              <h3 class="i18n_hob_summer_title"></h3>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_travel_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-02.jpg" alt="Travelling">
              </div>
              <h3 class="i18n_hob_travel_title"></h3>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_diy_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-03.jpg" alt="DIY">
              </div>
              <h3 class="i18n_hob_diy_text"></h3>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_ntic_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-04.jpg" alt="NTIC">
              </div>
              <h3 class="i18n_hob_ntic_title"></h3>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="image-wrap">
                  <div class="hover-wrap">
                      <span class="overlay-img"></span>
                      <span class="overlay-text-thumb i18n_hob_plant_text"></span>
                  </div>
                  <img src="_include/img/profile/profile-06.jpg" alt="plants">
              </div>
              <h3 class="i18n_hob_plant_title"></h3>

            </div>

          </div>
          <!-- End interets -->


        </div>
        <!--Fin Interets-->

    </div>
  </div>
  <!-- End page -->

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <!-- Scripts -->
  <?php include("scripts.php"); ?>
  <script src="_include/js/trad_i18next_cv.js"></script> <!-- Translation -->

</body>
</html>
