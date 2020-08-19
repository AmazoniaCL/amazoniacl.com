<script src="{{ asset('assets/js/jQuery/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('assets/js/libs/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.matchHeight.js') }}"></script>
<script src="{{ asset('assets/js/libs/svgxuse.js') }}"></script>
<script src="{{ asset('assets/js/libs/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('assets/js/libs/Headroom.js') }}"></script>
<script src="{{ asset('assets/js/libs/velocity.js') }}"></script>
<script src="{{ asset('assets/js/libs/ScrollMagic.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/libs/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/material.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/js/libs/smooth-scroll.js') }}"></script>
<script src="{{ asset('assets/js/libs/selectize.js') }}"></script>
<script src="{{ asset('assets/js/libs/swiper.jquery.js') }}"></script>
<script src="{{ asset('assets/js/libs/moment.js') }}"></script>
<script src="{{ asset('assets/js/libs/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/libs/fullcalendar.js') }}"></script>
<script src="{{ asset('assets/js/libs/isotope.pkgd.js') }}"></script>
<script src="{{ asset('assets/js/libs/ajax-pagination.js') }}"></script>
<script src="{{ asset('assets/js/libs/Chart.js') }}"></script>
<script src="{{ asset('assets/js/libs/chartjs-plugin-deferred.js') }}"></script>
<script src="{{ asset('assets/js/libs/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/libs/loader.js') }}"></script>
<script src="{{ asset('assets/js/libs/run-chart.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/libs/jquery.gifplayer.js') }}"></script>
<script src="{{ asset('assets/js/libs/mediaelement-and-player.js') }}"></script>
<script src="{{ asset('assets/js/libs/mediaelement-playlist-plugin.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/ion.rangeSlider.js') }}"></script>
<script src="{{ asset('assets/js/libs/leaflet.js') }}"></script>
<script src="{{ asset('assets/js/libs/MarkerClusterGroup.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/libs-init/libs-init.js') }}"></script>
{{-- <script defer src="{{ asset('assets/fonts/fontawesome-all.js') }}"></script> --}}

<script src="{{ asset('assets/Bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

@yield('scripts')

<script>
	$(document).ready(function () {
		var html = '<option value=""></option>';
		$.ajax({
			url: 'https://www.datos.gov.co/resource/xdk5-pm3f.json?$select=departamento&$group=departamento',
			type: 'GET',
			success: function (data) {
				data.forEach(dpt => {
					html += '<option value="'+dpt.departamento+'">'+dpt.departamento+'</option>';
				});
				$('.departamento_origen').html(html)
				$('.departamento_destino').html(html)
			}
        })
        
        $('.form_cotizacion').submit(function () {
            $.ajax({
                url: '/create/cotizacion',
                type: 'POST',
                data: $('.form_cotizacion').serialize(),
                success: function (data) {
                    if (data.creado == 1) {
                        $('.response-true').removeClass('d-none')
                    } else {
                        $('.response-false').removeClass('d-none')
                    }
                    $('.form_cotizacion')[0].reset()
                }
            })

            return false;
        })

        $('.form_cotizacion-welcome').submit(function () {
            $.ajax({
                url: '/create/cotizacion',
                type: 'POST',
                data: $('.form_cotizacion-welcome').serialize(),
                success: function (data) {
                    if (data.creado == 1) {
                        $('.response-true').removeClass('d-none')
                    } else {
                        $('.response-false').removeClass('d-none')
                    }
                    $('.form_cotizacion-welcome')[0].reset()
                }
            })

            return false;
        })
	})

    function dptOrigen(dpt) {
        var html = '<option value=""></option>';
        $.ajax({
            url: 'https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento='+dpt,
            type: 'GET',
            success: function (data) {
                data.forEach(dpt => {
                    html += '<option value="'+dpt.municipio+'">'+dpt.municipio+'</option>';
                });
                $('.ciudad_origen').html(html)
            }
        })
    }

    function dptDestino(dpt) {
        var html = '<option value=""></option>';
        $.ajax({
            url: 'https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento='+dpt,
            type: 'GET',
            success: function (data) {
                data.forEach(dpt => {
                    html += '<option value="'+dpt.municipio+'">'+dpt.municipio+'</option>';
                });
                $('.ciudad_destino').html(html)
            }
        })
    }
</script>
