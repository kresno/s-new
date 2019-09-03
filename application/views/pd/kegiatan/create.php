            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Tambah Kegiatan</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?php echo base_url()?>index.php/pd/kegiatan/store" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Indikator Program</label>
                                            <select id="program" name="indikator_id" class="form-control">
                                                <?php foreach($indikator as $indikator):?>
                                                    <option value="<?php echo $indikator->id; ?>"><?php echo $indikator->nama_indikator; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kegiatan">Kegiatan</label>
                                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan Nama Kegiatan"> 
                                        </div>
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>