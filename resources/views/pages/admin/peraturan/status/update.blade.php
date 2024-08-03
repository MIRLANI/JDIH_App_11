@php
$statusHukum = json_decode($product_hukum->status_hukum, true);
$statusKeys = ['mengubah', 'diubah', 'mencabut', 'dicabut'];
@endphp

<div class="mt-5"></div>
<div class="mt-2">
<h4 class="card-title"><b>Status Peraturan</b></h4>
</div>
<div class="col-md-6 col-12 mt-3">
<div class="form-group ">
    <label class="form-label" for="sumber">Mengubah </label>
    <div class="form-group">
        <select
            class="choices form-select multiple-remove @error('status') is-invalid @enderror"
            multiple="multiple" name="status_hukum[mengubah][]">
            <option value="">Pilih Hukum</option>
            @foreach ($peraturans as $produk)
                <option value="{{ $produk->id }}"
                    @if (old('status_hukum.mengubah') &&
                            is_array(old('status_hukum.mengubah')) &&
                            in_array($produk->id, old('status_hukum.mengubah'))) @selected(true)
                    @elseif (isset($statusHukum['mengubah']) &&
                            is_array($statusHukum['mengubah']) &&
                            in_array($produk->id, $statusHukum['mengubah']))
                        @selected(true) @endif>
                    {{ $produk->nama }}
                </option>
            @endforeach
        </select>
    </div>
</div>
</div>
<div class="col-md-6 col-12 mt-3">
<div class="form-group ">
    <label class="form-label" for="sumber">Diubah </label>
    <div class="form-group mandatory">
        <select
            class="choices form-select multiple-remove @error('status') is-invalid @enderror"
            multiple="multiple" name="status_hukum[diubah][]">
            <option value="">Pilih Hukum</option>
            @foreach ($peraturans as $produk)
                <option value="{{ $produk->id }}"
                    @if (old('status_hukum.diubah') &&
                            is_array(old('status_hukum.diubah')) &&
                            in_array($produk->id, old('status_hukum.diubah'))) @selected(true)
                    @elseif (isset($statusHukum['diubah']) && is_array($statusHukum['diubah']) && in_array($produk->id, $statusHukum['diubah']))
                        @selected(true) @endif>
                    {{ $produk->nama }}
                </option>
            @endforeach
        </select>
    </div>
</div>
</div>
<div class="col-md-6 col-12 mt-3">
<div class="form-group ">
    <label class="form-label" for="sumber">Mencabut </label>
    <div class="form-group mandatory">
        <select
            class="choices form-select multiple-remove @error('status') is-invalid @enderror"
            multiple="multiple" name="status_hukum[mencabut][]">
            <option value="">Pilih Hukum</option>
            @foreach ($peraturans as $produk)
                <option value="{{ $produk->id }}"
                    @if (old('status_hukum.mencabut') &&
                            is_array(old('status_hukum.mencabut')) &&
                            in_array($produk->id, old('status_hukum.mencabut'))) @selected(true)
                    @elseif (isset($statusHukum['mencabut']) &&
                            is_array($statusHukum['mencabut']) &&
                            in_array($produk->id, $statusHukum['mencabut']))
                        @selected(true) @endif>
                    {{ $produk->nama }}
                </option>
            @endforeach
        </select>
    </div>
</div>
</div>

<div class="col-md-6 col-12 mt-3">
<div class="form-group ">
    <label class="form-label" for="sumber">Dicabut </label>
    <div class="form-group">
        <select
            class="choices form-select multiple-remove @error('status') is-invalid @enderror"
            multiple="multiple" name="status_hukum[dicabut][]">
            <option value="">Pilih Hukum</option>
            @foreach ($peraturans as $produk)
                <option value="{{ $produk->id }}"
                    @if (old('status_hukum.dicabut') &&
                            is_array(old('status_hukum.dicabut')) &&
                            in_array($produk->id, old('status_hukum.dicabut'))) @selected(true)
                    @elseif (isset($statusHukum['dicabut']) &&
                            is_array($statusHukum['dicabut']) &&
                            in_array($produk->id, $statusHukum['dicabut']))
                        @selected(true) @endif>
                    {{ $produk->nama }}
                </option>
            @endforeach
        </select>
    </div>
</div>
</div>