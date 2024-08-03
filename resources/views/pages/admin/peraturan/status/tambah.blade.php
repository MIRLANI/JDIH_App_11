  {{-- status Hukum --}}
  <div class="mt-2">
      <h4 class="card-title"><b>Status Hukum</b></h4>
  </div>
  <div class="col-md-6 col-12 mt-3">
      <div class="form-group ">
          <label class="form-label" for="sumber">Mengubah </label>
          <select
              class="choices form-select multiple-remove @error('status') is-invalid @enderror"
              multiple="multiple" name="status_hukum[mengubah][]">
              <option value="">Pilih Hukum</option>
              @foreach ($peraturans as $produk)
                  <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.mengubah', $statusHukum['mengubah'] ?? [])))>
                      {{ $produk->nama }}
                  </option>
              @endforeach
          </select>
          @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>
  <div class="col-md-6 col-12 mt-3">
      <div class="form-group ">
          <label class="form-label" for="sumber">Diubah </label>
          <select
              class="choices form-select multiple-remove @error('status') is-invalid @enderror"
              multiple="multiple" name="status_hukum[diubah][]">
              <option value="">Pilih Hukum</option>
              @foreach ($peraturans as $produk)
                  <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.diubah', $statusHukum['diubah'] ?? [])))>
                      {{ $produk->nama }}
                  </option>
              @endforeach
          </select>
          @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>
  <div class="col-md-6 col-12 mt-3">
      <div class="form-group ">
          <label class="form-label" for="sumber">Mencabut </label>
          <select
              class="choices form-select multiple-remove @error('status') is-invalid @enderror"
              multiple="multiple" name="status_hukum[mencabut][]">
              <option value="">Pilih Hukum</option>
              @foreach ($peraturans as $produk)
                  <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.mencabut', $statusHukum['mencabut'] ?? [])))>
                      {{ $produk->nama }}
                  </option>
              @endforeach
          </select>
          @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>
  <div class="col-md-6 col-12 mt-3">
      <div class="form-group ">
          <label class="form-label" for="sumber">Dicabut </label>
          <select
              class="choices form-select multiple-remove @error('status') is-invalid @enderror"
              multiple="multiple" name="status_hukum[dicabut][]">
              <option value="">Pilih Hukum</option>
              @foreach ($peraturans as $produk)
                  <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.dicabut', $statusHukum['dicabut'] ?? [])))>
                      {{ $produk->nama }}
                  </option>
              @endforeach
          </select>
          @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>
</div>