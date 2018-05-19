function filtre (myElement) {

  //filter detection
  var id_filtre = myElement.id;

  //IF filter detected, add active class to button, ELSE remove active class
  var block_filters = document.getElementById('filters');
  var list_filter = block_filters.getElementsByTagName('a');
    for(var i=0;i<list_filter.length;i++)

      if (list_filter[i].id.includes(id_filtre)){
        if (list_filter[i].className.includes('active'))
          return false;
        else {
          list_filter[i].classList.add('active');
        }
      }
      else {
        list_filter[i].classList.remove('active');
      }


  //articles detection
  var all_articles = document.getElementById('articles');
  var articles = all_articles.getElementsByClassName('article');

  //"all" Filter case
  if (id_filtre == "all") {
    for(var i=0;i<articles.length;i++)
    articles[i].style.display='inline-block';
  }
  //one filter case
  else {
      for(var i=0;i<articles.length;i++)
        if (articles[i].className.includes(id_filtre)){
          articles[i].style.display='inline-block';
        }
        else {
          articles[i].style.display='none';
        }
      }

  /* effet rotation
  var actives = all_articles.getElementsByClassName('card');
    for(var i=0;i<actives.length;i++)
      actives[i].classList.remove("myothermove");

    for(var i=0;i<actives.length;i++)
      actives[i].classList.add("myothermove");
    for(var i=0;i<actives.length;i++)
      actives[i].style.animationPlayState = "running";
*/

}
