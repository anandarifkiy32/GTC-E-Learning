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
						<span>© Copyright 2018. | <a href="<?php echo base_url('') ?>"> Global Top Career EduSite </a></span>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script src="https://cdn.plyr.io/3.4.3/plyr.polyfilled.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
  $('.rotate').css('height', $('.rotate').width());
});
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
	const player = new Plyr.setup('#player');
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
	function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024;
        var fileformat = file.value.split('.')[1]; // in MB
         // in MB
        if (FileSize > 180) {
        		alert('Ukuran melebihi 180 MB');	
        		$(file).val('');
        }
        if (fileformat.toUpperCase() != 'MP4'){
        		alert('Format file tidak didukung');	
        		$(file).val('');
        } 

    }
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active2");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script type="text/x-template" id="msg-template" style="display: none">
    <tbody width="230px">
        <tr class="msg-wgt-message-list-header" width="230px">
            <td class="name" style="padding:0px 4px 0px 4px;font-size:12px"></td>
        </tr>
        <tr class="msg-wgt-message-list-body" width="230px">
            <td style="padding:0px 4px 0px 8px"><p style="width:230px;margin:0px;font-size:12px;"></p></td>
        </tr>
        <tr>
        	<td class="time" style="font-size:9px;padding:4px 4px 0px 4px;color:black"></td>
        </tr>
        <tr class="msg-wgt-message-list-separator" width="230px"><td colspan="3"></td></tr>
    </tbody>
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    var chatPosition = [
        false, // 1
        false, // 2
        false, // 3
        false, // 4
        false, // 5
        false, // 6
        false, // 7
        false, // 8
        false, // 9
        false // 10
    ];

    // New chat
    $(document).on('click', 'a[data-friend]', function(e) {
        var $data = $(this).data();
        if ($data.friend !== undefined && chatPosition.indexOf($data.friend) < 0) {
            var posRight = 0;
            var position;
            for(var i in chatPosition) {
                if (chatPosition[i] == false) {
                    posRight = (i * 270) + 20;
                    chatPosition[i] = $data.friend;
                    position = i;
                    break;
                }
            }
            var tpl = $('#wgt-container-template').html();
            var tplBody = $('<div/>').append(tpl);
            tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
            tplBody.find('.msg-wgt-container').css('right', posRight + 'px');
            tplBody.find('.msg-wgt-container').attr('data-chat-position', position);
            tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
            $('body').append(tplBody.html());
            initializeChat();
        }
    });


    // Close
    $(document).on('click', '.msg-wgt-header > a.close', function() {
        var parent = $(this).parent().parent();
        var $data = parent.data();
        parent.remove();
        chatPosition[$data.chatPosition] = false;
        setTimeout(function() {
            initializeChat();
        }, 1000)
    });

    var chatInterval = [];

    var initializeChat = function() {
        $.each(chatInterval, function(index, val) {
            clearInterval(chatInterval[index]);   
        });

        $('.msg-wgt-active').each(function(index, el) {
            var $data = $(this).data();
            var $that = $(this);
            var $container = $that.find('.msg-wgt-message-container');

            chatInterval.push(setInterval(function() {

                var oldscrollHeight = $container[0].scrollHeight;
                var oldLength = 0;
                $.post('<?= site_url('homepage/getChats') ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    $that.find('a.name').text(data.name);
                    // from last
                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];

                        var tpl = $('#msg-template').html();
                        var tplBody = $('<div/>').append(tpl);
                        var id = (val.id_chat +'_'+ val.slug_modul).toString();
                 

                        if ($that.find('#'+ id).length == 0) {
                            tplBody.find('tbody').attr('id', id); // set class
                            tplBody.find('td.name').text(val.pengirim); // set name
                            tplBody.find('td.time').text(val.waktu); // set time
                            tplBody.find('.msg-wgt-message-list-body > td > p').html(nl2br(val.pesan)); // set message
                            $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message

                            //Auto-scroll
                            var newscrollHeight = $container[0].scrollHeight - 20; //Scroll height after the request
                            if (newIndex === 0) {
                                $container.animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }
                        }
                    });
                });
            }, 5000));

            $that.find('textarea').on('keydown', function(e) {
                var $textArea = $(this);
                if (e.keyCode === 13 && e.shiftKey === false) {
                    if($textArea.val().trim() != ""){
                    $.post('<?= site_url('homepage/sendMessage') ?>', {message: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    });
                    }
                    $textArea.val(''); // clear input

                    e.preventDefault(); // stop 
                    return false;
                }
            });
        });
    }
    var nl2br = function(str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }


    // on load
    initializeChat();
});
</script>

</body>
</html>
