<?php


    $nama = $_POST['nama'];

    $panggil = $_POST['panggil']; 

    $tmptlhr = $_POST['tmptlhr'];

    $tgllhr = $_POST['tgllhr'];

    $alamat = $_POST['alamat'];

    $jk = $_POST['kelamin'];

    $sekolah = $_POST['sekolah'];

    $jrsn = $_POST["Jurusan"];

    $namakmn=$_POST["namakmn"];

    $komentar=$_POST["komentar"];

?> 
<html> 
    <head> 
       <title>SMK Telkom Jakarta</title> 
       <link rel="icon" href="TS.png"> 
    </head> 
    <body> 
    <body background="Plain Red.png">
        <p align="center">
           <b> Berhasil Terdaftar! </b>
</p>
        <?php 
        echo "<center>";
         echo "<table border=2>";
         echo "<tr>";
         echo "<td>";
            echo "<p>Terima kasih ".$panggil. " sudah mengisi form </p>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p>Nama Lengkap : ".$nama. "</p>"; 
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p>Tempat lahir : ".$tmptlhr. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Tanggal lahir : ".$tgllhr. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Alamat Rumah : ".$alamat. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Jenis Kelamin : ".$jk. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Asal Sekolah : ".$sekolah. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Jurusan yang diminati : ".$jrsn. "</p>";
            echo "<tr>";
            echo "<td>";
            if (isset($_POST['Jp1']))
            echo "Jalur pendaftaran: ".$_POST['Jp1']."<br />";  
            if (isset($_POST['Jp2']))
            echo "Jalur pendaftaran: ".$_POST['Jp2']."<br />";
            if (isset($_POST['Jp3']))
            echo "Jalur pendaftaran: ".$_POST['Jp3']."<br />";
            if (isset($_POST['Jp4']))
            echo "Jalur pendaftaran: ".$_POST['Jp4']."<br />";
            if (isset($_POST['Jp5']))
            echo "Jalur pendaftaran: ".$_POST['Jp5']."<br />";
            echo "<tr>";
            echo "<td>";
            echo "<p>Nama pemberi saran : ".$namakmn. "</p>"; 
            echo "<tr>";
            echo "<td>";
            echo "<p>Saran untuk website : ".$komentar. "</p>";
        echo "</td>";
        echo "</center>";

        ?> 