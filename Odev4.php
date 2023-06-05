<?php

class Sekil {
    // Boş sınıf, temel şekil özelliklerini içermez
}

class Dikdortgen extends Sekil {
    private $uzunluk;
    private $genislik;

    public function __construct($uzunluk, $genislik) {
        $this->uzunluk = $uzunluk;
        $this->genislik = $genislik;
    }

    public function alanHesapla() {
        return $this->uzunluk * $this->genislik;
    }

    public function cevreHesapla() {
        return 2 * ($this->uzunluk + $this->genislik);
    }
}

class Ucgen extends Sekil {
    private $taban;
    private $yukseklik;
    private $kenar1;
    private $kenar2;
    private $kenar3;

    public function __construct($taban, $yukseklik, $kenar1, $kenar2, $kenar3) {
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }

    public function alanHesapla() {
        return ($this->taban * $this->yukseklik) / 2;
    }

    public function cevreHesapla() {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}

class Kare extends Sekil {
    private $kenar;

    public function __construct($kenar) {
        $this->kenar = $kenar;
    }

    public function alanHesapla() {
        return $this->kenar * $this->kenar;
    }

    public function cevreHesapla() {
        return 4 * $this->kenar;
    }
}

// Örnek kullanım
$dikdortgen = new Dikdortgen(5, 10);
echo "Dikdörtgen Alanı: " . $dikdortgen->alanHesapla() . "\n";
echo "Dikdörtgen Çevresi: " . $dikdortgen->cevreHesapla() . "\n";

$ucgen = new Ucgen(4, 6, 5, 4, 3);
echo "Üçgen Alanı: " . $ucgen->alanHesapla() . "\n";
echo "Üçgen Çevresi: " . $ucgen->cevreHesapla() . "\n";

$kare = new Kare(7);
echo "Kare Alanı: " . $kare->alanHesapla() . "\n";
echo "Kare Çevresi: " . $kare->cevreHesapla() . "\n";