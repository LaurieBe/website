<!-- This section is for Splash Screen -->
<div class="ole">
  <section id="jSplash">
    <div id="circle"></div>
  </section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">
    <div class="overlay"></div>

    <!--  si ecran < 500 px -->
    <div class="slider-text" style="top: 50%;left: 50%;transform: translate(-50%, -50%);width: 100%;margin: 0px;height: 200px;">
      <div id="slidecaption" style="line-height: 100px;">
      </div>
    </div>

  <div class="control-nav">
          <a id="nextsection" href="#content"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
  </div>

<!-- Header -->
<header>
    <div class="sticky-nav">
      <a id="mobile-nav" class="menu-nav" href="#menu-nav" style="padding-left: 40px;"></a>

        <div>
          <a id="goUp" href="index.php#home-slider" title="Laurie Besinet" style="line-height: 60px;">
            <img src="_include/img/LB logo nb fond transp.png" style="max-height: 40px;vertical-align: middle;padding-left: 20px;">
          </a>
          <nav id="menu">
            <ul id="menu-nav">
              <li><a class="external i18n_home" href="index.php#work"></a></li>
              <li><a class="external i18n_resume" href="cv.php#resume"></a></li>
              <li><a class="external i18n_blog" href="blog.php#blog"></a></li>
              <li><a class="i18n_contact" href="#social-area"></a></li>
              <li>
                <button class="button button-mini" onclick="i18next.changeLanguage('en')">EN</button>
                <button class="button button-mini" onclick="i18next.changeLanguage('fr')">FR</button>
              </li>
            </ul>
          </nav>
        </div>

</header>
