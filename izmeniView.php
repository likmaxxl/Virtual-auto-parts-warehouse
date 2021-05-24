
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  <title>Izmeni</title>
</head>
<body>
  <div id="dodajNoviDeoVideo">
    <div class="videoBackground">
      <video autoplay muted loop id="myVideo">
    <source src="video/izmeniCover.mp4" type="video/mp4">
  </video>
    </div>
  </div>

  <div class="containerFormDodajNoviDeo">
    <form id="contact" action="potvrdiIzmenu.php" method="post" enctype="multipart/form-data">
      <a href="index.php" class="backToIndexBtn">Vrati se na početak</a>

      <h3>Izmeni Podatke</h3>
      <h4>Sva polja osim cene moraju biti popunjena (malim slovima)</h4>
      <input type="hidden" name="id"  autocomplete="off" value="<?php echo $result['id'];?>" >
      <fieldset>
        <input placeholder="Naziv Dela"  autocomplete="off" value="<?php echo $result['naziv dela']?>" type="text" tabindex="1" name="nazivDela" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Marka Vozila" autocomplete="off"  type="text" value="<?php echo $result['marka']?>" tabindex="2" name="markaVozila" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Detalji" tabindex="3"  name="detalji" required>
<?php echo $result['detalji']?>

        </textarea>
      </fieldset>
      <fieldset>
        <label for="myfile">Izaberi sliku:</label>
        <input type="file" id="myfile" name="izaberiSliku"> <br><br>
      </fieldset>
      <fieldset>
        <span>Kolicina </span><input type="number" name="kolicina" autocomplete="off" value="<?php echo $result['kolicina']?>" required>
      </fieldset>
      <fieldset>
        <input placeholder="Cena" type="number" name="cena" value="<?php echo $result['cena']?>" tabindex="4">
      </fieldset>

      <fieldset>
        <button name="submitPotvrdiIzmenu" type="submit" id="contact-submit">Potvrdi Izmenu</button>
      </fieldset>
    </form>
  </div>
</body>
</html>
