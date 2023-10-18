<?php
$salary = 12000000;
$tax = 0.1;
$thp = $salary - ($salary * $tax);

function formatRupiah($angka) {
    $rupiah = "Rp " . number_format($angka, 0, ",", ".");
    return $rupiah;
}

echo "Salary before Tax : IDR " . formatRupiah($salary) . "<br>";
echo "Take Home Pay : IDR " . formatRupiah($thp);
?>

