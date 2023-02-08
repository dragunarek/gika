<?php
function getCounter()
{
    if(!file_exists("licznik.txt")){
        //brak pliku licznika
        return false;
    }
    if(!$fd = fopen("licznik.txt", "r+")){
        //brak dostępu do pliku licznika
        return false;
    }
    flock($fd, LOCK_EX);
    $count = fgets($fd);
    if(is_numeric($count)){
        $result = $count + 1;
        fseek($fd, 0);
        fputs($fd, $result);
    }
    else{
        //niepoprawny format odczytanych danych
        $result = false;
    }
    flock($fd, LOCK_UN);
    fclose($fd);
    return $result;
}
function getCounterStr($dateStr)
{
    if(($count = getCounter()) !== false){
        if($count == 1){
            $razy = 'raz';
        }
        else{
            $razy = 'razy';
        }
        return "Ta strona została odwiedzona $count $razy " . "od $dateStr roku.";
    }
    else{
        return "Licznik odwołań jest czasowo niedostępny.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> WWW</title>
    </head>
    <body>
        <p>
            <?php
            echo getCounterStr("grudnia 2022");
            ?>
        </p>
    </body>
</html>