<div class="modal fade" id="updateAksesModal-{{ $peraturan->id }}" tabindex="-1"
    aria-labelledby="updateAksesModalLabel-{{ $peraturan->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-nama" id="updateAksesModalLabel-{{ $peraturan->id }}">Update Akses Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form class="form" method="POST" action="{{ route('update.akses', ['id' => $peraturan->id]) }}">
                    @csrf
                    <div class="form-group mb-3" id="password_name-group">
                        <label for="password_name" class="form-label">Peraturan</label>
                        <input type="text" class="form-control" name="password_name" id="password_name" value="{{ $peraturan->nama ?? '-' }}"
                            placeholder="Masukkan Peraturan" disabled>
                    </div>

                    <div class="form-group mb-3" id="password_name-group">
                        <label for="password_name" class="form-label">Akses Dokumen</label>
                        <select class="form-select" name="password_id" id="password_id">
                            <option value="" selected>Public</option>
                                @foreach ($passwords as $Password)
                                    <option value="{{ $Password->id }}"
                                        {{ $peraturan->password_id == $Password->id ? 'selected' : '' }}>
                                        {{ $Password->password_name }}</option>
                                @endforeach
                        </select>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
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
