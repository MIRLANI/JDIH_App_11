<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk Hukum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 20px;
        }

        .detail-item {
            margin-bottom: 10px;
        }

        .detail-item strong {
            display: inline-block;
            width: 150px;
        }

        .detail-value {
            display: inline-block;
            width: calc(100% - 150px);
            /* Lebar nilai dihitung berdasarkan lebar maksimum dikurangi lebar label */
            vertical-align: top;
            /* Aligntment vertical atas */
        }
    </style>
</head>

<body>

    <a href="/product-hukum">Kembali</a>

    <h1>Detail Produk Hukum</h1>

    <!-- Menampilkan detail produk hukum -->
    <div class="detail-item"><strong>Product Hukum:</strong><span class="detail-value">{{ $produkHukum->nama }}</span>
    </div>
    <div class="detail-item"><strong>Deskripsi:</strong><span class="detail-value">{{ $produkHukum->deskripsi }}</span>
    </div>
    <div class="detail-item"><strong>Materi Pokok:</strong><span
            class="detail-value">{{ $produkHukum->materi_pokok }}</span></div>
    <div class="detail-item"><strong>Judul:</strong><span class="detail-value">{{ $produkHukum->judul }}</span></div>
    <div class="detail-item"><strong>Tipe Dokumen:</strong><span
            class="detail-value">{{ $produkHukum->tipe_dokument }}</span></div>
    <div class="detail-item"><strong>Tahun:</strong><span class="detail-value">{{ $produkHukum->tahun }}</span></div>
    <div class="detail-item"><strong>Tempat Penetapan:</strong><span
            class="detail-value">{{ $produkHukum->tempat_penetapan }}</span></div>
    <div class="detail-item"><strong>Tanggal Penetapan:</strong><span
            class="detail-value">{{ $produkHukum->tanggal_penetapan }}</span></div>
    <div class="detail-item"><strong>Tanggal Pengundangan:</strong><span
            class="detail-value">{{ $produkHukum->tanggal_pengundangan }}</span></div>
    <div class="detail-item"><strong>Tanggal Perlaku:</strong><span
            class="detail-value">{{ $produkHukum->tanggal_berlaku }}</span></div>
    <div class="detail-item"><strong>Sumber:</strong><span class="detail-value">{{ $produkHukum->sumber }}</span></div>
    <div class="detail-item"><strong>Subjek:</strong><span class="detail-value">{{ $produkHukum->subjek }}</span></div>
    <div class="detail-item"><strong>Status:</strong><span class="detail-value">{{ $produkHukum->status }}</span></div>
    <div class="detail-item"><strong>Bahasa:</strong><span class="detail-value">{{ $produkHukum->bahasa }}</span></div>
    <div class="detail-item"><strong>Lokasi:</strong><span class="detail-value">{{ $produkHukum->lokasi }}</span></div>
    <div class="detail-item"><strong>Bidang:</strong><span class="detail-value">{{ $produkHukum->bidang }}</span></div>
    <div class="detail-item"><strong>Abstrak:</strong><span class="detail-value">{{ $produkHukum->abstrak }}</span>
    </div>
    <div class="detail-item"><strong>Category Hukum:</strong><span
            class="detail-value">{{ $produkHukum->categoryHukum->title }}</span></div>
    <div class="detail-item"><strong>File:</strong><span class="detail-value">{{ $produkHukum->file }}</span></div>

</body>

</html>
