@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div>
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book"></i>
        </span> Daftar Anggota
      </h3><br>
      <button type="button" class="btn btn-gradient-primary btn-fw">+ Tambah Anggota</button><br>
    </div><br>
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
                  <th> No</th>
                  <th>Nama Anggota</th>
                  <th> Asal </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-info">
                  <td> 1 </td>
                  <td> Bagus Achmad </td>
                  <td> Cilodong </td>
                  <td> <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a></td>
                </tr>
                <tr class="table-warning">
                  <td> 2 </td>
                  <td> Ahmad Fadli </td>
                  <td> Citayem </td>
                  <td> <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a></td>
                </tr>
                <tr class="table-danger">
                  <td> 3 </td>
                  <td> Fadhilah Neza Solikhah</td>
                  <td> Cileungsi </td>
                  <td> <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a></td>
                </tr>
                <tr class="table-success">
                  <td> 4 </td>
                  <td> Aulia Rahman </td>
                  <td> Depok </td>
                  <td> <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a></td>
                </tr>
                <tr class="table-primary">
                  <td> 5 </td>
                  <td> John Terry </td>
                  <td> London</td>
                  <td> <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection