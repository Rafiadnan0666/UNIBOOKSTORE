@extends('master.dash')
@section('konten')
    <form action="{{ route('buku.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <div class="row">
                <label for="kode" class="col-md-2">kode</label>
                <input type="text" value="{{ old('kode') }}" name="kode"
                    class="form-control mb-2 @error('kode') is-invalid @enderror col-md-6" id="kode">
                @error('kode')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="kategori" class="col-md-2">kategori</label>
                <input type="datetime-local" value="{{ old('kategori') }}" name="kategori"
                    class="form-control mb-2 @error('kategori') is-invalid @enderror col-md-6" id="kategori">
                @error('kategori')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="nama_buku" class="col-md-2">nama_buku</label>
                <input type="text" value="{{ old('nama_buku') }}" name="nama_buku"
                    class="form-control mb-2 @error('nama_buku') is-invalid @enderror col-md-6" id="nama_buku"
                    placeholder="Enter nama_buku">
                @error('nama_buku')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="harga" class="col-md-2">harga</label>
                <input type="text" value="{{ old('harga') }}" name="harga"
                    class="form-control mb-2 @error('harga') is-invalid @enderror col-md-6" id="harga"
                    placeholder="Enter harga">
                @error('harga')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="stok" class="col-md-2">stok</label>
                <input type="number" value="{{ old('stok') }}" name="stok"
                    class="form-control mb-2 @error('stok') is-invalid @enderror col-md-6" id="stok"
                    placeholder="Enter stok">
                @error('stok')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="stok" class="col-md-2">Penerbit</label>
                <select name="penerbit" id="" class="custom-select mb-2 @error('penerbit') is-invalid @enderror">
                    <option value="">--Pilih Penerbit--</option>
                    @foreach ($penerbit as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
                @error('stok')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">
            <i class="fas fa-save"></i> Simpan
        </button>
    </form>
@endsection
