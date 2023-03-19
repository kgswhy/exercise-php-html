<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Percabangan</title>
</head>
<body>
    <?php
    $nis = "539211130";
    $nama = "Kgs. Wahyu ";
    $kls = "XI T9";
    $ntgs = "92";
    $npts = "87";
    $npas = "89";
    $ha = ($ntgs * 20/100) + ($npts * 30/100) + ($npts * 50/100);
    
    
    echo "<table border=1>
    <tr>
    <td>Hitung Nilai Akhir</td>
    </tr>
    </table>";
    echo "<h4> NIS = $nis </h4>";
    echo "<h4> Nama = $nama </h4>";
    echo "<h4> Kelas = $kls </h4>";
    echo "<h4> Nilai Tugas = $ntgs </h4>";
    echo "<h4> Nilai PTS = $npts </h4>";
    echo "<h4> Nilai PAS = $npas </h4>";
    echo "<h4> Nilai Akhir = $ha </h4>";

    if($ha < 70)
    echo "<h4>Grade D<h4>";
    
   elseif($ha < 80)
    echo "<h4>Grade C<h4>";

   elseif($ha <90)
    echo "<h4>Grade B<h4>";

   elseif($ha >90)
    echo "<h4>Grade A><h4>";

    if($ha < 70)
      echo "<h4>Tidak Lulus<h4>";
    elseif($ha > 70)
      echo "<h4>Anda Lulus<h4>";
      
      
    ?>
</body>
</html>