<!-- Modal -->
<div class="modal fade" id="tbluser" tabindex="-1" aria-labelledby="tbluserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tbluserLabel">Tambah User</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/user" method="POST" class="mb-5">
                @csrf
                <input type="hidden" name="id_outlet" value="{{ Auth::user()->id_outlet }}">
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                  @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">email </label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
                  @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
    
          
                <div class="mb-3">
                  <label for="username" class="form-label">username </label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username') }}">
                  @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">password </label>
                  <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="{{ old('password') }}">
                  @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="role" class="form-label">role</label>
                  <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" required autofocus value="{{ old('role') }}">
                  @error('role')
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
