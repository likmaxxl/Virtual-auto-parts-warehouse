<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  <title>Dodaj Novi Deo</title>
</head>
<body>
<div id="dodajNoviDeoVideo">
  <div class="videoBackground">
    <video autoplay muted loop id="myVideo">
  <source src="video/dodajDeoVideocover.mp4" type="video/mp4">
</video>
  </div>
</div>
  <div class="containerFormDodajNoviDeo">
    <form id="contact" action="dodajNoviDeoFunction.php" method="post" enctype="multipart/form-data">
  <a href="index.php" class="backToIndexBtn">Vrati se na početak</a>
      <h3>Dodaj Novi Deo</h3>
      <h4>Sva polja osim cene i slike moraju biti popunjena (malim slovima)</h4>
      <fieldset>
        <input placeholder="Naziv Dela" type="text" name="nazivDela" autocomplete="off" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Marka Vozila" type="text" name="markaVozila" autocomplete="off" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Detalji"  name="detalji" required autocomplete="off" ></textarea>
      </fieldset>
    <fieldset>
      <label for="myfile">Izaberi sliku:</label>
      <input type="file" id="myfile" name="izaberiSliku"><br><br>
    </fieldset>
    <fieldset>
      <span>Kolicina </span><input type="number" name="kolicina" autocomplete="off" value="1" required>
    </fieldset>
      <fieldset>
        <input placeholder="Cena" type="number" name="cena" autocomplete="off" >
      </fieldset>

      <fieldset>
        <button name="submitDodajNovi" type="submit" id="contact-submit">Potvrdi</button>
      </fieldset>
    </form>
  </div>


</body>
</html>
