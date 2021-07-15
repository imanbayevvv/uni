<?php

$files = array_filter($_FILES['files']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['files']['name']);
// Loop through every file
for( $i = 0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
  //  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
   //A file path needs to be present
  //  if ($tmpFilePath != ""){
  //     //Setup our new file path
  //     $newFilePath = "./uploadFiles/" . $_FILES['files']['name'][$i];
  //     //File is uploaded to temp dir
  //     if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  //        //Other code goes here
  //     }
  //  }
  echo $_FILES['files']['name'][$i], "<br>";
}

