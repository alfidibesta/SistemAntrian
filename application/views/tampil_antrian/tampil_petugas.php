<body>
    <!-- Page Content-->
    <section class="container">
        <div class="row">
            <!-- content informasi petugas -->
            <div class="col-8">
                <div class="box card bg-green" style="font-size: 14pt;">
                    <div class="row container">
                        <!-- backend -->
                        <div class="col-4">
                            <!-- connect login loket -->
                            Loket 1
                        </div>
                        <div class="col-4 text-right">
                            <!-- connect login nama admin loket -->
                            Admin
                        </div>
                    </div>
                </div>
                <!-- Content Antrian -->
                <div class="box card text-center">
                    <!-- header time -->
                    <div class="card-header bg-orange">

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
                    <!-- Current queue -->
                    <div class="card-body" style="background-color: #3c8dbc; color: white;">
                        <p style="font-size: 25px;">Pelayanan Berlangsung</p>
                        <p style="font-size: 50px;"><b>Nomor Antrian</b></p>
                        <p style="font-size: 100px;"><b>A001</b></p>
                    </div>
                    <!-- /.Current queue -->
                    <!-- footer -->
                    <div class="card-footer text-muted bg-orange">
                        Layanan Terpadu
                    </div>
                    <!-- footer -->
                </div>
            </div>
            <!-- /.content informasi petugas -->


            <!-- white space -->
            <div class="row col-1"></div>

            <!-- content action  -->
            <div class="row col-3">
                <!-- content -->
                <!-- first content -->
                <div class="box card bg-blue text-center">
                    <div class="" style="justify-content: center; align-items: center;">
                        <br>
                        <p>Nomer Urut Selanjutnya</p>
                        <p style="font-size: 20pt;"><b>2</b></p>
                    </div>
                </div>
                <br>
                <!-- /.first content -->
                <!-- second content -->
                <button type="button" class="box btn btn-block bg-green text-center">
                    <p style="font-size: 20pt;"><b>Selanjutnya</b></p>
                </button>
                <br>
                <!-- /.second content -->
                <!-- third content -->
                <button type="button" class="box btn btn-block bg-orange text-center">
                    <p style="font-size: 20pt;"><b>Panggil</b></p>
                </button>
                <br>
                <!-- /.third content -->
                <!-- four content -->
                <div class="box card bg-blue text-center" style="justify-content: center; align-items: center;">
                    <a>Total Pelayanan Hari Ini : <a> <b>2</b></a></a>
                </div>
                <br>
                <!-- /.four content -->
                <!-- back tampil -->
                <a href="<?= site_url('tampil') ?>" class="box btn btn-block bg-red text-center" style="justify-content: center; text-align: center;">
                    <i class="fa fa-undo"></i> Back
                </a>
                <!-- /.back tampil -->
            </div>
            <!-- /.content action  -->
        </div>
    </section>
    <!-- /.Page Content-->
</body>

</html>