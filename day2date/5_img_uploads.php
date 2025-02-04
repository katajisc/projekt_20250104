<?php
$target_dir = "img_uploads/";
$target_file = $target_dir . basename($_FILES["imgToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imgToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($_FILES["imgToUpload"]["size"] > 500000) {
  echo "Bilden får vara max 500 kB.";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Bilden bör vara i formatet: JPG, JPEG eller PNG.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Ojdå! Något gick fel.";
} 
else {
  if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["imgToUpload"]["name"])). " has been uploaded.";
  } 
  else {
    echo "Ojdå! Det lyckades inte att ladda upp filen.";
  }
}
?>