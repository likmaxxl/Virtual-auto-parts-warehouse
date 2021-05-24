<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');
  $selectElement="SELECT * FROM delovi WHERE id='$id'";
  $query=mysqli_query($connect,$selectElement);
  $result=mysqli_fetch_assoc($query);
  require 'izmeniView.php';
}


?>
