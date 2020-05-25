	<!-- Small modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="-webkit-box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);
	-moz-box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);
	box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalCenterTitle" style="font-size: 26px; text-align: justify; color:green;text-align: center">Cooperativa de Ahorro y Crédito "San Martín" R.L. Informa</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p style="font-size: 21px; text-align: justify;">
					La Cooperativa de Ahorro y Crédito Societaria "San Martin" R.L., comunica a sus
					asociados, que en virtud a las acciones de emergencia dispuestas por el Gobierno
					Nacional para la prevención y contención del brote de Coronavirus, se está
					atendiendo en horario continuo de horas <strong>07:00 a 12:00</strong>
					Se insinúa tomar nota de la presente. Cualquier modificación se dará a conocer
					oportunamente.
					<br>
					<br>
					Se agradece por su comprensión. 
				</p>
			</div>
			<div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>-->
</div>
</div>
</div>
<!--- Top Scroll -->
<a href="#home" class="top-scroll">
	<i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->

<!--- Script Source Files -->

<script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/js/popper.min.js')}}"></script>
<script src="{{asset('web/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/bootnavbar.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
<script src="{{asset('web/js/custom.js')}}"></script>
<script src="{{asset('web/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('web/js/waypoints.js')}}"></script>
<script src="{{asset('web/js/lightbox.js')}}"></script>
<script src="{{asset('web/js/owl.carousel.js')}}"></script>
<script src="{{asset('web/js/jquery.counterup.js')}}"></script>
<script src="{{asset('web/js/validator.js')}}"></script>
<script src="{{asset('web/js/contact.js')}}"></script>
<script src="{{asset('web/js/maps.js')}}"></script>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e72b8581758630012f31b0f&cms=website' async='async'></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOvbR9PbGTRuoJekD1f1HYY0_JWZAtc&callback=init_map"></script>

@if (session('showModal'))
<script type="text/javascript">
	$(document).ready(function(){
		$('#myModal').modal('show')
	});
</script>
@endif

<script>
	$(function () {
		$('#main_navbar').bootnavbar({
                //option
                //animation: false
            });
	})
</script>


</body>
</html>