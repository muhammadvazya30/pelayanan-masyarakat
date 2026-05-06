@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Form Data Masyarakat</h1>
            <form action="{{ route('data-masyarakat.store') }}" method="POST" >
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="nomor_kk" class="form-label">Nomor KK</label>
                    <input type="text" name="nomor_kk" id="nomor_kk" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                    <input type="text" name="nomor_ktp" id="nomor_ktp" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-control">
                    <label for="jenis_kelamin" class="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                    <option value="">Pilih Gender</option>
                    @foreach ($genders as $gender )
                        <option value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection