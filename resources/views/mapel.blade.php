@extends('dashboard')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Selamat Datang di Les Privat {{ Session::get('nama') }}
                        <div class="page-title-subheading">Ayo pilih pelajaran kesukaan kalian
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    </div>
                </div>
              </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                </div>
            </div>
        </div>

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Daftar Pelajaran
        </h2>
      </div>
        <div class="body table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode Mapel</th>
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($data as $datas)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datas->id }}</td>
                <td>{{ $datas->nama_mapel}}</td>

                <td>

                  <form action="{{ route('mapel.destroy', $datas->id )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('mapel.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>

                  </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a href="{{ route('mapel.create') }}" class="btn btn-sm btn-success">Tambah Data</a>

        </div>
      </div>
    </div>
</div>
<div class="row">
</div>
</div>
<div class="app-wrapper-footer">
<div class="app-footer">
    <div class="app-footer__inner">
        <div class="app-footer-left">
            <ul class="nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        Footer Link 1
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        Footer Link 2
                    </a>
                </li>
            </ul>
        </div>
        <div class="app-footer-right">
            <ul class="nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        Footer Link 3
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <div class="badge badge-success mr-1 ml-0">
                            <small>NEW</small>
                        </div>
                        Footer Link 4
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
@stop
