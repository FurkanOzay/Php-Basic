<?php 

    $count = 0;
    $myguess = 3;
    $win = 2;

    do {
        $number = rand(1,5);
        echo $number; echo "<br>";
        $count++;

    } while ($number != $myguess); {
        echo "<br>";
        echo "Tahmin edilen $number sayısı $count. denemede bulundu"; echo "<br>";

        if ($count <= $win) {
            echo "Tebrikler $win denemede tahmin edilen sayıyı buldunuz";
        }else {
            echo "Maalesef kaybettiniz. $count. denemede tahmin edilen sayı bulundu.";
        }
    }


?>