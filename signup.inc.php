<?php
if(isset($_POST['Submit'])){
  include_once 'database/db_connect.php';

  $uname=mysqli_real_escape_string($con,$_POST['username']);
  $team=mysqli_real_escape_string($con,$_POST['teammates']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $insta=mysqli_real_escape_string($con,$_POST['insta']);
  $phone=mysqli_real_escape_string($con,$_POST['phone']);
  $payphone=mysqli_real_escape_string($con,$_POST['payphone']);
  $screenshot=$_FILES['pic']['name'];
  $dateReg=mysqli_real_escape_string($con,$_POST['dateReg']);
  $isSquad=mysqli_real_escape_string($con,$_POST['squad-checkbox']);
//  echo $uname." ".$team." ".$isSquad;
 //echo $dateReg."    ";
 $mm=substr($dateReg,5,2);
 $dd=substr($dateReg,8,2);
 $yy=substr($dateReg,2,2);
 $dateReg=$dd."-".$mm."-".$yy;
 //echo $dateReg;

 $target_dir = "uploads/".$dateReg."/";
 if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
 }

 $target_file = $target_dir.$screenshot;
 //echo $target_file;
 $check = getimagesize($_FILES["pic"]["tmp_name"]);
  if($check !== false) {
        $uploadOk = 1;
      }
  else {
        $uploadOk = 0;
      }
  if (file_exists($target_file)) {
          $uploadOk = 0;
      }
  /*if ($_FILES["pic"]["size"] > 500000) {
                    $uploadOk = 0;
      }
    */  if ($uploadOk == 1) {
          move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
      }



                  $sql1 = "INSERT INTO registrations (username, team, email, insta, phone, payphone, dateReg, isSquad, screenshot) VALUES ('$uname','$team','$email','$insta','$phone','$payphone','$dateReg','$isSquad','$target_file')";
                //  echo $sql1;
                  $res=mysqli_query($con,$sql1);



                  //make a csv file for the cuurent date. eg:19-08-2018_SQUAD.csv and read number of lines
                  $row=0;
                  $file="Reg_Data/".$dateReg."_".$isSquad.".csv";
                  if (($fp = fopen($file, "c+")) !== FALSE) {
                      while (($record = fgetcsv($fp)) !== FALSE) {
                                $row++;
                              }
                      }
                      //if rows greater then 0 then add the registration to bottom of csv file
                  if($row>0){
                    $list = array
                    (
                      $uname.",".$team.",".$email.",".$insta.",".$phone.",".$payphone.",".$isSquad.",".$target_file,
                    );
                  $handle = fopen($file, "a+");
                    foreach ($list as $line){
                          fputcsv($handle,explode(',',$line));
                      }
                    fclose($handle);
                  }
                  //if rows are zero, i.e csv file is empty add headers and append the registration data to next line
                  else if($row==0){
                    $list = array
                    (
                      "uname,team,email,insta,phone,payphone,isSquad,screenshot",
                      $uname.",".$team.",".$email.",".$insta.",".$phone.",".$payphone.",".$isSquad.",".$target_file,
                    );
                    $handle = fopen($file, "a+");
                    foreach ($list as $line){
                          fputcsv($handle,explode(',',$line));
                      }
                    fclose($handle);
                  }

                header("Location:signup.php?reg=1");
                  exit();

 }
 ?>
