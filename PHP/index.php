<?php
require_once 'SayuranOrganik.php';
session_start();

// Fitur Reset Session jika diperlukan
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Inisialisasi data default menggunakan lokasi gambar lokal di folder images/
if (!isset($_SESSION['daftar_sayur'])) {
    $_SESSION['daftar_sayur'] = [
        new SayuranOrganik("SY01", "Bayam", "Bogor", "Sayur Daun", 30, "Zat Besi", "Kompos", "ORG-001", 15000, "images/bayam.png"),
        new SayuranOrganik("SY02", "Wortel", "Cianjur", "Sayur Akar", 90, "Vitamin A", "Kasgot", "ORG-002", 20000, "images/wortel.png"),
        new SayuranOrganik("SY03", "Tomat", "Garut", "Sayur Buah", 60, "Vitamin C", "Kandang", "ORG-003", 18000, "images/tomat.png"),
        new SayuranOrganik("SY04", "Brokoli", "Lembang", "Sayur Bunga", 75, "Kalsium", "Kompos", "ORG-004", 35000, "images/brokoli.png"),
        new SayuranOrganik("SY05", "Kangkung", "Sukabumi", "Sayur Daun", 25, "Vitamin A", "Kasgot", "ORG-005", 12000, "images/kangkung.png"),
    ];
}

$pesan = "";

// Proses Tambah Data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = trim($_POST['id'] ?? '');
    $nama = trim($_POST['nama'] ?? '');
    $asal = trim($_POST['asal_daerah'] ?? '');
    $kat = trim($_POST['kategori'] ?? '');
    $panen = (int)($_POST['masa_panen'] ?? 0);
    $gizi = trim($_POST['kandungan_gizi'] ?? '');
    $pupuk = trim($_POST['jenis_pupuk'] ?? '');
    $sertif = trim($_POST['sertifikasi'] ?? '');
    $harga = (int)($_POST['harga_per_kg'] ?? 0);
    $gambar = trim($_POST['gambar'] ?? '');

    if (!empty($id) && !empty($nama)) {
        $_SESSION['daftar_sayur'][] = new SayuranOrganik($id, $nama, $asal, $kat, $panen, $gizi, $pupuk, $sertif, $harga, $gambar);
        $pesan = "Data sayuran berhasil ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sayuran Organik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen pb-12">

    <!-- Header Navigation -->
    <header class="bg-emerald-800 border-b border-emerald-700 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-leaf text-emerald-300 text-2xl"></i>
                <h1 class="text-2xl font-bold tracking-wide text-white">Toko Sayuran Organik</h1>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-sm bg-emerald-900 text-emerald-200 px-3 py-1 rounded-full border border-emerald-600">
                    Total: <?= count($_SESSION['daftar_sayur']) ?> Item
                </span>
                <a href="?reset=1" onclick="return confirm('Reset data ke awal?')" class="text-xs bg-red-800 hover:bg-red-700 text-white px-3 py-1 rounded-full transition">
                    <i class="fa-solid fa-rotate-left"></i> Reset Data
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Form Tambah Sayur -->
        <section class="lg:col-span-1 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-xl h-fit">
            <h2 class="text-xl font-semibold mb-4 text-emerald-400 flex items-center gap-2">
                <i class="fa-solid fa-circle-plus"></i> Tambah Sayuran Baru
            </h2>

            <?php if (!empty($pesan)): ?>
                <div class="mb-4 p-3 bg-emerald-900/80 border border-emerald-500 text-emerald-200 text-sm rounded-lg flex items-center gap-2">
                    <i class="fa-solid fa-circle-check"></i> <?= htmlspecialchars($pesan) ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1">ID Sayur</label>
                    <input type="text" name="id" required placeholder="Contoh: SY06" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1">Nama Sayuran</label>
                    <input type="text" name="nama" required placeholder="Contoh: Sawi" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1">Path Foto / URL Gambar</label>
                    <input type="text" name="gambar" placeholder="images/sawi.png" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Asal Daerah</label>
                        <input type="text" name="asal_daerah" required placeholder="Bandung" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Kategori</label>
                        <input type="text" name="kategori" required placeholder="Sayur Daun" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Masa Panen (Hari)</label>
                        <input type="number" name="masa_panen" required placeholder="35" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Harga / Kg (Rp)</label>
                        <input type="number" name="harga_per_kg" required placeholder="14000" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1">Kandungan Gizi</label>
                    <input type="text" name="kandungan_gizi" required placeholder="Vitamin A & C" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Jenis Pupuk</label>
                        <input type="text" name="jenis_pupuk" required placeholder="Kompos" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1">Sertifikasi</label>
                        <input type="text" name="sertifikasi" required placeholder="ORG-006" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-emerald-500 text-white">
                    </div>
                </div>
                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-medium py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-emerald-900/50 flex items-center justify-center gap-2 mt-2">
                    <i class="fa-solid fa-plus"></i> Simpan Sayuran
                </button>
            </form>
        </section>

        <!-- Tabel Daftar Sayur -->
        <section class="lg:col-span-2 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-xl overflow-hidden">
            <h2 class="text-xl font-semibold mb-4 text-emerald-400 flex items-center gap-2">
                <i class="fa-solid fa-list text-emerald-400"></i> Daftar Stok Sayuran
            </h2>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-slate-900/80 text-emerald-300 border-b border-slate-700">
                            <th class="p-3">Foto</th>
                            <th class="p-3">ID</th>
                            <th class="p-3">Nama</th>
                            <th class="p-3">Asal</th>
                            <th class="p-3">Kategori</th>
                            <th class="p-3">Panen</th>
                            <th class="p-3">Gizi</th>
                            <th class="p-3">Pupuk</th>
                            <th class="p-3">Sertifikat</th>
                            <th class="p-3">Harga/kg</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/50">
                        <?php foreach ($_SESSION['daftar_sayur'] as $s): ?>
                            <tr class="hover:bg-slate-700/30 transition">
                                <td class="p-3">
                                    <img src="<?= htmlspecialchars($s->getGambar()) ?>" alt="<?= htmlspecialchars($s->getNama()) ?>" class="w-12 h-12 object-cover rounded-lg border border-slate-600 shadow-sm bg-slate-900">
                                </td>
                                <td class="p-3 font-mono text-emerald-400 font-bold"><?= htmlspecialchars($s->getId()) ?></td>
                                <td class="p-3 font-medium text-white"><?= htmlspecialchars($s->getNama()) ?></td>
                                <td class="p-3 text-slate-300"><?= htmlspecialchars($s->getAsalDaerah()) ?></td>
                                <td class="p-3">
                                    <span class="bg-slate-900 text-emerald-300 text-xs px-2 py-1 rounded border border-emerald-800/50">
                                        <?= htmlspecialchars($s->getKategori()) ?>
                                    </span>
                                </td>
                                <td class="p-3 text-slate-300"><?= $s->getMasaPanen() ?> hr</td>
                                <td class="p-3 text-slate-300"><?= htmlspecialchars($s->getKandunganGizi()) ?></td>
                                <td class="p-3 text-slate-300"><?= htmlspecialchars($s->getJenisPupuk()) ?></td>
                                <td class="p-3 font-mono text-xs text-amber-300"><?= htmlspecialchars($s->getSertifikasi()) ?></td>
                                <td class="p-3 font-semibold text-emerald-400">Rp<?= number_format($s->getHargaPerKg(), 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>
</html>