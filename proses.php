<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $tingkat = $_POST['tingkat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "Tidak ada";

        echo "<h3>PROSES FORM</h3>";
        echo "Nama saya adalah $nama_depan $nama_belakang. Saya sekolah tingkat $tingkat.<br>";
        echo "Jenis kelamin saya $jenis_kelamin.<br>";
        echo "Dan hobi saya $hobi.";
    } 
    ?>