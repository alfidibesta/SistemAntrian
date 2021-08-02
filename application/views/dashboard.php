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
        <h3 class="box-title">Graphic Information</h3>
      </div>
      <!-- box-body -->
      <div class="box-body">

        <!-- col split 2.1 -->
        <div class="col-lg-6 col-xs-6">
          <!-- DONUT CHART -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Antrian Perhari</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Loket 1</li>
                    <li><i class="fa fa-circle-o text-green"></i> Loket 2</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Loket 3</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Loket 4</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <!-- top 3 loket -->
                <li><a href="#">Loket 1
                    <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 700</span></a></li>
                <li><a href="#">Loket 2 <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 500</span></a>
                </li>
                <li><a href="#">Loket 3
                    <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 400</span></a></li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col split 2 -->

        <!-- col split 2.2 -->
        <div class="col-lg-6 col-xs-6">
          <!-- DONUT CHART -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Antrian Perhari</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart2" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Loket 1</li>
                    <li><i class="fa fa-circle-o text-green"></i> Loket 2</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Loket 3</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Loket 4</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <!-- top 3 loket -->
                <li><a href="#">Loket 1
                    <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 20</span></a></li>
                <li><a href="#">Loket 2 <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 15</span></a>
                </li>
                <li><a href="#">Loket 3
                    <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 13</span></a></li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col split 2 -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>


</section>