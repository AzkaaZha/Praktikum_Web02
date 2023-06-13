@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            <h4 class="card-title">Daftar Buku Tersedia</h4>
            <p class="card-description">
              Daftar buku yang tersedia di perpustakaan
            </p>
            <table class="table table-bordered text-center">
              <thead>
                <tr class="table-dark">
                  <th>Id</th>
                  <th>Judul</th>
                  <th>No ISBN</th>
                  <th> Jumlah Tersedia </th>
                </tr>
              </thead>
              <tbody>
                  <tr class="table-info">
                    <td> {{ $book->id }} </td>
                    <td> {{ $book->title }} </td>
                    <td> {{ $book->isbn }} </td>
                    <td> {{ $book->stok }} </td>
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