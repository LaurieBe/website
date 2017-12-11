
  i18next.use(i18nextBrowserLanguageDetector).init({
    fallbackLng: 'en',
    debug: true,
    resources: {
      en: {
        translation: {
          "key_title": "Laurie Bésinet",
          "key_welcome": "Welcome",
          "key_hello": "Passionate and specialized in agriculture and numeric to connect fields to the World. <br> I used to be agronomist in a startup offering solutions with connected sensors and agronomic models for farmers.<br> I am now in New Zealand to discover the country, its peoples, its cultures and its agricultures.",
          "key_hello2": "Available immediately, living in Auckland",
          "key_newzealand": "New-Zealand",
          "key_resume": "Resume",
          "key_experiences": "Experiences",
          "key_projects": "Projects",
          "key_contact": "Contact",
          "key_home": "Home",
          "key_instructions": "Clic on the pictures to access my resume or the stories of my journey in New Zealand:",
        }
      },
      fr: {
        translation: {
          "key_title": "Laurie Bésinet",
          "key_welcome": "Bienvenue",
          "key_hello": "Passionnée par l'agriculture et les nouvelles technologies, et spécialisée dans ces domaines, mon idée est de connecter les champs, les agriculteurs, le monde. Après avoir été agronome dans une startup alliant nouvelles technologies et agronomie, je suis maintenant en Nouvelle-Zélande pour découvrir un nouveau pays, ses gens, ses cultures et ses agricultures",
          "key_hello2": "Disponible immédiatement, sans préavis",
          "key_newzealand": "Nouvelle-Zélande",
          "key_resume": "Curriculum Vitae",
          "key_experiences": "Expériences",
          "key_projects": "Projets",
          "key_contact": "Contact",
          "key_home": "Accueil",
          "key_instructions": "Cliquer sur les images pour accéder à mon CV ou bien à mes impressions pendant mon voyage en Nouvelle-Zélande : ",
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
    document.getElementById('i18n_hello2').innerHTML = i18next.t('key_hello2');
    document.getElementById('i18n_newzealand').innerHTML = i18next.t('key_newzealand');
    document.getElementById('i18n_newzealand2').innerHTML = i18next.t('key_newzealand');
    document.getElementById('i18n_resume').innerHTML = i18next.t('key_resume');
    document.getElementById('i18n_resume2').innerHTML = i18next.t('key_resume');
//    document.getElementById('i18n_experiences').innerHTML = i18next.t('key_experiences');
//    document.getElementById('i18n_projects').innerHTML = i18next.t('key_projects');
    document.getElementById('i18n_contact').innerHTML = i18next.t('key_contact');
//    document.getElementById('i18n_contact2').innerHTML = i18next.t('key_contact');
    document.getElementById('i18n_home').innerHTML = i18next.t('key_home');

    for(i =0; i<  document.getElementsByClassName('i18n_instructions').length;i++){document.getElementsByClassName('i18n_instructions')[i].innerHTML= i18next.t('key_instructions');}

  }

  function changeLng(lng) {
    i18next.changeLanguage(lng);
  }

  i18next.on('languageChanged', () => {
    updateContent();
  });
 //test i18next
