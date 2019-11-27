        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/pd/program/create'); ?>" class="btn btn-info waves-effect waves-light m-t-10">Tambah Data</a>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Program</h3>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Program</th>
                                            <th>Indikator Program</th>
                                            <th>Target RPJMD 2016-2021</th>
                                            <th>Realisasi RKPD Tahun Lalu</th>
                                            <th>Target Kinerja RKPD Berjalan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=0; if($program>0) { foreach($program as $program): ?>
                                        <tr>
                                            <th><?php echo ++$count; ?></th>
                                            <th><?php echo $program->nama; ?></th>
                                            <th><?php echo $program->is_nama; ?></th>
                                            <th><?php echo $program->ksatu; ?></th>
                                            <th><?php echo $program->kdua; ?></th>
                                            <th><?php echo $program->ktiga; ?></th>
                                            <th><a href="<?php echo base_url('index.php/pd/program/edit/'.$program->id); ?>" class="btn btn-info waves-effect waves-light m-t-10">Edit Data</a></th>
                                        </tr>
                                    <?php endforeach; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->