@include('pages.users.modalAbstra')

<section id="multiple-column-form" class="full-background"
    style=" background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center; background-attachment: fixed;">
    <div class="container">

        <div class="row match-height ">
            <div class="col-lg-9 col-md-8 col-sm-10 col-12 mx-auto  ">
                <div class="card" style="margin: 50px;">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <div
                                                    class="d-flex flex-column flex-md-row gap-2 gap-md-3 align-items-center justify-content-center w-100">
                                                    <input type="text" id="first-name-column"
                                                        class="form-control px-5 " placeholder="Search"
                                                        name="fname-column">
                                                    <button type="submit"
                                                        class="btn btn-primary col-12 col-md-auto">Search</button>
                                                    <button class="btn btn-light-secondary col-12 col-md-auto"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample"
                                                        onclick="toggleZoomBackground();">
                                                        Adv.Search</button>
                                                </div>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="last-name-column">Tentang</label>
                                                                    <input type="text" id="last-name-column"
                                                                        class="form-control"
                                                                        placeholder="Tentang Peraturan"
                                                                        name="lname-column">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="city-column">Nomor</label>
                                                                    <input type="text" id="city-column"
                                                                        class="form-control"
                                                                        placeholder="Nomor Peraturan"
                                                                        name="city-column">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="country-floating">Tahun</label>
                                                                    <div class="form-group">
                                                                        <select
                                                                            class="choices form-select multiple-remove"
                                                                            multiple="multiple">

                                                                            <optgroup label="Years">
                                                                                @foreach ($produkHukums as $produk)
                                                                                <option
                                                                                    value="{{ $produk->tahun ? $produk->tahun : '' }}">
                                                                                    {{ $produk->tahun ? $produk->tahun : '' }}
                                                                                </option>
                                                                            @endforeach
                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="company-column">Tag</label>
                                                                    <div class="form-group">
                                                                        <select
                                                                            class="choices form-select multiple-remove"
                                                                            multiple="multiple">
                                                                            <optgroup label="Tema Peraturan">
                                                                                @foreach ($subjekHukums as $subjek)
                                                                                <option
                                                                                    value="{{ $subjek->nama ? $subjek->nama : '' }}">
                                                                                    {{ $subjek->nama ? $subjek->nama : '' }}
                                                                                </option>
                                                                            @endforeach

                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="email-id-column">Jenis Peraturan</label>
                                                                    <div class="form-group">
                                                                        <select
                                                                            class="choices form-select multiple-remove"
                                                                            multiple="multiple">
                                                                            <optgroup label="Jenis Peraturan">
                                                                                <option value="Mbkm">Mbkm</option>
                                                                                <option value="Mbkm">Mbkm</option>
                                                                                <option value="Mbkm">Mbkm</option>
                                                                                <option value="Mbkm">Mbkm</option>
                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="col-11 my-5">
    <h4 class="fw-bold text-center">PENCARIAN PERATURAN</h4>
    <p class="mb-0 text-center">Kriteria: Tentang: <strong>keuangan</strong></p>
</div>


<div class="card w-75 mx-auto my-5"> <!-- Changed width from w-100 to w-75 -->
    <div class="card-body">
        <div class="row align-item mx-1s-center">
            <div class="col-5 col-md-auto">
                <i class="bi bi-file-earmark-text-fill mb-3 me-3" style="font-size:100px;"></i>
            </div>
            <div class="col-12 col-md">
                <h6 class="mb-4">Peraturan Gubernur (PERGUB) Provinsi Nanggroe Aceh Darussalam No. 20 Tahun 2017
                </h6>
                <a href="" style="font-size: 25px;">Penetapan dan Penyaluran Belanja Bantuan Keuangan kepada
                    Kabupaten Aceh Timur
                    Tahun Anggaran 2017</a>

                <span class="d-block mt-2" style="color: gray;">Bantuan, Sumbangan, Bencana/Kebencanaan, dan
                    Penanggulangan
                    Bencana</span>


            </div>

            <hr class="m-2">
            <h6 class="mb-2">Status Peraturan:</h6>
            <div class="mb-3">
                <strong class="">Dicabut dengan:</strong>
                <ul>
                    <li><a href=""><span style="color: red">Peraturan BPK Nomor Tiga Tahun 2016</span></a>
                        tentang Kode Etik Badan Pemeriksa Pemeriksa</li>
                    <li><a href=""><span style="color: red">Peraturan BPK Nomor Tiga Tahun 2016</span></a>
                        tentang Kode Etik Badan Pemeriksa Pemeriksa</li>
                </ul>
                <strong>Mencabut:</strong>
                <ul>
                    <li><span style="color: red">Peraturan BPK No. 2 Tahun 2007</span> tentang Kode Etik Badan
                        Pemeriksa Keuangan Republik Indonesia</li>
                </ul>
            </div>
        </div>
        <hr>

        <div class="d-flex justify-content-between align-item mx-1s-center">
            <p>Download: <a class="bi bi-file-earmark-pdf" href="#"><span
                        class="mx-1">file-hello.pdf</span></a>
            </p>
            <button type="button" class="btn btn-light-secondary px-4" data-bs-toggle="modal"
                data-bs-target="#large">Abstrak</button>
        </div>
    </div>
</div>




<div class="card-body text-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagination-primary">
            <li class="page-item mx-1 "><a class="page-link" href="#">Prev</a></li>
            <li class="page-item mx-1"><a class="page-link" href="#">1</a></li>
            <li class="page-item mx-1 active"><a class="page-link" href="#">2</a></li>
            <li class="page-item mx-1"><a class="page-link" href="#">3</a></li>
            <li class="page-item mx-1"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>
