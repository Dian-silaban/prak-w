
@extends('layouts.app')

@section('content')
    <div class="image-wrapper {{ $errors->any() ? 'has-error' : '' }}">
        <img src="{{ asset('assets/img/anjing.jpg') }}" alt="Image">
    </div>

    <body style="background-image: url('{{ asset('assets/img/bg.jpg') }}');">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}">
            @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
            @foreach($errors->get('kelas_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
            <label class="margin-top">Foto:</label>
            <input type="file" id="foto" name="foto">
            @foreach($errors->get('foto') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
