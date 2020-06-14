@extends('layout.admin')

@section('title')
<title>Dashboard</title>
@endsection

@section('content')
          <!-- Begin Page Content -->
          <main class="main">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Daftar Toko</li>
            </ol>
            <div class="container-fluid">
              <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">
                          List Toko Tersedia
                          <div class="float-right">
                            <a href="{{ route('admin-form')}}" class="btn btn-primary btn-sm">Tambah</a>
                          </div>
                        </h4>
                      </div>
                      <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="#" method="get">
                          <div class="input-group mb-3 col-md-3 float-right">
                            <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">Cari</button>
                            </div>
                          </div>
                        </form>
                        <div class="table-responsive">
                          <table class="table table-hover table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Logo Toko</th>
                                <th>Nama Toko</th>
                                <th>Lokasi</th>
                                <th>Kontak</th>
                                <th>Websites</th>
                                <th>Jumlah Mobil</th>
                                <th>Dibuat pada tanggal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($toko as $kios)
                              <tr>
                                <td>{{ $kios->id }}</td>
                                <td>
                                  <img src="{{ asset('storage/toko/' . $kios->logo_toko) }}" width="100px" height="100px" alt="{{ $kios->nama_toko }}">
                                </td>
                                <td> <strong>{{$kios->nama_toko}} </strong></td>
                                <td>
                                  {{ $kios->alamat }}
                                </td>
                                <td>{{$kios->nomor_hp}}</td>
                                <td>{{$kios->websites}}</td>
                                <td> {{ $kios->jumlah_mobil }}</td>
                                <td>{{ $kios->created_at->format('d-m-Y') }}</td>
                              </tr>
                              @empty
                              <tr>
                                <td colspan="8" class="text-center">Tidak ada data</td>
                              </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>        
          <!-- End of Main Content -->
          @endsection
        
