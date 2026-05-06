@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('data-masyarakat.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor KK</th>
                        <th>Nomor KTP</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($masyarakats as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->nomor_kk }}</td>
                        <td>{{ $m->nomor_ktp }}</td>
                        <td>{{ $m->alamat }}</td>
                        <td>{{ $m->jenis_kelamin }}</td>
                        <td>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                Aksi
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('data-masyarakat.edit', $m->id) }}">
                        Edit
                    </a>
                </li>
                <li>
                    <form action="{{ route('data-masyarakat.destroy', $m->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item text-danger" onclick="return confirm('Yakin ini dihapus?')">
                            Hapus
                        </button>
                </form>
            </li>
        </ul>
    </div>
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection