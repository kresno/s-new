            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Tambah Program</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Program</label>
                                            <select id="program" name="program" class="form-control">
                                                <option value="none">------------Select Program------------</option>
                                                <?php foreach($program as $program):?>
                                                    <option value="<?php echo $program->id; ?>"><?php echo $program->nama; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Indikator Sasaran</label>
                                            <select id="indikator_sasaran" name="indikator_sasaran" class="form-control">
                                                <option value="none">------------Select Indikator Sasaran------------</option>
                                                <?php foreach($indikator_sasaran as $indikator_sasaran):?>
                                                    <option value="<?php echo $indikator_sasaran->id; ?>"><?php echo $indikator_sasaran->nama; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Realisasi Capaian Kinerja RPJMD s/d RKPD Tahun Lalu (n-2)</label>
                                            <input type="text" class="form-control" name="kdua" id="kdua" placeholder="Masukkan Target Kinerja"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Target Kinerja dan Anggaran RKPD Tahun berjalan (tahun n-1) yang dievaluasi</label>
                                            <input type="text" class="form-control" name="ktiga" id="ktiga" placeholder="Masukkan Target Kinerja"> 
                                        </div>
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>