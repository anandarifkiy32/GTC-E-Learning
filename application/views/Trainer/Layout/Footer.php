 <footer class="main-footer">
  <!-- <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div> -->
  <strong>Copyright © 2018 <a href="<?php echo base_url('trainer');?>">GTC E-Learning</a>.</strong> All rights
  reserved.
 </footer>

 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/adm/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/adm/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/adm/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/adm/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/adm/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/adm/bower_components/moment/min/moment.min.js"></script>
<!-- <script src="<?php echo base_url()?>assets/adm/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
 --><!-- datepicker -->

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/adm/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/adm/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/adm/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/adm/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>assets/adm/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url()?>assets/adm/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/adm/dist/js/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
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
</script>
<script>
  var checkboxes = $(".cekbox"), submitButt = $(".tombol");
  checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>

<script>
  $(function () {
    $('#example2').DataTable({
      "lengthMenu": [[5], [5]],
      'lengthChange':false,
      'ordering'    : false
    })
  })
</script>
<script>
  $(function () {
    $('#example3').DataTable({
      "lengthMenu": [[5], [5]],
      'lengthChange':false,
      'ordering'    : false
    })
  })
</script>

<script type="text/x-template" id="msg-template" style="display: none">
    <tbody width="230px">
        <tr class="msg-wgt-message-list-header" width="230px">
            <td class="name" style="padding:0px 4px 0px 4px;font-size:12px"></td>
        </tr>
        <tr class="msg-wgt-message-list-body" width="230px">
            <td colspan="2" style="padding:0px 4px 0px 8px"><p style="width:230px;margin:0px;"></p></td>
        </tr>
        <tr>
          <td class="time" style="font-size:9px;padding:4px 4px 0px 4px"></td>
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
                $.post('<?= site_url('trainer/getChats') ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    $that.find('a.name').text(data.name);
                    // from last
                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];

                        var tpl = $('#msg-template').html();
                        var tplBody = $('<div/>').append(tpl);
                        var id = (val.id_chat +'_'+ val.id_pengirim +'_'+ val.slug_modul).toString();

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
                    $.post('<?= site_url('trainer/sendMessage') ?>', {message: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
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
