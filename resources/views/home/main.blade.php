@extends('home.master-view')
@section('main')
            {{-- Deskripsi Sekolah --}}
            <div class="p-5 text-center" style="background-color: skyblue">
              <div class="d-inline-flex gap-2 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/storage/{{ $profil->logo }}" alt="Profil Sekolah" style="width: 65%;">
                    </div>
                    <div class="col-md-8">
                        <p style="text-align: justify">{{ $profil->deskripsi }}</p>
                    </div>
                </div>
              </div>
            </div>
            {{-- Visi dan Misi Sekolah --}}
            <div class="p-5 text-center" style="background-color: white">
              <div class="gap-2 mb-5">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3>Visi</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{ $profil->visi }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3>Visi</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{ $profil->visi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card" style="width: 85%;border-style: none;">
                        <div class="card-header" style="background-color: white;">
                            <div class="card-title">
                                <h3>Sambutan Kepala Sekolah</h3>
                            </div>
                            <div class="card-body">
                                <img src="/storage/{{ $profil->gambar_kepsek }}" alt="Gambar Kepala Sekolah" style="width: 30%; margin-bottom: 50px; float: left; margin-right: 10px">
                                <p style="text-align: justify;">{{ $profil->sambutan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            {{-- Jurusan --}}
            <div class="p-5" style="background-color: skyblue">
                <h1 class="text-body-emphasis">Jurusan</h1>
                <div class="d-inline-flex gap-2 mb-5">
                  <div class="row justify-content-center">
                      @foreach ($jurusan as $data)
                      <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-header text-center">
                                <img src="/storage/{{ $data->logo }}" alt="Logo Jurusan" style="width: 80%">
                            </div>
                            <div class="card-body">
                                <h5>{{ $data->nama_jurusan }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
@endsection
