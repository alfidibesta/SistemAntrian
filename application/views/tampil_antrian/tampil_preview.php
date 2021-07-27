<body>
    <!-- Page Content-->
    <section class="container">
        <div class="row">
            <!-- col antrian -->
            <div class="col-4">
                <!-- box header -->
                <div class="box">
                    <div class="box-header with-border bg-orange">
                        <h3 class="box-title" style="color: white;"><b>Nomer Antrian</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- box body -->
                    <div class="box-body" style="background-color: whitesmoke;">
                        <table class="table table-bordered" style="color: white; font-size: 20pt;">
                            <thead class="table bg-green">
                                <tr>
                                    <th scope="col">Loket</th>
                                    <th scope="col">Antrian</th>
                                </tr>
                            </thead>
                            <tbody class="bg-blue">
                                <?php $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $data->name ?></td>
                                        <!-- nomer antrian belum di koneksikan ke database -->
                                        <td>A001</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box header -->
            </div>
            <!-- /.col antrian -->

            <!-- col content video -->
            <div class="col-8">
                <div class="box text-center">
                    <div class="card">
                        <!-- header time -->
                        <div class="card-header">
                            <body>
                                <p id="time"></p>
                            </body>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                var timestamp = '<?= time(); ?>';

                                function updateTime() {
                                    $('#time').html(Date(timestamp));
                                    timestamp++;
                                }
                                $(function() {
                                    setInterval(updateTime, 1000);
                                });
                            </script>
                        </div>
                        <!-- header /.time -->
                        <!-- body video -->
                        <div class="card-body">
                            <div class="ratio ratio-16x9">
                                <video autoplay loop>
                                    <!-- change video -->
                                    <source src="<?= base_url() ?>assets/dist/video/DISPENDUKCAPIL.mp4"" type=" video/mp4">
                                </video>
                            </div>
                        </div>
                        <!-- body /.video -->
                        <!-- footer -->
                        <div class="card-footer text-muted">
                            Layanan Terpadu
                        </div>
                        <!-- footer -->
                    </div>
                </div>
            </div>
            <!-- /.col content video -->
        </div>
    </section>
    <!-- /.Page Content-->
</body>

</html>