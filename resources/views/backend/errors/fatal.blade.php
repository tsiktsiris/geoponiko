<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" media="screen" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />


    <style>
      *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,caption,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}html{font-size:16px;line-height:24px;width:100%;height:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;overflow-y:scroll;overflow-x:hidden}img{vertical-align:middle;max-width:100%;height:auto;border:0;-ms-interpolation-mode:bicubic}body{min-height:100%;-webkit-font-smoothing:subpixel-antialiased}.clearfix{clear:both;zoom:1}.clearfix:before,.clearfix:after{content:&quot;\0020&quot;;display:block;height:0;visibility:hidden}.clearfix:after{clear:both}

    </style>
    <style>
  .plain.error-page-wrapper {
    font-family: 'Source Sans Pro', sans-serif;
    background-color:#6355bc;
    padding:0 5%;
    position:relative;
  }

  .plain.error-page-wrapper .content-container {
    -webkit-transition: left .5s ease-out, opacity .5s ease-out;
    -moz-transition: left .5s ease-out, opacity .5s ease-out;
    -ms-transition: left .5s ease-out, opacity .5s ease-out;
    -o-transition: left .5s ease-out, opacity .5s ease-out;
    transition: left .5s ease-out, opacity .5s ease-out;
    max-width:400px;
    position:relative;
    left:-30px;
    opacity:0;
  }

  .plain.error-page-wrapper .content-container.in {
    left: 0px;
    opacity:1;
  }

  .plain.error-page-wrapper .head-line {
    transition: color .2s linear;
    font-size:48px;
    line-height:60px;
    color:rgba(255,255,255,.2);
    letter-spacing: -1px;
    margin-bottom: 5px;
  }
  .plain.error-page-wrapper .subheader {
    transition: color .2s linear;
    font-size:36px;
    line-height:46px;
    color:#fff;
  }
  .plain.error-page-wrapper hr {
    height:1px;
    background-color: rgba(255,255,255,.2);
    border:none;
    width:250px;
    margin:35px 0;
  }
  .plain.error-page-wrapper .context {
    transition: color .2s linear;
    font-size:18px;
    line-height:27px;
    color:#fff;
  }
  .plain.error-page-wrapper .context p {
    margin:0;
  }
  .plain.error-page-wrapper .context p:nth-child(n+2) {
    margin-top:12px;
  }
  .plain.error-page-wrapper .buttons-container {
    margin-top: 45px;
    overflow: hidden;
  }
  .plain.error-page-wrapper .buttons-container a {
    transition: color .2s linear, border-color .2s linear;
    font-size:14px;
    text-transform: uppercase;
    text-decoration: none;
    color:#fff;
    border:2px solid white;
    border-radius: 99px;
    padding:8px 30px 9px;
    display: inline-block;
    float:left;
  }
  .plain.error-page-wrapper .buttons-container a:hover {
    background-color:rgba(255,255,255,.05);
  }
  .plain.error-page-wrapper .buttons-container a:first-child {
    margin-right:25px;
  }

  @media screen and (max-width: 485px) {
    .plain.error-page-wrapper .header {
      font-size:36px;
     }
    .plain.error-page-wrapper .subheader {
      font-size:27px;
      line-height:38px;
     }
    .plain.error-page-wrapper hr {
      width:185px;
      margin:25px 0;
     }

    .plain.error-page-wrapper .context {
      font-size:16px;
      line-height: 24px;
     }
    .plain.error-page-wrapper .buttons-container {
      margin-top:35px;
    }

    .plain.error-page-wrapper .buttons-container a {
      font-size:13px;
      padding:8px 0 7px;
      width:45%;
      text-align: center;
    }
    .plain.error-page-wrapper .buttons-container a:first-child {
      margin-right:10%;
    }
  }
