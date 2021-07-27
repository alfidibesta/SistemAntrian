<section class="content-header">
    <h1>
        Data
        <small>Antrian</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> History</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <div class="pull-right">
                <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Loket</th>
                        <th>Nomer Antrian</th>
                        <th>Tanggal Antrian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->keterangan?></td>
                        <td><?=$data->no_antrian_loket?></td>
                        <td><?=$data->tgl_antrian_loket?></td>
                        <td class="text-center" width="160px">
                            <form action="<?=site_url('antrian/del')?>" method="post">
                                <input type="hidden" name="antrian_id" value="<?=$data->id_antrian_loket?>">
                                <button onclick="return confirm('Apakah Anda Yakin ?')"class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>