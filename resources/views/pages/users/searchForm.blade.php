<form class="form" method="get" action="{{ route('search') }}">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="row align-items-center ">
                    <div
                        class="d-flex mb-2 flex-column flex-md-row gap-2 gap-md-3 align-items-center justify-content-center w-100">
                        <input type="text" id="first-name-column" value="{{ request('keyword') }}"
                            class="form-control px-5 col" placeholder="Search" name="keyword">
                        <button type="submit" class="btn btn-primary col-12 col-md-auto">Search</button>
                        <button class="btn btn-light-secondary col-12 col-md-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-controls="collapseExample"
                            onclick="toggleZoomBackground();">
                            Adv.Search</button>
                    </div>

                    <div class="collapse {{ request()->get('status') == true || request()->get('nomor') == true || request()->get('tahun') == true || request()->get('tag') == true || request()->get('sumber') == true ? 'show' : '' }}"
                        id="collapseExample">
                        <hr>
                        <div class="card card-body shadow-sm m-2 p-2">
                            <div class="row g-3">
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last-name-column">Tentang</label>
                                        <input type="text" id="last-name-column"
                                            value="{{ request('tentang') ?? '' }}" class="form-control"
                                            placeholder="Tentang Peraturan" name="tentang">
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city-column m-1">Sumber</label>
                                        <select name="sumber" id="sumber" class="form-control">
                                            <option value="">Pilih Sumber Peraturan</option>
                                            @foreach ($sumbers as $sumber)
                                                <option value="{{ $sumber->username }}"
                                                    {{ request()->filled('sumber') && request('sumber') == $sumber->username ? 'selected' : '' }}>
                                                    {{ $sumber->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country-floating">Tahun</label>
                                        <select class="choices form-select multiple-remove" multiple="multiple"
                                            name="tahun[]">
                                            <optgroup label="Years">
                                                @foreach ($tahuns as $tahun)
                                                    <option value="{{ $tahun->tahun }}"
                                                        {{ in_array($tahun->tahun, (array) request('tahun', [])) ? 'selected' : '' }}>
                                                        {{ $tahun->tahun }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company-column">Tag</label>
                                        <select class="choices form-select multiple-remove" multiple="multiple"
                                            name="tag[]">
                                            <optgroup label="Jenis Peraturan">
                                                @foreach ($tagPeraturans as $subjek)
                                                    <option value="{{ $subjek->nama }}"
                                                        {{ is_array(request('tag')) ? (in_array($subjek->nama, request('tag')) ? 'selected' : '') : (request('tag') == $subjek->nama ? 'selected' : '') }}>
                                                        {{ $subjek->nama }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status-column">Status</label>
                                        <select class="form-select" name="status">
                                            <option value="">Pilih Status Peraturan</option>
                                            <option value="berlaku" {{ request('status') == 'berlaku' ? 'selected' : '' }}>Berlaku</option>
                                            <option value="tidak berlaku" {{ request('status') == 'tidak berlaku' ? 'selected' : '' }}>Tidak Berlaku</option>
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
</form>
