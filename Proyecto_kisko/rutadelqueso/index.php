<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Kisko</title>
		<meta name="description" content="Slider Revolution Example" />
		<meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
		<meta name="author" content="ThemePunch" />
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

		<title>Kisko Home</title>

		<!-- LOAD JQUERY LIBRARY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
		
		<!-- LOADING FONTS AND ICONS -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:900" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		
		<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/Style.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<!--Fin Bootstrap -->
<style type="text/css">.custom .tp-bullet{border-radius:50px;   background:url(wp-content/themes/seocify/assets/images/dot.png) !important;   width:14px !important;   height:14px!important}.custom  .tp-bullet.selected{background-repeat:no-repeat;  background-size:auto !important;  background-position:0px -20px !important}.slider-bg{opacity:.5 !important}.hell-bg{opacity:.3 !important}.rev-btn{background-size:101% !important}.tp-caption i{font-size:15px !important}.xs-shadow{-webkit-box-shadow:0px 10px 25px 0px var(--box-shadow-color);  box-shadow:0px 10px 25px 0px var(--box-shadow-color);  --box-shadow-color:rgba(0,0,0,0.1)}</style>
				<style type="text/css">.custom.tp-bullets{}.custom.tp-bullets:before{content:" ";position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}.custom .tp-bullet{width:12px;height:12px;position:absolute;background:#aaa;  background:rgba(125,125,125,0.5);cursor:pointer;box-sizing:content-box}.custom .tp-bullet:hover,.custom .tp-bullet.selected{background:rgb(125,125,125)}.custom .tp-bullet-image{}.custom .tp-bullet-title{}</style>

				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    (function($){
    $(document).ready(function() {
      AOS.init();
    });
    })(jQuery)
</script>




		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
					<div class="container-fluid">
						<div class="row"> 
							<div class="col-12">          
								<nav id="mainNav" class="navbar  fixed-top navbar-expand-lg navbar-light">
										
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
										  <span class="navbar-toggler-icon"></span>
										</button>
										
										<span class="d-block d-md-none"><img class="img-fluid" src="images/logo_kiosko_mobile.png" style="width:140px; height:auto;"  ></span>
										
										<div class="collapse navbar-collapse" id="navbarNavDropdown">
										  <ul class="navbar-nav">
											<li class="nav-item active">
											  <a style="color: white; " class="nav-link" href="https://www.google.com/?client=safari">Cómo participar <span class="sr-only">(current)</span></a>
											</li> 
											<li class="nav-item">
											  <a  style="color: white"  class="nav-link" href="#">Premios</a>
											</li>
											<li class="nav-item">
											  <a  style="color: white"  class="nav-link" href="https://www.google.com/?client=safari">Productos participantes</a>
											</li>
										  </ul>
										</div>
										<div  class="col-offset-6">
											<a href="https://www.facebook.com/KioskoEcuador/" target="_blank"><img src="images/aseet4.ico" alt=""></a>
											<a href="https://www.instagram.com/kioskoecuador/" target="_blank"><img style="margin-left: 10px" src="images/instagram-24.ico" alt=""></a>
										   </div>
											</nav>
									 
									</div>
				
							</div>
							<center>
<!--escritorio-->						<div class="container-fluid d-none d-md-block" style="position:absolute; z-index:999 !important; margin-top:0px;"><a href="/"> <img id="bandera" class="img-fluid" src="images/logo_kiosko_escritorio.png"   alt="">  </a></div>
<!--mobile 						<div class="container-fluid d-block d-md-none"><a href="/"> <img id="bandera" class="img-fluid" src="images/logo_kiosko_mobile.png" style="z-index:999999999999;"  alt="">  </a></div>  --> 
						  </center>
						  </div>
	</head>
	<body>
<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="kisko4" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:65px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.8.3 fullwidth mode -->
	<div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.3">
<ul>	<!-- SLIDE  -->
	<li data-index="rs-14" data-transition="notransition" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="-70"  data-thumb=""  data-delay="8000"  data-rotate="0"  data-saveperformance="off"  data-ssop="true"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="assets/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
			 id="slide-14-layer-1" 
			 data-x="['left','left','left','left']" data-hoffset="['44','37','15','0']" 
			 data-y="['top','top','top','top']" data-voffset="['-11','-23','-16','-40']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":140,"speed":1610,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":50,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5;">
<div class="rs-looped rs-pendulum"  data-easing="Quad.easeInOut" data-startdeg="-15" data-enddeg="15" data-speed="4" data-origin="50% 50%"><img src="assets/Untitled-1.png" alt="" data-ww="['276px','240px','210px','193px']" data-hh="['325px','283px','248px','228px']" width="194" height="228" data-no-retina> </div></div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-8" 
			 data-x="['left','left','left','left']" data-hoffset="['882','767','564','310']" 
			 data-y="['top','top','top','top']" data-voffset="['10','16','24','8']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1230,"speed":1360,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":70,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6;"><img src="assets/Asset-2-8.png" alt="" data-ww="['318px','235px','198px','170px']" data-hh="['383px','283px','238px','205px']" width="272" height="328" data-no-retina> </div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-5" 
			 id="slide-14-layer-23" 
			 data-x="['left','center','left','left']" data-hoffset="['251','34','169','27']" 
			 data-y="['top','top','top','top']" data-voffset="['63','47','98','74']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":720,"speed":1340,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":50,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7;"><img src="assets/coliseo.png" alt="" data-ww="['717px','640px','549px','407px']" data-hh="['457px','408px','351px','259px']" width="1155" height="737" data-no-retina> </div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
			 id="slide-14-layer-15" 
			 data-x="['left','left','left','left']" data-hoffset="['74','27','19','17']" 
			 data-y="['top','top','top','top']" data-voffset="['596','522','555','495']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2580,"speed":890,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":60,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8;"><img src="assets/Asset-2-8-1.png" alt="" data-ww="['35px','35px','35px','35px']" data-hh="['64px','64px','64px','64px']" width="35" height="64" data-no-retina> </div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
			 id="slide-14-layer-7" 
			 data-x="['left','left','left','left']" data-hoffset="['107','87','47','159']" 
			 data-y="['top','top','top','top']" data-voffset="['433','355','401','394']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2450,"speed":380,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;rZ:336;","ease":"Power3.easeInOut"},{"delay":"wait","speed":90,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 9;"><img src="assets/Asset-3-8.png" alt="" data-ww="['69px','69px','69px','34px']" data-hh="['98px','98px','98px','48px']" width="69" height="98" data-no-retina> </div>

		<!-- LAYER NR. 6 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-10" 
			 data-x="['left','left','left','left']" data-hoffset="['11','39','-18','44']" 
			 data-y="['top','top','top','top']" data-voffset="['251','209','257','233']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1600,"speed":1050,"frame":"0","from":"x:left;","to":"o:1;rZ:351;","ease":"Power3.easeInOut"},{"delay":"wait","speed":110,"frame":"999","ease":"Bounce.easeIn"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 10;"><img src="assets/Asset-4-8-1.png" alt="" data-ww="['415px','344px','322px','408px']" data-hh="['282px','234px','219px','277px']" width="466" height="317" data-no-retina> </div>

		<!-- LAYER NR. 7 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
			 id="slide-14-layer-5" 
			 data-x="['left','left','left','left']" data-hoffset="['120','68','59','46']" 
			 data-y="['top','top','top','top']" data-voffset="['532','462','507','445']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2580,"speed":650,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":130,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;sX:1.2;sY:1.2;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11;"><img src="assets/Asset-5-8.png" alt="" data-ww="['220px','178px','178px','178px']" data-hh="['54px','44px','44px','44px']" width="186" height="46" data-no-retina> </div>

		<!-- LAYER NR. 8 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
			 id="slide-14-layer-4" 
			 data-x="['left','left','left','left']" data-hoffset="['123','67','64','57']" 
			 data-y="['top','top','top','top']" data-voffset="['610','532','572','506']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2930,"speed":640,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":110,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;sX:1.2;sY:1.2;skX:0px;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 12;"><img src="assets/Asset-6-8.png" alt="" data-ww="['206px','186px','186px','186px']" data-hh="['52px','47px','47px','47px']" width="186" height="47" data-no-retina> </div>

		<!-- LAYER NR. 9 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
			 id="slide-14-layer-3" 
			 data-x="['left','left','left','left']" data-hoffset="['120','65','62','54']" 
			 data-y="['top','top','top','top']" data-voffset="['667','596','623','550']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3230,"speed":700,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":140,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;sX:1.2;sY:1.2;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 13;"><img src="assets/Asset-7-8.png" alt="" data-ww="['197px','177px','177px','177px']" data-hh="['66px','59px','59px','59px']" width="177" height="59" data-no-retina> </div>

		<!-- LAYER NR. 10 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
			 id="slide-14-layer-6" 
			 data-x="['left','left','left','left']" data-hoffset="['241','212','108','-187']" 
			 data-y="['top','top','top','top']" data-voffset="['313','255','261','190']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-visibility="['on','on','off','off']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1370,"speed":710,"frame":"0","from":"y:top;","to":"o:1;rZ:346;","ease":"Power3.easeInOut"},{"delay":"wait","speed":80,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 14;"><img src="assets/Asset-4-8.png" alt="" data-ww="['115px','104px','115px','115px']" data-hh="['40px','36px','40px','40px']" width="115" height="40" data-no-retina> </div>

		<!-- LAYER NR. 11 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" 
			 id="slide-14-layer-25" 
			 data-x="['left','left','left','left']" data-hoffset="['1030','875','711','406']" 
			 data-y="['top','top','top','top']" data-voffset="['539','481','521','498']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4480,"speed":290,"frame":"0","from":"opacity:0;","to":"o:1;rZ:109;","ease":"Power3.easeInOut"},{"delay":"wait","speed":120,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 15;"><img src="assets/Asset-3-8-1.png" alt="" data-ww="['89px','62px','62px','62px']" data-hh="['63px','44px','44px','44px']" width="63" height="45" data-no-retina> </div>

		<!-- LAYER NR. 12 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-2" 
			 data-x="['left','left','left','left']" data-hoffset="['834','733','574','286']" 
			 data-y="['top','top','top','top']" data-voffset="['533','437','459','411']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3640,"speed":1140,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":110,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 16;"><img src="assets/Asset-8-8.png" alt="" data-ww="['190px','139px','139px','139px']" data-hh="['138px','101px','101px','101px']" width="116" height="84" data-no-retina> </div>

		<!-- LAYER NR. 13 -->
		<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
			 id="slide-14-layer-18" 
			 data-x="['left','left','left','left']" data-hoffset="['1040','829','622','301']" 
			 data-y="['top','top','top','top']" data-voffset="['604','543','569','524']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4490,"speed":480,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;rZ:346;","ease":"Power3.easeInOut"},{"delay":"wait","speed":110,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 17;"><img src="assets/Asset-1-8-2.png" alt="" data-ww="['177px','137px','118px','118px']" data-hh="['114px','88px','76px','76px']" width="240" height="154" data-no-retina> </div>

		<!-- LAYER NR. 14 -->
		<div class="tp-caption rev-btn " 
			 id="slide-14-layer-30" 
			 data-x="['left','center','center','center']" data-hoffset="['512','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['545','473','483','638']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="button" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":2950,"speed":950,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bs:solid;bw:0 0 0 0;"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[12,12,12,12]"
			data-paddingright="[35,35,35,35]"
			data-paddingbottom="[12,12,12,12]"
			data-paddingleft="[35,35,35,35]"

			style="z-index: 23; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 900; color: rgba(255,255,255,1); letter-spacing: px;font-family:Nunito;background-color:rgb(215,40,47);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;
			box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Régistrate </div>

		<!-- LAYER NR. 15 -->
	<div class="tp-caption rev-btn " 
			 id="slide-14-layer-32" 
			 data-x="['left','center','center','center']" data-hoffset="['489','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['609','533','541','693']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="button" 
			data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"https:\/\/www.google.com\/?client=safari","delay":""}]'
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":3690,"speed":1430,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bs:solid;bw:0 0 0 0;"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[12,12,12,12]"
			data-paddingright="[35,35,35,35]"
			data-paddingbottom="[12,12,12,12]"
			data-paddingleft="[35,35,35,35]"

			style="z-index:25; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 900; color: rgba(255,255,255,1); letter-spacing: px;font-family:Nunito;background-color:rgb(0,156,76);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"> Llena tu cartilla </div>
	</li>
