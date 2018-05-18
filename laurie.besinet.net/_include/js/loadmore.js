(function () {
  var cards = document.getElementsByClassName('card-invisible');
  var i = 0

  // show the first
  for (i = 0; i < 9; i++) {
      cards.item(0).classList.remove('card-invisible');
    }

})();

function loadmore() {
  var cards = document.getElementsByClassName('card-invisible');
  var i = 0

  // show more
  if (cards.length == 0) {
    document.getElementById('loadmore').style.display='none';
      }
  else {
    for (i = 0; i < 6; i++) {
        cards.item(0).classList.remove('card-invisible');
      }
  }
}
