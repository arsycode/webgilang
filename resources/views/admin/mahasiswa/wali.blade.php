@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3>

            <div class="card-tools">
                <form action="/mahasiswa/search" class="from-aliane" method="GET">
                    <div class="input-group-append">
                        <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Jurusan</th>
                        <th>Nama Wali</th>
                        <th>Pekerjaan Wali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->jenkel}}</td>
                        <td>{{$mahasiswa->alamat}}</td>
                        <td>{{$mahasiswa->hp}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->wali['nama_wali']}}</td>
                        <td>{{$mahasiswa->wali['pekerjaan']}}</td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
