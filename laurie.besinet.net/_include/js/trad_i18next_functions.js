function updateContent() {
  //Loop over all elements which contains a class starting by "i18n_"
  $.each($('[class*="i18n_"]'), function(key, element) {
      classes = element.className.split(' ')
      for(var i=0, max=classes.length; i < max; i++) {
        keyClass = classes[i];
        if (keyClass.startsWith("i18n_")){
          element.innerHTML= i18next.t(keyClass);
        }
      }
  });

}

function changeLng(lng) {
  i18next.changeLanguage(lng);
}

i18next.on('languageChanged', () => {
  updateContent();
});
//test i18next
