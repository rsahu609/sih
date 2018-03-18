<?php
  include 'auth.php';
  $idea=$_POST['title'];
  $des=$_POST['des'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['pin'];
  $temp=$_FILES['img']['tmp_name'];
  $loc_img=uniqid().".jpg";
  if (!move_uploaded_file($temp,$loc_img)) {
    $ar=array('status'=>'Errorimg');
    echo json_encode($ar);
    exit();
  } else{
    $lo="$loc_img";
    $exif = exif_read_data($lo);
    if(isset($exif["GPSLatitudeRef"])){
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
    $password = $_SERVER['HTTP_HOST'] == '18.188.54.21' ? 'password' : '';
  $connect=mysqli_connect('127.0.0.1','root',$password,'sih');
  $query="insert into a_submit values('','Rajan','$idea','this ain't possible','$loc_img','$lat','$long','0','$city','$state','$zip')";
  $resu=mysqli_query($connect,$query);
  if ($resu) {
    $ar=array('status' => 'SUCCESS');
    echo json_encode($ar);
  } else {
    $ar=array('status'=>'Error');
    echo json_encode($ar);
  }
  }
?>
