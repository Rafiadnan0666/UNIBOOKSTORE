@extends('master.dash')
@section('konten')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Stok Tinggal Sedikit</h4>
            <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                 <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Kategori</th>
                                        <th>nama_buku</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Penerbit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $i)
                                         <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$i->kode}}</td>
                                        <td><span>{{$i->kategori}}</span></td>
                                        <td><span>{{$i->nama_buku}}</span></td>
                                        <td>{{$i->harga}}</td>
                                        <td>{{$i->stok}}</td>
                                        <td>{{$i->penerbiti->nama}}</td>
                                       <td>
                                    <a href="{{ route('buku.edit', $i->id) }}"><span
                                            class="badge badge-success">Edit</span></a>
                                    <form action="{{ route('buku.destroy', $i->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge badge-danger"
                                            onclick="return confirm('Yakin Ngapus')">
                                            <span class="badge badge-danger">Hapus</span>
                                        </button>
                                    </form>

                                </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
@endsection
