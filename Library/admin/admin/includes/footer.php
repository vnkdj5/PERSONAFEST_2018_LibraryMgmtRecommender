      <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        
        <!-- jQuery UI 1.10.3 -->
        <script src="./js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap -->
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- DATA TABES SCRIPT -->
        <script src="./js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="./js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        
        <!-- Morris.js charts -->
<!--         <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<!--         <script src="./js/plugins/morris/morris.min.js" type="text/javascript"></script> -->
        
        <!-- Sparkline -->
<!--         <script src="./js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script> -->
        
        <!-- jvectormap -->
<!--         <script src="./js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> -->
<!--         <script src="./js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script> -->
        
        <!-- fullCalendar -->
<!--         <script src="./js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script> -->
        
        <!-- jQuery Knob Chart -->
<!--         <script src="./js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script> -->
       
        <!-- daterangepicker -->
<!--         <script src="./js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script> -->
       
        <!-- Bootstrap WYSIHTML5 -->
<!--         <script src="./js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script> -->
       
        <!-- iCheck -->
<!--         <script src="./js/plugins/iCheck/icheck.min.js" type="text/javascript"></script> -->

        <!-- AdminLTE App -->
        <script src="./js/AdminLTE/app.js" type="text/javascript"></script>
        
                      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- 		<script src="./js/AdminLTE/dashboard.js" type="text/javascript"></script>  -->
   
        
        <!-- AdminLTE for demo purposes -->
<!--         <script src="./js/AdminLTE/demo.js" type="text/javascript"></script> -->
        

<!--    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!--     <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <script src="./js/bootstrap-datepicker.js"></script>
    <script>
    $('.input-group.date').datepicker({
    format: "yyyy/mm/dd",
    startDate: "2012-01-01",
    endDate: "2015-01-01",
    todayBtn: "linked",
    autoclose: true,
    todayHighlight: true
    });
    </script>

         <script type="text/javascript">
            $(function() {
                $("#datatable").dataTable();
                $("#datatable1").dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
        
    </body>
</html>