<!DOCTYPE html>
<html>
<body>

<?php
function cizUcgen($satirSayisi) {
    echo "While Döngüsü ile Üçgen Çizimi:<br>";
    $satir = 1;
    while ($satir <= $satirSayisi) {
        echo str_repeat("*", $satir) . "<br>";
        $satir++;
    }

    echo "<br>For Döngüsü ile Üçgen Çizimi:<br>";
    for ($satir = 1; $satir <= $satirSayisi; $satir++) {
        echo str_repeat("*", $satir) . "<br>";
    }
}

// Kullanım örneği:
cizUcgen(15);

?>

</body>
</html>