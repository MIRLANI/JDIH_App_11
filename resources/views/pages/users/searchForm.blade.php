<form class="form" method="get">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="row align-items-center">
                    <div
                        class="d-flex flex-column flex-md-row gap-2 gap-md-3 align-items-center justify-content-center w-100">
                        <input type="text" id="first-name-column" class="form-control px-5 col" placeholder="Search"
                            name="keyword">
                        <button type="submit" class="btn btn-primary col-12 col-md-auto">Search</button>
                        <button class="btn btn-light-secondary col-12 col-md-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample" onclick="toggleZoomBackground();">
                            Adv.Search</button>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body shadow-sm">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Tentang</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Tentang Peraturan" name="tentang">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Nomor</label>
                                        <input type="text" id="city-column" class="form-control"
                                            placeholder="Nomor Peraturan" name="nomor">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Tahun</label>
                                        <div class="form-group">
                                            <select class="choices form-select multiple-remove" multiple="multiple"
                                                name="tahun[]">
                                                <optgroup label="Years">
                                                    @foreach ($produkHukums as $produk)
                                                        <option value="{{ $produk->tahun ? $produk->tahun : '' }}">
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
                                            <select class="choices form-select multiple-remove" multiple="multiple"
                                                name="tag[]">
                                                <optgroup label="Tema Peraturan">
                                                    @foreach ($subjekHukums as $subjek)
                                                        <option value="{{ $subjek->nama ? $subjek->nama : '' }}">
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
                                            <select class="choices form-select multiple-remove" multiple="multiple"
                                                name="jenis[]">
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
