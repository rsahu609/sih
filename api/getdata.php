<?php
$farmid = $_REQUEST['farmid'];
$connect=mysqli_connect('127.0.0.1','root','password','boond');
$query = "SELECT `time`,`value` FROM `reading_db` WHERE `farmid`=$farmid";
  $result=mysqli_query($connect,$query);
  while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
  }
if($arr){
  {
    echo json_encode(array('time'=>$result));
  }
else
  {
      echo "Error";
  }
}   
    else
        echo "row = $row";
?>