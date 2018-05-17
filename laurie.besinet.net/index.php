<!DOCTYPE html>
<html lang="en-US">

<!-- Head -->
<head>
  <meta name="keywords" content="agronomie, agronomy, farming, agriculture, engineer, ingenieur, agronome, agronomist, new technology, laurie, besinet, besine, bezine, bezinet, lorie"/>
  <meta name="date" content="2018-05-20"/>
  <title>Laurie Besinet | Agro &amp; Tech</title>
  <meta name="description" content="Laurie's  website about agronomy and technology">
  <link rel="canonical" href="https://laurie.besinet.net/index.php">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Laurie Besinet | Agro &amp; Tech">
  <meta property="og:description" content="Laurie's website about agronomy and technology">
  <meta property="og:url" content="https://laurie.besinet.net/index.php">
  <meta property="og:site_name" content="Laurie Besinet | Agro &amp; Tech">
  <meta property="og:updated_time" content="2018-05-20T15:23:05+01:00">
  <meta property="og:image" content="https://laurie.besinet.net/_include/img/slider-images/image01.jpg">
  <meta property="og:image:width" content="1600">
  <meta property="og:image:height" content="1169">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="_include/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include("head.php"); ?>

<body onload="highligtmenu()">
  <!---------------------- Header ---------------------->
    <!-- Homepage Slider -->
    <div id="home-slider">
      <div class="overlay">
      </div>
      <!--  si ecran < 500 px -->
      <div class="slider-text">
        <div class="jumbotron" style="background: none;opacity: 1;">
          <div class="slide-content" style="line-height: 80px;">Laurie Besinet</div>
          <p class="lead" style="color: white;margin: 15px;">Agronome spécialisée en Agri-tech</p>
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

  <!---------------------- CONTENT ---------------------->
  <div id="index">

      <!---------------------- Partie I BIENVENUE -->
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



      <!---------------------- Partie II DESCRIPTION-->
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



      <!---------------------- Partie III ARTICLES -->
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

              <!-- Voyage NZ -->
              <div class="card card-invisible article post-module perso travel">
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="logospot">
                    <img class="logo" src="_include/img/logo/new-zealand.png"/>
                  </div>
                  <img src="_include/img/profile/profile-03.jpg"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="category">Perso</div>
                  <h3>Découverte de la Nouvelle-Zélande</h3>
                  <h4>Nouveau pays, nouvelles rencontres, nouvelle culture</h4>
                  <div class="description">
                    <p>Blablab albalbabablb al ablbaabl lb alba lab alb alba blabalblabalbalbalb lba lba ba alba lblbalbalba alba lblblablba labalbalblba bla.
                    </p>
                    <a href="#" role="button" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Read More +</span>
                    </a>
                  </div>
                  <!--div class="post-meta">
                    <div class="row">
                      <div class="col-6"><i>#OAD #travail en équipe</i></div>
                      <div class="col-6"><i>+ de détails</i></div>
                    </div>
                  </div-->
                </div>
              </div>

              <!-- Weenat OAD ///  MODELE /// -->
              <div class="card card-invisible article post-module pro agri tech">
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
                  <div class="description">
                    <p class="i18n_job_wnt_sum">Weenat a pour but d'optimiser les ressources agricoles grâce aux données relevées sur la parcelle.
                      Dans cette startup mes missions comprenaient surtout la gestion de projets des Outils d'Aide à la Décision, mais aussi de la relation clients et de la communication.
                    </p>
                    <a href="#" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Plus de détails +</span>
                    </a>
                  </div>
                  <!--div class="post-meta"></div-->
                </div>
              </div>

              <!-- Pioneer Mktg -->
              <div class="card card-invisible article post-module pro agri">
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
                  <h3 class="i18n_job_pio_title1"></h3>
                  <h4 class="i18n_job_pio_entr"></h4>
                  <div class="description">
                    <p class="i18n_job_pio_sum"></p>
                    <a href="#" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Plus de détails +</span>
                    </a>
                  </div>
                  <!--div class="post-meta"></div-->
                </div>
              </div>

              <!-- Purpan -->
              <div class="card card-invisible article post-module studies agri">
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="logospot">
                    <img class="logo" src="_include/img/logo/purpan.png"/>
                  </div>
                  <img src="_include/img/cards/purpan.png"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="category i18n_etu_pur_cate"></div>
                  <h3 class="i18n_etu_pur_titre"></h3>
                  <h4 class="i18n_etu_pur_eco"></h4>
                  <div class="description">
                    <p class="i18n_etu_pur_sum"></p>
                    <a href="#" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Plus de détails +</span>
                    </a>
                  </div>
                  <!--div class="post-meta"></div-->
                </div>
              </div>

              <!-- Pioneer mildiou -->
              <div class="card card-invisible article post-module pro agri">
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="logospot">
                    <img class="logo" src="_include/img/logo/pioneer.png"/>
                  </div>
                  <img src="_include/img/cards/pioneer_mildiou.jpg"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="category i18n_job_pio_cate2"></div>
                  <!-- /// rôle / quoi ?  -->
                  <h3 class="i18n_job_pio_title2"></h3>
                  <!-- /// organisme / où ? -->
                  <h4 class="i18n_job_pio_entr2"></h4>
                  <div class="description">
                    <p class="i18n_job_pio_sum2"></p>
                    <a href="#" role="button" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Read More</span>
                    </a>
                  </div>
                  <!--div class="post-meta"></div-->
                </div>
              </div>

              <!-- Post-->
              <div class="card card-invisible article post-module pro">
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="logospot">
                    <img class="logo" src="_include/img/logo/weenat.png"/>
                  </div>
                  <img src="_include/img/profile/profile-01.jpg"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="category">Pro</div>
                  <h3>jsdh dksjf</h3>
                  <h4>kjehf zeolfi oizef h</h4>
                  <div class="description">
                    <p>jhfjhhhhh
                    </p>
                    <a href="#" role="button" class="d-flex justify-content-end col-auto mr-auto">
                      <span>Read More</span>
                    </a>
                  </div>
                  <!--div class="post-meta">
                    <div class="row">
                      <div class="col-6"><i>#OAD #travail en équipe</i></div>
                      <div class="col-6"><i>+ de détails</i></div>
                    </div>
                  </div-->
                </div>
              </div>
              <!-- a4 >
              <div class="card card-invisible article techn blogpost">
                <div class="mb-4 box-shadow">
                  <a href="a4.php#a4">
                    <figure class="card-img-top i18n_a4_pic">
                      <img src="./_include/img/nz/infographie2_small_en.png" alt="" />
                    </figure>
                  </a>
                  <div class="card-body">
                    <a href="a4.php#a4">
                      <h2 class="card-title title-description"><span class="badge badge-primary">New</span>&nbsp;&nbsp;<span class="i18n_a4_title">Software Technology : ElasticSuite</span></h2>
                    </a>
                    <p class="card-text i18n_a4_intro">
                      <a href=\"https://elastic.co/\" target=\"_blank\">Elastic</a> is a set of free softwares for data acquisition, storage and analysis. I share with you my observations on this very complete tool. I have summarized in a infography how it works and the pro and cons of its use.
                    </p>
                    <div class="row">
                      <a href="a4.php#a4" role="button" class="btn btn-sm btn-outline-secondary col-auto mr-auto"><span>Read More</span></a>
                      <a onclick="filtre(this);" href="#filters" id="tech" class="btn btn-secondary btn-sm col-auto" role="button"><span>#Technology</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- a3 >
              <div class="card card-invisible article techn agri blogpost">
                <div class="mb-4 box-shadow">
                  <a href="a3.php#a3">
                    <figure class="card-img-top i18n_a3_pic"></figure>
                  </a>
                  <div class="card-body">
                    <a href="a3.php#a3">
                      <h2 class="card-title i18n_a3_title title-description"></h2>
                    </a>
                    <p class="card-text i18n_a3_intro"></p>
                    <div class="row">
                      <a href="a3.php#a3" role="button" class="btn btn-sm btn-outline-secondary col-auto mr-auto"><span>Read More</span></a>
                      <div class="btn-group col-auto" role="group">
                        <a onclick="filtre(this);" href="#filters" id="agri" class="btn btn-secondary btn-sm " role="button"><span >#Agriculture</span></a>
                        <a onclick="filtre(this);" href="#filters" id="tech" class="btn btn-secondary btn-sm " role="button"><span>#Technology</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- a2 >
              <div class="card card-invisible article techn agri blogpost">
                <div class="mb-4 box-shadow">
                  <a href="a2.php#a2">
                    <figure class="card-img-top i18n_a2_pic"></figure>
                  </a>
                  <div class="card-body">
                    <a href="a2.php#a2">
                      <h2 class="card-title i18n_a2_title title-description"></h2>
                    </a>
                    <p class="card-text i18n_a2_intro"></p>
                    <div class="row">
                      <a href="a2.php#a2" role="button" class="btn btn-sm btn-outline-secondary col-auto mr-auto"><span>Read More</span></a>
                      <div class="btn-group col-auto" role="group">
                        <a onclick="filtre(this);" href="#filters" id="agri" class="btn btn-secondary btn-sm " role="button"><span >#Agriculture</span></a>
                        <a onclick="filtre(this);" href="#filters" id="tech" class="btn btn-secondary btn-sm " role="button"><span>#Technology</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- a1 >
              <div class="card card-invisible article travel blogpost">
                <div class="mb-4 box-shadow">
                  <a href="a1.php#a1">
                    <figure class="card-img-top i18n_a1_pic"></figure>
                  </a>
                  <div class="card-body">
                    <a href="a1.php#a1">
                      <h2 class="card-title i18n_a1_title title-description"></h2>
                    </a>
                    <p class="card-text i18n_a1_intro"></p>
                    <div class="row ">
                      <a href="a1.php#a1" role="button" class="btn btn-sm btn-outline-secondary col-auto mr-auto"><span>Read More</span></a>
                      <a onclick="filtre(this);" href="#filters" id="travel" class="btn btn-secondary btn-sm col-auto" role="button"><span>#Travels</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- a0 >
              <div class="card card-invisible article travel blogpost">
                <div class="mb-4 box-shadow">
                  <a href="a0.php#a0">
                    <figure class="card-img-top i18n_a0_pic"></figure>
                  </a>
                  <div class="card-body">
                    <a href="a0.php#a0">
                      <h2 class="card-title i18n_a0_title title-description"></h2>
                    </a>
                    <p class="card-text i18n_a0_intro"></p>
                    <div class="row">
                      <a href="a0.php#a0" role="button" class="btn btn-sm btn-outline-secondary col-auto mr-auto"><span>Read More</span></a>
                      <a onclick="filtre(this);" href="#filters" id="travel" class="btn btn-secondary btn-sm col-auto" role="button"><span>#Travels</span></a>
                    </div>
                  </div>
                </div>
              </div>
-->
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


      <!---------------------- Partie FLUX TWITTER ? >
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
      <!--end Partie twitter -->


  </div>
  <!-- End Presentation -->


  <!---------------------- Footer ---------------------->
  <?php include("footer.php"); ?>

  <!---------------------- scripts ---------------------->
  <?php include("scripts.php"); ?>
  <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
  <script src="_include/js/supersized.js"></script> <!-- Slider -->

</body>
</html>
