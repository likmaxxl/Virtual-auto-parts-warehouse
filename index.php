<?php
$connect=mysqli_connect('localhost','root','','virtuelni_magacin') or die('Connection Lost!');
$select="SELECT * FROM delovi";
$query=mysqli_query($connect,$select);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
$select="SELECT * FROM delovi";
$query=mysqli_query($connect,$select);

$result=mysqli_fetch_all($query,MYSQLI_ASSOC);


/***KADA KLIKNEMO NA DUGME *POTVRDI* PRILIKOM PRETRAGE DELOVA***/
if(isset($_POST['pretragaBtn'])){

      $inputField=$_POST['pretragaInput'];

      // $select="SELECT * FROM delovi WHERE marka='$inputField' OR `naziv dela`='$inputField'";
      $select="SELECT * FROM delovi WHERE  marka REGEXP'$inputField' OR `naziv dela` REGEXP'$inputField' OR detalji REGEXP '$inputField'";

        $query=mysqli_query($connect,$select);
      $result=mysqli_fetch_all($query,MYSQLI_ASSOC);

      if(empty($result)){
        $errorNoPart="Trenutno nema ovaj deo u tvom magacinu.";
      }else{
        $errorNoPart="";
      }

}

/***DUGME *PRIKAZI SVE DELOVE*****/
if(isset($_GET['prikaziSveDelove'])){
  $select="SELECT * FROM delovi";
  $query=mysqli_query($connect,$select);
  $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
  $select="SELECT * FROM delovi";
  $query=mysqli_query($connect,$select);
  $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Virtuelni Magacin</title>
</head>
<body>
<div id="wrap">
  <div class="blockClick">

  </div>
<form action="obrisi.php" name="id" method="get" id="form-delete-user">
  <div class="notification" id="note">
    <div class="cont">
      <div class="alertImg">
        <img src="images/alert.png" alt="">
      </div>
      <h4> Da li si siguran da zeliš da obrišeš? </h4>
      <div class="buttonsConfirmation">
        <input type="text" name="id">
      <button id="AddTask" class="yesConfirm">DA</button>
       <button id="cancel" class="noConfirm">NE</button>
      </div>
    </div>
  </div>
</form>
<header>
  <div class="container">
  <h1>Virtuelni Magacin</h1>
  <div class="mainFunctions">
    <div class="btnAdd">
    <a href="dodajNoviDeoView.php">
      <button class='addNewPart'><span><img src="images/gear.svg" alt="gear"></span>Dodaj novi <b>deo</b><span><img src="images/gear.svg" alt="gear"></span></button>
</a>
</div>
    <form class="" action="index.php" method="post">
      <div class="search-box">
  <input type="text" name="pretragaInput" placeholder="Pretraga...." autocomplete="off">
  <button type="submit" name="pretragaBtn">Potvrdi</button>
</div>
    </form>
  </div>
  </div>
</header>
<section id="table">
  <div class="container">

  <div class="tableIndex">
    <div class="prikaziSve">
  <a class="prikaziSveBtn" href="index.php?id=prikaziSveDelove" type="submit">Prikazi sve delove</a>
</div>
    <table class="fold-table">
      <thead>

        <tr>
          <th>Naziv Dela</th>
          <th>Marka</th>
          <th>Detalji</th>
          <th>Slika</th>
          <th>Cena</th>
            <th>Kolicina</th>
          <th colspan="2">Izmene</th>
        </tr>
      </thead>
      <tbody>

<?php global $errorNoPart; if($errorNoPart): ?>
  <tr>
    <td colspan="7">
    <div class="greskaRelative">
    <div class="abs">Nisi upisao pravilan naziv dela ili deo nema u magacinu<br><br>Pokušaj ponovo!</div>
    <div class="text1"><p>GREŠKA</p></div>
    <div class="container1">
      <!-- caveman left -->
      <div class="caveman">
        <div class="leg">
          <div class="foot"><div class="fingers"></div></div>
        </div>
        <div class="leg">
          <div class="foot"><div class="fingers"></div></div>
        </div>
        <div class="shape">
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
        <div class="head">
          <div class="eye"><div class="nose"></div></div>
          <div class="mouth"></div>
        </div>
        <div class="arm-right"><div class="club"></div></div>
      </div>
      <!-- caveman right -->
      <div class="caveman">
        <div class="leg">
          <div class="foot"><div class="fingers"></div></div>
        </div>
        <div class="leg">
          <div class="foot"><div class="fingers"></div></div>
        </div>
        <div class="shape">
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
        <div class="head">
          <div class="eye"><div class="nose"></div></div>
          <div class="mouth"></div>
        </div>
        <div class="arm-right"><div class="club"></div></div>
      </div>
    </div>
<div/>
</td>
</tr>


<?php endif?>

  <?php foreach ($result as $value):?>
      <tr class="view">
<td><?php echo $value["naziv dela"]; ?></td>
  <td class="pcs"><?php echo $value['marka']; ?></td>
  <td class="cur">
    <div class="accordion">
<div class="accordion__item">
<h2 class="accordion__title">Klikni za vise detalja. . .</h2>
<div class="accordion__body">
<p><?php echo $value['detalji']; ?></p>
</div>
</div>
</div>
  </td>
  <td><a href="<?php echo $value['slika'] ?>" data-lightbox="image-1" data-title="<?php echo $value["naziv dela"]; ?>"><img src="<?php echo $value['slika'] ?>" alt=""></a></td>
  <td><?php echo $value['cena']; ?> <small>din</small></td>
  <td style="text-align:center;"><?php echo $value['kolicina']; ?></td>
  <td><a href="izmeniFunction.php?id=<?php echo $value['id'];?>" class="editBtn">Izmeni</a></td>
<!-- <td class="cur"><a type="button" onclick="return confirmationDelete(this)"  href="obrisi.php?id=<?php echo $value['id'];?>" class="deleteBtn">Obrisi</a></td> -->
<td class="cur"><a type="button"  href="obrisi.php?id=<?php echo $value['id'];?>" onclick="return confirm('Da li si siguran da želiš da obrišeš deo?')" class="deleteBtn">Obrisi</a></td>

    </tr>
  <?php endforeach?>
<!-- <script>

const obrisiBtn=document.querySelectorAll('.deleteBtn');
const potvrdiBrisanjeBtn=document.querySelectorAll('.yesConfirm')[0];
const ponistiBrisanjeBtn=document.querySelectorAll('.noConfirm')[0];
const boxPopUp=document.querySelectorAll('.cont')[0];
const blockClick=document.querySelectorAll('.blockClick')[0];

ponistiBrisanjeBtn.addEventListener('click',ponisti)
potvrdiBrisanjeBtn.addEventListener('click',potvrda)
function confirmationDelete(e){
id=e.getAttribute("data-id");
document.getElementById('form-delete-user').id.value=id
boxPopUp.style.display="flex";
blockClick.style.display="block";
// return false;

function potvrda() {
  return true;
}


function ponisti() {
  boxPopUp.style.display="none";
  blockClick.style.display="none";
  return false;
}
}





</script> -->










  </tbody>
    </table>
  </div>
  </div>
</section>
</div>
<script src="js/jquery.js"></script>
<script src="js/lightbox.js"></script>

<script src="js/main.js"></script>
</body>
</html>
