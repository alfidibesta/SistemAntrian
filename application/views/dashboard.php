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

  <!-- Info boxes -->
  <div class="row">
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
          <i class="fa fa-print"></i>
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
          <i class="fa fa-print"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- /.row -->
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Area Chart</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="areaChart" style="height:250px"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>