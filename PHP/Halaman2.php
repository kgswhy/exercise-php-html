<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman 2</title>
   <style type="text/css">
    a
    {
     text-decoration: none;
     color: black;
     background-color: blue;
     font-family: arial;
     font-weight: bold;
     border: 1px solid black;
     line-height: 50px;
     margin: auto;
     padding: 10px;
     border-radius: 5px;
    }
   </style>

</head>
<body>
<?php

$a = "20";
$b = "10";
$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;


echo "<h5>Angka 1 = $a</h5>";

echo "<h5>Angka 2 = $b</h5>";
echo "<h5>Hasil Penjumlahan =</h5>";
echo "<h5>$a dan $b = $tambah</h5>";
echo "<h5>Hasil Pengurangan =</h5>";
echo "<h5>$a dan $b = $kurang</h5>";
echo "<h5>Hasil Perkalian =</h5>";
echo "<h5>$a dan $b = $kali</h5>";
echo "<h5>Hasil Pembagian =</h5>";
echo "<h5>$a dan $b = $bagi</h5>";
?>
<a href="Halaman1.php">Halaman 1</a>
</table>
</body>
</html>