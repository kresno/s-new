        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php foreach($kegiatan as $kegiatan):?>
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/pd/output/create/'.$kegiatan->id); ?>" class="btn btn-info waves-effect waves-light m-t-10">Tambah Data</a>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Output Kegiatan :  
                                    <?php echo $kegiatan->nama; ?>
                                <?php endforeach; ?>
                            </h3>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr style="height: 22px;">
                                            <td style="height: 66px; width: 237px;" rowspan="3" align="center">Indikator Kinerja Program (Outcome)/Kegiatan (Output)</td>
                                            <td style="height: 44px; width: 44px;" colspan="3" rowspan="2" align="center">Target RPJMD pada Tahun 2016 s/d 2021 (Periode RPJMD)</td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Realisasi Capaian Kinerja RPJMD s/d RKPD Tahun Lalu (n-2) </td>
                                            <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Target Kinerja dan Anggaran RKPD Tahun berjalan (tahun n-1) yang dievaluasi</td>
                                            <td style="height: 22px; width: 120px;" colspan="8" align="center">Realisasi Kinerja Pada Triwulan</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 30px;" colspan="2" align="center">I</td>
                                            <td style="height: 22px; width: 30px;" colspan="2" align="center">II</td>
                                            <td style="height: 22px; width: 30px;" colspan="2" align="center">III</td>
                                            <td style="height: 22px; width: 30px;" colspan="2" align="center">IV</td>
                                        </tr>
                                        <tr style="height: 22px;">
                                            <td style="height: 22px; width: 30px;" align="center">K</td>
                                            <td style="height: 22px; width: 30px;" align="center">Satuan</td>
                                            <td style="height: 22px; width: 14px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                            <td style="height: 22px; width: 15px;" align="center">K</td>
                                            <td style="height: 22px; width: 15px;" align="center">Rp. (000)</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if($output) foreach($output as $arr):?>
                                            <?php echo "<tr>"; ?>
                                            <?php echo "<td align='left'>".$arr->tolak_ukur."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->ksatu."</td>"; ?>
                                            <?php echo "<td align='center'>".$arr->satuan."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rsatu/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->kdua."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rdua/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->ktiga."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rtiga/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->kempat."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rempat/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->klima."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rlima/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->kenam."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->renam/1000)."</td>"; ?>
                                            <?php echo "<td align='right'>".$arr->ktujuh."</td>"; ?>
                                            <?php echo "<td align='right'>".number_format($arr->rtujuh/1000)."</td>"; ?>
                                            <?php echo "</tr>"; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->