<?php
//  uniform javascript files included on all uniform pages

echo "
<script src='js/vendor/jquery-2.2.4.min.js'></script>
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-139383456-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-139383456-1');
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
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
<script src='https://kit.fontawesome.com/a6517f657d.js' crossorigin='anonymous'></script>
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
";

?>
<script type='text/javascript'>
  var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName('a');for(var i=0;i<a.length;i++){if(a[i].className.match('noeffect')){}else{a[i].onclick=function(){window.location=this.getAttribute('href');return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
  function MM_showHideLayers() { //v9.0
    var i,p,v,obj,args=MM_showHideLayers.arguments;
    for (i=0; i<(args.length-2); i+=3) with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { 
      v=args[i+2];
      if (obj.style) { 
        obj=obj.style; 
        v=(v=='show')?'visible':(v=='hide')?'hidden':v; 
        if(v=='visible'){
          var name= args[i];
          var type= "";
          for(j=3; j<name.length;j++){
            type= type+name[j];
          }
          var color= "";
          for(j=0; j<3;j++){
            color= color+name[j];
          }
          localStorage.setItem(type+"l", args[i]);
          localStorage.setItem(type+"color", color.toUpperCase());
          localStorage.setItem("status", "started");
        }
      }
      obj.visibility=v; 
    }
  }


  $(document).on('change', '#imgInp1', function(){ 

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
    //console.log("antes");
    //console.log(localStorage.getItem("srcLogo"));

    localStorage.setItem("srcLogo", imgCanvas.toDataURL("assets/img/YourLogo.png"));

    localStorage.setItem("statusLogo", "started");

    imgInp1.setAttribute("src", imgCanvas.toDataURL("image/png"));

   });





  $( document ).ready(function() {
    //localStorage.clear();
    imgInp1 = document.getElementById("logo-img1");
    imgInp2 = document.getElementById("logo-img2");

    if (localStorage.getItem("statusLogo")=="started") {
      console.log("Previous logo");
      
      imgInp1.setAttribute("src", localStorage.getItem("srcLogo"));
      imgInp2.setAttribute("src", localStorage.getItem("srcLogo"));

    }else{
      console.log("No previous logo");
      imgInp1.setAttribute("src", "assets/img/YourLogo.png");
      imgInp2.setAttribute("src", "assets/img/YourLogo.png");
    }
    if (localStorage.getItem("status")=="started") {
      console.log("Previous design");
      hideAll();
      MM_showHideLayers(localStorage.getItem("base1l"),'','show');
      MM_showHideLayers(localStorage.getItem("base2l"),'','show');
      MM_showHideLayers(localStorage.getItem("sho1l"),'','show');
      MM_showHideLayers(localStorage.getItem("sho2l"),'','show');
      MM_showHideLayers(localStorage.getItem("sock1l"),'','show');
      MM_showHideLayers(localStorage.getItem("base1al"),'','show');
      MM_showHideLayers(localStorage.getItem("base2al"),'','show');
      MM_showHideLayers(localStorage.getItem("sho1al"),'','show');
      MM_showHideLayers(localStorage.getItem("sho2al"),'','show');
      MM_showHideLayers(localStorage.getItem("sock1al"),'','show');
      document.getElementById("basecolor1").value = localStorage.getItem("base1color");
      document.getElementById("basecolor2").value = localStorage.getItem("base2color");
      document.getElementById("shocolor1").value = localStorage.getItem("sho1color");
      document.getElementById("shocolor2").value = localStorage.getItem("sho2color");
      document.getElementById("sockcolor1").value = localStorage.getItem("sock1color");
      document.getElementById("basecolor1a").value = localStorage.getItem("base1acolor");
      document.getElementById("basecolor2a").value = localStorage.getItem("base2acolor");
      document.getElementById("shocolor1a").value = localStorage.getItem("sho1acolor");
      document.getElementById("shocolor2a").value = localStorage.getItem("sho2acolor");
      document.getElementById("sockcolor1a").value = localStorage.getItem("sock1acolor");
    }else{
      console.log("No previous design");
      hideAll();
      localStorage.setItem("base1l", "blkbase1");
      localStorage.setItem("base2l", "redbase2");
      localStorage.setItem("sho1l", "blksho1");
      localStorage.setItem("sho2l", "redsho2");
      localStorage.setItem("sock1l", "redsock1");
      localStorage.setItem("base1al", "blkbase1a");
      localStorage.setItem("base2al", "redbase2a");
      localStorage.setItem("sho1al", "blksho1a");
      localStorage.setItem("sho2al", "redsho2a");
      localStorage.setItem("sock1al", "redsock1a");
      MM_showHideLayers('blkbase1','','show');
      MM_showHideLayers('redbase2','','show');
      MM_showHideLayers('blksho1','','show');
      MM_showHideLayers('redsho2','','show');
      MM_showHideLayers('redsock1','','show');
      MM_showHideLayers('blkbase1a','','show');
      MM_showHideLayers('redbase2a','','show');
      MM_showHideLayers('blksho1a','','show');
      MM_showHideLayers('redsho2a','','show');
      MM_showHideLayers('redsock1a','','show');
      document.getElementById("basecolor1").value = 'BLK';
      document.getElementById("basecolor2").value = 'RED';
      document.getElementById("shocolor1").value = 'BLK';
      document.getElementById("shocolor2").value = 'RED';
      document.getElementById("sockcolor1").value = 'RED';
      document.getElementById("basecolor1a").value = 'BLK';
      document.getElementById("basecolor2a").value = 'RED';
      document.getElementById("shocolor1a").value = 'BLK';
      document.getElementById("shocolor2a").value = 'RED';
      document.getElementById("sockcolor1a").value = 'RED';
    }

  });

  function hideAll() {
    MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');
    MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');
    MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');
    MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');
    MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');    

    MM_showHideLayers('blkbase1a','','hide','burbase1a','','hide','chrbase1a','','hide','colbase1a','','hide','gldbase1a','','hide','hunbase1a','','hide','kelbase1a','','hide','lembase1a','','hide','limbase1a','','hide','navbase1a','','hide','orgbase1a','','hide','redbase1a','','hide','roybase1a','','hide','silbase1a','','hide','turbase1a','','hide','whtbase1a','','hide');
    MM_showHideLayers('blkbase2a','','hide','burbase2a','','hide','chrbase2a','','hide','colbase2a','','hide','gldbase2a','','hide','hunbase2a','','hide','kelbase2a','','hide','lembase2a','','hide','limbase2a','','hide','navbase2a','','hide','orgbase2a','','hide','redbase2a','','hide','roybase2a','','hide','silbase2a','','hide','tngbase2a','','hide','turbase2a','','hide','whtbase2a','','hide');
    MM_showHideLayers('blksho1a','','hide','bursho1a','','hide','chasho1a','','hide','chrsho1a','','hide','colsho1a','','hide','gldsho1a','','hide','hunsho1a','','hide','kelsho1a','','hide','lemsho1a','','hide','limsho1a','','hide','navsho1a','','hide','orgsho1a','','hide','redsho1a','','hide','roysho1a','','hide','silsho1a','','hide','tursho1a','','hide','whtsho1a','','hide');
    MM_showHideLayers('blksho2a','','hide','bursho2a','','hide','chasho2a','','hide','chrsho2a','','hide','colsho2a','','hide','gldsho2a','','hide','hunsho2a','','hide','kelsho2a','','hide','lemsho2a','','hide','limsho2a','','hide','navsho2a','','hide','orgsho2a','','hide','redsho2a','','hide','roysho2a','','hide','silsho2a','','hide','tngsho2a','','hide','tursho2a','','hide','whtsho2a','','hide');
    MM_showHideLayers('blksock1a','','hide','bursock1a','','hide','tgoldsock1a','','hide','chrsock1a','','hide','colsock1a','','hide','gldsock1a','','hide','hunsock1a','','hide','kelsock1a','','hide','tnavsock1a','','hide','thunsock1a','','hide','navsock1a','','hide','orgsock1a','','hide','redsock1a','','hide','roysock1a','','hide','silsock1a','','hide','tredsock1a','','hide','troysock1a','','hide','whtsock1a','','hide','tbursock1a','','hide','tblacksock1a','','hide');    
  }
</script>
<script src='js/contact.js'></script>





