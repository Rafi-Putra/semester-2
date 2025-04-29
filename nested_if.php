<?php
$nilai = 87; // Nilai mahasiswa yang akan dievaluasi

// Pengecekan apakah nilai berada di antara 90 sampai 100
if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai Anda: A"; // Jika ya, maka tampilkan A
} else {
    // Jika nilai < 90, cek apakah nilai >= 80
    if ($nilai >= 80) {
        echo "Nilai Anda: B"; // Jika ya, tampilkan B
    } else {
        // Jika nilai < 80, cek apakah nilai >= 70
        if ($nilai >= 70) {
            echo "Nilai Anda: C"; // Jika ya, tampilkan C
        } else {
            // Jika nilai < 70, cek apakah nilai >= 60
            if ($nilai >= 60) {
                echo "Nilai Anda: D"; // Jika ya, tampilkan D
            } else {
                // Jika semua kondisi di atas tidak terpenuhi (nilai < 60)
                echo "Nilai Anda: E"; // Maka tampilkan E
            }
        }
    }
}
?>
