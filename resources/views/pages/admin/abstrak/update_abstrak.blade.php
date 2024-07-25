<!-- Modal for each abstrak -->

<div class="modal fade" id="updateAbstractModal-{{ $peraturan->abstrak->id }}" tabindex="-1"
    aria-labelledby="updateAbstractModalLabel-{{ $peraturan->abstrak->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-nama" id="updateAbstractModalLabel-{{ $peraturan->abstrak->id }}">Update Abstrak Peraturan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form class="form" method="POST"
                    action="{{ route('update.abstrak', ['id' => $peraturan->abstrak->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="produk_hukum_id" class="form-label">Peraturan</label>
                        <select disabled class="form-select" name="peraturan_id">
                            <option value="{{ $peraturan->abstrak->id }}">
                                {{ $peraturan->nama ?? "" }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Abstrak</label>
                        <textarea class="form-control" name="nama" id="nama" rows="2">{{ optional($peraturan->abstrak)->nama }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="materi_pokok" class="form-label">Materi Pokok</label>
                        <textarea class="form-control" id="materi_pokok" name="materi_pokok" rows="3">{{ optional($peraturan->abstrak)->materi_pokok }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="abstrak" class="form-label">Abstrak</label>
                        <textarea class="form-control" id="abstrakInput" name="abstrak" rows="4" oninput="updateAbstrakList()">{{ optional($peraturan->abstrak)->abstrak }}</textarea>
                        <ul id="abstrakOutputList" class="mt-2">
                            @foreach (explode("\n", optional($peraturan->abstrak)->abstrak) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control" id="catatanInput" name="catatan" rows="4" oninput="updateCatatanList()">{{ optional($peraturan->abstrak)->catatan }}</textarea>
                        <ul id="catatanOutputList" class="mt-2">
                            @foreach (explode("\n", optional($peraturan->abstrak)->catatan) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




{{-- code untuk update catatan abstrak --}}
<script>
function updateCatatanList() {
    const catatanInput = document.getElementById('catatanInput');
    const catatanOutputList = document.getElementById('catatanOutputList');
    const lines = catatanInput.value.split('\n');
    if (lines.length > 3) {
        alert('Hanya boleh memasukkan maksimal 3 poin.');
        catatanInput.value = lines.slice(0, 3).join('\n');
        return;
    }
    let listItems = '';
    for (let line of lines) {
        if (line.trim() !== '') {
            listItems += `<li>${line.trim()}</li>`;
        }
    }
    catatanOutputList.innerHTML = listItems;
}
</script>



{{-- code untuk update abstrak --}}
<script>
function updateAbstrakList() {
    const abstrakInput = document.getElementById('abstrakInput');
    const abstrakOutputList = document.getElementById('abstrakOutputList');
    const lines = abstrakInput.value.split('\n');
    if (lines.length > 3) {
        alert('Hanya boleh memasukkan maksimal 3 poin.');
        abstrakInput.value = lines.slice(0, 3).join('\n');
        return;
    }
    let listItems = '';
    for (let line of lines) {
        if (line.trim() !== '') {
            listItems += `<li>${line.trim()}</li>`;
        }
    }
    abstrakOutputList.innerHTML = listItems;
}
</script>
