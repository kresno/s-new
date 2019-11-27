<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var tableToExcel = (function () {
                var uri = 'data:application/vnd.ms-excel;base64,'
                    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                    , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
                    , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
                return function (table, name) {
                    if (!table.nodeType) table = document.getElementById(table)
                    var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
                    var blob = new Blob([format(template, ctx)]);
                    var blobURL = window.URL.createObjectURL(blob);
    
                    if (ifIE()) {
                        csvData = table.innerHTML;
                        if (window.navigator.msSaveBlob) {
                            var blob = new Blob([format(template, ctx)], {
                                type: "text/html"
                            });
                            navigator.msSaveBlob(blob, '' + name + '.xls');
                        }
                    }
                    else
                    window.location.href = uri + base64(format(template, ctx))
                }
            })()
    
            function ifIE() {
                var isIE11 = navigator.userAgent.indexOf(".NET CLR") > -1;
                var isIE11orLess = isIE11 || navigator.appVersion.indexOf("MSIE") != -1;
                return isIE11orLess;
            }
        </script>
        <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
    </head>
    
    <body>
    <input type="button" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel">
    <!-- <button id="btnExport" onclick="fnExcelReport();"> EXPORT </button> -->
        <table style="border-color: #fff;" border="1" id="testTable">      
            <thead>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32"> &nbsp; </td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32" align="center">Formulir</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32" align="center">Evaluasi Hasil terhadap RENJA PD</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32" align="center">Kabupaten Sukabumi</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32" align="center">Tahun 2019</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32"> &nbsp; </td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32">Sasaran Pembangunan Tahunan Kabupaten : Sukabumi</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32">Sasaran : Meningkatnya Kualitas Perencanaan Pembangunan Daerah</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" colspan="32"> &nbsp; </td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 66px; width: 24px;" rowspan="3" align="center">No</td>
                    <td style="height: 66px; width: 60px;" colspan="4" rowspan="3" align="center">Kode</td>
                    <td style="height: 66px; width: 270px;" rowspan="3" align="center">Urusan/Bidang Urusan Pemerintahan Daerah dan Program/Kegiatan</td>
                    <td style="height: 66px; width: 237px;" rowspan="3" align="center">Indikator Kinerja Program (Outcome)/Kegiatan (Output)</td>
                    <td style="height: 44px; width: 44px;" colspan="3" rowspan="2" align="center">Target RPJMD pada Tahun 2016 s/d 2021 (Periode RPJMD)</td>
                    <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Realisasi Capaian Kinerja RPJMD s/d RKPD Tahun Lalu (n-2) </td>
                    <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Target Kinerja dan Anggaran RKPD Tahun berjalan (tahun n-1) yang dievaluasi</td>
                    <td style="height: 22px; width: 120px;" colspan="8" align="center">Realisasi Kinerja Pada Triwulan</td>
                    <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Realisasi Capaian Kinerja dan Anggaran RKPD yang Dievaluasi (tahun n-1)</td>
                    <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Tingkat Capaian Kinerja dan Realisasi Anggaran RKPD Tahun n-1 (%)</td>
                    <td style="height: 44px; width: 28px;" colspan="2" rowspan="2" align="center">Realisasi Kinerja &amp; Anggaran RPJMD s/d Tahun n-1 (Akhir Thn Pelaks RKPD)</td>
                    <td style="height: 44px; width: 30px;" colspan="2" rowspan="2" align="center">Tingkat Capaian Kinerja dan Realisasi Anggaran RPJMD s/d Tahun n-1 (%)</td>
                    <td style="height: 66px; width: 15px;" rowspan="3" align="center">Perangkat Daerah Penanggung Jawab</td>
                    <td style="height: 66px; width: 15px;" rowspan="3">Keterangan</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">I</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">II</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">III</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">IV</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">K</td>
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
                    <td style="height: 22px; width: 15.9167px;" align="center">K</td>
                    <td style="height: 22px; width: 14.0833px;" align="center">Rp. (000)</td>
                    <td style="height: 22px; width: 15px;" align="center">K</td>
                    <td style="height: 22px; width: 15px;" align="center">Rp</td>
                    <td style="height: 22px; width: 15px;" align="center">K</td>
                    <td style="height: 22px; width: 13px;" align="center">Rp. (000)</td>
                    <td style="height: 22px; width: 15px;" align="center">K</td>
                    <td style="height: 22px; width: 15px;" align="center">Rp.</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;" align="center">1</td>
                    <td style="height: 22px; width: 60px;" colspan="4" align="center">2</td>
                    <td style="height: 22px; width: 270px;" align="center">3</td>
                    <td style="height: 22px; width: 237px;" align="center">4</td>
                    <td style="height: 22px; width: 44px;" colspan="3" align="center">5</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">6</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">7</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">8</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">9</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">10</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">11</td>
                    <td style="height: 22px; width: 30px;" colspan="2" align="center">12=8+9+10+11</td>
                    <td style="height: 22px; width: 15px;" colspan="2" align="center">13 = 12/7 *100</td>
                    <td style="height: 22px; width: 15px;" colspan="2" align="center">14 = 6+12</td>
                    <td style="height: 22px; width: 15px;" colspan="2" align="center">15 = 14/5 *100</td>
                    <td style="height: 22px; width: 15px;" align="center">16</td>
                    <td style="height: 22px; width: 15px;" align="center">17</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 270px;">&nbsp;</td>
                    <td style="height: 22px; width: 237px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 14px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                    <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 13px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">04</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 270px;"><b>URUSAN PEMERINTAHAN FUNGSI PENUNJANG</b></td>
                    <td style="height: 22px; width: 237px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 14px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                    <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 13px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                </tr>
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">04</td>
                    <td style="height: 22px; width: 15px;">01</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 270px;"><b>Penunjang urusan pemerintahan</b></td>
                    <td style="height: 22px; width: 237px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 14px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15.9167px;">&nbsp;</td>
                    <td style="height: 22px; width: 14.0833px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 13px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                </tr>
                
                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 270px;">&nbsp;</td>
                    <td style="height: 22px; width: 237px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 13px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                </tr>

                <tr style="height: 22px;">
                    <td style="height: 22px; width: 24px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 270px;">&nbsp;</td>
                    <td style="height: 22px; width: 237px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 13px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                    <td style="height: 22px; width: 15px;">&nbsp;</td>
                </tr>


            </tbody>
        </table>
        <?php 
                $previous_progid='';
                $previous_kegid='';
                $previous_indid='';
                $case=0;
                foreach ($return_arr_prog as $data_prog) {
                    if($previous_progid!=='' && $previous_progid !== $data_prog['id_prog']){
                        foreach($return_arr_cap as $data_cap){
                            if($data_cap['id_prog']==$previous_progid){
                                echo "<tr bgcolor='red'>";
                                echo "<td colspan=7 align='right'>Rata-Rata capaian Kinerja (%)</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_ksatu']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rsatu']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_kdua']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rdua']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_ktiga']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rtiga']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_kempat']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rempat']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_klima']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rlima']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_kenam']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_renam']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_cap['avg_ktujuh']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['sum_rtujuh']/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['avg_kempat']+$data_cap['avg_klima']+$data_cap['avg_kenam']+$data_cap['avg_ktujuh'])."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".(($data_cap['sum_rempat']+$data_cap['sum_rlima']+$data_cap['sum_renam']+$data_cap['sum_rtujuh'])/1000)."</td>";
                                
                                echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                                echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                                echo "<td style='height: 22px; width: 15px;'>".($data_cap['avg_kempat']+$data_cap['avg_klima']+$data_cap['avg_kenam']+$data_cap['avg_ktujuh']+$data_cap['avg_kdua'])."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".(($data_cap['sum_rempat']+$data_cap['sum_rlima']+$data_cap['sum_renam']+$data_cap['sum_rtujuh']+$data_cap['sum_rdua'])/1000)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".number_format(((($data_ind['kempat']+$data_ind['klima']+$data_ind['kenam']+$data_ind['ktujuh']+$data_ind['kdua'])/$data_ind['ksatu'])*100),2)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".number_format(((($data_ind['rempat']+$data_ind['rlima']+$data_ind['renam']+$data_ind['rtujuh']+$data_ind['rdua'])/$data_ind['rsatu'])*100),2)."</td>";
                                echo "<td style='height: 22px; width: 15px;'>".$data_ind['nama_user']."</td>";
                                echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                                echo "</tr>";
                            }
                        }
                        
                    } else {

                    }

                    $previous_progid = $data_prog['id_prog'];
                            echo "<tr>";
                            echo "<td style='height: 22px; width: 24px;'>&nbsp;</td>";
                            echo "<td style='height: 22px; width: 15px;'>04</td>";
                            echo "<td style='height: 22px; width: 15px;'>01</td>";
                            echo "<td style='height: 22px; width: 15px;'>".$data_prog['kode_prog']."</td>";
                            echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                            echo "<td style='height: 22px; width: 270px;'><b>".$data_prog['nama_prog']."</b></td>";
                            echo "<td colspan=26>&nbsp;</td>";
                            echo "</tr>";
                    
                    $count_keg=0;
                    foreach($return_arr_keg as $data_keg) {
                        $previous_kegid = $data_keg['id_keg'];
                        if($data_keg['id_prog']==$previous_progid){
                            ++$count_keg;
                            // echo "<td>&nbsp;--</td>";
                            // echo "<td>".$data_keg['nama_keg']."</td><br>";
                            echo "<tr>";
                            echo "<td style='height: 22px; width: 24px;'>&nbsp;</td>";
                            echo "<td style='height: 22px; width: 15px;'>04</td>";
                            echo "<td style='height: 22px; width: 15px;'>01</td>";
                            echo "<td style='height: 22px; width: 15px;'>".$data_prog['kode_prog']."</td>";
                            echo "<td style='height: 22px; width: 15px;'>".$count_keg."</td>";
                            echo "<td style='height: 22px; width: 270px;'>".$data_keg['nama_keg']."</td>";
                            echo "<td colspan=26>&nbsp;</td>";
                            echo "</tr>";
                        
                            foreach($return_arr_ind as $data_ind) {
                                    if($data_ind['id_keg']==$previous_kegid){
                                        echo "<tr>";
                                        echo "<td colspan=6>&nbsp;</td>";
                                        echo "<td style='height: 22px; width: 237px;'>".$data_ind['tolak_ukur']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['ksatu']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['satuan']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rsatu']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['kdua']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rdua']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['ktiga']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rtiga']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['kempat']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rempat']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['klima']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rlima']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['kenam']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['renam']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['ktujuh']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['rtujuh']/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['kempat']+$data_ind['klima']+$data_ind['kenam']+$data_ind['ktujuh'])."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".(($data_ind['rempat']+$data_ind['rlima']+$data_ind['renam']+$data_ind['rtujuh'])/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".((($data_ind['kempat']+$data_ind['klima']+$data_ind['kenam']+$data_ind['ktujuh'])/$data_ind['ktiga'])*100)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".((($data_ind['rempat']+$data_ind['rlima']+$data_ind['renam']+$data_ind['rtujuh'])/$data_ind['rtiga'])*100)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".($data_ind['kempat']+$data_ind['klima']+$data_ind['kenam']+$data_ind['ktujuh']+$data_ind['kdua'])."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".(($data_ind['rempat']+$data_ind['rlima']+$data_ind['renam']+$data_ind['rtujuh']+$data_ind['rdua'])/1000)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".number_format(((($data_ind['kempat']+$data_ind['klima']+$data_ind['kenam']+$data_ind['ktujuh']+$data_ind['kdua'])/$data_ind['ksatu'])*100),2)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".number_format(((($data_ind['rempat']+$data_ind['rlima']+$data_ind['renam']+$data_ind['rtujuh']+$data_ind['rdua'])/$data_ind['rsatu'])*100),2)."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>".$data_ind['nama_user']."</td>";
                                        echo "<td style='height: 22px; width: 15px;'>&nbsp;</td>";
                                        echo "</tr>";
                                    }
                                }
                        
                            }
                        }

                }
                ?>    
    
    </body>

</html>