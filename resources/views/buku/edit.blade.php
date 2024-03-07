@extends('master.dash')
@section('konten')
    <form action="{{ route('penerbit.update', $penerbit->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="row">
                <label for="kode" class="col-md-2">Kode</label>
                <input type="text" value="{{ old('kode', $penerbit->kode) }}" name="kode"
                       class="form-control mb-2 @error('kode') is-invalid @enderror col-md-6" id="kode">
                @error('kode')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="tanggal" class="col-md-2">Tanggal</label>
                <input type="datetime-local" value="{{ old('tanggal', $penerbit->tanggal) }}" name="tanggal"
                       class="form-control mb-2 @error('tanggal') is-invalid @enderror col-md-6" id="tanggal">
                @error('tanggal')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="nama" class="col-md-2">Nama</label>
                <input type="text" value="{{ old('nama', $penerbit->nama) }}" name="nama"
                       class="form-control mb-2 @error('nama') is-invalid @enderror col-md-6" id="nama" placeholder="Enter nama">
                @error('nama')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="alamat" class="col-md-2">Alamat</label>
                <input type="text" value="{{ old('alamat', $penerbit->alamat) }}" name="alamat"
                       class="form-control mb-2 @error('alamat') is-invalid @enderror col-md-6" id="alamat" placeholder="Enter alamat">
                @error('alamat')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="telepon" class="col-md-2">Telepon</label>
                <input type="number" value="{{ old('telepon', $penerbit->telepon) }}" name="telepon"
                       class="form-control mb-2 @error('telepon') is-invalid @enderror col-md-6" id="telepon" placeholder="Enter telepon">
                @error('telepon')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">
            <i class="fas fa-save"></i> Update
        </button>
    </form>
@endsection
