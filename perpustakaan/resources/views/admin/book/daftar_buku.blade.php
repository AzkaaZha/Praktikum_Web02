@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div>
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book"></i>
        </span> Daftar Buku
      </h3><br>
      <a href="{{url('book/form_buku')}}"><button type="button" class="btn btn-gradient-primary btn-fw" >+ Tambah Buku</button></a><br>
    </div><br>
    <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Buku Tersedia</h4>
            <p class="card-description">
              Daftar buku yang tersedia di perpustakaan
            </p>
            <table class="table table-bordered text-center">
              <thead>
                <tr class="table-dark">
                  <th> No</th>
                  <th>Judul</th>
                  <th> Jumlah Tersedia </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($books as $book)
                  <tr class="table-info">
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $book->title }} </td>
                    <td> {{ $book->stok }} </td>
                    <td> 
                      <a class="btn btn-primary" href="">View</a>
                      <a class="btn btn-warning" href="">Edit</a>
                      <a class="btn btn-danger" href="">Delete</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection