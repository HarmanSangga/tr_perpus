@extends('layouts.main')

  @section('container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Berita -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4><b>News</b></h4>
                <p>Berita</p>
              </div>
              <div class="icon">
                <i class="bi bi-newspaper"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- Visi dan Misi -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4><b>Vision and Mission</b></h4>

                <p>Visi dan Misi</p>
              </div>
              <div class="icon">
                <i class="ion ion-check-square-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- Koleksi -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4><b>Collection</b></h4>
                <p>Koleksi</p>
              </div>
              <div class="icon">
                <i class="bi bi-collection-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- Jam Layanan -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><b>Service Hours</b></h4>
                <p>Jam Layanan</p>
              </div>
              <div class="icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        

        <!-- Baris Ke-2 -->
        <div class="row">
          <!-- Fasilitas -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><b>Facility</b></h4>
                <p>Fasilitas</p>
              </div>
              <div class="icon">
                <i class="bi bi-grid-1x2-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  
          <!-- Profil -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4><b>Profile</b></h4>
                <p>Profil</p>
              </div>
              <div class="icon">
                <i class="bi bi-person-square"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- FAQ -->
          <div class="col-lg-3 col-6">     
            <div class="small-box bg-success">
              <div class="inner">
                <h4><b>FAQ</b></h4>
                <p>Frequently Asked Questions(FAQ)</p>
              </div>
              <div class="icon">
                <i class="bi bi-patch-question-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <!-- CRUD Buku -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4><b>Proses</b></h4>
                <p>CRUD Buku</p>
              </div>
              <div class="icon">
                <i class="bi bi-gear-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            
          </div>
          <div class="col-sm-4 ">
            <img src="{{asset('/img/book.png')}}" width="300" >
          </div>
        </div>
      </div>
      <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection
