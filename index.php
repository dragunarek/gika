<?php
    //ob_start();
    
    if(!$_COOKIE['index.php']=="1")
    {
        $plik="licznik.txt";
       
        
        //odczytujemy aktualną wartość z pliku
        $file=fopen($plik, "r");
        flock($file, 1);
        $liczba=fgets($file, 16);
        flock($file, 3);
        fclose($file);
        $liczba++; //zwiększamy o 1
        
        //zapisujemy nową wartość licznika
        $file=fopen($plik, "w");
        flock($file, 2);
        fwrite($file, $liczba++);
        flock($file, 3);
        fclose($file); 
        
        setcookie("","1");
        //ob_end_flush();
    }
?>

<!doctype html>
<html lang="pl" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="zabudowy gipsowo-kartonowe, ścianki działowe, adaptacja poddaszy, zabudowy łazienkowe, ściany działowe, remonty">

    <title>Zabudowy gipsowo-kartonowe</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">GIKA </h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="podstrony/o_firmie/firma.php">O firmie</a>
        <a class="nav-link fw-bold py-1 px-0" href="podstrony/realizacje/realizacje.html">Realizacje</a>
        <a class="nav-link fw-bold py-1 px-0" href="podstrony/kontakt/kontakt.php">Kontakt</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
	
	
    
  </main>

  <footer class="mt-auto text-white-50">

  
   

    <p class="mb-1">&copy; 2023 BITARO</p>
  </footer>
</div>



  </body>
</html>
