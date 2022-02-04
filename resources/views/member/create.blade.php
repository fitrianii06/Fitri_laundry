<!-- Modal -->
<div class="modal fade" id="tblmember" tabindex="-1" aria-labelledby="tblmemberLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tblmemberLabel">Tambah Member</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/member" method="POST" class="mb-5">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                  @error('nama')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat </label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                  @error('alamat')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin </label>
                  <select class="form-select form-select mb-3" aria-label=".form-select example" id="jenis_kelamin" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option name="jenis_kelamin" value="L">Laki-Laki</option>
                    <option name="jenis_kelamin" value="P">Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="telepon" class="form-label">Telepon</label>
                  <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" required autofocus value="{{ old('telepon') }}">
                  @error('telepon')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Tambahkan</button>
        </div>
            </form>
      </div>
    </div>
</div>
