@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Dosen</h3>

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
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Nama Mahasiswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $dosen)
                    <tr>
                        <td>{{$dosen->nidn}}</td>
                        <td>{{$dosen->nama_dosen}}</td>
                        <td>
                            @foreach ($dosen->mahasiswa as $mhs)
                                {{$mhs->nama}}, 
                            @endforeach
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
