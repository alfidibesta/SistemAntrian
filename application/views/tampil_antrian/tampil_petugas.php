<section class="content-header">
    <h1>Loket 1
        <small>Layar Petugas Loket</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('tampil/index') ?>"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Layar Petugas Loket</li>
    </ol>
</section>

<section class="content">
    <!-- START ALERTS AND CALLOUTS -->
    <div class="row">
        <div class="col-md-8">
            <div class="box box-success">
                <div class="box-header with-border">
                    <div>
                        <h3 class="box-title"> <i class="fa fa-users"></i> Antrian Pelayanan</h3>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box box-solid" style="background: whitesmoke;">
                        <div class="box-body">
                            <Center>
                                <p class="" style="font-size: 10;">Pelayanan Saat Ini</p>
                                <hr>
                                <p style="font-size: 12pt;">Nomer Antrian</p>

                                <!-- <?php foreach ($antrianloket as $a => $data) { ?>
                                    <p></p>
                                <?php } ?> -->

                                <b>
                                    <p style="font-size: 28pt;">1</p>
                                </b>
                                <hr>
                                <p class="" style="font-size: 10;">Petugas : Dinda</p>
                            </Center>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-success">
                        <div class="box-body">
                            <div class="row d-grid gap-2 d-md-block mx-auto">
                                <div class="col-md-3">
                                    <center>
                                        <a href="">
                                            <button class="btn btn-warning btn-block"> Panggil</button>
                                        </a>
                                    </center>
                                </div>
                                <div class="col-md-3">
                                    <center>
                                        <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#modal-info"> Selesai</button>
                                    </center>
                                </div>
                                <div class="col-md-3">
                                    <center>
                                        <a href="">
                                            <button class="btn btn-success btn-block"> Selanjutnya</button>
                                        </a>
                                    </center>
                                </div>
                                <div class="col-md-3">
                                    <center>
                                        <a href="">
                                            <button class="btn btn-danger btn-block"> Batal</button>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <div>
                        <h3 class="box-title">Pelayanan hari ini</h3>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nomer Antrian</th>
                            <th>Status</th>
                            <th style="width: 40px"></th>
                        </tr>
                        <tr>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                            <td style="width:5%;"><?=$no++?>.</td>
                            <td> <b> <?=$data->no_antrian_loket?> </b> </td>
                            <td><span class="label label-success">Sudah terlayani</span></td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-xs">
                                    <i class="fa fa-bullhorn"></i>
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="box box-solid" style="background: whitesmoke;">
                    <div class="box-body">

                        Total Pelayanan Saat ini : <b>1</b>

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->

    <!-- modal -->
    <div class="modal modal-default fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Peringatan</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah pelayanan sudah selesai&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="<?= site_url('tampil/petugas') ?>">
                        <button type="button" class="btn btn-success">
                            selanjutnya
                        </button>
                    </a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>