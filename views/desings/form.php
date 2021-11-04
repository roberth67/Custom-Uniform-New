<form id='contactus' runat="server" action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' style="margin-bottom:0px;">
<fieldset>
  <div class="container">
    <div class="row" style="padding-top: 10%;padding-bottom:2%">
      <div class="col-12">
        <div align="center"><!--200-->
          <h1 class="uniform-title"> HOME </h1>
        </div>
      </div>
    </div>
    <div class="row swatch">
      <div class="col-lg-6">
        <div align="center" style="margin:auto; height:850px; width:400px"><!--200-->
          <div style="position: relative; left: 0; top: 0;">
            <img id="logo-img1" src="assets/img/YourLogo.png" class='logo-image'/>
          </div>
          <?php
            $p=$GLOBALS["pattern"];
            $d=$GLOBALS["design"];
            //echo 'patron' . $p .' diseno' .$d. '';
            //$design_number='2';
            $colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'red', 'roy', 'sil', 'tur', 'wht');
            $codes = array('000000','6F263D','3F4444','92C1E9','FFB81C','00594F','009639','C0DF16','79C000','00205B','FF6900','BA0C2F','001489','A7A8AA','00B5E2','fff');
            $s_colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun','nav', 'org', 'red', 'roy', 'wht');
            $s_codes = array('000000','6F263D','3F4444','92C1E9','FFB81C', '00594F', '00205B', 'FF6900', 'BA0C2F', '001489', 'fff');
            $colors_per_item= array('1', '2');
            $item_titles= array("Pick your jersey colors:", "<br>Now it's time to design your shorts:");
            $item_types=array('base','sho');
            $design_labels= array('Primary Color', '<br>Secondary Color', 'Main Color', '<br>Accent Color');
            foreach($colors as $color) echo "<div id='".$color."sho1'><img id='".$color."imgsho1' src='assets/Uniforms/P".$p."D".$d."/SHORT/design".$d."-".$color."1.png'/></div> <div id='".$color."base1'><img id='".$color."imgbase1' src='assets/Uniforms/P".$p."D".$d."/JERSEY/design".$d."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='".$color."sho2'><img id='".$color."imgsho2' src='assets/Uniforms/P".$p."D".$d."/SHORT/design".$d."-".$color."2.png'/></div> <div id='".$color."base2'><img id='".$color."imgbase2' src='assets/Uniforms/P".$p."D".$d."/JERSEY/design".$d."-".$color."2.png'/></div>";
            foreach($s_colors as $color) echo "<div id='".$color."sock1'><img id='".$color."imgsock1' src='assets/Uniforms/P".$p."D".$d."/SOCKS/design".$d."-".$color."1.png'/></div>";

          echo "</div>";
        echo "</div>";
        echo "<div class='col-lg-6 colors'>";
          for ($h = 0; $h <sizeof($item_types); $h++) {
            echo "<h1>".$item_titles[$h]."</h1>";
            for ($i = 0; $i <sizeof($colors_per_item); $i++) {
              echo "<h5>".$design_labels[$i+($h*2)]."</h5>";
              for ($j = 0; $j <sizeof($colors); $j++) {
                $onEventActionString="MM_showHideLayers(";
                for ($k = 0; $k <sizeof($colors); $k++) {
                  if($k==$j) $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."','','show'";
                  else $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."','','hide'";
                  if($k+1<sizeof($colors)) $onEventActionString.=",";
                }
                $onEventActionString.=");document.getElementById('".$item_types[$h]."color".$colors_per_item[$i]."').value = '".strtoupper($colors[$j])."'";
                $style="background-color: #".$codes[$j].";";
                if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
                echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
              }
            }
          }
          echo "<h1><br>Select color of socks:</h1>";
          for ($j = 0; $j <sizeof($s_colors); $j++) {
            $onEventActionString="MM_showHideLayers(";
            for ($k = 0; $k <sizeof($s_colors); $k++) {
              if($k==$j) $onEventActionString.="'".$s_colors[$k]."sock1','','show'";
              else $onEventActionString.="'".$s_colors[$k]."sock1','','hide'";
              if($k+1<sizeof($s_colors)) $onEventActionString.=","; 
            }
            $onEventActionString.=");document.getElementById('sockcolor1').value = '".strtoupper($s_colors[$j])."'";
            $style="background-color: #".$s_codes[$j].";";
            if($s_colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
            echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
          }
        ?>
        <h1><br>UPLOAD YOUR LOGO:</h1>
        <input class='genric-btn primary radius' type='file' name='imgInp1' id='imgInp1'  onchange='changeLogo(this);'/><br/>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row" style="padding-top: 10%;padding-bottom:2%">
      <div class="col-12">
        <div align="center"><!--200-->
          <h1 class="uniform-title"> AWAY </h1>
        </div>
      </div>
    </div>
    <div class="row swatch">
      <div class="col-lg-6">
        <div align="center" style="margin:auto; height:850px; width:400px"><!--200-->
          <div style="position: relative; left: 0; top: 0;">
            <img id="logo-img2" src="assets/img/YourLogo.png" class='logo-image'/>
          </div>
          <?php  
            //$design_number='2';
            $colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'red', 'roy', 'sil', 'tur', 'wht');
            $codes = array('000000','6F263D','3F4444','92C1E9','FFB81C','00594F','009639','C0DF16','79C000','00205B','FF6900','BA0C2F','001489','A7A8AA','00B5E2','fff');
            $s_colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun','nav', 'org', 'red', 'roy', 'wht');
            $s_codes = array('000000','6F263D','3F4444','92C1E9','FFB81C', '00594F', '00205B', 'FF6900', 'BA0C2F', '001489', 'fff');
            $colors_per_item= array('1', '2');
            $item_titles= array("Pick your jersey colors:", "<br>Now it's time to design your shorts:");
            $item_types=array('base','sho');
            $design_labels= array('Primary Color', '<br>Secondary Color', 'Main Color', '<br>Accent Color');
            foreach($colors as $color) echo "<div id='".$color."sho1a'><img id='".$color."imgsho1' src='assets/Uniforms/P".$p."D".$d."/SHORT/design".$d."-".$color."1.png'/></div> <div id='".$color."base1a'><img id='".$color."imgbase1' src='assets/Uniforms/P".$p."D".$d."/JERSEY/design".$d."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='".$color."sho2a'><img id='".$color."imgsho2' src='assets/Uniforms/P".$p."D".$d."/SHORT/design".$d."-".$color."2.png'/></div> <div id='".$color."base2a'><img id='".$color."imgbase2' src='assets/Uniforms/P".$p."D".$d."/JERSEY/design".$d."-".$color."2.png'/></div>";
            foreach($s_colors as $color) echo "<div id='".$color."sock1a'><img id='".$color."imgsock1' src='assets/Uniforms/P".$p."D".$d."/SOCKS/design".$d."-".$color."1.png'/></div>";
          echo "</div>";
        echo "</div>";
        echo "<div class='col-lg-6 colors'>";
          for ($h = 0; $h <sizeof($item_types); $h++) {
            echo "<h1>".$item_titles[$h]."</h1>";
            for ($i = 0; $i <sizeof($colors_per_item); $i++) {
              echo "<h5>".$design_labels[$i+($h*2)]."</h5>";
              for ($j = 0; $j <sizeof($colors); $j++) {
                $onEventActionString="MM_showHideLayers(";
                for ($k = 0; $k <sizeof($colors); $k++) {
                  if($k==$j) $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."a','','show'";
                  else $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."a','','hide'";
                  if($k+1<sizeof($colors)) $onEventActionString.=",";
                }
                $onEventActionString.=");document.getElementById('".$item_types[$h]."color".$colors_per_item[$i]."a').value = '".strtoupper($colors[$j])."'";
                $style="background-color: #".$codes[$j].";";
                if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
                echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
              }
            }
          }
          echo "<h1><br>Select color of socks:</h1>";
          for ($j = 0; $j <sizeof($s_colors); $j++) {
            $onEventActionString="MM_showHideLayers(";
            for ($k = 0; $k <sizeof($s_colors); $k++) {
              if($k==$j) $onEventActionString.="'".$s_colors[$k]."sock1a','','show'";
              else $onEventActionString.="'".$s_colors[$k]."sock1a','','hide'";
              if($k+1<sizeof($s_colors)) $onEventActionString.=","; 
            }
            $onEventActionString.=");document.getElementById('sockcolor1a').value = '".strtoupper($s_colors[$j])."'";
            $style="background-color: #".$s_codes[$j].";";
            if($s_colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
            echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
          }
        ?>
      </div>
    </div>
  </div>
  
  <section class="prefooter section-gap align-items-center">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 single-footer-widget text-center">
            <h2><br>Pricing Starting At</h2>
            <h1>$60.00</h1>
              <p><a href="#con3" data-toggle="modal" class="genric-btn primary radius"  role="button">Kit Packages</a></p>
          </div>
          <div class="col-lg-6 col-md-6 single-footer-widget" style="text-align: center;">
            <img src="assets/img/FABRICS-ICON.png">
            <h2>SCORE FABRICS</h2>
            <ul class="mt-10">
              <li>Moisture wicking fabric technology.</li>
              <li>Breathable fabric to accommodate all climates.</li>
              <li>State-of-the-art sublimation capabilities.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="con3" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="background-color:#FFF">
      <div class="modal-header">
        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Kit Packages</h3>
      </div>
      <div class="modal-body">
        <ul>
          <li style="color:black"><b style="color:black">Premier Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>2 Pairs of Shorts</li>
            <li>2 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">Elite Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>1 Pair of Shorts</li>
            <li>2 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">Travel Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>1 Pairs of Shorts</li>
            <li>1 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">SCORE Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>1 Jersey</li>
            <li>1 Pair of Shorts</li>
            <li>1 Pairs of Socks</li><br>
          </ul>
        </ul>
        <ul style="list-style: none;margin-left: 0px">
          <li>*See terms &amp; conditions for additional information and timeframes.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="genric-btn primary radius" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

  <div id="con1" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="background-color:#FFF">
      <div class="modal-header">
        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Terms & Conditions</h3>
      </div>
      <div class="modal-body">
        <h5>Terms</h5>
        <ul>
          <br><li>100 Player minimum order. Minimum orders must be at least 100 per item & per color.</li>
          <li>3-year minimum contract is required.</li>
          <li>Production time is 4-5 weeks from the day the order is processed, with the approval of both the artwork and sample uniform. </li>
          <li>Sales representative will review the custom uniform timeline.</li>
          <li>Preliminary/Booking order is highly recommended.</li>
          <li>Time frames may change depending on the time of the year the order is placed.</li>
          <li>All remaining customized products must be purchased at the end of the agreement.</li><br>
        </ul>
        <h5>Custom Uniform Order Tips</h5>
        <ul>
          <br>
          <li>Select your color combinations ahead of time.</li>
          <li>Provide a JPG format of your logo.</li>
          <li>Allow enough time for art comps, approval & production time.</li>
          <br>
        </ul>
        <h5>Sizing Information</h5>
        <ul><br>
        </ul>
        <ul>
          <li>Numerical Sizing Comparison<br>This comparison gives an indication of sizes only and are by no means exact as they vary from manufacturer to manufacturer - sometimes by a full inch up and down.</li><br>
          <ul>
            <li>SCORE YXXS Similar to a 3-4</li>
            <li>SCORE YXS Similar to a 4-5</li>
            <li>SCORE YS Similar to a 5-6</li>
            <li>SCORE YM Similar to a 7-8</li>
            <li>SCORE YL Similar to a 10-12</li>
            <li>SCORE AS Similar to a 14-16</li><br>
          </ul>
          <li>No custom uniforms will be manufactured between July 1, 2021 – September 30, 2021</li><br>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="genric-btn primary radius" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <footer class="footer-area section-gap" id="contact">
    <div class="container">

      <!-- form and fieldset start -->
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
      <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
      <div>
        <h2 align="center" style="margin-top:-10px"><input name="Design" id="design1" value="Design 1" type="hidden" /></h2>
      </div>
      <?php include 'views/data-forms/uniform-form.php'; ?> <!--  block request fields -->
      <!-- form and fieldset end -->

      <script>
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#logo-img1').attr('src', e.target.result);
              $('#logo-img2').attr('src', e.target.result);
              localStorage.setItem("srcLogo", e.target.result);
              localStorage.setItem("statusLogo", "started");
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#imgInp").change(function(){
          readURL(this);
        });
        $("#imgInp1").change(function(){
          readURL(this);
        });
      </script>
      
      <div class="container">
        <div class="row">
          <center><a href="#con1" data-toggle="modal" class="genric-btn primary radius" role="button" style="margin-top:20px">Terms and Conditions</a><br></p>
          <p><center style="padding:20px;font-size:10px;">All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
          <p><center style="padding:20px;font-size:10px;">*Terms and conditions do apply for the SCORE Pro Custom uniform & ball program.</center></p>
        </div>
      </div>
    </div>
  </footer>
</fieldset>
</form>