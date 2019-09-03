        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-sm-">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/pd/kegiatan/create'); ?>" class="btn btn-info waves-effect waves-light m-t-10">Tambah Data</a>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Kegiatan</h3>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Indikator Program</th>
                                            <th>Kegiatan</th>
                                            <th>Tombol Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=0; if($kegiatan>0) { foreach($kegiatan as $kegiatan): ?>
                                        <tr>
                                            <th><?php echo ++$count; ?></th>
                                            <th><?php echo $kegiatan->nama_indikator; ?></th>
                                            <th><?php echo $kegiatan->nama_kegiatan; ?></th>
                                            <th>
                                                <a href="<?php echo base_url().'index.php/pd/kegiatan/output/'.$kegiatan->id; ?>" class="btn btn-md btn-primary"><i class="mdi mdi-pencil"></i> Ouput </a>
                                                <a href="<?php echo base_url().'index.php/pd/kegiatan/doDelete/'.$kegiatan->id; ?>" class="btn btn-md btn-waning"><i class="mdi mdi-delete-sweep"></i> Delete </a>
                                            </th>
                                        </tr>
                                    <?php endforeach; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->