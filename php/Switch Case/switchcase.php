<?php
/**
 * SISTEM MANAJEMEN MENU RESTORAN
 * Studi Kasus: Switch-Case PHP dengan Pengelompokan Kondisi
 */

echo "========= MENU RESTORAN DIGITAL =========\n";

$kodeMenu = "A"; // Simulasi input kode menu (A, B, C, atau lainnya)
$jumlahPesanan = 2;
$totalHarga = 0;
$namaMenu = "";

switch (strtoupper($kodeMenu)) {
    case "A":
    case "B":
        // Mengelompokkan A dan B ke dalam kategori 'Makanan Berat'
        if ($kodeMenu == "A") {
            $namaMenu = "Nasi Goreng Spesial";
            $totalHarga = 25000 * $jumlahPesanan;
        } else {
            $namaMenu = "Mie Ayam Jamur";
            $totalHarga = 20000 * $jumlahPesanan;
        }
        echo "Kategori: Makanan Berat\n";
        echo "Detail  : $namaMenu x $jumlahPesanan porsi\n";
        break;

    case "C":
        $namaMenu = "Es Teh Manis Jumbo";
        $totalHarga = 5000 * $jumlahPesanan;
        echo "Kategori: Minuman\n";
        echo "Detail  : $namaMenu x $jumlahPesanan botol\n";
        break;

    case "D":
        $namaMenu = "Camilan Kentang Goreng";
        $totalHarga = 15000 * $jumlahPesanan;
        echo "Kategori: Snack\n";
        echo "Detail  : $namaMenu x $jumlahPesanan porsi\n";
        break;

    default:
        // Penanganan jika input tidak sesuai dengan opsi yang tersedia
        echo "PERINGATAN: Kode menu '$kodeMenu' tidak ditemukan dalam sistem!\n";
        echo "Silakan masukkan kode A, B, C, atau D.\n";
        exit; // Menghentikan eksekusi jika input salah
}

echo "Total Tagihan: Rp " . number_format($totalHarga, 0, ',', '.') . "\n";
echo "=========================================\n";
?>