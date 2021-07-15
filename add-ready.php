<?php

abstract class DB{    
  public function Conn(){
    return mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
  }
  public function mysql(){
    return new mysqli('localhost' , 'nurd' , '171119' , 'uniledge_uni');
  }
}

$a = new A();
$a->show();

class A extends DB{

  private $href1;
  private $uni_id1;
  private $videolink1;
  private $name1;
  private $location1;
  private $link1;
  private $email1;
  private $phone1;
  private $fblink1;
  private $instlink1;
  private $num_grants1;
  private $num_old_grants1;
  private $ent1;
  private $eng1;
  private $text_academ1;
  private $academ_link1;
  private $text_military1;
  private $military_link1;
  private $text_studlife1;
  private $studlife_link1;
  private $text_studhouse1;
  private $studhouse_link1;
  private $mapcode1;
  
  function __construct(){
    $this->href1 = isset($_POST['href'])?$_POST['href']:null;
    $this->uni_id1 = isset($_POST['uni_id'])?$_POST['uni_id']:null;
    $this->videolink1 = isset($_POST['videolink'])?$_POST['videolink']:null;
    $this->name1 = isset($_POST['name'])?$_POST['name']:null;
    $this->location1 = isset($_POST['location'])?$_POST['location']:null;
    $this->link1 = isset($_POST['link'])?$_POST['link']:null;
    $this->email1 = isset($_POST['email'])?$_POST['email']:null;
    $this->phone1 = isset($_POST['phone'])?$_POST['phone']:null;
    $this->fblink1 = isset($_POST['fblink'])?$_POST['fblink']:null;
    $this->instlink1 = isset($_POST['instlink'])?$_POST['instlink']:null;
    $this->num_grants1 = isset($_POST['num_grants'])?$_POST['num_grants']:null;
    $this->num_old_grants1 = isset($_POST['num_old_grants'])?$_POST['num_old_grants']:null;
    $this->ent1 = isset($_POST['ent'])?$_POST['ent']:null;
    $this->eng1 = isset($_POST['eng'])?$_POST['eng']:null;
    $this->text_academ1 = isset($_POST['text_academ'])?$_POST['text_academ']:null;
    $this->academ_link1 = isset($_POST['academ_link'])?$_POST['academ_link']:null;
    $this->text_military1 = isset($_POST['text_military'])?$_POST['text_military']:null;
    $this->military_link1 = isset($_POST['military_link'])?$_POST['military_link']:null;
    $this->text_studlife1 = isset($_POST['text_studlife'])?$_POST['text_studlife']:null;
    $this->studlife_link1 = isset($_POST['studlife_link'])?$_POST['studlife_link']:null;
    $this->text_studhouse1 = isset($_POST['text_studhouse'])?$_POST['text_studhouse']:null;
    $this->studhouse_link1 = isset($_POST['studhouse_link'])?$_POST['studhouse_link']:null;
    $this->mapcode1 = isset($_POST['mapcode'])?$_POST['mapcode']:null;
  }
  
  
  function show() {
    $href = $this->href1.".php";
    $uni_id = $this->uni_id1;
    $img = isset($_FILES['img']) ? $_FILES['img']['name'] : null;
    $videolink = $this->videolink1;
    $logo = isset($_FILES['logo']) ? $_FILES['logo']['name'] : null;
    $name = $this->name1;
    $location = $this->location1;
    $link = $this->link1;
    $email = $this->email1;
    $phone = $this->phone1;
    $fblink = $this->fblink1;
    $instlink = $this->instlink1;
    $num_grants = $this->num_grants1;
    $num_old_grants = $this->num_old_grants1;
    $ent = $this->ent1;
    $eng = $this->eng1;
    $text_academ = $this->text_academ1;
    $academ_link = $this->academ_link1;
    $text_military = $this->text_military1;
    $military_link = $this->military_link1;
    $military_photo_link = isset($_FILES['military_photo_link']) ? $_FILES['military_photo_link']['name'] : null;
    $text_studlife = $this->text_studlife1;
    $studlife_link = $this->studlife_link1;
    $studlife_photo_link = isset($_FILES['studlife_photo_link']) ? $_FILES['studlife_photo_link']['name'] : null;
    $text_studhouse = $this->text_studhouse1;
    $studhouse_link = $this->studhouse_link1;
    $studhouse_photo_link = isset($_FILES['studhouse_photo_link']) ? $_FILES['studhouse_photo_link']['name'] : null;
    $mapcode = $this->mapcode1;
    $datecnt = isset($_POST['uni_date']) ? count($_POST['uni_date']) : null;
    $opcnt = isset($_POST['op_name']) ? count($_POST['op_name']) : null;

    echo $href, "<br>", $uni_id, "<br>", $img, "<br>", $videolink, "<br>", $logo, "<br>", $name, "<br>", $location, "<br>", 
    $link, "<br>", $email, "<br>", $phone, "<br>", $fblink, "<br>", $instlink, "<br>", $num_grants, "<br>", 
    $num_old_grants, "<br>", $ent, "<br>", $eng, "<br>", $text_academ, "<br>", $academ_link, "<br>", $text_military, "<br>", 
    $military_link, "<br>", $military_photo_link, "<br>", $text_studlife, "<br>", $studlife_link, "<br>", $studlife_photo_link, "<br>", $text_studhouse, "<br>",
    $studhouse_link, "<br>", $studhouse_photo_link, "<br>", $mapcode, "<br>", $datecnt, "<br>", $opcnt, "<br>";

    $mysql = $this->Conn();

    if(mysqli_connect_error()){
      print mysqli_connect_error();
      exit;
    }

    mysqli_set_charset($mysql, "utf8");

    $sql = "INSERT INTO universities (href, uni_id, img, alt, logo, name, location, link, email, phone, fblink, instlink, num_grants, num_old_grants, ent, eng, text_academ, academ_link, videolink, text_military, military_link, military_photo_link, text_studlife, studlife_link, studlife_photo_link, text_studhouse, studhouse_link, studhouse_photo_link, mapcode)
            VALUES 
            ('".$href."', $uni_id, '".$img."', '".$name."', '".$logo."', '".$name."', '".$location."', '".$link."', '".$email."', '".$phone."', $fblink, $instlink, $num_grants, $num_old_grants, $ent, $eng, $text_academ, $academ_link, $videolink, $text_military, $military_link, $military_photo_link, $text_studlife, $studlife_link, $studlife_photo_link, $text_studhouse, $studhouse_link, $studhouse_photo_link, '".$mapcode."')";    


    // $sql = "INSERT INTO universities (href, uni_id, img, alt, logo, name, location, link, email, phone, fblink, instlink, num_grants, num_old_grants, ent, eng, text_academ, academ_link, videolink, text_military, military_link, military_photo_link, text_studlife, studlife_link, studlife_photo_link, text_studhouse, studhouse_link, studhouse_photo_link, mapcode)
    // VALUES 
    // ('".$href."', $uni_id, '".$img."', '".$name."', '".$logo."', '".$name."', '".$location."', '".$link."', '".$email."', '".$phone."', '".$fblink."', '".$instlink."', $num_grants, $num_old_grants, '".$ent."', '".$eng."', '".$text_academ."', '".$academ_link."', '".$videolink."', '".$text_military."', '".$military_link."', '".$military_photo_link."', '".$text_studlife."', '".$studlife_link."', '".$studlife_photo_link."', '".$text_studhouse."', '".$studhouse_link."', '".$studhouse_photo_link."', '".$mapcode."')";    


    $result = mysqli_query($mysql,$sql);

    if($datecnt != null) {
      for($i = 0; $i < $datecnt; $i++) {
        $uni_date[$i] = $_POST['uni_date'][$i];
        $uni_date_info[$i] = $_POST['uni_date_info'][$i];

        $sqldate = "INSERT INTO uni_dates (uni_id, uni_date, uni_date_info)
          VALUES ($uni_id, '".$uni_date[$i]."', '".$uni_date_info[$i]."')";

        $resultdate = mysqli_query($mysql,$sqldate);
      }
    }

    if($opcnt != null) {
      for($i = 0; $i < $opcnt; $i++) {
        $op_name[$i] = $_POST['op_name'][$i];
        $op_text[$i] = $_POST['op_text'][$i];
        $op_link[$i] = $_POST['op_link'][$i];
        $op_duration[$i] = $_POST['op_duration'][$i];
        $gop_id[$i] = $_POST['gop_id'][$i];
  
        $sqlop = "INSERT INTO op (op_name, op_text, op_link, op_duration, gop_id, uni_id)
          VALUES ('".$op_name[$i]."', '".$op_text[$i]."', '".$op_link[$i]."', $op_duration[$i], '".$gop_id[$i]."', $uni_id)";
  
        $resultop = mysqli_query($mysql,$sqlop);
      }
    }

    $filelogoname = $_FILES['logo']['name'];
    $filelogotmp = $_FILES['logo']['tmp_name'];

    $filemainname = $_FILES['img']['name'];
    $filemaintmp = $_FILES['img']['tmp_name'];

    $filemilitaryname = $_FILES['military_photo_link']['name'];
    $filemilitarytmp = $_FILES['military_photo_link']['tmp_name'];

    $filestudlifename = $_FILES['studlife_photo_link']['name'];
    $filestudlifetmp = $_FILES['studlife_photo_link']['tmp_name'];

    $filestudhousename = $_FILES['studhouse_photo_link']['name'];
    $filestudhousetmp = $_FILES['studhouse_photo_link']['tmp_name'];

    move_uploaded_file($filelogotmp, "img/".$filelogoname);
    move_uploaded_file($filemaintmp, "img/".$filemainname);
    move_uploaded_file($filemilitarytmp, "img/".$filemilitaryname);
    move_uploaded_file($filestudlifetmp, "img/".$filestudlifename);
    move_uploaded_file($filestudhousetmp, "img/".$filestudhousename);

    $filesgal = array_filter($_FILES['gallery_photo']['name']); //Use something similar before processing files.
    // Count the number of uploaded files in array
    $total_countgal = count($_FILES['gallery_photo']['name']);
    // Loop through every file
    for( $i=0 ; $i < $total_countgal ; $i++ ) {
      //The temp file path is obtained
      $tmpFilePathgal = $_FILES['gallery_photo']['tmp_name'][$i];
      //A file path needs to be present
      if ($tmpFilePathgal != ""){
          $tmpg = $_FILES['gallery_photo']['name'][$i];
          $sqlll = "INSERT INTO uni_photos (uni_id, photo_link, slider, gallery) 
          VALUES
          ('".$uni_id."', '".$tmpg."', 0, 1)";
          $resulttt = mysqli_query($mysql,$sqlll);
          //Setup our new file path
          $newFilePathgal = "img/" . $_FILES['gallery_photo']['name'][$i];
          //File is uploaded to temp dir
          move_uploaded_file($tmpFilePathgal, $newFilePathgal);
        }
    }


    $filesslider = array_filter($_FILES['slider_photo']['name']); //Use something similar before processing files.
    // Count the number of uploaded files in array
    $total_countslider = count($_FILES['slider_photo']['name']);
    // Loop through every file
    for( $i=0 ; $i < $total_countslider ; $i++ ) {
      //The temp file path is obtained
      $tmpFilePathslider = $_FILES['slider_photo']['tmp_name'][$i];
      //A file path needs to be present
      if ($tmpFilePathslider != ""){
          $tmps = $_FILES['slider_photo']['name'][$i];
          $sqll = "INSERT INTO uni_photos (uni_id, photo_link, slider, gallery) 
          VALUES
          ('".$uni_id."', '".$tmps."', 1, 0)";
          $resultt = mysqli_query($mysql,$sqll);
          //Setup our new file path
          $newFilePathslider = "img/" . $_FILES['slider_photo']['name'][$i];
          //File is uploaded to temp dir
          move_uploaded_file($tmpFilePathslider, $newFilePathslider);
        }
    }

    mysqli_close($mysql);
    // header('Location: /');
  }
}