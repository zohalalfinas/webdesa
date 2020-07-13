@extends('layouts-admin.master')
@section('content')
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Produk
                                    <div class="page-title-subheading">Desa Sumberejo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Surat Keterangan</h5>
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Nomor Surat</label>
                                        <input name="nomor" placeholder="Masukkan Nomor Surat" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">Nama Peminta</label>
                                        <input name="nama" placeholder="Masukkan Nama"
                                            type="text" class="form-control">
                                    </div>
                                    <button class="mt-1 btn btn-primary" onclick="tambah()">Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>    
@endsection