<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Data</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>Nim</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                    <input type="radio"  name="jenis_kelamin" value="L">Laki Laki
                    <input type="radio"  name="jenis_kelamin" value="P">Perempuan
                </td></tr>
                <tr><td>Jurusan</td><td>
                    <select name="jurusan">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Simpan</button></td></tr>
            </table>
        </form>
    </body>
</html>
