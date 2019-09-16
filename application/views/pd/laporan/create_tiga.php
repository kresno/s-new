            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Laporan Triwulan III</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?php echo base_url()?>index.php/pd/laporan/post_tri/3" method="POST">
                                        <div class="form-group">
                                            <label for="Kegiatan">Kegiatan</label>
                                            <select id="kegiatan" name="kegiatan" class="form-control" readonly>
                                                <?php foreach($kegiatan as $kegiatan):?>
                                                    <option value="<?php echo $kegiatan->id; ?>"><?php echo $kegiatan->nama_kegiatan; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Output">Output</label>
                                            <select id="output" name="ouput" class="form-control">
                                                <option> --Silahkan Pilih-- </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kenam">Target Realisasi Kinerja Pada Triwulan III (dalam persen)</label>
                                            <input type="number" class="form-control" id="kenam" placeholder="Masukkan Perhitungan"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="renam">Pagu Realisasi Kinerja Pada Triwulan III</label>
                                            <input type="number" class="form-control" id="renam" placeholder="Masukkan Perhitungan"> 
                                        </div>
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>