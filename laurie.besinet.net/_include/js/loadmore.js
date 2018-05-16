(function () {
  var cards = document.getElementsByClassName('card-invisible');

  // show the first 5
  for (i = 0; i < 2; i++) {
      cards.item(i).classList.remove('card-invisible');
    }

})();

function loadmore() {
  var cards = document.getElementsByClassName('card-invisible');

  // show 5 more
  if (cards.length == 0) {
    document.getElementById('loadmore').style.display='none';
      }
  else {
    for (i = 0; i < 5; i++) {
        cards.item(i).classList.remove('card-invisible');
      }
  }
}
