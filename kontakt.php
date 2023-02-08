<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Kontakt</title>


    <link href="bootstrap.min.css" rel="stylesheet">
	 <link href="cover.css" rel="stylesheet">
   
  </head>
  <body class="text-white bg-dark">
  
  <div class="container d-flex w-100 p-3 mx-auto flex-column">
  
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">GIKA Kontakt</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="/gika/index.html">Strona główna</a>
        <a class="nav-link fw-bold py-1 px-0" href="/gika/podstrony/o_firmie/firma.php">O firmie</a>
        <a class="nav-link fw-bold py-1 px-0" href="/gika/podstrony/realizacje/realizacje.html">Realizacje</a>
      </nav>
    </div>
  </header>
  
  <?php
$header = "From: .$email \nContent-Type:".
			 ' text/plain;charset="UTF-8"'.
			 "\nContent-Transfer-Encoding: 8bit";
$to = "dragunarek13@gmail.com";
$mail = 'From:' . $email;
$ame = 'Imie:' . $name;
$essage = 'Wiadomosc:' .$message;

if(mail($to, $mail, $ame, $essage)){
	echo "Poszło";
}
else {
	echo "Nie poszło";
	}
?>



<div class="container">
  <main>
    <div class="py-5 text-center">
      <h3>GIKA</h3>
      <h4>Formularz kontaktowy</h4>
      <p class="lead">Zapraszamy do kontaktu emailowego. Odpowiemy na każde zapytanie. </p>
    </div>



        <form class="needs-validation" method="POST">
          <div class="row g-3">

            <div class="col-sm-6">
              <label for="name" class="form-label">Imię</label>
              <input type="text" class="form-control" id="name" name="name">
              <div class="invalid-feedback">
                Imię jest wymagane.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="nazwisko" class="form-label">Nazwisko</label>
              <input type="text" class="form-control" id="nazwisko" name="nazwisko">
              <div class="invalid-feedback">
                Nazwisko jest wymagane.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
              <div class="invalid-feedback">
                Podaj adres email.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="phone" class="form-label">Telefon</label>
              <input type="text" class="form-control" id="phone" name="phone">
              <div class="invalid-feedback">
                Podaj numer telefonu.
              </div>
            </div>

            <div class="col-6">
              <label for="address" class="form-label">Miasto</label>
              <input type="text" class="form-control" id="miasto" placeholder="">
              <div class="invalid-feedback">
                Podaj miasto.
              </div>
            </div>


            <div class="col-12">
              <label for="message" class="form-label">Treść wiadomości</label>
              <textarea class="form-control" id="message" name="message" rows="4"></textarea>
              <div class="invalid-feedback">
                Kod jest wymagany.
              </div>
            </div>


          </div>

    

          <hr class="my-4">

        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary btn-lg" type="submit">Wyślij</button>
        </div>
        </form>


      </div>
    </div>
  </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 ARKNET</p>
    </footer>
    </body>
</html>
