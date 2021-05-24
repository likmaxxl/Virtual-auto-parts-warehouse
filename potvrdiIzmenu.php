<?php


  $nazivDela=$_POST['nazivDela'];
  $markaVozila=$_POST['markaVozila'];
  $detalji=$_POST['detalji'];
  $cena=$_POST['cena'];
  $kolicina=$_POST['kolicina'];
  $id=$_POST['id'];



  $name = $_FILES['izaberiSliku']['name'];

  $connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');

/**DELETE OLD IMG FROM FOLDER***/
if($name !=''){

  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["izaberiSliku"]["name"]);
 $extensions_arr = array("jpg","jpeg","png","gif");
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES['izaberiSliku']['tmp_name'],$target_dir.$name);

$selectElement="SELECT * FROM delovi WHERE id='$id'";
$ResultSelectStmt = mysqli_query($connect,$selectElement);
 $fetchRecords = mysqli_fetch_assoc($ResultSelectStmt);
 $update="UPDATE delovi SET `naziv dela`='$nazivDela',marka='$markaVozila',detalji='$detalji',slika='images/$name',cena='$cena',kolicina='$kolicina' WHERE id='$id'";
  $query=mysqli_query($connect,$update);
  if($query){
    header('Location:index.php');
  }


$fetchImgTitleName = $fetchRecords['slika'];
   $createDeletePath = $fetchImgTitleName;
unlink($createDeletePath);

}else{
  $update="UPDATE delovi SET `naziv dela`='$nazivDela',marka='$markaVozila',detalji='$detalji',cena='$cena',kolicina='$kolicina' WHERE id='$id'";

  $query=mysqli_query($connect,$update);
  if($query){
    header('Location:index.php');
  }else{
    echo"error";
  }
}

/*******END DELETE IMG FROM FOLDER**********************/



?>
