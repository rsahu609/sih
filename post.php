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
        <div class="col-md-6">
            <image src="api/<?=$result[' image ']?>" );margin:auto;>
            </image>
        </div>
        <div class="col-md-6">
            <h2>
                <?=$result['idea']?>
            </h2>
            <p>
                <?=$result['description']?>
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>
                    <?=$result['policy_organization']?>
                </h2>
                <p>
                    <?=$result['policy_details']?>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Procedure</h2>
                <p>
                    <?=$result['_procedure']?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>equipments</h2>
                <p>
                    <?=$result['equipments']?>
                </p>
            </div>
            <div class="col-md-6">
                <h2>budget</h2>
                <p>
                    <?=$result['budget']?>
                </p>
            </div>
        </div>
        <div class="row">

        </div>
        <hr>
        <div class="button-container">
            <input type="button" class="btn btn-success" value="Upvote" id="upvote">
        </div>

    </div>