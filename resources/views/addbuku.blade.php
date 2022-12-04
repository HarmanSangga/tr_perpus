@extends('layouts.main')

  @section('container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul buku" required="required" >
        </div>
        <div class="form-group">
            <label>Jumlah Buku</label>
            <input type="string" class="form-control" name="jumlah" placeholder="Jumlah buku" required="required">
        </div>
        <div class="form-group">
            <label>Bahasa Buku</label>
            <input type="text" class="form-control" name="bahasa" placeholder="Bahasa buku" required="required">
        </div>
        <div class="form-group">
            <label>terbit Buku</label>
            <input type="date" class="form-control" name="terbit" placeholder="Tanggal terbit buku"required="required">
        </div>
        <div class="form-group">
            <label>halaman Buku</label>
            <input type="string" class="form-control" name="halaman" placeholder="Halaman buku" required="required">
        </div>
        <div class="form-group">
            <label>Sinopsis1</label>
            <textarea class="form-control" name="sinopsis1" rows="15" required="required"></textarea>
        </div>
        <div class="form-group">
            <label>Sinopsis2</label>
            <textarea class="form-control" name="sinopsis2" rows="15" required="required"></textarea>
        </div>
        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
        <div class="form-group">
            <label>Upload</label>
            <input type="submit" class="form-control btn btn-primary" value="Upload" required="required">
        </div>
</div>
</form>
    </div>
</div>
  <!-- /.content-wrapper -->
@endsection
