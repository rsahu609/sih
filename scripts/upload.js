$('#submit').on('click', function(e) {
  e.preventDefault();
  $.ajax({
    url: 'api/upload.php',
    method: 'post',
    contentType: false,
    processData: false,
    cache: false,
    data: new FormData(document.getElementById('submit-activity'))
  }).done(function(response) {
    console.log(response);
  }).fail( function(xhr, status, message) {
    console.log(xhr, status, message);
  });
});
