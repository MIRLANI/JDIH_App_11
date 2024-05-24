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
                    <td>{{ $detailHukum->tipe_dokumen ? $detailHukum->tipe_dokumen : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Judul</th>
                    <td>{{ $detailHukum->judul ? $detailHukum->judul : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">T.E.U.</th>
                    <td>{{ $detailHukum->teu ? $detailHukum->teu : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Nomor</th>
                    <td>{{ $detailHukum->nomor ? $detailHukum->nomor : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bentuk</th>
                    <td>{{ optional($detailHukum->categoryHukum)->title ?? '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bentuk Singkat</th>
                    <td>{{ $detailHukum->categoryHukum->short_title ? $detailHukum->categoryHukum->short_title : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tahun</th>
                    <td>{{ $detailHukum->tahun ? $detailHukum->tahun : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Penetapan</th>
                    <td>{{ $detailHukum->lokasi }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Penetapan</th>
                    <td>{{ $detailHukum->tempat_penetapan ? $detailHukum->tempat_penetapan : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Pengundangan</th>
                    <td>{{ $detailHukum->tanggal_pengundangan ? $detailHukum->tanggal_pengundangan : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Berlaku</th>
                    <td>{{ $detailHukum->tanggal_berlaku ? $detailHukum->tanggal_berlaku : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Sumber</th>
                    <td>{{ $detailHukum->sumber ? $detailHukum->sumber : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Subjek</th>
                    <td>{{ $detailHukum->subjekHukums->pluck('nama')->isNotEmpty() ? implode(', ', $detailHukum->subjekHukums->pluck('nama')->toArray()) : '' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>
                        <span
                            style="padding: 1px 10px; color: white; background-color: {{ $detailHukum->status == 'berlaku' ? '#008000' : '#800000' }}; border-radius: 5px;">
                            <b>
                                {{ $detailHukum->status ? $detailHukum->status : 'Tidak Diketahui' }}</b>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Bahasa</th>
                    <td>{{ $detailHukum->bahasa ? $detailHukum->bahasa : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Lokasi</th>
                    <td>{{ $detailHukum->lokasi ? $detailHukum->lokasi : '' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bidang</th>
                    <td>{{ $detailHukum->bidang ? $detailHukum->bidang : '' }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <p style="color: red">Halaman ini telah diakses 2700 kali</p>
    </div>
</div>