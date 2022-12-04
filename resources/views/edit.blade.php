
<!-- baru -->
@extends('layouts.main')

  @section('container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    @csrf
    <input type="hidden" value="{{ $buku->id }}" name="id">
    <div class="form-group">
        <label>Judul Artikel</label>
        <input type="text" class="form-control" value="{{ $buku->judul }}" name="judul" placeholder="Judul artikel">
    </div>
    <div class="form-group">
        <label>Jumlah Buku</label>
        <input type="string" class="form-control" value="{{ $buku->jumlah }}" name="jumlah" placeholder="Judul artikel">
    </div>
    <div class="form-group">
        <label>Bahasa Buku</label>
        <input type="text" class="form-control" value="{{ $buku->bahasa }}" name="bahasa" placeholder="Judul artikel">
    </div>
    <div class="form-group">
        <label>terbit Buku</label>
        <input type="date" class="form-control" value="{{ $buku->terbit }}" name="terbit" placeholder="Judul artikel">
    </div>
    <div class="form-group">
        <label>halaman Buku</label>
        <input type="string" class="form-control" value="{{ $buku->halaman }}" name="halaman" placeholder="Judul artikel">
    </div>
    <div class="form-group">
        <label>Isi Sinopsis1</label>
        <textarea class="form-control" name="sinopsis1" rows="15">{{ $buku->sinopsis1 }}
        </textarea>
    </div>
    <div class="form-group">
        <label>Isi Sinopsis2</label>
        <textarea class="form-control" name="sinopsis2" rows="15">{{ $buku->sinopsis2 }}
        </textarea>
    </div>
</div>
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
<div class="form-group">
    <label>Edit</label>
    <input type="submit" class="form-control btn btn-primary" value="Edit">
</div>
</div>
</form>
    </div>
</div>
  <!-- /.content-wrapper -->
@endsection

<!-- new -->

