@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #D8D8D8;">
                    <div class="row">
                        <div class="col-md-10">
                            Tambah Data Buku
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-controll" action="store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label col-3">Judul Buku</label>
                            <input type="text" name="judul" class="formcontrol col-4" placeholder="judul buku">
                        </div>
                        @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label col-3">Penulis Buku</label>
                            <input type="text" name="penulis" class="formcontrol col-4" placeholder="penulis buku">
                        </div>
                        @error('penulis')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label col-3">Penerbit Buku</label>
                            <input type="text" name="penerbit" class="formcontrol col-4" placeholder="penerbit buku">
                        </div>
                        @error('penerbit')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label col-3">Tahun</label>
                            <input type="text" name="tahun" class="formcontrol col-4" placeholder="tahun">
                        </div>
                        @error('tahun')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label col-3 " >Gambar</label>
                            <input type="file" name="gambar" class="formcontrol " placeholder="gambar">
                        </div>
                        @error('gambar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                        </div>
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <center> <button type="submit" class="btn btn-success">Tambah Data</button> </center>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection