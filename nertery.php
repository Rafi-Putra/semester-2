<?php
$nilai = 87; // Nilai mahasiswa yang akan dievaluasi

// Baris di bawah ini menggunakan operator ternary untuk mengecek kondisi secara singkat
// Struktur: (kondisi) ? hasil jika benar : hasil jika salah;
// Karena kita butuh beberapa kondisi, maka ternary disusun secara bertingkat

echo ($nilai >= 90 && $nilai <= 100) ? "Nilai Anda: A" : // Jika nilai 90-100, tampilkan A
     (($nilai >= 80) ? "Nilai Anda: B" :                 // Jika tidak, cek nilai >= 80 → B
     (($nilai >= 70) ? "Nilai Anda: C" :                 // Jika tidak, cek nilai >= 70 → C
     (($nilai >= 60) ? "Nilai Anda: D" :                 // Jika tidak, cek nilai >= 60 → D
     "Nilai Anda: E")));                                 // Jika semua kondisi gagal, tampilkan E
?>
