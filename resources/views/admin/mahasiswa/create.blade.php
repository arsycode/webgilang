@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/mahasiswa/store')}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="jenkel" id="" class="custom-select rounded-8">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No HP</label>
                <input type="text" name="hp" class="form-control" id="nohp" placeholder="Masukan No HP">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="" class="custom-select rounded-8">
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
