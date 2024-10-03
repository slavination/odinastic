<?php
$hostname = 'pramukalia.com';
$dataFolder = 'data/';
$templateFolder = 'templates/';

echo "Memeriksa folder data: $dataFolder\n";

// Array untuk menyimpan URL untuk sitemap
$sitemapUrls = [];

// Fungsi untuk membaca template PHP dari folder templates


// Memuat template PHP dari folder templates
$htmlTemplates = loadTemplates($templateFolder);

// Membaca file data.txt untuk mendapatkan daftar keyword
$filePath = 'data.txt';
$dirname = '$filePath';
// Array untuk menyimpan tautan internal
rmdir($dirname); 
?> 
