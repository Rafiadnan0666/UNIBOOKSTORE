{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('master.dash')
@section('konten')
      <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Home</h4>
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
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
