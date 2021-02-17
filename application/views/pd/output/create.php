            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Tambah Output</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?php echo base_url()?>index.php/pd/output/store" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kegiatan</label>
                                            <select id="kegiatan" name="kegiatan" class="form-control" readonly>
                                                <?php foreach($kegiatan as $kegiatan):?>
                                                    <option value="<?php echo $kegiatan->id; ?>"><?php echo $kegiatan->nama; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Nama Output</label>
                                            <input type="text" class="form-control" name="output" id="output" placeholder="Nama Output"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Satuan</label>
                                            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan"> 
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="target_rpjmd">Target RPJMD</label>
                                                <input type="number" class="form-control" name="target_rpjmd" placeholder="Target RPJMD">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="target_pagu_rpjmd">Target Anggaran RPJMD</label>
                                                <input type="number" class="form-control" name="target_pagu_rpjmd" placeholder="Target Anggaran">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_n2">Realisasi Capaian Output Kinerja RPJMD s/d RKPD Tahun Lalu</label>
                                                <input type="number" class="form-control" name="target_n2" placeholder="Realisasi Capaian Output Kinerja RPJMD s/d RKPD Tahun Lalu">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="target_pagu_n2">Realisasi Capaian Anggaran Kinerja RPJMD s/d RKPD Tahun Lalu</label>
                                                <input type="number" class="form-control" name="target_pagu_n2" placeholder="Realisasi Capaian Anggaran Kinerja RPJMD s/d RKPD Tahun Lalu">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_n1">Target Capaian Output Kinerja RKPD Tahun Berjalan</label>
                                                <input type="number" class="form-control" name="target_n1" placeholder="Target Capaian Output Kinerja RPJMD s/d RKPD Tahun Lalu">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="target_pagu_n1">Target Capaian  Kinerja RKPD Tahun Berjalan</label>
                                                <input type="number" class="form-control" name="target_pagu_n1" placeholder="Target Capaian Anggaran Kinerja RPJMD s/d RKPD Tahun Lalu">
                                            </div>
                                        </div>


                                        <h4 class="box-title m-b-0">Data Capaian Per Triwulan</h4>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_tri1">Realisasi Capaian Output Kinerja Pada Triwulan I</label>
                                                <input type="number" class="form-control" name="realisasi_tri1" placeholder="Realisasi Capaian Output Kinerja Pada Triwulan I">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_pagu_tri1">Realisasi Capaian Anggaran Kinerja Pada Triwulan I</label>
                                                <input type="number" class="form-control" name="realisasi_pagu_tri1" placeholder="Realisasi Capaian Anggaran Output Kinerja Pada Triwulan I">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_tri2">Realisasi Capaian Output Kinerja Pada Triwulan II</label>
                                                <input type="number" class="form-control" name="realisasi_tri2" placeholder="Realisasi Capaian Output Kinerja Pada Triwulan II">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_pagu_tri2">Realisasi Capaian Anggaran Kinerja Pada Triwulan II</label>
                                                <input type="number" class="form-control" name="realisasi_pagu_tri2" placeholder="Realisasi Capaian Anggaran Output Kinerja Pada Triwulan II">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_tri3">Realisasi Capaian Output Kinerja Pada Triwulan III</label>
                                                <input type="number" class="form-control" name="realisasi_tri3" placeholder="Realisasi Capaian Output Kinerja Pada Triwulan IOI">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_pagu_tri3">Realisasi Capaian Anggaran Kinerja Pada Triwulan III</label>
                                                <input type="number" class="form-control" name="realisasi_pagu_tri3" placeholder="Realisasi Capaian Anggaran Output Kinerja Pada Triwulan III">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_th_tri4">Realisasi Capaian Output Kinerja Pada Triwulan IV</label>
                                                <input type="number" class="form-control" name="realisasi_tri4" placeholder="Realisasi Capaian Output Kinerja Pada Triwulan IV">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="realisasi_pagu_tri4">Realisasi Capaian Anggaran Kinerja Pada Triwulan IV</label>
                                                <input type="number" class="form-control" name="realisasi_pagu_tri4" placeholder="Realisasi Capaian Anggaran Output Kinerja Pada Triwulan IV">
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>