<?php

// Nama file yang berisi daftar folder yang akan dihapus
$file = 'data.txt';

// Membaca isi file dan mengonversinya menjadi array
$folders = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Menghapus setiap folder yang terdaftar
foreach ($folders as $folder) {
    // Memastikan folder ada dan merupakan direktori
    if (is_dir($folder)) {
        // Menghapus folder
        rmdir($folder);
        echo "Folder \"$folder\" berhasil dihapus.<br>";
    } else {
        echo "Folder \"$folder\" tidak ditemukan atau bukan folder.<br>";
    }
}

echo 'Proses penghapusan selesai.';

?>
