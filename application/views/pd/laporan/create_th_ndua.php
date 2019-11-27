            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Laporan Target dan Realisasi Tahun N-2</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?php echo base_url()?>index.php/pd/laporan/post_th_ndua/1" method="POST">
                                        <div class="form-group">
                                            <label for="Kegiatan">Kegiatan</label>
                                            <select id="kegiatan" name="kegiatan" class="form-control">
                                                <option> -- Pilih Kegiatan -- </option>
                                                <?php foreach($kegiatan as $kegiatan):?>   
                                                    <option value="<?php echo $kegiatan->id; ?>"><?php echo $kegiatan->nama_kegiatan; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Output">Output</label>
                                            <select id="output" name="output" class="form-control">
                                                <option> -- Pilih Output -- </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kempat">Target Realisasi Kinerja Pada Triwulan I (dalam persen)</label>
                                            <input type="number" class="form-control" id="kempat" placeholder="Masukkan Perhitungan" name="kempat"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="rempat">Pagu Realisasi Kinerja Pada Triwulan I</label>
                                            <input type="number" class="form-control" id="rempat" placeholder="Masukkan Perhitungan" name="rempat"> 
                                        </div>
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>