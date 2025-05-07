<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>
    <form method="post" action="proses.php">
        <label>Nama Depan: </label>
        <input type="text" name="nama_depan" required><br><br>

        <label>Nama Belakang: </label>
        <input type="text" name="nama_belakang" required><br><br>

        <label>Tingkat: </label>
        <select name="tingkat">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="Kuliah">Kuliah</option>
        </select><br><br>

        <label>Jenis Kelamin: </label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>

        <label>Hobi: </label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi[]" value="Menulis"> Menulis<br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
        <input type="checkbox" name="hobi[]" value="Musik"> Musik<br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
