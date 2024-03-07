@extends('master.dash')
@section('konten')
    <form action="{{ route('buku.update', $buku->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="row">
                <label for="kode" class="col-md-2">Kode</label>
                <input type="text" value="{{ $buku->kode }}" name="kode"
                    class="form-control mb-2 @error('kode') is-invalid @enderror col-md-6" id="kode">
                @error('kode')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <input type="text" value="{{ $buku->kategori }}" name="kategori"
                    class="form-control mb-2 @error('kategori') is-invalid @enderror col-md-6" id="kategori">
                @error('kategori')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="nama_buku" class="col-md-2">Nama Buku</label>
                <input type="text" value="{{ $buku->nama_buku }}" name="nama_buku"
                    class="form-control mb-2 @error('nama_buku') is-invalid @enderror col-md-6" id="nama_buku"
                    placeholder="Enter Nama Buku">
                @error('nama_buku')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="harga" class="col-md-2">Harga</label>
                <input type="text" value="{{ $buku->harga }}" name="harga"
                    class="form-control mb-2 @error('harga') is-invalid @enderror col-md-6" id="harga"
                    placeholder="Enter Harga">
                @error('harga')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="stok" class="col-md-2">Stok</label>
                <input type="number" value="{{ $buku->stok }}" name="stok"
                    class="form-control mb-2 @error('stok') is-invalid @enderror col-md-6" id="stok"
                    placeholder="Enter Stok">
                @error('stok')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="penerbit" class="col-md-2">Penerbit</label>
                <select name="penerbit" id="penerbit"
                    class="custom-select mb-2 @error('penerbit') is-invalid @enderror col-md-6">
                    <option value="">-- Pilih Penerbit --</option>
                    @foreach ($penerbit as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $buku->penerbiti->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
                @error('penerbit')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">
            <i class="fas fa-save"></i> Simpan
        </button>
    </form>
@endsection
