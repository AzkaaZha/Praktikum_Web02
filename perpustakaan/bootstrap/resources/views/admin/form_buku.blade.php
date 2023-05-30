@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Buku</h4>
            <p class="card-description"> Form Penambahan Buku </p>
            <form class="forms-sample">
              <div class="form-group row">
                <label for="judul" class="col-sm-3 col-form-label">Judul Buku</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku">
                </div>
              </div>
              <div class="form-group row">
                <label for="stok" class="col-sm-3 col-form-label">Stok Buku</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="stok" placeholder="Masukkan Jumlah Tersedia">
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection