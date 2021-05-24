<?php

// if(isset($_GET['id'])){
//   $elId=$_GET['id'];
//   $connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');
//
// $delete="DELETE FROM delovi WHERE id=$elId";
// $query=mysqli_query($connect,$delete);
// $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
//
//
// if($query){
//   header('Location:index.php');
// }
//
// }

if(isset($_GET['id'])){
  $elId=$_GET['id'];

  $connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');



  $selectElement="SELECT * FROM delovi WHERE id='$elId'";
  $ResultSelectStmt = mysqli_query($connect,$selectElement);
   $fetchRecords = mysqli_fetch_assoc($ResultSelectStmt);
var_dump($fetchRecords);
  $fetchImgTitleName = $fetchRecords['slika'];
     $createDeletePath = $fetchImgTitleName;
unlink($createDeletePath);

$delete="DELETE FROM delovi WHERE id=$elId";
$query=mysqli_query($connect,$delete);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);


if($query){
  header('Location:index.php');
}

}
?>
