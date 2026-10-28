
<?php
// ============================================
// DATA TOKO (sementara disimpan di array)
// Pada Pertemuan 7, data ini akan dipindah ke database MySQL.
// ============================================
$namaToko = "Charger Store HP Bali";
// Array multidimensi: kode produk => data produk (array asosiatif)
$produk = [
    "P001" => [
        "nama"     => "Apple 5W USB Power Adapter (A1400)",
        "kategori" => "Standar",
        "harga"    => 172500,
        "diskon"   => 3,
        "stok"     => 10,
        "ikon"     => "🔌",
    ],
    "P002" => [
        "nama"     => "Ugreen Nexode Mini 20W GaN (CD319)",
        "kategori" => "Fast Charging",
        "harga"    => 175000,
        "diskon"   => 3,
        "stok"     => 15,
        "ikon"     => "⚡",
    ],
    "P003" => [
        "nama"     => "Anker PowerPort III 12W (A2019)",
        "kategori" => "Standar",
        "harga"    => 120000,
        "diskon"   => 1,
        "stok"     => 8,
        "ikon"     => "🔌",
    ],
    "P004" => [
        "nama"     => "Baseus PicoGo GaN6 45W (CCGAN45CE)",
        "kategori" => "Fast Charging",
        "harga"    => 332500,
        "diskon"   => 8,
        "stok"     => 7,
        "ikon"     => "⚡",
    ],
    "P005" => [
        "nama"     => "Robot RT-K6 Wall Charger 10W (RT-K6)",
        "kategori" => "Standar",
        "harga"    => 30000,
        "diskon"   => 0,
        "stok"     => 6,
        "ikon"     => "🔌",
    ],
    "P006" => [
        "nama"     => "Anker PowerPort+ 1 Quick Charge 3.0 18W (A2013)",
        "kategori" => "Fast Charging",
        "harga"    => 155000,
        "diskon"   => 2,
        "stok"     => 5,
        "ikon"     => "⚡",
    ],
];
// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "P001" => 3,
    "P002" => 5,
    "P003" => 4,
    "P004" => 2,
    "P005" => 3,
    "P006" => 2,
];
?>
