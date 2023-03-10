<?php

$counter = 0;

if(file_exists("counter.txt")){
   $counter = file_get_contents("counter.txt");
   $counter++;
   file_put_contents("counter.txt", $counter);
} else {
   file_put_contents("counter.txt", 1);
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

  
   

    <p class="mb-1">&copy; 2023 CyberADS</p>
    <p class="mb-1"><?php echo "Liczba odsłon: " . $counter;?></p>
  </footer>
</div>



  </body>
</html>
