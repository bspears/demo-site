
  var nav = $('#navBar');
  var menuButton = $('#menuButton');

  nav.addClass('hidden')
  menuButton.on('click', function() {
    nav.slideToggle('fast');
  });


