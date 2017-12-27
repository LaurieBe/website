
i18next.use(i18nextBrowserLanguageDetector).init({
  fallbackLng: 'en',
  debug: true,
  resources: {
    en: {
      translation: {
        "i18n_title": "Laurie Bésinet",
        "i18n_welcome": "Welcome",
        "i18n_hello": "Passionate and specialized in agriculture and numeric to connect fields to the World. <br> I used to be agronomist in a startup offering solutions with connected sensors and agronomic models for farmers.<br> I am now in New Zealand to discover the country, its peoples, its cultures and its agricultures.",
        "i18n_hello2": "Available immediately, living in Auckland",
        "i18n_newzealand": "New-Zealand",
        "i18n_resume": "Resume",
        "i18n_experiences": "Experiences",
        "i18n_projects": "Projects",
        "i18n_contact": "Contact",
        "i18n_home": "Home",
        "i18n_blog": "Blog",
        "i18n_instructions": "Clic on the pictures to access my resume or the stories of my journey in New Zealand:",
      }
    },
    fr: {
      translation: {
        "i18n_title": "Laurie Bésinet",
        "i18n_welcome": "Bienvenue",
        "i18n_hello": "Passionnée par l'agriculture et les nouvelles technologies, et spécialisée dans ces domaines, mon idée est de connecter les champs, les agriculteurs, le monde. Après avoir été agronome dans une startup alliant nouvelles technologies et agronomie, je suis maintenant en Nouvelle-Zélande pour découvrir un nouveau pays, ses gens, ses cultures et ses agricultures",
        "i18n_hello2": "Disponible immédiatement, sans préavis",
        "i18n_newzealand": "Nouvelle-Zélande",
        "i18n_resume": "Curriculum Vitae",
        "i18n_experiences": "Expériences",
        "i18n_projects": "Projets",
        "i18n_contact": "Contact",
        "i18n_home": "Accueil",
        "i18n_blog": "Blog",
        "i18n_instructions": "Cliquer sur les images pour accéder à mon CV ou bien à mes impressions pendant mon voyage en Nouvelle-Zélande : ",
      }
    }
  }
}, function(err, t) {
  // init set content
  updateContent();
});
