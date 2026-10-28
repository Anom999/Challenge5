
<?php
require_once __DIR__ . '/includes/data.php';

$judulHalaman = "Tentang Toko";
$halamanAktif = "tentang.php";

$infoToko = [
    "nama" => "Charger Store HP Bali",
    "alamat" => "Jl. A. Yani Utara No.12, Baler Bale Agung, Kec. Negara, Kabupaten Jembrana, Bali 80233",
    "nomor" => "082236180000",
    "jam" => "Senin - Jumat, 10.00 - 18.00 WITA",
    "hari_libur" => "Sabtu - Minggu: Tutup",
    "layanan" => [
        "Menjual charger HP",
        "Menjual berbagai pilihan daya charger",
        "Tersedia charger standar dan fast charging",
    ],
];

require __DIR__ . '/includes/header.php';
?>

<div class="bg-white rounded-xl shadow p-6 mb-6">
    <h2 class="text-xl font-bold mb-3">
        <?= htmlspecialchars($infoToko["nama"]) ?>
    </h2>

    <p class="mb-3">
        <span class="font-semibold">Alamat:</span>
        <?= htmlspecialchars($infoToko["alamat"]) ?>
    </p>

    <p class="mb-3">
        <span class="font-semibold">Nomor Telepon:</span>
        <?= htmlspecialchars($infoToko["nomor"]) ?>
    </p>

    <p class="mb-3">
        <span class="font-semibold">Jam operasional:</span>
        <?= htmlspecialchars($infoToko["jam"]) ?>
    </p>

    <p>
        <span class="font-semibold">Hari libur:</span>
        <?= htmlspecialchars($infoToko["hari_libur"]) ?>
    </p>
</div>

<div class="bg-white rounded-xl shadow p-6">
    <h2 class="text-xl font-bold mb-3">Layanan Toko</h2>

    <ul class="list-disc pl-5 space-y-2 text-slate-600">
        <?php foreach ($infoToko["layanan"] as $layanan): ?>
            <li><?= htmlspecialchars($layanan) ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
