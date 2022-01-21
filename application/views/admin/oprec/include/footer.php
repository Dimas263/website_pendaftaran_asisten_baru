	</div>
	<!-- END Page Container -->

	<footer id="page-footer" class="opacity-0">
		<div class="content py-20 font-size-xs clearfix">
			<div class="float-right">
				<img class="img-fluid img-thumbnail rounded-circle user-img mb-1" src="<?=base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png')?>" width="24" alt="" /><a class="font-w600" href="https://ma-lanjut.lab.gunadarma.ac.id" target="_blank">Lab Manajemen Lanjut</a>
			</div>
			<div class="float-left">
				<a class="font-w600" href="https://instagram.com/dimas263_" target="_blank">&copy;Dimas263</a>
			</div>
		</div>
	</footer>

	<script src="<?=base_url('assets/admin/')?>assets/js/codebase.core.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/codebase.app.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/pages/be_pages_dashboard.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?=base_url('assets/admin/')?>assets/js/pages/be_tables_datatables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#tabel-peserta').DataTable();
		});
	</script>
	<script>
		window.callbellSettings = {
			token: "fDtXKWxMgJUuN6NQySdosPjY"
		};
	</script>
	<script>
		(function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
	</script>


	</body>
</html>
