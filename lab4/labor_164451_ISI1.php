<?php
    $nr_indeksu = '164451';
    $nr_grupy = 'ISI1';
    echo 'Michał Burski'.$nr_indeksu.'grupa'.$nr_grupy.'<br/><br/>';
    echo 'Zastowosowanie metody include() <br/>';


    echo "bez include()<br/>";
    echo 'x = '.$include1.'<br/>';
    echo 'y = '.$include2.'<br/>';


    include 'include.php';
    echo "z include()<br/>";
    echo 'x = '.$include1;
    echo 'y = '.$include2;

    
    $once = require_once('once.php');
    echo $once.'<br/>';
    $once2 = require_once('once.php');
    echo $once2.'<br/>';

    echo "<br/> Zastosowanie if, else, elseif: </br><br/>";
    $a = 15;
    $b = 15;
    if ($a > $b)
        echo 'A jest większe od B <br/>';
    elseif ($a == $b)
        echo 'A jest równe B <br/>';
    else
        echo 'A nie jest większe od B <br/>';

    echo '<br/> Zastosowanie switch: <br/><br/>';

    $i = 1;

    switch ($i) {
        case 0:
            echo "switch numer 0 <br/>";
            break;
        case 1:
            echo "switch numer 1 <br/>";
            break;
        case 2:
            echo "switch numer 2 <br/>";
            break;
    }

    echo '<br/>Zastosowanie while: <br/><br/>';
    $x = 1;

    while ($x <= 10) {
        echo $x++.' ';
    }

    echo '<br/><br/>Zastosowanie for: <br/><br/>';

    for ($x = 1; $x <= 10; $x++) {
        echo $x.' ';
    }

    echo '<br/><br/>Zastosowanie _GET: <br/><br/>';

    $_GET['name'] = 'Michał';
    echo 'Cześć ' . htmlspecialchars($_GET["name"]) . '!<br/>';

    echo '<br/><br/>Zastosowanie _POST: <br/><br/>';

    $_POST['name'] = 'Michał';
    echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
 
    echo '<br/><br/>Zastosowanie _SESSION: <br/><br/>';

    session_start();
    $value = 445;
    $_SESSION["newsession"]=$value;

?>
