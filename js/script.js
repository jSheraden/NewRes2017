(function() {
  var http = new XMLHttpRequest();

  http.open('GET', './lipsum.txt', false);
  http.send();

  document.getElementById('post-wrapper').innerHTML = http.responseText;
})();
