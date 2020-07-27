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

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Data Pelajaran</h5>
                @if($errors->any())
                @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
                @endforeach
                @endif
                <form class="needs-validation" action="{{ route('mapel.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Mata Pelajaran</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Mata Pelajaran" name="nama_mapel">
                        </div>
                      </div>
                    <button class="btn btn-primary" type="submit">KIRIM</button>
                </form>

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
