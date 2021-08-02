<section class="content-header">
  <h1>Layar Tampil
    <small>Dinas Pendidikan dan Catatan Sipil</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Layar Tampil</li>
  </ol>
</section>

<section class="content">

  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-tv"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><b>Layar Preview</b></span>
          <span class="info-box-text"><b>Antrian</b></span>
          <a href="<?= site_url('tampil/priview') ?>" class="btn btn-warning btn-xs btn-block">
            Tampilkan
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-tv"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><b>Layar Petugas</b></span>
          <span class="info-box-text"><b>Loket</b></span>

          <div class="btn-group">
            <button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-warning">
              <?php foreach ($loket as $l => $data) { ?>
                <li class=""><a href=href="<?php echo site_url('tampil/petugas/' . $data->loket_id); ?>"><?= $data->name ?></a></li>
              <?php } ?>
            </ul>
          </div>

          <a href="<?= site_url('tampil/petugas') ?>" class="btn btn-warning btn-xs">
            Tampilkan
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-tv"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><b>Layar Antrian</b></span>
          <span class="info-box-text"><b>Pengunjung</b></span>
          <a href="<?= site_url('ambil') ?>" class="btn btn-warning btn-xs btn-block">
            Tampilkan
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>