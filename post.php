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
    <meta charset="UTF-8">
    <title>
        <?= $result['idea']?>
    </title>
</head>

<body>
    <?php include('header.php') ;?>
    <div class="container">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="row">
            <div class="col-md-12">
                <image src="api/<?=$result[' image ']?>" style="height:300px;width:500px;margin:auto;">
                </image>
            </div>
        </div>
        <div class="flex-row">
            <div class="col-md-12">
                <h2>
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
                <h2>
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
                    <h2>
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
                    <h2>Equipments required</h2>
                    <p>
                        <?=$result['equipments']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <div class="container">
                <div class="col-md-12">
                    <h2>Cost of whole implementation</h2>
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
            </div>
        </div>