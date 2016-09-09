
{{-- Scripts --}}
<script src="/js/Swap/app.js"></script>

{{-- jQuery UI 1.11.4 --}}
<script src="{{ URL::to('/plugins/jQueryUI/jquery-ui.min.js') }}"></script>

{{-- Bootstrap HTML5 --}}
<script src="{{ URL::to('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

{{-- DataTables --}}
<script src="{{ URL::to('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

{{-- Slimscroll --}}
<script src="{{ URL::to('/plugins/SlimScroll/jquery.slimscroll.min.js') }}"></script>

{{-- Select2 --}}
<script src="{{ url('/plugins/select2/select2.full.min.js') }}"></script>

{{-- Input Masks Scripts --}}
<script src="{{ url('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ url('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ url('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

{{-- Swap Development Theme, App & Default JS --}}
<script src="{{ URL::to('/plugins/App/app.min.js') }}"></script>
<script src="{{ URL::to('/plugins/App/theme.js') }}"></script>
<script src="{{ URL::to('/js/Swap/default.js') }}"></script>


    @stack('script')


{{-- jQuery Mobile 1.4.5 --}}
{{--<script src="{{ URL::to('/public/js/jQueryMobile/jquery.mobile-1.4.5.min.js') }}"></script>--}}

{{--



$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
    );

    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
        showInputs: false
    });
});
</script> --}}

