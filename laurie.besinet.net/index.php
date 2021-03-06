<!DOCTYPE html>
<html lang="en-US">

<!-- Head -->
<head>
  <meta name="keywords" content="agronomie, agronomy, farming, agriculture, engineer, ingenieur, agronome, agronomist, new technology, laurie, besinet, besine, bezine, bezinet, lorie"/>
  <meta name="date" content="2020-05-15"/>
  <title>Laurie Besinet | Agro &amp; Tech</title>
  <meta name="description" content="Laurie's  website about agronomy and technology">
  <link rel="canonical" href="https://laurie.besinet.net/index.php">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Laurie Besinet | Agro &amp; Tech">
  <meta property="og:description" content="Laurie's website about agronomy and technology">
  <meta property="og:url" content="https://laurie.besinet.net/index.php">
  <meta property="og:site_name" content="Laurie Besinet | Agro &amp; Tech">
  <meta property="og:updated_time" content="2020-05-15T15:23:05+01:00">
  <meta property="og:image" content="https://laurie.besinet.net/_include/img/slider-images/image01.jpg">
  <meta property="og:image:width" content="1600">
  <meta property="og:image:height" content="1169">

  <script src="_include/js/jquery.min.js"></script>
  <link rel="stylesheet" href="_include/bootstrap-3.3.7/css/bootstrap.min.css">
  <script src="_include/bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <?php include("head.php"); ?>

