<div class="hiddentitle"><h1>Laurie Besinet</h1></div>

<!-- This section is for Splash Screen -->
<div class="ole">
  <section id="jSplash">
    <div id="circle"></div>
  </section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider" class="d-print-none">
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

<!-- Header -->
<header>
    <div class="sticky-nav">

      <a id="mobile-nav" title="Menu" class="menu-nav" href="#menu-nav" style="padding-left: 40px;"></a>

      <div>
        <a id="goUp" href="index.php#home-slider" title="Laurie Besinet" style="line-height: 60px;">
          <img src="_include/img/LB logo nb fond transp.png" style="max-height: 40px;vertical-align: middle;padding-left: 20px;">
        </a>
        <nav id="menu">
          <ul id="menu-nav">
            <li><a onclick="highligtmenu()" class="menu-nav-lien external i18n_home btn btn-secondary" role="button" href="index.php#goUp"></a></li>
            <li><a onclick="highligtmenu()" class="menu-nav-lien external i18n_resume btn btn-secondary" role="button" href="cv.php#goUp"></a></li>
            <li><a onclick="highligtmenu()" class="menu-nav-lien external i18n_blog btn btn-secondary" role="button" href="blog.php#goUp"></a></li>
            <li><a onclick="highligtmenu()" id="menu-nav-social" class="i18n_contact btn btn-secondary" role="button" href="#social-area"></a></li>
            <li>
              <button class="btn btn-outline-light btn-sm" type="button" onclick="i18next.changeLanguage('en')">EN</button>
              <button class="btn btn-outline-light btn-sm" type="button" onclick="i18next.changeLanguage('fr')">FR</button>
            </li>
            <li>
              <a class="font-icon-print btn btn-secondary" role="button" name="print" onclick="imprimer_page()" style="width: 50px;"></a>
            </li>
          </ul>
        </nav>
      </div>
