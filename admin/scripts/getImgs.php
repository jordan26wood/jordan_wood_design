<?php
include("connect.php");

if(issets($_GET[]'id'])){
  $id = $_GET['id'];
  $workQuery = "SELECT * FROM tbl_images where images_id={$id}";
  $getImages = mysqli_query($link, $workQuery);
}else{
  $workQuery = "SELECT images_id, images_link, images_title, images_sub, images_desc FROM tbl_images WHERE images_primary='yes'";
  $getImages = mysqli_query($link, $workQuery);
}

$grpResult = "";

echo "[";
while($imgResult = mysqli_fetch_assoc($getImages)){
  $jsonResult = json_encode($imgResult);
  $grpResult .= $jsonResult. ",";
}


echo substr($grpResult, 0, -1);

echo "]";

mysqli_close($link);

}
?>
