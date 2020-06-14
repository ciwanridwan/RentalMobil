@extends('layout.admin')

@section('title')
<title>Input</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Input toko</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('admin-store')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Toko</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_toko">Nama Toko</label>
                                    <input type="text" name="nama_toko" class="form-control" value="{{ old('nama_toko') }}" required>
                                    <p class="text-danger">{{ $errors->first('nama_toko') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Toko</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                                    <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="alamat">Alamat / Lokasi</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor Telepone / Handphone</label>
                                    <input type="number" name="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}" required>
                                    <p class="text-danger">{{ $errors->first('nomor_hp') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="websites">Websites</label>
                                    <input type="url" name="websites" class="form-control" value="{{ old('websites') }}" required>
                                    <p class="text-danger">{{ $errors->first('websites') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_mobil">Jumlah Mobil</label>
                                    <input type="number" name="jumlah_mobil" class="form-control" value="{{ old('jumlah_mobil') }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_mobil') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="logo_toko">Logo Toko</label>
                                    <input type="file" name="logo_toko" class="form-control" value="{{ old('logo_toko') }}" required>
                                    <p class="text-danger">{{ $errors->first('logo_toko') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection