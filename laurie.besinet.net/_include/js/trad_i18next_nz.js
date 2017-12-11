
  i18next.use(i18nextBrowserLanguageDetector).init({
    fallbackLng: 'en',
    debug: true,
    resources: {
      en: {
        translation: {
          "key_title": "Laurie Bésinet",
          "key_welcome": "Welcome",
          "key_hello": "Actually agronomist in a startup offering solutions with connected sensors and agronomic models for farmers.<br> I'm looking for new challenges, that's why I leave soon to discover a country, its peoples, its cultures and its agricultures : New-Zealand",
          "key_newzealand": "New-Zealand",
          "key_resume": "Resume",
          "key_contact": "Contact",
          "key_home": "Home",
        }
      },
      fr: {
        translation: {
          "key_title": "Laurie Bésinet",
          "key_welcome": "Bienvenue",
          "key_hello": "Je suis actuellement agronome dans une startup alliant nouvelles technologies et agronomie. <br> A la recherche permanente de nouveaux défis, je pars bientôt à la découverte d'un nouveau pays, ses gens, ses cultures et ses agricultures : la Nouvelle-Zélande",
          "key_newzealand": "Nouvelle-Zélande",
          "key_resume": "Curriculum Vitae",
          "key_contact": "Contact",
          "key_home": "Accueil",
        }
      }
    }
  }, function(err, t) {
    // init set content
    updateContent();
  });

  function updateContent() {
    for(i =0; i<  document.getElementsByClassName('i18n_nz_title').length;i++){document.getElementsByClassName('i18n_nz_title')[i].innerHTML= i18next.t('key_title');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_welcome').length;i++){document.getElementsByClassName('i18n_nz_welcome')[i].innerHTML= i18next.t('key_welcome');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_hello').length;i++){document.getElementsByClassName('i18n_nz_hello')[i].innerHTML= i18next.t('key_hello');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_newzealand').length;i++){document.getElementsByClassName('i18n_nz_newzealand')[i].innerHTML= i18next.t('key_newzealand');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_resume').length;i++){document.getElementsByClassName('i18n_nz_resume')[i].innerHTML= i18next.t('key_resume');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_contact').length;i++){document.getElementsByClassName('i18n_nz_contact')[i].innerHTML= i18next.t('key_contact');}
    for(i =0; i<  document.getElementsByClassName('i18n_nz_home').length;i++){document.getElementsByClassName('i18n_nz_home')[i].innerHTML= i18next.t('key_home');}
  }

  function changeLng(lng) {
    i18next.changeLanguage(lng);
  }

  i18next.on('languageChanged', () => {
    updateContent();
  });
 //test i18next
