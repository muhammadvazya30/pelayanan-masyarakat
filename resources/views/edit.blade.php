@extends('layouts.app')

@section('content')
   <form action="{{ route('data-masyarakat.update', $masyarakat->id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="form-group">
    <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $masyarakat->nama }}" class="form-control">
</div>
<div class="form-group">
    <label for="nomor_kk" class="form-label">Nomor KK</label>
        <input type="text" name="nomor_kk" value="{{ $masyarakat->nomor_kk }}" class="form-control">
</div>
    <label for="nomor_ktp" class="form-label">Nomor KTP</label>
        <input type="text" name="nomor_ktp" value="{{ $masyarakat->nomor_ktp }}" class="form-control">
<div class="form-group">
    <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control">{{ $masyarakat->alamat }}</textarea>
</div>
<div class="form-group">
    <label for="jenis_kelamin" class="form-label"></label>
    <select name="jenis_kelamin" class="form-control">
        @foreach($genders as $g)
            <option value="{{ $g }}" {{ $masyarakat->jenis_kelamin == $g ? 'selected' : '' }}>
                {{ $g }}
            </option>
        @endforeach
    </select>
</div>
    <button class="btn btn-primary mt-2">Update</button>
</form> 
@endsection
