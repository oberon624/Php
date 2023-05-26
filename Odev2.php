<?php 
function sininFonksiyonunuz($array, $count) {
  // Boş elemanları temizle
  $filteredArray = array_filter($array);

  // Rastgele elemanları seç
  $randomKeys = array_rand($filteredArray, $count);

  // Seçilen elemanları yeni diziye ekle
  $result = array_map(function ($key) use ($filteredArray) {
    return $filteredArray[$key];
  }, (array) $randomKeys);

  return $result;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(sininFonksiyonunuz($planets, 2));
print_r(sininFonksiyonunuz($planets, 3));
print_r(sininFonksiyonunuz($planets, 2));
print_r(sininFonksiyonunuz($planets, 4));
print_r(sininFonksiyonunuz($planets, 5));

?>