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
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($members as $member)
                <tr class="table-info">
                  <td> {{ $loop->iteration }} </td>
                  <td> {{ $member->name }} </td>
                  <td> {{ $member->email }} </td>
                  <td>{{ $member->gender }}</td>
                  <td>{{ $member->status }}</td>
                  <td>{{ $member->address }}</td>
                  <td> <a class="btn btn-primary" href="">View</a>
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