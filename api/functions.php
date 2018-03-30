<?php
function get_lat_long($image) {
    $exif = exif_read_data($image);
    if(!isset($exif["GPSLatitudeRef"])){
        return false;
    } 

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
    return [$lat, $long];
}