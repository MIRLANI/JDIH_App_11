<div class="card my-3 p-2 ">
    <div class="card-body d-flex justify-content-between align-items-center"
        style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi mb-4 bi-list-ul me-3 align-self-center" style="font-size: 24px;"></i>
            <h6 class="mb-0 align-self-center">METADATA PERATURAN</h6>
        </div>
    </div>
    <hr class="mt-0 mx-auto" style="width: 95%;">
    <div class="card-body mx-2">
        <table class="table table-hover table-striped">

            <tbody>
                <tr>
                    <th scope="row">Tipe Dokumen</th>
                    <td>{{ $produkHukum->tipeHukum->nama ?? '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Judul</th>
                    <td>{{ $produkHukum->judul ? $produkHukum->judul : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">T.E.U.</th>
                    <td>{{ $produkHukum->teu ? $produkHukum->teu : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Nomor</th>
                    <td>{{ $produkHukum->nomor ? $produkHukum->nomor : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bentuk</th>
                    <td>{{ optional($produkHukum->categoryHukum)->title ?? '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bentuk Singkat</th>
                    <td>{{ $produkHukum->categoryHukum->short_title ? $produkHukum->categoryHukum->short_title : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tahun</th>
                    <td>{{ $produkHukum->tahuns->tahun ?? '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Penetapan</th>
                    <td>{{ $produkHukum->lokasi ?? '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Penetapan</th>
                    <td>{{ $produkHukum->tempat_penetapan ? $produkHukum->tempat_penetapan : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Pengundangan</th>
                    <td>{{ $produkHukum->tanggal_pengundangan ? $produkHukum->tanggal_pengundangan : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Berlaku</th>
                    <td>{{ $produkHukum->tanggal_berlaku ? $produkHukum->tanggal_berlaku : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Sumber</th>
                    <td>{{ $produkHukum->sumber ? $produkHukum->sumber : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Subjek</th>
                    <td>{{ $produkHukum->subjekHukums->pluck('nama')->isNotEmpty() ? implode(', ', $produkHukum->subjekHukums->pluck('nama')->toArray()) : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>
                        <span
                            style="padding: 1px 10px; color: white; background-color: {{ $produkHukum->status == 'berlaku' ? '#008000' : '#800000' }}; border-radius: 5px;">
                            <b>
                                {{ $produkHukum->status ? $produkHukum->status : 'Tidak Diketahui' }}</b>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Bahasa</th>
                    <td>{{ $produkHukum->bahasa ? $produkHukum->bahasa : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Lokasi</th>
                    <td>{{ $produkHukum->lokasi ? $produkHukum->lokasi : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bidang</th>
                    <td>{{ $produkHukum->bidang ? $produkHukum->bidang : '' }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>