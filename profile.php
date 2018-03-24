<?php if(session_status() == PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?= ucfirst($_SESSION['user']); ?>
    </title>
</head>

<body>

    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.bundle.js" ></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="css/custom.css">
    <?php include('header.php'); ?>

   <div class="image row" >
    <img src="<?=$_SESSION['profilepic']?>" alt="<?=ucfirst($_SESSION['user'])?>" style="max-height:400px; max-width:4oopx; margin:auto;">
</div>
    <form id="form">
       
        <div class="form-row form row" style="max-width:700px; margin:auto;">
            <div class="form-group col-md-12">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Idea title" autofocus>
                <small class="text-muted">Your name</small>
            </div>
            <div class="form-group col-md-12">
                <label for="des">Occupation</label>
                <textarea class="form-control" name="occupation" id="occupation" placeholder="Your occupation if any"></textarea>
                <small class="text-muted">Occupational details</small>
            </div>
            <div class="form-group col-md-12">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" id="address" placeholder="Enter Description here"></textarea>
                <small class="text-muted">Your current address</small>
            </div>
            <div class="form-group col-md-12">
                <label for="procedure">Contacts</label>
                <input class="form-control" type="number" name="number" id="number" placeholder="Enter Your contact details">
                <small class="text-muted">Mobile or Telephone number</small>
            </div>
            
        <button type="submit" class="btn btn-primary" id="submit">Save Changes</button>
        <div class="text-success" id="submitstatus" style="display:none;"></div>
        </div>
          
        
    </form>
<script>
     $('.form-control').on('focus', function() {
            this.closest('.form-group').classList.add('active');
        });
        $('.form-control').on('blur', function() {
            this.closest('.form-group').classList.remove('active');
        });
    
</script>
    </body>
