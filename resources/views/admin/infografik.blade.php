@extends('layouts-admin.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Infografik COVID 19
                <div class="page-title-subheading">Desa Sumberejo
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="app">
            @include('layouts-admin.flash')
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="mb-3 card">
            <div class="card-body">
                <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                    <li class="nav-item">
                        <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                            <span class="nav-text">Form</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                            <span class="nav-text">Infografik</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                        <br>
                        <h5 class="card-title">TAMBAH INFOGRAFIK</h5>
                        <div class="card-body">
                            <form action="{{route('tambah.infografik')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="position-relative row form-group"><label for="judul"
                                        class="col-sm-2 col-form-label">Judul Infografik</label>
                                    <div class="col-sm-10"><input name="judul" id="judul"
                                            placeholder="Masukkan Judul Infografik" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="foto"
                                        class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10"><input name="foto" id="foto" type="file"
                                            class="form-control-file" accept="image/*">
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                    <button class="btn btn-secondary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified">
                                @php
                                $i = 1 ;
                                @endphp
                                @foreach ($data as $tab)
                                @if ( $i === 1)
                                <li class="nav-item"><a data-toggle="tab" href="#tab-{{$tab->id_infografik}}"
                                        class="active nav-link">Infografik {{$i}}</a></li>
                                @else
                                <li class="nav-item"><a data-toggle="tab" href="#tab-{{$tab->id_infografik}}"
                                        class="nav-link">Infografik {{$i}}</a></li>
                                @endif
                                @php
                                $i++;
                                @endphp
                                @endforeach
                            </ul>

                            <div class="tab-content">
                                @php
                                $j = 1 ;
                                @endphp
                                @foreach ($data as $infografik)
                                @if ( $j === 1)
                                <div class="tab-pane active" id="tab-{{$infografik->id_infografik}}" role="tabpanel">
                                    <form action="{{ route('update.infografik' , $infografik->id_infografik)}}"
                                        method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}{{method_field('PATCH')}}
                                        <div class="position-relative row form-group"><label for="judul"
                                                class="col-sm-2 col-form-label">Judul Infografik</label>
                                            <div class="col-sm-10"><input name="judul" id="judul"
                                                    placeholder="Masukkan Nama Infografik" type="text"
                                                    class="form-control" value="{{ $infografik->judul }}"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="foto"
                                                class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-10"><input name="foto" id="foto" type="file"
                                                    class="form-control-file" accept="image/*">
                                                <img src="{{asset('foto/infografik')}}/{{$infografik->foto}}"
                                                    class="img-thumbnail">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="position-relative row btn-group form-inline offset-md-3 col-md-5">
                                            <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                    </form>
                                    <div class="col-sm-10 offset-sm-1 col-md-2 form-group">
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#{{$infografik->id_infografik}}">Hapus</button>
                                    </div>
                                </div>
                                @else
                                <div class="tab-pane" id="tab-{{$infografik->id_infografik}}" role="tabpanel">
                                    <form action="{{ route('update.infografik' , $infografik->id_infografik)}}"
                                        method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}{{method_field('PATCH')}}
                                        <div class="position-relative row form-group"><label for="nama"
                                                class="col-sm-2 col-form-label">Nama Infografik</label>
                                            <div class="col-sm-10"><input name="nama" id="nama"
                                                    placeholder="Masukkan Nama Inforgrafik" type="text" class="form-control"
                                                    value="{{ $infografik->judul }}"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="foto"
                                                class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-10"><input name="foto" id="foto" type="file"
                                                    class="form-control-file" accept="image/*">
                                                <img src="{{asset('foto/infografik')}}/{{$infografik->foto}}"
                                                    class="img-thumbnail">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="position-relative row btn-group form-inline offset-md-3 col-md-5">
                                            <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                    </form>
                                    <div class="col-sm-10 offset-sm-1 col-md-2 form-group">
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#{{$infografik->id_infografik}}">Hapus</button>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @php
                            $j++;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@foreach ($data as $item)
<div class="modal fade" id="{{$item->id_infografik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Infografik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus inforgrafik ini ?
            </div>
            <div class="modal-footer">
                <form action="{{ route('delete.infografik' , $item->id_infografik)}}" method="POST">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{csrf_field()}}{{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- Akhir Modal Hapus  --}}