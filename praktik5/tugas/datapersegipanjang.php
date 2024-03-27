<?php
require_once "classpersegipanjang.php";
$persegipanjang = new PersegiPanjang(8, 5);

// panggil method
echo "<br><br>Luas Persegi Panjang: " . $persegipanjang->getLuas();
echo "<br>Keliling Persegi Panjang: " . $persegipanjang->getKeliling();