</ul>


</div><!-- END REVOLUTION SLIDER -->

		<script type="text/javascript">
var revapi5,
	tpj;	
(function() {			
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
	function onLoad() {				
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#rev_slider_5_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_5_1");
	}else{
		revapi5 = tpj("#rev_slider_5_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//flamingodevs.com/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
				onHoverStop:"",
				bullets: {
					enable:true,
					hide_onmobile:false,
					style:"custom",
					hide_onleave:false,
					direction:"vertical",
					h_align:"right",
					v_align:"center",
					h_offset:50,
					v_offset:20,
					space:5,
					tmp:''
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[810,700,900,970],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"enterpoint",
				speed:400,
				speedbg:0,
				speedls:0,
				levels:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,55],
			},
			shadow:0,
			spinner:"spinner0",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}; /* END OF revapi call */
	
 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script>

<!-- titulo MECÁNICAS escritorio-->
<div id="mecanicas" class="container-fluid d-none d-md-block" data-aos="fade-up">
		<div class="row ">
			<div id="macanicas2" class="col-12">
				<center>
						<img id="macanicas3" class="img-fluid" src="images/titular_mecanica_concurso.png" style="padding-top:60px;"	alt="">
				</center>
			</div>	
		</div>
</div>
<!-- titulo MECÁNICAS mobile-->
<div id="mecanicas" class="container-fluid d-block d-md-none" data-aos="fade-up">
		<div class="row ">
			<div id="macanicas2" class="col-12">
				<center>
						<img id="macanicas3" class="img-fluid" src="images/titular_mecanica_concurso.png" style="padding-top:45px; width:80%;"	alt="">
				</center>
			</div>	
		</div>
</div>

	
<!-- 1 busca sticker escritorio-->
<div class="container-fluid d-none d-md-block" data-aos="fade-right" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-12" style="text-align:center;">
			 	 <img class="img-fluid" src="images/escritorio_busca_sticker.png" alt="" usemap="#ppe">
		 	 </div>
		</div>
</div>
						
<!-- 1 busca sticker mobile-->
<div class="container-fluid d-block d-md-none" data-aos="fade-right" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-sm-12" style="text-align:center;">
			 	 <img class="img-fluid" src="images/mobile_busca_sticker.png" alt="" usemap="#ppm">
		 	 	</div>
			</div>
</div>

<!-- 2 busca llena cartilla escritorio-->
<div class="container-fluid d-none d-md-block" data-aos="fade-left" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-12" style="text-align:center;padding-bottom:50px;">
			 	 <img class="img-fluid" src="images/escritorio_llena_Cartilla.png" alt="">
		 	 </div>
		</div>
</div>

<!-- 2 busca llena cartilla mobile-->
<div class="container-fluid d-block d-md-none" data-aos="fade-left" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-sm-12" style="text-align:center;padding-bottom:30px;">
			 	 <img class="img-fluid" src="images/mobile_llena_Cartilla.png" alt="">
		 	 	</div>
		</div>
</div>



<!-- 3 ya participando escritorio-->
<div class="container-fluid d-none d-md-block" data-aos="fade-right" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-12" style="text-align:center;">
			 	 <img class="img-fluid" src="images/escritorio_participando.png" alt="">
		 	 </div>
		</div>
</div>

<!-- 3 ya participando mobile-->
<div class="container-fluid d-block d-md-none" data-aos="fade-right" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-sm-12" style="text-align:center;padding-bottom:10px;">
			 	 <img class="img-fluid" src="images/mobile_participando.png" alt="">
		 	 	</div>
		</div>
</div>



<!-- 4 giftcard escritorio-->
<div class="container-fluid d-none d-md-block" data-aos="fade-up" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-12" style="text-align:center;">
			 	 <img class="img-fluid" src="images/escritorio_giftcards.png" alt="">
		 	 </div>
		</div>
</div>

<!-- 4 giftcard mobile-->
<div class="container-fluid d-block d-md-none" data-aos="fade-up" data-aos-duration="3500">
		<div id="" class="row">
		  	<div id="tiker" class="col-sm-12" style="text-align:center;">
			 	 <img class="img-fluid" src="images/mobile_giftcards.png" alt="">
		 	 	</div>
		</div>
</div>



<center data-aos="fade-up">
		<button id="bottonfinal" type="button" class="btn btn-secondary " onclick="window.location.href='http://www.google.com'" style="background-color:green !important; font-size:20px; margin-bottom:25px;">&nbsp;&nbsp;Regístrate&nbsp;&nbsp;</button>
</center>
<br>
<footer>
	<nav id="footer1" class="navbar navbar-expand-lg" bg-primary">
			<a  style="color: white; " class="navbar-brand" href="terminos_condiciones.html">Términos y condiciones</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
			  <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				  <a style="color: white; " class=" nav-link" href="contactenos.html">Contacto <span class="sr-only">(current)</span></a>
				</li>
			  </ul>
			  <ul>
					<div class="col-offset-6">
											<a href="https://www.facebook.com/KioskoEcuador/" target="_blank"><img src="images/aseet4.ico" alt=""></a>
											<a href="https://www.instagram.com/kioskoecuador/" target="_blank"><img style="margin-left: 10px" src="images/instagram-24.ico" alt=""></a>
						   </div>
			  </ul>
			</div>
		  </nav>
  </footer>
 <map name="ppe">
    <area target="" alt="" title="" href="productos_participante.html" coords="639,203,625,245,644,278,730,344,671,352,661,368,661,404,681,424,802,423,818,404,816,364,803,352,750,341,825,257,852,259,851,226,818,215,820,195,748,186,685,188" shape="poly">
</map>
<map name="ppm">
    <area target="" alt="" title="" href="" coords="175,503,587,502,582,197,170,192" shape="poly">
</map>

<!--libreria animar rows-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
