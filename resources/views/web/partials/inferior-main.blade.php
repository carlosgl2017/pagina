	<!-- Small modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="-webkit-box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);
	-moz-box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);
	box-shadow: 10px 10px 32px -1px rgba(0,0,0,0.75);">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <h2 class="modal-title" id="exampleModalCenterTitle" style="font-size: 26px; text-align: justify; color:green;text-align: center">Formulario de Registro de Reclamos</h2> -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				
					<a href="{{route('registro-diferidos')}}"><img class="img-fluid" src="{{asset('web/img/descarga.png')}}"></a>
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
		<script>
			$(function() {
				$('#main_navbar').bootnavbar({
					animation: true
				});
			})
		</script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
		<script src="{{asset('web/js/owl.carousel.js')}}"></script>
		<script src="{{asset('web/js/maps.js')}}"></script>



		<!--<script src="{{asset('js/app.js')}}"></script>-->
		<script src="{{asset('web/js/custom.js')}}"></script>
		<script src="{{asset('web/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('web/js/waypoints.js')}}"></script>
		<script src="{{asset('web/js/lightbox.js')}}"></script>

		<script src="{{asset('web/js/jquery.counterup.js')}}"></script>
		<script src="{{asset('web/js/validator.js')}}"></script>
		<script src="{{asset('web/js/contact.js')}}"></script>
		<!-- <script src="{{asset('web/js/bootstrap-select.min.js')}}"></script> -->

		<!-- Cargar código javascript-->
		@stack('scripts')
		<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e72b8581758630012f31b0f&cms=website' async='async'></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOvbR9PbGTRuoJekD1f1HYY0_JWZAtc&callback=init_map"></script>



		<!-- here code popup-->


		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API = Tawk_API || {},
				Tawk_LoadStart = new Date();
			(function() {
				var s1 = document.createElement("script"),
					s0 = document.getElementsByTagName("script")[0];
				s1.async = true;
				s1.src = 'https://embed.tawk.to/5ecc47dbc75cbf1769ef44df/default';
				s1.charset = 'UTF-8';
				s1.setAttribute('crossorigin', '*');
				s0.parentNode.insertBefore(s1, s0);
			})();
		</script>
		<!--End of Tawk.to Script-->
		</body>

		</html>