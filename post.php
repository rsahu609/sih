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
    <link href="img/leaves-with-water-droplets_1504589.jpg" rel="icon" type="image/png" />
    <script src="js/handlebars.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <meta charset="UTF-8">
    <title>
        <?= $result['idea']?>
    </title>
    <style>
        h3 {
            padding: 10px;
            border-radius: 5px;
            color: azure;
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
                <h3 class="bg-success">
                    Activity Name - <?=$result['idea']?>
                </h3>
                <p>
                    <?=$result['description']?>
                </p>
            </div>
        </div>
        <div class="flex-row">
            <?php if (!($result['policy_organization'] == "")) {?>
            <div class="col-md-12">
                <h3 class="bg-success">
                    <?=$result['policy_organization']?>
                </h3>
                <p>
                    <?=$result['policy_details']?>
                </p>
            </div>
        </div>
        <?php }?>

        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="bg-success">
                        Procedure for implementation
                    </h3>
                    <p>
                        <?=$result['_procedure']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="bg-success">Equipments required</h3>
                    <p>
                        <?=$result['equipments']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="bg-success">Cost of whole implementation</h3>
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
                       $('#msg').html('Upvoted :)');            
                   }
                   else if(response.STATUS == 'DOWNVOTED'){
                       $('#msg').html('Removed upvote :(');
                   }
                   else
                   {
                       $('#msg').html('Some Error occurred while upvoting');
                   }
                       $('#msg').fadeIn("slow");
                                        
               });
            });
        </script>