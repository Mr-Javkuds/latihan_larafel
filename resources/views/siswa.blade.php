
@extends('layout.main')
@section('container')
<table class="table table-striped">
    <thead>
        <tr align="center">

            <th scope="col">Id</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <!-- <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th> -->

        </tr>
    </thead>
    <tbody>
        @foreach ($data_siswa as $siswa)
        <tr align="center">
            <td><?= $siswa["id"]; ?></td>
            <td><?= $siswa["nis"]; ?></td>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["alamat"]; ?></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection