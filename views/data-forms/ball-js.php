

	<script async src='https://www.googletagmanager.com/gtag/js?id=UA-139383456-1'></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-139383456-1');
	</script>
	<script src='js/vendor/jquery-2.2.4.min.js'></script>
	<script src='https://kit.fontawesome.com/a6517f657d.js' crossorigin='anonymous'></script>
	<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
	<script type='text/javascript'>
	  var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName('a');for(var i=0;i<a.length;i++){if(a[i].className.match('noeffect')){}else{a[i].onclick=function(){window.location=this.getAttribute('href');return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
	  function MM_showHideLayers() { //v9.0
	    var i,p,v,obj,args=MM_showHideLayers.arguments;
	    for (i=0; i<(args.length-2); i+=3) with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { 
	      v=args[i+2];
	      if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
	      obj.visibility=v; 
	    }
	  }

	 $( document ).ready(function() {
      MM_showHideLayers('d1-blk1','','hide','d1-chr1','','hide','d1-col1','','hide','d1-gld1','','hide','d1-hun1','','hide','d1-kel1','','hide','d1-lem1','','hide','d1-lim1','','hide','d1-nav1','','hide','d1-org1','','hide','d1-pur1','','hide','d1-red1','','hide','d1-roy1','','hide','d1-sil1','','hide','d1-tur1','','hide','d1-wht1','','hide');

      MM_showHideLayers('d1-blk2','','hide','d1-chr2','','hide','d1-col2','','hide','d1-gld2','','hide','d1-hun2','','hide','d1-kel2','','hide','d1-lem2','','hide','d1-lim2','','hide','d1-nav2','','hide','d1-org2','','hide','d1-pur2','','hide','d1-red2','','hide','d1-roy2','','hide','d1-sil2','','hide','d1-tur2','','hide','d1-wht2','','hide');
    });
	(document).on('change', '#imgInp1', function(){ 
	    console.log("on change");
	    imgInp1 = document.getElementById('logo-img1');
	    console.log("//////////////////////////");
	    //console.log(imgInp1.src);
	    //console.log("//////////////////////////");
	    var imgCanvas = document.createElement("canvas");
	    imgContext = imgCanvas.getContext("2d");
	    imgCanvas.width = imgInp1.width;
	    imgCanvas.height = imgInp1.height;
	    imgContext.drawImage(imgInp1, 0, 0, imgInp1.width, imgInp1.height);
	    //console.log(imgCanvas.toDataURL("image/png"));
	    localStorage.setItem("srcLogo", imgCanvas.toDataURL("image/png"));
	    localStorage.setItem("srcLogo", imgCanvas.toDataURL("img/YourLogo.png"));
	    localStorage.setItem("statusLogo", "started");
	    imgInp1.setAttribute("src", imgCanvas.toDataURL("image/png"));
    });
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-68804515-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- document ready-->
	<script src='js/vendor/bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mI didgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
	 crossorigin='anonymous'></script>
	<script src='js/tilt.jquery.min.js'></script>
	<script src='js/vendor/bootstrap.min.js'></script>
	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA'></script>
	<script src='js/easing.min.js'></script>
	<script src='js/hoverIntent.js'></script>
	<script src='js/superfish.min.js'></script>
	<script src='js/jquery.ajaxchimp.min.js'></script>
	<script src='js/jquery.magnific-popup.min.js'></script>
	<script src='js/owl.carousel.min.js'></script>
	<script src='js/owl-carousel-thumb.min.js'></script>
	<script src='js/hexagons.min.js'></script>
	<script src='js/jquery.nice-select.min.js'></script>
	<script src='js/waypoints.min.js'></script>
	<script src='js/mail-script.js'></script>
	<script src='js/main.js'></script>
	<script src='js/jqBootstrapValidation.js'></script>
	<script src='js/contact.js'></script>