</style>
    <style>

    .background-color {
      background-color: rgba(0, 102, 41, 1) !important;
    }


    .primary-text-color {
      color: #FFFFFF !important;
    }

    .secondary-text-color {
      color: rgba(139, 199, 168, 1) !important;
    }

    .sign-text-color {
      color: #FFBA00 !important;
    }

    .sign-frame-color {
      color: #343C3F;
    }

    .pane {
      background-color: #FFFFFF !important;
    }

    .border-button {
      color: #FFFFFF !important;
      border-color: #FFFFFF !important;
    }
    .button {
      background-color: #FFFFFF !important;
      color: #FFFFFF !important;
    }

    .shadow {
      box-shadow: 0 0 60px #000000;
    }

</style>
  </head>
  <body class="plain error-page-wrapper background-color background-image">
    <div class="content-container">
	<div class="head-line secondary-text-color">
		500
	</div>
	<div class="subheader primary-text-color">
		Η εφαρμογή<br>
		αντιμετώπισε πρόβλημα
	</div>
	<hr>
	<div class="clearfix"></div>
	<div class="context primary-text-color">
		<!-- doesn't use context_content because it's ALWAYS the same thing -->
    <p>
      Το πρόβλημα ίσως προέκυψε<br />
      από μη έγκυρη εισαγωγή δεδομένων<br> ή μη προβλεπόμενη λειτουργία.
    </p>
	</div>
	<div class="buttons-container">
		<a class="border-button" href="mailto:tsiktsiris@sch.gr" target="_blank">ΑΝΑΦΟΡΑ</a>
    <a class="border-button" href="javascript:history.back()">ΜΕΤΑΒΑΣΗ ΠΙΣΩ</a>
	</div>
</div>

    <script>
      function ErrorPage(e,t,n){this.$container=$(e),this.$contentContainer=this.$container.find(n=="sign"?".sign-container":".content-container"),this.pageType=t,this.templateName=n}ErrorPage.prototype.centerContent=function(){var e=this.$container.outerHeight(),t=this.$contentContainer.outerHeight(),n=(e-t)/2,r=this.templateName=="sign"?-100:0;this.$contentContainer.css("top",n+r)},ErrorPage.prototype.initialize=function(){var e=this;this.centerContent(),this.$container.on("resize",function(t){t.preventDefault(),t.stopPropagation(),e.centerContent()}),this.templateName=="plain"&&window.setTimeout(function(){e.$contentContainer.addClass("in")},500),this.templateName=="sign"&&$(".sign-container").animate({textIndent:0},{step:function(e){$(this).css({transform:"rotate("+e+"deg)","transform-origin":"top center"})},duration:1e3,easing:"easeOutBounce"})},ErrorPage.prototype.createTimeRangeTag=function(e,t){return"<time utime="+e+' simple_format="MMM DD, YYYY HH:mm">'+e+"</time> - <time utime="+t+' simple_format="MMM DD, YYYY HH:mm">'+t+"</time>."},ErrorPage.prototype.handleStatusFetchSuccess=function(e,t){if(e=="503")$("#replace-with-fetched-data").html(t.status.description);else if(!t.scheduled_maintenances.length)$("#replace-with-fetched-data").html("<em>(there are no active scheduled maintenances)</em>");else{var n=t.scheduled_maintenances[0];$("#replace-with-fetched-data").html(this.createTimeRangeTag(n.scheduled_for,n.scheduled_until)),$.fn.localizeTime()}},ErrorPage.prototype.handleStatusFetchFail=function(e){$("#replace-with-fetched-data").html("<em>(enter a valid StatusPage.io url)</em>")},ErrorPage.prototype.fetchStatus=function(e,t){if(!e||!t||t=="404")return;var n="",r=this;t=="503"?n=e+"/api/v2/status.json":n=e+"/api/v2/scheduled-maintenances/active.json",$.ajax({type:"GET",url:n}).success(function(e,n){r.handleStatusFetchSuccess(t,e)}).fail(function(e,n){r.handleStatusFetchFail(t)})};
      var ep = new ErrorPage('body', "404", "plain");
      ep.initialize();

      // hack to make sure content stays centered >_<
      $(window).on('resize', function() {
        $('body').trigger('resize')
      });

    </script>


  </body>
</html>
