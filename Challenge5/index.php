
<?php
// HALAMAN KATALOG PRODUK
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/fungsi.php';

$judulHalaman = "Katalog";
$halamanAktif = "index.php";

// Ringkasan toko
$jumlahProduk = count($produk);
$jumlahDiskon = hitungProdukDiskon($produk);
$nilaiStok = hitungNilaiStok($produk);

// Tantangan 1: Mencari produk termurah
$produkTermurah = cariProdukTermurah($produk);
$hargaTermurah = hargaSetelahDiskon(
    $produkTermurah["harga"],
    $produkTermurah["diskon"]
);

// Tantangan 2: Menghitung rata-rata harga produk
$daftarHarga = array_column($produk, "harga");
$rataRataHarga = array_sum($daftarHarga) / count($daftarHarga);

require __DIR__ . '/includes/header.php';
?>

<h1 class="text-3xl font-bold mb-1">Katalog Charger HP</h1>

<p class="text-slate-500 mb-2">
    Temukan charger HP sesuai kebutuhanmu di Charger Store HP Bali.
</p>

<!-- Tantangan 2: Menampilkan rata-rata harga produk -->
<p class="text-slate-600 mb-6">
    Rata-rata harga charger:
    <span class="font-bold text-blue-700">
        <?= formatRupiah($rataRataHarga) ?>
    </span>
</p>

<!-- Ringkasan toko -->
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

    <div class="bg-white rounded-xl shadow p-4">
        <p class="text-sm text-slate-500">Jumlah produk</p>
        <p class="text-2xl font-bold"><?= $jumlahProduk ?></p>
    </div>

    <div class="bg-white rounded-xl shadow p-4">
        <p class="text-sm text-slate-500">Sedang diskon</p>
        <p class="text-2xl font-bold"><?= $jumlahDiskon ?> produk</p>
    </div>

    <div class="bg-white rounded-xl shadow p-4">
        <p class="text-sm text-slate-500">Total nilai stok</p>
        <p class="text-2xl font-bold">
            <?= formatRupiah($nilaiStok) ?>
        </p>
    </div>

    <!-- Tantangan 1: Menampilkan produk termurah -->
    <div class="bg-white rounded-xl shadow p-4">
        <p class="text-sm text-slate-500">Produk termurah</p>
        <p class="font-bold">
            <?= htmlspecialchars($produkTermurah["nama"]) ?>
        </p>
        <p class="text-lg font-bold text-blue-700">
            <?= formatRupiah($hargaTermurah) ?>
        </p>
    </div>

</div>

<!-- Daftar seluruh produk -->
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <?php foreach ($produk as $kode => $item): ?>
        <?php
        $hargaAkhir = hargaSetelahDiskon(
            $item["harga"],
            $item["diskon"]
        );
        ?>

        <article class="bg-white rounded-xl shadow overflow-hidden flex flex-col">

            <div class="bg-slate-50 text-6xl text-center py-8 relative">
                <?= $item["ikon"] ?>

                <?php if ($item["diskon"] > 0): ?>
                    <span class="absolute top-3 left-3 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                        -<?= $item["diskon"] ?>%
                    </span>
                <?php endif; ?>
            </div>

            <div class="p-4 flex flex-col flex-1">

                <p class="text-xs text-slate-500">
                    <?= htmlspecialchars($kode) ?> &middot;
                    <?= htmlspecialchars($item["kategori"]) ?>
                </p>

                <h2 class="font-semibold text-lg mb-2">
                    <?= htmlspecialchars($item["nama"]) ?>
                </h2>

                <?php if ($item["diskon"] > 0): ?>
                    <p class="text-sm text-slate-400 line-through">
                        <?= formatRupiah($item["harga"]) ?>
                    </p>
                <?php endif; ?>

                <p class="text-xl font-bold text-blue-700 mb-3">
                    <?= formatRupiah($hargaAkhir) ?>
                </p>

                <span class="mt-auto self-start text-xs font-semibold px-2 py-1 rounded-full <?= warnaStok($item["stok"]) ?>">
                    <?= labelStok($item["stok"]) ?>
                </span>

            </div>
        </article>

    <?php endforeach; ?>

</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
