<!-- Modal for each abstrak -->
@foreach ($AbstractHukums as $abstrak)
    <div class="modal fade" id="updateAbstractModal-{{ $abstrak->id }}" tabindex="-1"
        aria-labelledby="updateAbstractModalLabel-{{ $abstrak->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAbstractModalLabel-{{ $abstrak->id }}">Update Abstrak Peraturan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <form class="form" method="POST"
                        action="{{ route('update.abstrak', ['id' => $abstrak->id]) }}">
                        @csrf
                        {{-- @dd($abstrak->produkHukum) --}}
                        <div class="mb-3">
                            <label for="peraturan_id" class="form-label">Peraturan</label>
                            <select disabled class="form-select" name="peraturan_id">
                                <option value="{{ $abstrak->peraturan_id }}">
                                    {{ $abstrak->peraturans->nama ?? "" }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama Abstrak</label>
                            <textarea class="form-control" name="title" id="title" rows="2">{{ $abstrak->title }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="materi_pokok" class="form-label">Materi Pokok</label>
                            <textarea class="form-control" id="materi_pokok" name="materi_pokok" rows="3">{{ $abstrak->materi_pokok }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="abstrak" class="form-label">Abstrak</label>
                            <textarea class="form-control" id="abstrakInput" name="abstrak" rows="4" oninput="updateAbstrakList()">{{ $abstrak->abstrak }}</textarea>
                            <ul id="abstrakOutputList" class="mt-2">
                                @foreach (explode("\n", $abstrak->abstrak) as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <textarea class="form-control" id="catatanInput" name="catatan" rows="4" oninput="updateCatatanList()">{{ $abstrak->catatan }}</textarea>
                            <ul id="catatanOutputList" class="mt-2">
                                @foreach (explode("\n", $abstrak->catatan) as $item)
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
@endforeach



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
