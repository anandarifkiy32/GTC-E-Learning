<footer id="footer" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- footer logo -->
			<div class="col-md-6">
				<div class="footer-logo">
					<a class="logo" href="<?php echo base_url() ?>">
						<img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
					</a>
				</div>
			</div>
			<!-- footer logo -->

			<!-- footer nav -->
			<div class="col-md-6">
				<ul class="footer-nav">
					<li><a href="<?php echo base_url('') ?>">Home</a></li>
					<li><a href="<?php echo base_url('homepage/coursecatalog') ?>">Courses</a></li>
					<li><a href="<?php echo base_url('homepage/contact') ?>">Contact</a></li>
					<li class="dropdown"><a href="<?php if(!$profile){echo base_url();}else{echo "";} ?>" <?php if($profile){ ?> class="dropdown-toggle" data-toggle="dropdown" <?php } ?>>              
						<?php 
						if($profile){
							foreach ($profile as $p) {
								echo $p->nama ;
							}
						}else{
							echo 'Login';
						}
						?></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('homepage/showprofile') ?>">Profile</a></li>
							<li><a href="<?php echo base_url('homepage/logout')?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /footer nav -->

		</div>
		<!-- /row -->

		<!-- row -->
		<div id="bottom-footer" class="row">


			<!-- copyright -->
			<div class="col-md-12">
				<center>
					<div class="footer-copyright">
						<span>&copy; Copyright 2018. | <a href="<?php echo base_url('') ?>"> Global Top Career EduSite </a></span>
					</div>
				</center>
			</div>
			<!-- /copyright -->

		</div>
		<!-- row -->

	</div>
	<!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'><div class='preloader'></div></div>
<!-- /preloader -->
<!-- jQuery Plugins -->
<script src="<?php echo base_url()?>assets/pdfjs/build/pdf.js"></script>
<script src="<?php echo base_url()?>assets/pdfjs/build/pdf.worker.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/jquery.min.js"></script>
<sc<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script src="https://cdn.plyr.io/3.4.3/plyr.polyfilled.js"></script>
<script type="text/javascript">
	$('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
		language:  'id',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
	$('.form_time').datetimepicker({
		language:  'fr',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
	});

	var checker = document.getElementById('checkme');
	var sendbtn = document.getElementById('sendNewSms');
	var link    = document.getElementById('link');
 	// when unchecked or checked, run the function
 	checker.onchange = function(){
 		if(this.checked){
 			<?php if(isset($modul)){
 				foreach ($modul as $m) { ?>	
 					link.href		 = '<?php echo base_url('homepage/joincourse/'.$m->slug); ?>';
 					<?php } } ?>
 					sendbtn.disabled = false;
 				} else {
 					link.href		 = '';
 					sendbtn.disabled = true;
 				}

 			}
 		</script>
 		<script>
		// Set the date we're counting down to
		var countDownDate = new Date('<?php echo $this->session->userdata('quizend') ?>').getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

    	// Get todays date and time
    	var now = new Date().getTime();

    	// Find the distance between now and the count down date
    	var distance = countDownDate - now;

    	// Time calculations for days, hours, minutes and seconds

    	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    	// Output the result in an element with id="demo"
    	document.getElementById("demo").innerHTML ="Sisa waktu : " +  hours + "j "
    	+ minutes + "m " + seconds + "d ";
    	
    	// If the count down is over, write some text 
    	if (distance < 0) {
    		clearInterval(x);
    		document.getElementById('myquiz').submit();
    	}
    }, 1000);
</script>
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal

// When the user clicks on <span> (x), close the modal
modal.onclick = function() { 
	modal.style.display = "none";
}
</script>
<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>

<script>
	const player = new Plyr.setup('#player');
</script>

</body>
</html>
