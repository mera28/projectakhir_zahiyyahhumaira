@extends('layouts.template')
@section('judulh1','Admin - Pemasukan')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Pemasukan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pemasukan.update',$pemasukan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder=""
                        value="{{$pemasukan->name}}">
                </div>
                <div class="form-group">
                    <label for="stock">Jumlah Barang Masuk</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{$pemasukan->stock}}">
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$pemasukan->tanggal}}">
                </div>
                <div class=" form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class=" form-control"
                        rows="4">{{ $pemasukan->description }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Ubah</button>
            </div>
        </form>
    </div>


</div>


@endsection
