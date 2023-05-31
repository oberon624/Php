
    <?php
    function checkDivisibility($number) {
        if ($number % 3 == 0) {
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (empty($number)) {
            echo "Değer boş olamaz.";
        } else {
            $number = intval($number);
            if (checkDivisibility($number)) {
                echo "Girilen sayı 3'e bölünebilir.";
            } else {
                $divisibleBy = ($number % 3 == 0) ? $number : (($number + (3 - ($number % 3))));
                echo "Girilen sayı 3'e bölünemez. İlk bölünebilen değer: " . $divisibleBy;
            }
        }
    }
    ?>