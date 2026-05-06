@extends('layout.app')

@section('content')
   <form action="{{ route('data-masyarakat.update', $masyarakat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $masyarakat->nama }}" class="form-control">

    <input type="text" name="nomor_kk" value="{{ $masyarakat->nomor_kk }}" class="form-control">

    <input type="text" name="nomor_ktp" value="{{ $masyarakat->nomor_ktp }}" class="form-control">

    <textarea name="alamat" class="form-control">{{ $masyarakat->alamat }}</textarea>

    <select name="jenis_kelamin" class="form-control">
        @foreach($genders as $g)
            <option value="{{ $g }}" {{ $masyarakat->jenis_kelamin == $g ? 'selected' : '' }}>
                {{ $g }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-primary mt-2">Update</button>
</form> 
@endsection
