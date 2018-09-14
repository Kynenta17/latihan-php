<html>
    <head><title>Penilaian Rapot</title><head>
    <body>
        <h1 style color:red><center>Penilaian Rapot Siswa</center><h1><br>
        <h3>Silakan Masukkan data Anda:<h3><br>
        <FORM ACTION= "Hasil8Sep18.php" METHOD="POST" NAME="input">
        <table>
        <tr>
            <td><h3>Nama:<h3></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><h3>NIS:<h3></td>
            <td><input type="number" name="nomor"><br></td>
        </tr>
        <tr>
            <td><h3>Alamat:<h3></td>
            <td><textarea name="alamat" cols="30" rows="3"></textarea><br></td>
        </tr>
        <tr>
            <td><h3>Jenis kelamin:<h3></td>
            <td><input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki<br>
                <input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br></td>
        </tr>
        <tr>
            <td><h3>Agama:<h3></td>
            <td>
                <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha ">Buddha</option>
                <option value="Hindu">Hindu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h3>Sekolah:<h3></td>
            <td><input type="text" name="sekolah"><br></td>
        </tr>
        <tr>
            <td><h3>Email:<h3></td>
            <td><input type="email" name="email"><br></td>
        </tr>
        <tr>
            <td><h3>Pengajar:<h3></td>
            <td><input type="text" name="pengajar"><br></td>
        </tr>
        <tr>
            <td><h3>Mata pelajaran yang disukai:<h3></td>
            <td>
            <input type = "checkbox" name = "mapel1" value = "RPL"> RPL<br>
            <input type = "checkbox" name = "mapel2" value = "B. Inggris"> B. Inggris<br>
            <input type = "checkbox" name = "mapel3" value = "B. Indonesia"> B. Indonesia<br>
            <input type = "checkbox" name = "mapel4" value = "Penjaskes"> Penjaskes<br>
            <input type = "checkbox" name = "mapel5" value = "DKK"> DKK<br>
            </td>
        </tr>
        <tr>
            <td><h3>Masukkan nilai ijazah SD:<h3></td>
            <td><input type="text" name="nilai"><br></td>
        </tr>
        <tr>
            <td><input type="submit" name="input" value="Proses"></td>
        </tr>
            </table>
        </FORM>
    </body>
</html>