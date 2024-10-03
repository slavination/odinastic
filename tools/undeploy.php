<?php

// Nama file yang berisi daftar folder yang akan diperiksa
$file = 'data.txt';

// Membaca isi file dan mengonversinya menjadi array
$folders = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Fungsi untuk menghapus folder beserta isinya
function deleteDir($dir) {
    if (!is_dir($dir)) {
        return;
    }

    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            deleteDir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

// Menghapus setiap folder yang terdaftar jika ada file index.php di dalamnya
foreach ($folders as $folder) {
    if (is_dir($folder) && file_exists($folder . '/index.php')) {
        deleteDir($folder);
        echo "Folder \"$folder\" beserta isinya berhasil dihapus.<br>";
    } else {
        echo "Folder \"$folder\" tidak ditemukan atau tidak memiliki file index.php.<br>";
    }
}

echo 'Proses penghapusan selesai.';

?>
