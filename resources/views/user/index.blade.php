@extends('layouts.main')


@section('content')

<!-- Modal -->
<div class="row">
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 ">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success mb-2"  data-toggle="modal" data-target="#tbluser"><i class="ni ni-fat-add"></i> Tambah Data</button>
                    </div>
                    @include('user.create')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Tabel Data Paket</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
               
                <th scope="col">No</th>
                <th scope="col">nama</th>
                <th scope="col">username</th>
                <th scope="col">role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($user as $u)
                <tr>
                   
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->role }}</td>
                    <td>
                        @include('user.edit')
                         <form action="{{ url('user/'.$u->id) }}" method="post" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="badge bg-primary border-0" onclick="return confirm('yakin mau di hapus manis?')"><i class="ni ni-basket"></i></button>
                        </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>

@endsection