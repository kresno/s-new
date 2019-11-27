            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Edit Program</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php foreach($hasil as $hasil):?>
                                    <form action="<?php echo base_url('index.php/pd/program/update/'.$hasil->id)?>" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Program</label>
                                            <input type="text" value="<?php echo $hasil->nama; ?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Indikator Sasaran</label>
                                            <input type="text" value="<?php echo $hasil->is_nama; ?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Target RPJMD</label>
                                            <input type="text" class="form-control" name="ksatu" id="ksatu" placeholder="Masukkan Target Kinerja (Angka)" value="<?php echo $hasil->ksatu; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Realisasi Capaian Kinerja RPJMD s/d RKPD Tahun Lalu (n-2)</label>
                                            <input type="text" class="form-control" name="kdua" id="kdua" placeholder="Masukkan Target Kinerja (Angka)" value="<?php echo $hasil->kdua; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Target Kinerja dan Anggaran RKPD Tahun berjalan (tahun n-1) yang dievaluasi</label>
                                            <input type="text" class="form-control" name="ktiga" id="ktiga" placeholder="Masukkan Target Kinerja (Angka)" value="<?php echo $hasil->ktiga; ?>"> 
                                        </div>
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>