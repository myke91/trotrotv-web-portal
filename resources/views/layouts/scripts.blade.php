<script src="{{URL::asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('js/waves.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{URL::asset('js/custom.min.js')}}"></script>
<script src="{{URL::asset('js/dashboard1.js')}}"></script>
<script src="{{URL::asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>