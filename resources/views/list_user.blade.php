@extends('layouts.app')

@section('content')
<body style="background-image: url('{{ asset('assets/img/bg.jpg') }}');">

<div class="container">
    <h2 class="text-center">Daftar Pengguna</h2>
    
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3 custom-btn">Tambah Pengguna Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
                <th>Foto</th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    @if ($user['foto']) 
                        <img src="{{ asset($user['foto']) }}" alt="Foto Profil" style="width: auto; height: 100px; object-fit: cover; border: 1px solid #ccc; border-radius: 5px;">
                    @else
                        <span>Tidak ada foto</span>
                    @endif
                </td>
                <td class="action-buttons">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Hapus</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
@endsection