<body onload="highligtmenu()">
  <!--################### Header ###################-->
    <!-- Homepage Slider -->
    <div id="home-slider">
      <div class="overlay">
      </div>
      <!--  si ecran < 500 px -->
      <div class="slider-text">
        <div class="jumbotron" style="background: none;opacity: 1;">
          <div class="slide-content" style="line-height: 80px;">Laurie Besinet</div>
          <p class="lead i18n_subtitle" style="color: white;margin: 15px;">Agronome spécialisée en Agri-tech</p>
        </div>
      </div>
      <div class="control-nav">
        <a id="nextsection" href="#goUp" title="Go down"><i class="font-icon-arrow-simple-down"></i></a>
      </div>

    </div>

  <?php include("header.php"); ?>
      </div>
  </header>
  <!-- End header -->

  <!--################### CONTENT ###################-->
  <div id="index">

      <!--################### Partie I BIENVENUE -->
      <div class="page">
        <div id="content" class="container">
          <br>
          <div class="row media">
            <!-- Picture -->
            <div class="col-lg-4 col-md-6 col-sm-12 align-self-center">
              <img class="" src="_include/img/photo_profil.png" alt="profil" style="max-width: 100%; margin: 0;">
            </div>
            <!-- Text -->
            <div class="col-lg-8 col-md-6 col-sm-12 media-body">
              <h2 class="i18n_welcome">Bienvenue</h2>
              <div>
                <p class="i18n_hello">Passionnée par l'agriculture et les nouvelles technologies, je me spécialise dans la combinaison de ces domaines dans l'idée de connecter toujours plus l'agriculture pour une utilisation de nos ressources optimale et durable. </p>
                <p class="i18n_hello2">J'ai créé ce site par curiosité pour le web et pour partager sur mes centres d'intérêt que sont l'agriculture et les nouvelles technologies.</p>
              </div>
           </div>
         </div>
        </div>
      </div>
      <!-- End Partie I -->



      <!--################### Partie II DESCRIPTION-->
      <div class="page-alternate">
        <div id="content" class="container">
          <div class="row">

            <!-- Avant-->
            <div class="col-md-4">
              <!-- text -->
                <h2 class="i18n_partII_before_title">Ce qui m'a amené où je suis</h2>
                <div>
                  <p class="i18n_partII_before_text">J'ai choisi de faire des études d'<strong>agronomie</strong> à l'Ecole d'ingénieurs de Purpan.
                    J'ai eu l'occasion d'y effectuer de nombreux stages dans des domaines aussi variés que l'élevage, la recherche en génétique des plantes, la qualité alimentaire et l'agronomie
                    </p>
                </div>
              <!-- End text -->
            </div>
            <!-- End Avant-->

            <!-- Situation Actuelle-->
            <div class="col-md-4">
              <!-- text -->
                <h2 class="i18n_partII_now_title">Situation actuelle</h2>
                <div>
                  <p class="i18n_partII_now_text">J'intègrerai sous peu l'entreprise <strong>Smag</strong> en tant que chef produit. Cela fait suite à 2 années responsable de projets dans la startup <strong>Weenat</strong> qui allie nouvelles technologies et agronomie et la découverte de la <strong>Nouvelle-Zélande</strong> pendant plusieurs mois où j'ai aidé à l'organisation d'évènements sur les nouvelles technologies.</p>
                </div>
              <!-- End text -->
            </div>
            <!-- End Situation Actuelle-->

            <!-- Projets-->
            <div class="col-md-4">
              <!-- text -->
                <h2 class="i18n_partII_proj_title">Centres d'intérêts</h2>
                <div>
                  <p class="i18n_partII_proj_text">Mes projets personnels sont répartis entre la découverte de <strong>nouvelles technologies</strong> ; les <strong>sports au contact de la nature</strong> comme le ski, la plongée ou la randonnée ; et l'<strong>organisation d'évènements</strong> avec l'association des anciens étudiants de ma promotion. </p>
                </div>
              <!-- End text -->
            </div>
            <!-- End projets-->

          </div>
        </div>
      </div>
      <!-- End Partie II -->



      <!--################### Partie III ARTICLES -->
      <div class="page">
        <div class="container">

          <!-- Title -->
          <div class="title-page">
            <h1 class="i18n_partIII_title">Portfolio</h1>
            <p class="i18n_partIII_text"></p>
          </div>
          <!-- End Title -->

          <!-- filters -->
          <div>
            <h3 class="titlefilters i18n_filters_title"> Filtrer  </h3>
            <div id="filters" class="justify-content-center btn-group" role="group">
              <a onclick="filtre(this);" href="#filters" id="all" class="btn btn-secondary i18n_filters_all">
                  #All
              </a>
              <div  class="justify-content-center btn-group" role="group">
                <button id="categories" type="button" class="btn btn-secondary dropdown-toggle i18n_filters_category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="categories">
                  <a onclick="filtre(this);" href="#filters" id="pro" class="btn btn-secondary btn-sm i18n_filters_pro" role="button"><span>#Pro</span></a>
                  <a onclick="filtre(this);" href="#filters" id="studies" class="btn btn-secondary btn-sm i18n_filters_studies" role="button"><span>#Studies</span></a>
                  <a onclick="filtre(this);" href="#filters" id="perso" class="btn btn-secondary btn-sm i18n_filters_perso" role="button"><span>#Perso</span></a>
                  <a onclick="filtre(this);" href="#filters" id="blogpost" class="btn btn-secondary btn-sm i18n_filters_blogpost" role="button"><span>#Article</span></a>
                </div>
              </div>
              <div  class="justify-content-center btn-group" role="group">
                <button id="themes" type="button" class="btn btn-secondary dropdown-toggle i18n_filters_theme" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Thèmes
                </button>
                <div class="dropdown-menu" aria-labelledby="themes">
                  <a onclick="filtre(this);" href="#filters" id="agri" class="btn btn-secondary btn-sm i18n_filters_agriculture" role="button"><span>#Agriculture</span></a>
                  <a onclick="filtre(this);" href="#filters" id="tech" class="btn btn-secondary btn-sm i18n_filters_technology" role="button"><span>#Technology</span></a>
                  <a onclick="filtre(this);" href="#filters" id="travel" class="btn btn-secondary btn-sm i18n_filters_international" role="button"><span>#Travels</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end filters -->

          <!-- articles -->
          <div id="articles">
            <!-- liste des articles -->
            <div class="row">

              <!-- smag -->
              <div class="card card-invisible article post-module pro agri tech">
                  <a href="2018-smag.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/smag.png"/>
                    </div>
                    <img src="_include/img/cards/plaquette_seeds.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_smag_cate"></div>
                    <h3 class="i18n_job_smag_title"></h3>
                    <h4 class="i18n_job_smag_entr"></h4>
                    <div class="description"><div>
                      <p class="i18n_job_smag_sum"></p>
                      <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_smag_them"></div>
                        <div class="i18n_job_smag_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>


              <!-- site -->
              <div class="card card-invisible article post-module perso tech">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <img src="_include/img/cards/site.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_proj_website_cate"></div>
                    <h3 class="i18n_proj_website_title"></h3>
                    <h4 class="i18n_proj_website_subtitle"></h4>
                    <div class="description"><div>
                      <p class="i18n_proj_website_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span-->
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_proj_website_them"></div>
                        <div class="i18n_proj_website_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- student -->
              <div class="card card-invisible article post-module perso">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <img src="_include/img/cards/student.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_proj_student_cate"></div>
                    <h3 class="i18n_proj_student_title"></h3>
                    <h4 class="i18n_proj_student_subtitle"></h4>
                    <div class="description"><div>
                      <p class="i18n_proj_student_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span-->
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_proj_student_them"></div>
                        <div class="i18n_proj_student_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- TechWeek -->
              <div class="card card-invisible article post-module perso travel tech">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot" style="right: 90px;">
                      <img class="logo" src="_include/img/logo/techweek.png"/>
                    </div>
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/new-zealand.png"/>
                    </div>
                    <img src="_include/img/cards/techweek.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_proj_techweek_cate"></div>
                    <h3 class="i18n_proj_techweek_title"></h3>
                    <h4 class="i18n_proj_techweek_subtitle"></h4>
                    <div class="description"><div>
                      <p class="i18n_proj_techweek_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span-->
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_proj_techweek_them"></div>
                        <div class="i18n_proj_techweek_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- a4 Elastic -->
              <div class="card card-invisible article post-module blogpost tech">
                  <a href="a4.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <img src="_include/img/cards/a4.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_a4_cate"></div>
                    <h3 class="i18n_a4_title"></h3>
                    <h4 class="i18n_a4_subtitle"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_a4_intro"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_a4_them"></div>
                        <div class="i18n_a4_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- a3 Regen -->
              <div class="card card-invisible article post-module blogpost travel agri tech">
                  <a href="a3.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/new-zealand.png"/>
                    </div>
                    <img src="_include/img/cards/a3.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_a3_cate"></div>
                    <h3 class="i18n_a3_title"></h3>
                    <h4 class="i18n_a3_subtitle"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_a3_intro"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_a3_them"></div>
                        <div class="i18n_a3_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- a2 Autogrow -->
              <div class="card card-invisible article post-module blogpost travel agri tech">
                  <a href="a2.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/new-zealand.png"/>
                    </div>
                    <img src="_include/img/cards/a2.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_a2_cate"></div>
                    <h3 class="i18n_a2_title"></h3>
                    <h4 class="i18n_a2_subtitle"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_a2_intro"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_a2_them"></div>
                        <div class="i18n_a2_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- a1 Auckland -->
              <div class="card card-invisible article post-module blogpost travel">
                  <a href="a1.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/new-zealand.png"/>
                    </div>
                    <img src="_include/img/cards/a1.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_a1_cate"></div>
                    <h3 class="i18n_a1_title"></h3>
                    <h4 class="i18n_a1_subtitle"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_a1_intro"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_a1_them"></div>
                        <div class="i18n_a1_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- a0 Départ -->
              <div class="card card-invisible article post-module blogpost travel">
                  <a href="a0.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/new-zealand.png"/>
                    </div>
                    <img src="_include/img/cards/a0.png"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_a0_cate"></div>
                    <h3 class="i18n_a0_title"></h3>
                    <h4 class="i18n_a0_subtitle"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_a0_intro"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_a0_them"></div>
                        <div class="i18n_a0_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Weenat OAD -->
              <div class="card card-invisible article post-module pro agri tech">
                  <a href="2016-weenat.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/weenat.png"/>
                    </div>
                    <img src="_include/img/cards/weenat.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_wnt_cate">Pro</div>
                    <!-- /// rôle / quoi ?  -->
                    <h3 class="i18n_job_wnt_title1">Responsable projets</h3>
                    <!-- /// organisme / où ? -->
                    <h4 class="i18n_job_wnt_entr">Création et développement des OAD</h4>
                    <div class="description"><div>
                      <p class="i18n_job_wnt_sum">Weenat a pour but d'optimiser les ressources agricoles grâce aux données relevées sur la parcelle.
                        Dans cette startup mes missions comprenaient surtout la gestion de projets des Outils d'Aide à la Décision, mais aussi de la relation clients et de la communication.
                      </p>
                      <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                    </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_wnt_them"></div>
                        <div class="i18n_job_wnt_date"></div>
                      </div>
                    </div>
                  </div>
                  </a>
              </div>

              <!-- Pioneer Mktg -->
              <div class="card card-invisible article post-module pro agri">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/pioneer.png"/>
                    </div>
                    <img src="_include/img/cards/pioneer_mktg.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_pio_cate"></div>
                    <h3 class="i18n_job_pio_title"></h3>
                    <h4 class="i18n_job_pio_entr"></h4>
                    <div class="description"><div>
                      <p class="i18n_job_pio_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span--></div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_pio_them"></div>
                        <div class="i18n_job_pio_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- Purpan -->
              <div class="card card-invisible article post-module studies agri">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/purpan.png"/>
                    </div>
                    <img src="_include/img/cards/purpan.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_etu_pur_cate"></div>
                    <h3 class="i18n_etu_pur_titre"></h3>
                    <h4 class="i18n_etu_pur_eco"></h4>
                    <div class="description"><div>
                      <p class="i18n_etu_pur_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span--></div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_etu_pur_them"></div>
                        <div class="i18n_etu_pur_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- Pioneer mildiou -->
              <div class="card card-invisible article post-module pro agri tech">
                  <a href="2014-pio-agro.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/pioneer.png"/>
                    </div>
                    <img src="_include/img/cards/pioneer_mildiou.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_pio_cate"></div>
                    <!-- /// rôle / quoi ?  -->
                    <h3 class="i18n_job_pio_agro_title"></h3>
                    <!-- /// organisme / où ? -->
                    <h4 class="i18n_job_pio_entr"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_job_pio_agro_sum"></p>
                        <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_pio_agro_them"></div>
                        <div class="i18n_job_pio_agro_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- plastic -->
              <div class="card card-invisible article post-module perso tech">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <img src="_include/img/cards/plastic.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_proj_plastic_cate"></div>
                    <h3 class="i18n_proj_plastic_title"></h3>
                    <h4 class="i18n_proj_plastic_subtitle"></h4>
                    <div class="description"><div>
                      <p class="i18n_proj_plastic_sum"></p>
                      <!--span class="col-auto link-details">... plus de détails</span-->
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_proj_plastic_them"></div>
                        <div class="i18n_proj_plastic_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- UFC -->
              <div class="card card-invisible article post-module studies agri travel">
                  <!-- <a href="#filters"> -->
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot" style="right: 90px;">
                      <img class="logo" src="_include/img/logo/ufc.png"/>
                    </div>
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/brazil.png"/>
                    </div>

                    <img src="_include/img/cards/ufc.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_etu_for_cate"></div>
                    <h3 class="i18n_etu_for_titre"></h3>
                    <h4 class="i18n_etu_for_eco"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_etu_for_sum"></p>
                        <!-- <span class="col-auto link-details i18n_partIII_details">... plus de détails</span> -->
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_etu_for_them"></div>
                        <div class="i18n_etu_for_date"></div>
                      </div>
                    </div>
                  </div>
                <!-- </a> -->
              </div>

              <!-- N&S -->
              <div class="card card-invisible article post-module pro agri">
                  <a href="2013-ns.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/nutritionetsante.png"/>
                    </div>
                    <img src="_include/img/cards/nutritionetsante.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_ns_cate"></div>
                    <h3 class="i18n_job_ns_title"></h3>
                    <h4 class="i18n_job_ns_entr"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_job_ns_sum"></p>
                        <span class="col-auto link-details i18n_partIII_details">... plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_ns_them"></div>
                        <div class="i18n_job_ns_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Ané -->
              <div class="card card-invisible article post-module pro agri travel">
                  <a href="2012-ane.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot" style="right: 90px;">
                      <img class="logo" src="_include/img/logo/ane.png"/>
                    </div>
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/united-states.png"/>
                    </div>
                    <img src="_include/img/cards/ane.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_ane_cate"></div>
                    <h3 class="i18n_job_ane_title"></h3>
                    <h4 class="i18n_job_ane_entr"></h4>
                    <div class="description"><div>
                      <p class="i18n_job_ane_sum"></p>
                      <span class="col-auto link-details i18n_partIII_details">Cliquer pour plus de détails</span></div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_ane_them"></div>
                        <div class="i18n_job_ane_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Lamouthe -->
              <div class="card card-invisible article post-module pro agri">
                  <a href="2011-lam.php">
                  <!-- Thumbnail-->
                  <div class="thumbnail">
                    <div class="logospot">
                      <img class="logo" src="_include/img/logo/lamouthe.png"/>
                    </div>
                    <img src="_include/img/cards/lamouthe.jpg"/>
                  </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category i18n_job_lam_cate"></div>
                    <h3 class="i18n_job_lam_title"></h3>
                    <h4 class="i18n_job_lam_entr"></h4>
                    <div class="description">
                      <div>
                        <p class="i18n_job_lam_sum"></p>
                        <span class="col-auto link-details i18n_partIII_details">... plus de détails</span>
                      </div>
                    </div>
                    <div class="post-meta description">
                      <div class="post-meta-sub">
                        <div class="i18n_job_lam_them"></div>
                        <div class="i18n_job_lam_date"></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            </div>

            <div style="margin: 20px auto 0 auto;width: 50px;">
              <a  onclick="loadmore()" id="loadmore">
                <span class="font-icon-plus"></span>
              </a>
            </div>

          </div>
          <!-- End articles -->

        </div>
      </div>
      <!-- End Partie Articles -->


      <!--################### Partie FLUX TWITTER ?
      <div class="page">
        <div id="content" class="container">
          <div>
            <h2>Flux Twitter</h2>
            <div>Les derniers Teets</div>
            <div>Bla</div>
            <div>Bla</div>
            <div>Bla</div>
           </div>
        </div>
      </div>
      end Partie twitter -->


  </div>
  <!-- End Presentation -->


  <!--################### Footer ###################-->
  <?php include("footer.php"); ?>

  <!--################### scripts ###################-->
  <?php include("scripts.php"); ?>
  <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
  <script src="_include/js/supersized.js"></script> <!-- Slider -->

</body>
</html>
