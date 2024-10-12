<?php

// Nama file yang berisi daftar folder
$file = 'data.txt';

// Membaca isi file dan mengonversinya menjadi array
$folders = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Mengubah permission untuk setiap folder yang berisi index.php
foreach ($folders as $folder) {
    if (is_dir($folder) ) {
        chmod($folder, 0755);  // Ubah 0755 ke permission yang diinginkan
        echo "Permission untuk folder \"$folder\" berhasil diubah.<br>";
    } else {
        echo "Folder \"$folder\" tidak ditemukan atau tidak berisi file index.php.<br>";
    }
}

echo 'Proses pengubahan permission selesai.';

?>
