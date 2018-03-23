<?php if(session_status() == PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $_SESSION['user'] ?></title>
</head>
<body>
    
<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.bundle.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title"><?= ucfirst($_SESSION['user']); ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Stars</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Favorites</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3>This is tab 1</h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>
            
    <section class="cid-qv5Axatcp1" id="social-buttons2-34" data-rv-view="9570">

    <div class="container footer">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    FOLLOW US!
                </h2>
                <div class="social-list pl-0 mb-0">
                    <a href="https://twitter.com/aprakshan" target="_blank">
                        <span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://www.facebook.com/pages/aprakshan" target="_blank">
                        <span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://instagram.com/aprakshan" target="_blank">
                        <span class="px-2 socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://www.youtube.com/c/aprakshan" target="_blank">
                        <span class="px-2 socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://plus.google.com/u/0/+aprakshan" target="_blank">
                        <span class="px-2 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://www.behance.net/aprakshan" target="_blank">
                        <span class="px-2 socicon-behance socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>