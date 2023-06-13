@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Anggota</h4>
            <p class="card-description">
              Daftar anggota perpustakaan
            </p>
            <table class="table table-bordered text-center">
              <thead>
                <tr class="table-dark">
                  <th>Id</th>
                  <th>Nama Anggota</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-info">
                  <td> {{ $member->id }} </td>
                  <td> {{ $member->name }} </td>
                  <td> {{ $member->email }} </td>
                  <td>{{ $member->gender }}</td>
                  <td>{{ $member->status }}</td>
                  <td>{{ $member->address }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection
<script>
  function confirmDelete(event) {
    if(!confirm("Apakah anda yakin ingin menghapus data?")){
      event.preventDefault()
      return false;
    }
  }
</script>