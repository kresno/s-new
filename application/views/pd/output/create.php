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
                                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                $(document).ready(function(){
                    $("#kegiatan").change(function(){
                        var keg_id = $(this).children("option:selected").val();
			            $.ajax({
                            type : "GET",
                            dataType : "JSON",
                            url : "<?php echo base_url('api/getOutputByKegId/')?>" + keg_id,
                            success : function(response){
                                
                            }
                        });
                    })
                });
                </script>