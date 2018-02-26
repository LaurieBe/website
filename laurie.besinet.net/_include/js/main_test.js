function filtre (myElement) {
  var id_filtre = myElement.id
  var all_articles = document.getElementById('articles')
  var articles = all_articles.getElementsByClassName('article');

  if (id_filtre == "all") {
    for(var i=0;i<articles.length;i++)
    articles[i].style.display='initial';
  }
  else {
      for(var i=0;i<articles.length;i++)
        if (articles[i].className.includes(id_filtre)){
          articles[i].style.display='initial';
        }
        else {
          articles[i].style.display='none';
        }
      }
}
