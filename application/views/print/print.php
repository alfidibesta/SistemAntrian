<script type="text/javascript">
    window.print();
</script>
<link href="<?php echo base_url('assets/user') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="<?php echo base_url('assets/user') ?>/css/freelancer.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/user') ?>/lib/noty.css" rel="stylesheet">
<link href="<?php echo base_url('assets/user') ?>/lib/themes/metroui.css" rel="stylesheet">

<div class="card" style="width: 28rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">
            <h3>SELAMAT DATANG</h3>
            <h5>Di Dinas Kependudukan Dan Pencatatan Sipil</h5>
            <h8>Perkantoran Terpadu Gedung A, Jl. Mayjen Sungkono, Arjowinangun, Kec. Kedungkandang, Kota Malang, Jawa Timur 65132</h8>
        </li>
        <li class="list-group-item text-center">
            <?php foreach ($antrianloket as $a => $data) { ?>
                <div class="row card-link" style="margin-left: 10px;"><?= $data->tgl_antrian_loket; date("h:i:sa"); ?></div>
                <h2>ANTRIAN </h2>
                <h1><?php echo $data->no_antrian_loket ?></h1><h4><?= $data->name_loket ?></h4>
        </li>
    <?php } ?>
    <!-- <?php foreach ($loket as $key => $data) { ?>
        
    <?php } ?> -->
    <li class="list-group-item text-center">
        <h3>Silahkan Menunggu Nomer Anda Dipanggil</h3>
    </li>
    </ul>
</div>
<?php

?>