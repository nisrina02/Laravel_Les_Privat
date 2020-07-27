@extends('dashboard')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Selamat Datang di Les Privat {{ Session::get('nama') }}
                        <div class="page-title-subheading">salurkan profesi kalian bersama kami
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
                <h5 class="card-title">Edit Data Guru</h5>
                @foreach($data as $datas)
                <form class="needs-validation" action="{{ route('guru.update', $datas->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nama Guru</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" name="nama_guru" value="{{ $datas->nama_guru }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Alamat</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Address" name="alamat" value="{{ $datas->alamat }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nomor Telepon</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Phone Number" name="telp" value="{{ $datas->telp }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Email</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="E-mail" name="email" value="{{ $datas->email }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Password</label>
                            <input type="password" class="form-control" id="validationCustom01" placeholder="Password" name="password" value="{{ $datas->password }}">
                        </div>
                      </div>
                    <button class="btn btn-primary" type="submit">KIRIM</button>
                </form>
                @endforeach

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
