
  i18next.use(i18nextBrowserLanguageDetector).init({
    fallbackLng: 'en',
    debug: true,
    resources: {
      en: {
        translation: {
          "i18n_title": "Laurie Bésinet",
          "i18n_welcome": "Welcome",
          "i18n_hello": "Actually agronomist in a startup offering solutions with connected sensors and agronomic models for farmers.<br> I'm looking for new challenges, that's why I leave soon to discover a country, its peoples, its cultures and its agricultures : New-Zealand",
          "i18n_newzealand": "New-Zealand",
          "i18n_resume": "Resume",
          "i18n_contact": "Contact",
          "i18n_home": "Home",
        }
      },
      fr: {
        translation: {
          "i18n_title": "Laurie Bésinet",
          "i18n_welcome": "Bienvenue",
          "i18n_hello": "Je suis actuellement agronome dans une startup alliant nouvelles technologies et agronomie. <br> A la recherche permanente de nouveaux défis, je pars bientôt à la découverte d'un nouveau pays, ses gens, ses cultures et ses agricultures : la Nouvelle-Zélande",
          "i18n_newzealand": "Nouvelle-Zélande",
          "i18n_resume": "Curriculum Vitae",
          "i18n_contact": "Contact",
          "i18n_home": "Accueil",
        }
      }
    }
  }, function(err, t) {
    // init set content
    updateContent();
  });
