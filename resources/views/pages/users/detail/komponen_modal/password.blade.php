  <!-- Password Modal -->
  <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title" id="passwordModalLabel">Maaf, Dokumen Ini Membutuhkan Kata Sandi</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="passwordForm" action="{{ route('password', ["id" => $peraturan->id, "slug" => $peraturan->slug]) }}" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="passwordInput" class="form-label">Password</label>
                          <input type="password" class="form-control" id="passwordInput" name="password" required placeholder="Masukan Password">
                      </div>
                      <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary mx-3">Lihat</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
