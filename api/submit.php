<?php
  include 'auth.php';
  include 'functions.php';
  $idea=$_POST['title'];
  $des=$_POST['des'];
  $cat=$_POST['category'] ?? [];
  $RU=$_POST['RU'];
  $cat[$RU]=$RU;
  $equip=$_POST['equip'];
  $policy=$_POST['policy_radio'];
  if ($policy=='radio_true'){
    $policy_org=$_POST['policy_title'];
    $policy_details=$_POST['policy'];
  } else {
    $policy_org=null;
    $policy_details=null;
  }
  $budget=$_POST['budget'];
  $procedure=$_POST['_procedure'] ?? 'asdfasdfsdfsdfsadf';
  $dstt=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['pin'];
  $temp=$_FILES['img']['tmp_name'];
  $loc_img="images/".uniqid().".jpg";
  $lo_img="../".$loc_img;
  if(isset($_POST['lat']) && isset($_POST['long'])) {
    $lat = $_POST['lat'];
    $long = $_POST['long'];
  } else {
    if (!($latlong = get_lat_long($temp))) {
      error_log('Geotag not found');
      http_response_code(400);
      echo json_encode(array('status'=>'fail', 'error'=>'geotag not found'));
      exit();
    }
    list($lat, $long) = $latlong;
  }

  if (!move_uploaded_file($temp,$lo_img)) {
    error_log('Cannot move uploaded file');
    echo json_encode(
      array(
        'status' => 'fail',
        'error' => 'cannot move uploaded file',
      )
    );
    exit();
  }
  include 'connection.php';
  $query="insert into a_submit values(null,'$_SESSION[userid]','$idea','$des','$loc_img','$lat','$long','0','$dstt','$state','$zip','$budget','$equip','$procedure',null,'0','$policy','$policy_org','$policy_details')";
  error_log($query);
  $resu=mysqli_query($connect,$query);
  if ($resu) {
    $ar=array('status' => 'SUCCESS');
    $post_id=mysqli_insert_id ($connect);/*to insert categories in cat_map*/
    error_log("here $post_id");
    foreach($cat as $cat_id){
      error_log("and here $cat_id");
      $query2="INSERT INTO category_map values(null,$post_id,$cat_id)";/*to insert categories in cat_map*/
      $result = mysqli_query($connect,$query2);
      if(!$result) {
           error_log('inserting into db failed');
      }
    }
    echo json_encode($ar);
  } else {
    error_log('query failed');
    $ar=array('status'=>'Error');
    echo json_encode($ar);
  }
?>
