<html>
 <head> 
    <title>SMK TELKOM JAKARTA</title>
    <link rel="icon" href="TS.png"> 
 </head> 
 <body> 
<body background="Plain Red.png">
<center>
     <form method="POST" action="Hasil Form.php"> 
     <table border="2">
        <tr>
            <td colspan=20 align="center"><b> Daftar Sekolah </b></td>

        <tr>
            <td>Nama Lengkap:  </td> 
            <td colspan="3"><input type="text" name="nama"/></td>
        </tr> 
        <tr>
            <td>Nama Panggilan:  </td> 
            <td colspan="3"><input type="text" name="panggil"/></td>
        </tr> 
        <tr>
			<td>TempatLahir:</td>
			<td><input type="text" name="tmptlhr" size="20"> 
		</tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="tgllhr" width="10"></td>
        <tr>
            <td>Alamat Rumah:</td>
            <td colspan="3"><input type="text" name="alamat" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td colspan="3"><input type="radio" name="kelamin" value="laki-laki" />laki-laki
            <input type="radio" name="kelamin" value="perempuan" />perempuan
        </td>
        </tr>
        <tr>
            <td>Asal Sekolah:</td>
            <td colspan="3"><input type="text" name="sekolah" /></td>
        </tr>
        <tr>
            <td>Jurusan yang diminati:</td>
                <td><select name="Jurusan">
        <option value="Transmisi">Transmisi</option>
        <option value="Teknik Jaringan Akses">Teknik Jaringan Akses</option>
        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
        </td>
        </tr>
        <tr>
        <td>
            Jalur pendaftaran:<br>
            <b>*Hanya dapat pilih satu</b>
        </td>
        <td>
        <input type="checkbox" value="JPK" name="Jp1"> JPK <br/>
        <input type="checkbox" value="PMDK" name="Jp2"> PMDK <br/>
        <input type="checkbox" value="PRESTASI" name="Jp3"> PRESTASI <br/>
        <input type="checkbox" value="MANDIRI" name="Jp4"> MANDIRI <br/>
        <input type="checkbox" value="EARLY BIRD" name="Jp5"> EARLY BIRD <br/>
        </td>
        </tr>
        <tr>
            <td> Nama :
            <input type="text" name="namakmn">
            <br> Saran untuk Website : <br>
            <textarea name= komentar	cols= 40  rows="8">
            </textarea><br>
            
        </td>
        <td>
        <img src="./TS.png" align="left" width="180px" >
        
</td>
</table>
<input type="submit" value="Submit">
<input type="reset" value="Reset">

            
    </form> 
  
</center>
 </body> 
</html> 