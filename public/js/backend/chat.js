    (function($){$.fn.isActive = function(){return $(this.get(0)).hasClass('open')}})(jQuery)

var last_id = 0;
var unread = 0;
var notify = 0;
var last = 0;
var audio = new Audio('http://'+window.location.hostname+'/agro/public/sounds/arrived.mp3');
var title = $(document).prop('title');
var played = false;
var flag = 0;
var initial = 0;
var read = 0;
var nread = 1;

    $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
         var token = $('meta[name="csrf-token"]').attr('content'); // or _token, whichever you are using

         if (token) {
             return xhr.setRequestHeader('X-CSRF-TOKEN', token); // adds directly to the XmlHttpRequest Object
         }
     });

    function executeQuery() {


      $.ajax({
        url: 'http://'+window.location.hostname+'/agro/public/Συνομιλία/1',
        success: function(data) {
          jQuery.each(JSON.parse(data), function(i,val) {

            if($("#C" + val.id).length == 0)
            {
                $("#chat").append(
                  '\
                  <li id="C'+val.id+'"><!-- start message --> \
                    <a href="#">\
                      <div class="pull-left">\
                        <!-- User Image -->\
                        <img width="24px" height="24px" src="http://'+window.location.hostname+'/agro/public/'+val.user.photo +'" class="img-circle" alt="User Image"/>\
                      </div>                                          \
                      <!-- Message title and timestamp -->            \
                      <h4 style="font-size:12px">                     \
                        '+val.user.name+'                             \
                        <small><i class="fa fa-clock-o"></i> </small> \
                      </h4>                                           \
                      <!-- The message -->                            \
                      <p>'+val.body+'</p>                             \
                    </a>                                              \
                  </li><!-- end message -->                           \
                                                                      \
                '
                );

                $('#chat').animate({scrollTop: $('#chat').prop("scrollHeight")}, 500);

                if(val.user.name != $('.username').text())
                unread = unread + 1;

                if(unread)
                {
                  if(!$(".dropdown").isActive())
                  {
                    $('#unread-label').html(parseInt(unread));
                  }
                  else {
                    $.get('http://'+window.location.hostname+'/agro/public/Συνομιλία/3');
                    unread = 0;
                  }
                  $('#chat').animate({scrollTop: $('#chat').prop("scrollHeight")}, 500);

                  first = 0;
                  last_id = val.id;
                }

            }


          });


          $.get('http://'+window.location.hostname+'/agro/public/Συνομιλία/4', function(data) {
            //nread = data.last_read;
            data = JSON.parse(data);
            nread = data.last_read + unread;
            console.log("GET /4 -> nread: "+nread)
          });

          console.log("CMP read: "+read+" nread: "+nread)

          if(read != nread)
          {
            if(read == 1 || read == 0)
              played = true;
            else {
              played = false;
            }
            console.log("Play flag set to: "+played)
            read = nread;
          }


          if(unread)
          {
            $(document).prop('title', "("+unread+") "+ title);
            if(!played && read !== undefined)
            {
              console.log("Calling notification play (read "+read+")");
              audio.play();
              played = true;
            }
          }
          else {
            $(document).prop('title', title);
          }
        }
      });
      setTimeout(executeQuery, 2000); // you could choose not to continue on failure...
    }

    $(document).ready(function() {
      // run the first time; all subsequent calls will take care of themselves
      $("#chat").html('');

      $.ajax({
        url: 'http://'+window.location.hostname+'/agro/public/Συνομιλία/0',
        success: function(data) {

          jQuery.each(JSON.parse(data), function(i,val) {
            $("#chat").append(
              '\
              <li id="C'+val.id+'"><!-- start message --> \
                <a href="#">\
                  <div class="pull-left">\
                    <!-- User Image -->\
                    <img width="24px" height="24px" src="http://'+window.location.hostname+'/agro/public/'+val.user.photo +'" class="img-circle" alt="User Image"/>\
                  </div>                                          \
                  <!-- Message title and timestamp -->            \
                  <h4 style="font-size:12px">                     \
                    '+val.user.name+'                             \
                    <small><i class="fa fa-clock-o"></i> </small> \
                  </h4>                                           \
                  <!-- The message -->                            \
                  <p>'+val.body+'</p>                             \
                </a>                                              \
              </li><!-- end message -->                           \
                                                                  \
            '
            );
            last = val.id;
          });

          $('#chat').animate({
            scrollTop: $("#C"+last).offset().top
          }, 100);

        }
      });

      executeQuery();

      $('#send').bind("enterKey",function(e){
        var msg = $('#send').val();
        console.log(msg);
        $.ajax({
          type: "POST",
          url: '/agro/public/Συνομιλία',
          data: {
            message: msg,
          },
          success:function(data){
            $("#send").val('');
        },
        error: function(xhr, status, error) {console.log(xhr.responseText);}
        });
      });

      $('#send').keyup(function(e){
          if(e.keyCode == 13)
          {
              $(this).trigger("enterKey");
          }
      });

    });

    $('#chat').slimScroll({start: 'bottom'})

    $(".dropdown").on("show.bs.dropdown", function(event){

      $("#unread-label").html('');
      $.get('http://'+window.location.hostname+'/agro/public/Συνομιλία/3');
      $(document).prop('title', title);
      unread = 0;
      var scrollTo_val = last_id * 20;
      $('#chat').slimScroll({ scrollTo : scrollTo_val });

      $('#chat').animate({
        scrollTop: last * 220
      }, 100);

    });
