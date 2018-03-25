<?php
  include 'auth.php';
  $idea=$_POST['title'];
  $des=$_POST['des'];
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
    $exif = exif_read_data($temp);
    if(isset($exif["GPSLatitudeRef"])){
      if (!move_uploaded_file($temp,$lo_img)) {
      $ar=array('status'=>'Error');
      echo json_encode($ar);
      exit();
    } else{
        $LatM = 1; $LongM = 1;
        if($exif["GPSLatitudeRef"] == 'S'){
            $LatM = -1;
        }

        if($exif["GPSLongitudeRef"] == 'W'){
            $LongM = -1;
        }
        //get the GPS data
        $gps['LatDegree']=$exif["GPSLatitude"][0];
        $gps['LatMinute']=$exif["GPSLatitude"][1];
        $gps['LatgSeconds']=$exif["GPSLatitude"][2];
        $gps['LongDegree']=$exif["GPSLongitude"][0];
        $gps['LongMinute']=$exif["GPSLongitude"][1];
        $gps['LongSeconds']=$exif["GPSLongitude"][2];

        //convert strings to numbers
        foreach($gps as $key => $value){
            $pos = strpos($value, '/');
            if($pos !== false){
                $temp = explode('/',$value);
                $gps[$key] = $temp[0] / $temp[1];
            }
        }

    //calculate the decimal degree
    $result['latitude']  = $LatM * ($gps['LatDegree'] + ($gps['LatMinute'] / 60) + ($gps['LatgSeconds'] / 3600));
    $result['longitude'] = $LongM * ($gps['LongDegree'] + ($gps['LongMinute'] / 60) + ($gps['LongSeconds'] / 3600));
    $result['datetime']  = $exif["DateTime"];
    $lat=$result["latitude"];
    $long=$result["longitude"];
       //$result[datetime]
}
} else {
  if (isset($_REQUEST['lat'])) {
    $lat=$_REQUEST['lat'];
    $long=$_REQUEST['long'];
  }else{
    $t = array('STATUS' => 'GEO ACCESS FAILED');
    echo json_encode($t);
    exit();
  }
       error_log("$temp $lo_img");
  if (!move_uploaded_file($temp,$lo_img)) {
  $ar=array('status'=>'Error');
  echo json_encode($ar);
  exit();
}
}
  include 'connection.php';
  $query="insert into a_submit values(null,'$_SESSION[userid]','$idea','$des','$loc_img','$lat','$long','0','$dstt','$state','$zip','$budget','$equip','$procedure',null,0,'$policy','$policy_org','$policy_details')";
  error_log($query);
  $resu=mysqli_query($connect,$query);
  if ($resu) {
    $ar=array('status' => 'SUCCESS');
    echo json_encode($ar);
  }
  else {
    error_log('query failed');
    $ar=array('status'=>'Error');
    echo json_encode($ar);
  }


?>
