(function($){
  $('#submit').on('click', function(e) {
    e.preventDefault();
    //$('#error-message').hide();
    $.ajax('api/login.php', {
      method: 'POST',
      data: {
        username: $('#username').val(),
        password: $('#password').val(),
      },
    }).done(function(response){
      document.location = 'index.php';
    }).fail(function(xhr) {
      $('#error-message').fadeIn();
    });
  });
})(jQuery);

