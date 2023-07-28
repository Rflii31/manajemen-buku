@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #D8D8D8;">
                    <div class="row">
                        <div class="col-md-10">
                            Edit Data Buku
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-controll" action="{{$buku->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label col-3">Judul Buku</label>
                            <input type="text" name="judul" class="formcontrol col-4" placeholder="judul buku" value="{{$buku->judul}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-3">Penulis Buku</label>
                            <input type="text" name="penulis" class="formcontrol col-4" placeholder="penulis buku" value="{{$buku->penulis}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-3">Penerbit Buku</label>
                            <input type="text" name="penerbit" class="formcontrol col-4" placeholder="penerbit buku" value="{{$buku->penerbit}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-3">Tahun</label>
                            <input type="text" name="tahun" class="formcontrol col-4" placeholder="tahun" value="{{$buku->tahun}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-3 " >Gambar</label>
                            <input type="file" name="gambar" class="formcontrol " placeholder="gambar">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3">{{$buku->deskripsi}}</textarea>
                        </div>
                        <div class="mb-3">
                            <center> <button type="submit" class="btn btn-primary">Edit Data</button> </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection