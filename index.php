<?php

require_once __DIR__ . '/mahasiswa.php';
require_once __DIR__ . '/produk.php';

$mahasiswa1 = new \Pertemuan02\Mahasiswa(
    "24.24.031902",
    "Ahmad Dapi",
    "Pendidikan Teknologi Informasi",
    3.85
);

$mahasiswa2 = new \Pertemuan02\Mahasiswa(
    "24.24.030314",
    "Andi Setiawan",
    "Pendidikan Teknologi Informasi",
    3.30
);

$mahasiswa3 = new \Pertemuan02\Mahasiswa(
    "24.24.030315",
    "Budi Santoso",
    "Pendidikan Teknologi Informasi",
    2.90
);

$daftarMahasiswa = [
    $mahasiswa1,
    $mahasiswa2,
    $mahasiswa3,
];

$produk = new \Pertemuan02\Produk(
    "Buku Pemrograman",
    50000,
    10
);

echo "=== DATA MAHASISWA ===\n\n";

foreach ($daftarMahasiswa as $mahasiswa) {
    echo $mahasiswa->info() . "\n";
    echo "Predikat: " . $mahasiswa->predikat() . "\n\n";
}

echo "=== DATA PRODUK ===\n";
echo "Nama Produk: {$produk->nama}\n";
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . "\n";
echo "Stok: {$produk->stok}\n";
echo "Total Nilai: Rp"
    . number_format($produk->totalNilai(), 0, ',', '.') . "\n";
