@extends('master.dash')
@section('konten')
 <a href="{{ route('penerbit.index') }}">
                            <button class="btn btn-warning mt-2">
                                <i class="fa fa-arrow-circle-left"></i> Kembali
                            </button>
                        </a>
     <form action="{{ route('penerbit.store') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="kode" class="col-md-2">kode</label>
                                                <input type="text" value="{{ old('kode') }}" name="kode"
                                                    class="form-control mb-2 @error('kode') is-invalid @enderror col-md-6"
                                                    id="kode">
                                                @error('tanggal')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <label for="tanggal" class="col-md-2">Tanggal</label>
                                                <input type="datetime-local" value="{{ old('tanggal') }}" name="tanggal"
                                                    class="form-control mb-2 @error('tanggal') is-invalid @enderror col-md-6"
                                                    id="tanggal">
                                                @error('tanggal')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <label for="nama" class="col-md-2">nama</label>
                                                <input type="text" value="{{ old('nama') }}" name="nama"
                                                    class="form-control mb-2 @error('nama') is-invalid @enderror col-md-6"
                                                    id="nama" placeholder="Enter nama">
                                                @error('nama')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <label for="alamat" class="col-md-2">alamat</label>
                                                <input type="text" value="{{ old('alamat') }}" name="alamat"
                                                    class="form-control mb-2 @error('alamat') is-invalid @enderror col-md-6"
                                                    id="alamat" placeholder="Enter alamat">
                                                @error('alamat')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <label for="telepon" class="col-md-2">telepon</label>
                                                <input type="number" value="{{ old('telepon') }}" name="telepon"
                                                    class="form-control mb-2 @error('telepon') is-invalid @enderror col-md-6"
                                                    id="telepon" placeholder="Enter telepon">
                                                @error('telepon')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="submit">
                                            <i class="fas fa-save"></i> Simpan
                                        </button>
                                    </form>
@endsection