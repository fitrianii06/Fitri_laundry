<!-- Button trigger modal -->
<button type="button" class="badge bg-success border-0" data-toggle="modal" data-target="#edituserModal{{ $u->id }}">
    <i class="ni ni-settings"></i>
</button>

<!-- Modal Edit -->
<div class="modal fade" id="edituserModal{{ $u->id }}" tabindex="-1" aria-labelledby="edituserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-dark">
             <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
             <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ url('user/' .$u->id) }}" method="POST" class="text-dark">
                @method('PUT')
             @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $u->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $u->username) }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="{{ old('password', $u->password) }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">role</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" required autofocus value="{{ old('role', $u->role) }}">
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark btn-outline-success border-0">Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal Edit -->
