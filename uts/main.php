<?php
// Data dari pelanggan
$namaPelanggan = "alam";
$kodePromo = "HEMAT5";
$menuDipilih = 1;
$jumlahPesanan = 1;

// Menu kantin
switch ($menuDipilih) {
    case 1:
        $menuDipilih = "Nasi Goreng";
        $hargaDipilih = 18000;
        break;
    case 2:
        $menuDipilih = "Ayam Geprek";
        $hargaDipilih = 20000;
        break;
    case 3:
        $menuDipilih = "Mie Ayam";
        $hargaDipilih = 15000;
        break;
    case 4:
        $hargaDipilih = 17000;
        $menuDipilih = "Soto Ayam";
        break;
    default:
        $menuDipilih = "Menu Tidak Tersedia";
        $hargaDipilih = 0;
        $jumlahPesanan = 0;
        break;
}

// Rincian Pesanan
$total = $jumlahPesanan * $hargaDipilih;

$diskon = $kodePromo === "HEMAT5" ? 5 : 0;

$potongan = ($total * ($diskon / 100));
$dibayar = $total - $potongan;

// Output
echo "-----------------------------------\n";
echo "|      Kantin Kampus Hoho 🚀      |\n";
echo "-----------------------------------\n";

echo "Pelanggan         : $namaPelanggan\n";
echo "Menu              : $menuDipilih\n";
echo "Harga             : $hargaDipilih\n";
echo "Jumlah dipesan    : $jumlahPesanan\n";
echo "-----------------------------------\n";
echo "Total             : Rp $total\n";
echo "Diskon            : $diskon%\n";
echo "Potongan          : Rp $potongan\n";
echo "Dibayar           : Rp $dibayar\n";
echo "-----------------------------------\n";
echo "      🔥 terima kasih hoho 🔥\n";