@extends('layouts.main')
  @section('container')
  <div class="content-wrapper">
    <div class="col-md-12 bg-white p-4">
        <a href="/addbuku"><button class="btn btn-primary mb-3">Tambah Buku</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Jumlah</th>
                    <th>Bahasa</th>
                    <th>Terbit</th>
                    <th>Halaman</th>
                    <th>Sinopsis1</th>
                    <th>Sinopsis2</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $i => $buku)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->jumlah }}</td>
                        <td>{{ $buku->bahasa }}</td>
                        <td>{{ $buku->terbit }}</td>
                        <td>{{ $buku->halaman }}</td>
                        <td>{{strip_tags(Str::limit( $buku->sinopsis1,70)) }}</td>
                        <td>{{strip_tags(Str::limit( $buku->sinopsis2,70)) }}</td>
                        <td>
                            <a href="/edit/{{ $buku->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $buku->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
