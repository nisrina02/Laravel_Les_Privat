@extends('dashboard')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Selamat Datang di Les Privat {{ Session::get('nama_murid') }}
                        <div class="page-title-subheading">Ayo mulai belajar bersama kami
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
                  <div class="card-header-tab card-header">
                      <div class="card-header-title">
                          <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                          Your Profile
                      </div>
                  </div>
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div align="center">ID Siswa : {{ Session::get('id') }}</div>
                    </div>
                  </div>
                  <br>
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div align="center">Nama Lengkap : {{ Session::get('nama_murid') }}</div>
                    </div>
                  </div>
                  <br>
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div align="center">Alamat : {{ Session::get('alamat') }}</div>
                    </div>
                  </div>
                  <br>
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div align="center">Nomor Telepon : {{ Session::get('telp') }}</div>
                    </div>
                  </div>
                  <br>
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div align="center">Email : {{ Session::get('email') }}</div>
                    </div>
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
