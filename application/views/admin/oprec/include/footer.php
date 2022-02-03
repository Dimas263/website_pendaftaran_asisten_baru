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

	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#tabel-peserta').DataTable({
              		ordering: false,
	      		dom: 'Bfrtip',
    			buttons: [
            			{extend: 'copyHtml5', className: 'btn btn-info btn-sm'},
            			{extend: 'excelHtml5', className: 'btn btn-success btn-sm'},
            			{extend: 'pdfHtml5', className: 'btn btn-danger btn-sm'}
        		]
            });
		});
	</script>
	<script>
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u",function(e) {
            if(e.ctrlKey) {
                return false;
            }
            else
            {
                return true;
            }
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

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 3, 2022 23:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("deadline").innerHTML = days + "Hari " + hours + "Jam "
  + minutes + "Menit " + seconds + "Detik ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("deadline").innerHTML = "PENDAFTARAN DITUTUP";
  }
}, 1000);
</script>

	</body>
</html>
