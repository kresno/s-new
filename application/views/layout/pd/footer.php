            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © 2019 Bappeda Themed By Cubic Admin
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="<?php echo base_url('public/plugins/components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="<?php echo base_url('public/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="<?php echo base_url('public/js/jquery.slimscroll.js'); ?>"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="<?php echo base_url('public/js/waves.js'); ?>"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="<?php echo base_url('public/js/sidebarmenu.js'); ?>"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="<?php echo base_url('public/js/custom.js'); ?>"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="<?php echo base_url('public/plugins/components/chartist-js/dist/chartist.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/sparkline/jquery.charts-sparkline.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/knob/jquery.knob.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/easypiechart/dist/jquery.easypiechart.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/db1.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/components/datatables/jquery.dataTables.min.js'); ?>"></script>
    
    <script>
        $(document).ready(function(){
            $("#kegiatan").change(function(){
                var keg_id = $(this).children("option:selected").val();
                console.log(keg_id);
                $.ajax({
                    type : "GET",
                    dataType : "JSON",
                    url : "<?php echo site_url('pd/output/getOutputByKegId/')?>" + keg_id,
                    success: function(response){
                        $("#output").empty().append('<option>-- Pilih Output --</option');
                        var len = response.length;
                        for(var i=0; i<len; i++){
                            var id = response[i].id;
                            var nama_output = response[i].nama_output;

                            var tr_str = '<option id=' + "output" + ' value=' + id + '>' + nama_output + '</option>';
                            $("#output").append(tr_str);
                        }
                    }
                });
            });

        });
        </script>


    <script>
        $(document).ready(function() {
            $("#program").select2({
                placeholder: "Please Select"
            });

            $("#indikator_sasaran").select2({
                placeholder: "Please Select"
            });
        });
    </script>
    <script>
    $(function() {
        $('#myTable').DataTable();

        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="<?php echo base_url('public/plugins/components/styleswitcher/jQuery.style.switcher.js'); ?>"></script>
</body>

</html>