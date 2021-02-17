        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">        
            <div class="row m-0">
                
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">><?php echo $data->program; ?></h3>
                            <p class="info-text font-12">Total Program</p>
                            <span class="hr-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue"><?php echo $data->kegiatan; ?></h3>
                            <p class="info-text font-12">Total Kegiatan</p>
                            <span class="hr-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue"><?php echo $data->indikator_kegiatan; ?></h3>
                            <p class="info-text font-12">Total Indikator</p>
                            <span class="hr-line"></span>
                        </div>
                    </div>
                </div>

            </div>