@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ubah Data Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
        {{ csrf_field() }}
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" value="{{$mahasiswa->nama}}">
            </div>
            <div class="form-group">
                <label for="jenkel">Gender</label>
                <select name="jenkel" id="" class="custom-select rounded-8">
                    <option value="Pria" @if($mahasiswa->jenkel=='pria') selected @endif>Pria</option>
                    <option value="Wanita" @if($mahasiswa->jenkel=='wanita') selected @endif>Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <div class="form-floating">
                    <textarea name="alamat" id="floatingTextArea"  class="form-control"  >{{$mahasiswa->alamat}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="hp">No HP</label>
                <input type="text" name="hp" class="form-control" id="hp" value="{{$mahasiswa->hp}}" placeholder="Masukan No HP">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="" class="custom-select rounded-8">
                    <option value="Desain Komunikasi Visual" @if($mahasiswa->jurusan=='Desain Komunikasi Visual') selected @endif>Desain Komunikasi Visual</option>
                    <option value="Sistem Informasi" @if($mahasiswa->jurusan=='Sistem Informasi') selected @endif>Sistem Informasi</option>
                    <option value="Teknik Informatika" @if($mahasiswa->jurusan=='Teknik Informatika') selected @endif>Teknik Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$mahasiswa->email}}" placeholder="Masukan Email">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>

@endsection
