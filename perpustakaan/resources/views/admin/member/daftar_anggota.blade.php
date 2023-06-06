@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div>
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book"></i>
        </span> Daftar Anggota
      </h3><br>
      <a class="btn btn-gradient-primary btn-fw" href="{{url('member/create')}}">  + Tambah Anggota</a><br>
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
                  <td> 
                    <a class="btn btn-primary btn-sm" href="">View</a>
                    <a class="btn btn-warning btn-sm" href="">Edit</a>
                    <form class="d-inline" action="{{ url('member/destroy', $member->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button  class="btn btn-danger btn-sm" type="submit" onclick="return confirmDelete(event)">Delete</button>
                    </form>
                </tr>
                @endforeach
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