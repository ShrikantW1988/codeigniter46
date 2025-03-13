<!-- Core JS files -->
<script src="<?=ASSETS_URL?>demo/demo_configurator.js"></script>
	<script src="<?=ASSETS_URL?>js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script src="<?=ASSETS_URL?>js/jquery/jquery.min.js"></script>
	
	<script src="<?=ASSETS_URL?>js/vendor/notifications/sweet_alert.min.js"></script>
	<script src="<?=ASSETS_URL?>js/vendor/tables/datatables/datatables.min.js"></script>
	<script src="<?=ASSETS_URL?>js/app.js"></script>
	
	<!-- /theme JS files -->

	<script>
		// Defaults
		const swalInit = swal.mixin({
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-light',
                    denyButton: 'btn btn-light',
                    input: 'form-control'
                }
            });
	</script>