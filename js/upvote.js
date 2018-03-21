function upvote(pid) {
  $.ajax({
    url:'api/upvote.php' ,
    method: 'post' ,
    data : {
      postid : pid
    } ,
    dataType : 'json'
  }).done(function(response){
    var a=JSON.parse(response);
    if (a.STATUS=='SUCCESS') {
      return a.UPVOTES;
    } else {
      return a.STATUS;
    }
  });
}
