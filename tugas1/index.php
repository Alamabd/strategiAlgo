<?php
$buku_tulis = 12000 * 5;
$pulpen = 8000 * 3;
$penggaris = 5000 * 2;
$pensil_warna = 25000 * 1;

$subtotal = $buku_tulis + $pulpen + $penggaris + $pensil_warna;
$diskon = 5;
$total_diskon = $subtotal / 100 * $diskon;
$total = $subtotal - $total_diskon;

echo "buku_tulis    Rp.12.000 x 5 = Rp" . number_format($buku_tulis, 0, ".", ".");
echo "<br/>";
echo "pulpen        Rp.8000 x 3 = Rp" . number_format($pulpen, 0, ".", ".");
echo "<br/>";
echo "penggaris     Rp5.000 x 2 = Rp" . number_format($penggaris, 0, ".", ".");
echo "<br/>";
echo "pensil_warna  Rp25.000 x 1 = Rp" . number_format($pensil_warna, 0, ".", ".");
echo "<br/>";
echo "<br/>";

echo "sub total: Rp" . number_format($subtotal, 0, '.', '.');
echo "<br/>";
echo "Diskon: " . $diskon . "%";
echo "<br/>";
echo "Total Diskon: Rp" . number_format($total_diskon, 0, ".", ".");
echo "<br/>";
echo "Total: Rp" . number_format($total, 0, ".", '.');
