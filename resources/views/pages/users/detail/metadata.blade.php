<div class="card my-3 p-2 ">
    <div class="card-body d-flex justify-content-between align-items-center"
        style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi mb-4 bi-list-ul me-3 align-self-center" style="font-size: 24px;"></i>
            <h6 class="mb-0 align-self-center">METADATA PERATURAN</h6>
        </div>
    </div>
    <hr class="mt-0 mx-auto" style="width: 95%;">
    <div class="card-body ">
        <table class="table table-hover table-striped">

            <tbody>
                <tr>
                    <th scope="row">Sumber Peraturan</th>
                    <td>{{ $peraturan->user->username ?? '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Judul</th>
                    <td>{{ $peraturan->judul ? $peraturan->judul : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Nomor</th>
                    <td>{{ $peraturan->nomor ? $peraturan->nomor : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">T.E.U.</th>
                    <td>{{ $peraturan->teu ? $peraturan->teu : '-' }}</td>
                </tr>
                
                    <th scope="row">Jenis Dokumen</th>
                    <td>{{ optional($peraturan->ketegori)->title ?? '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Singkatan Jenis</th>
                    <td>{{ $peraturan->ketegori->short_title ? $peraturan->ketegori->short_title : '-' }}
                    </td>
                </tr>
               
                <tr>
                    <th scope="row">Tahun</th>
                    <td>{{ $peraturan->tahuns->tahun ?? '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Penetapan</th>
                    <td>{{ $peraturan->tempat_penetapan ?? '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Penetapan</th>
                    <td>{{ $peraturan->tanggal_penetapan ? $peraturan->tanggal_penetapan : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Pengundangan</th>
                    <td>{{ $peraturan->tanggal_pengundangan ? $peraturan->tanggal_pengundangan : '-' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Berlaku</th>
                    <td>{{ $peraturan->tanggal_berlaku ? $peraturan->tanggal_berlaku : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Halaman</th>
                    <td>{{ $peraturan->jumlah_halaman ? $peraturan->jumlah_halaman : '-' }} Halaman</td>
                </tr>
                <tr>
                    <th scope="row">Subjek</th>
                    <td>{{ $peraturan->tagPeraturans->pluck('nama')->isNotEmpty() ? implode(', ', $peraturan->tagPeraturans->pluck('nama')->toArray()) : '-' }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>
                        <span
                            style="padding: 1px 10px; color: white; background-color: {{ $peraturan->status == 'berlaku' ? '#008000' : '#800000' }}; border-radius: 5px;">
                            <b>
                                {{ $peraturan->status ? $peraturan->status : 'Tidak Diketahui' }}</b>
                        </span>
                    </td>
                </tr>
               
                <tr>
                    <th scope="row">Bahasa</th>
                    <td>{{ $peraturan->bahasa ? $peraturan->bahasa : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Lokasi</th>
                    <td>{{ $peraturan->lokasi ? $peraturan->lokasi : '-' }}</td>
                </tr>
                <tr>
                    <th scope="row">Bidang</th>
                    <td>{{ $peraturan->bidang ? $peraturan->bidang : '-' }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>