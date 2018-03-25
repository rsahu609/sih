<?php if((session_status() == PHP_SESSION_NONE)) session_start();
if( isset($_REQUEST['post_id'])){
  include 'api/connection.php';
  $query = "SELECT `user_id`, `idea`, `description`, `image`, `city`,`policy_organization`, `state`, `_procedure`, `policy_details`, `project_budget`, `latitude`,`equipments`, `longitude`, `status` FROM `a_submit` WHERE post_id=$_REQUEST[post_id]";
  $row=mysqli_query($connect,$query);
  $result = mysqli_fetch_assoc($row);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="js/handlebars.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <meta charset="UTF-8">
    <title>
        <?= $result['idea']?>
    </title>
    <style>
        h2 {
            padding: 10px;
            border-radius: 5px;
        }
        .content p {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php include('header.php') ;?>
    <div class="container content">
  
        <div class="flex-row">
            <div class="col-md-12">
       
                <p class="d-flex flex-justified">
                  <image src="api/<?=$result['image']?>" style="margin:auto;">
                  </image>
                </p>
            </div>
        </div>
        <div class="flex-row">
            <div class="col-md-12">
                <h2 class="bg-primary">
                    Activity Name - <?=$result['idea']?>
                </h2>
                <p>
                    <?=$result['description']?>
                </p>
            </div>
        </div>
        <div class="flex-row">
            <?php if (!($result['policy_organization'] == "")) {?>
            <div class="col-md-12">
                <h2 class="bg-primary">
                    <?=$result['policy_organization']?>
                </h2>
                <p>
                    <?=$result['policy_details']?>
                </p>
            </div>
        </div>
        <?php }?>

        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="bg-primary">
                        Procedure for implementation
                    </h2>
                    <p>
                        <?=$result['_procedure']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="bg-primary">Equipments required</h2>
                    <p>
                        <?=$result['equipments']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="bg-primary">Cost of whole implementation</h2>
                    <p>
                        <?=$result['project_budget']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <hr>
            <div class="container">
                <input type="button" class="btn btn-success" value="Upvote" id="upvote"> 
                <span id="msg" class="text-success" style="display:hidden"></span>
            </div>
        </div>
        <script>
            $('#upvote').click(function(){
               $.ajax({
                   url: 'api/upvote.php',
                   method: 'POST',
                   data:{
                       postid: <?= $_REQUEST['post_id']?>,
                   
                   },
                   dataType: 'json'
               })
                .done(function(response){
                   
                   //var res = JSON.parse(response);
                   if(response.STATUS == 'SUCCESS')
                   {
                       $('#msg').html('Upvoted');            
                   }
                   else if(response.STATUS == 'DOWNVOTED'){
                       $('#msg').html('Downvoted :(');
                   }
                   else
                   {
                       $('#msg').html('Some Error occurred while upvoting');
                   }
                       $('#msg').fadeIn("slow");
                       $('#msg').fadeOut("slow");
               });
            });
        </script>