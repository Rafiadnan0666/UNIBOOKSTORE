@extends('master.dash')
@section('konten')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">New Orders</h4>
            <a href="{{ route('penerbit.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>alamat</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerbit as $item)
                            <tr>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><span>{{ $item->alamat }}</span></td>
                                <td><span>{{ $item->telepon }}</span></td>
                                <td>
                                <td>
                                    <a href="{{ route('penerbit.edit', $item->id) }}"><span
                                            class="badge badge-success">Edit</span></a>
                                    <form action="{{ route('penerbit.destroy', $item->id) }}" method="POST"
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
