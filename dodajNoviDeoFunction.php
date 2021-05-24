<?php

ini_set('post_max_size', '20M');
ini_set('upload_max_filesize', '20M');

  $nazivDela=$_POST['nazivDela'];
  $markaVozila=$_POST['markaVozila'];
  $detalji=$_POST['detalji'];
  $cena=$_POST['cena'];
  $kolicina=$_POST['kolicina'];


  $name = $_FILES['izaberiSliku']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["izaberiSliku"]["name"]);
 $extensions_arr = array("jpg","jpeg","png","gif");
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES['izaberiSliku']['tmp_name'],$target_dir.$name);

  $connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');
  $insert="INSERT INTO delovi VALUES (NULL,'$nazivDela','$markaVozila','$detalji','images/$name','$cena','$kolicina')";

  $query=mysqli_query($connect,$insert);


  if($query){
    // header('Location:prikaziDeo.php');
    header('Location:index.php');
  }

?>
