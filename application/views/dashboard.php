<section class="content-header">
  <h1>Dashboard
    <small>Dinas Kependudukan dan Pencatatan Sipil</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <div class="box box-primary">
    <!-- Info boxes -->
    <div class="row" style="margin-top: 12pt; margin-left: 3pt; margin-right: 3pt;">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?= $this->fungsi->count_loket(); ?></h3>

            <p>Jumlah Loket</p>
          </div>
          <div class="icon">
            <i class="fa fa-desktop"></i>
          </div>
          <a href="<?= site_url('loket') ?>" class="small-box-footer">
            Kelola Loket <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $this->fungsi->count_user(); ?></h3>
            <p>Jumlah User</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="<?= site_url('user') ?>" class="small-box-footer">
            Kelola User <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?= $this->fungsi->count_antrianloket(); ?></h3>

            <p>Antrian Hari Ini</p>
          </div>
          <div class="icon">
            <i class="fa fa-pie-chart"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $this->fungsi->count_antriantotal(); ?></h3>

            <p>Total Keseluruhan Antrian</p>
          </div>
          <div class="icon">
            <i class="fa fa-bar-chart"></i>
          </div>
          <a href="<?= site_url('antrian') ?>" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /.col -->
  </div>

  <!-- /.row -->
  <div class="col">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Graphiic Information</h3>
      </div>
      <!-- box-body -->
      <div class="box-body">

        <!-- col split 2 -->
        <div class="col-lg-6 col-xs-6">
          <!-- DONUT CHART -->
          <!-- small box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Antrian perharian</h3>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col split 2 -->
        
        <!-- col split 2 -->
        <div class="col-lg-6 col-xs-6">
          <!-- DONUT CHART -->
          <!-- small box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Antrian pertahun</h3>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col split 2 -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>


</section>