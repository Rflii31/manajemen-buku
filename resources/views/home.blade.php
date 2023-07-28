@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('messagedelete'))
            <div class="alert alert-warning alert-dismissible fade show">
                {{ session()->get('messagedelete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header" style="background-color: #D8D8D8;">{{ 'Dashboard' }}
                        <!-- <button type="button" class="btn btn-success float-end"><a href="tambah-data" style="text-decoration: none; color: white;">Tambah Data</a></button> -->
                        <a href="tambah-data" class="btn btn-success float-end">Tambah Data</a>
                    </div>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar Buku</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($buku as $item)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td> <img src="{{ asset('/storage/img/' . $item->gambar) }}"
                                            style="width: 150px; height:150px;" alt=""></td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>
                                        <?php $id = $item->id; ?>
                                        <a class="btn btn-primary me-1" href="edit-data/{{$id }}">Edit Data</a>
                                        <a class="btn btn-danger" href="delete/{{ $id }}">Hapus Data</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
