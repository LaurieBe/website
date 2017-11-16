
  i18next.init({
    lng: 'fr',
    debug: true,
    resources: {
      en: {
        translation: {
          "key_title": "Laurie Bésinet",
          "key_welcome": "Welcome",
          "key_hello": "Actually agronomist in a startup offering solutions with connected sensors and agronomic models for farmers.<br> I'm looking for new challenges, that's why I leave soon to discover a country, its peoples, its cultures and its agricultures : New-Zealand",
          "key_newzealand": "New-Zealand",
          "key_resume": "Resume",
          "key_experiences": "Experiences",
          "key_projects": "Projects",
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
          "key_experiences": "Expériences",
          "key_projects": "Projets",
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
    document.getElementById('i18n_title').innerHTML = i18next.t('key_title');
    document.getElementById('i18n_welcome').innerHTML = i18next.t('key_welcome');
    document.getElementById('i18n_hello').innerHTML = i18next.t('key_hello');
    document.getElementById('i18n_newzealand').innerHTML = i18next.t('key_newzealand');
    document.getElementById('i18n_newzealand2').innerHTML = i18next.t('key_newzealand');
    document.getElementById('i18n_resume').innerHTML = i18next.t('key_resume');
    document.getElementById('i18n_resume2').innerHTML = i18next.t('key_resume');
//    document.getElementById('i18n_experiences').innerHTML = i18next.t('key_experiences');
//    document.getElementById('i18n_projects').innerHTML = i18next.t('key_projects');
    document.getElementById('i18n_contact').innerHTML = i18next.t('key_contact');
    document.getElementById('i18n_contact2').innerHTML = i18next.t('key_contact');
    document.getElementById('i18n_home').innerHTML = i18next.t('key_home');
  }

  function changeLng(lng) {
    i18next.changeLanguage(lng);
  }

  i18next.on('languageChanged', () => {
    updateContent();
  });
 //test i18next
