<section class='prefooter section-gap align-items-center'>
      <div class='container'> 
        <div class="row swatch" style="padding-top: 10%;">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style='margin:auto' >
            <div class="ballImageSection" align="center" style="margin:auto; height:450px; width:377px">
              <!--<div style="position: relative; left: 0; top: 0;">
                <img style="height: auto; width: 30%; top: 125px; left: 50%; transform: rotate(35deg);" id="logo-img2"  class='logo-image'/>
                <img style="height: auto; width: 30%; top: 225px; left: 23%; transform: rotate(-35deg);" id="logo-img1"  class='logo-image'/>
              </div>-->
              <div id="d1-ball"><img src="assets/Balls/DESIGN1/ball-texture.png"/></div>
              <?php  
                //$design_number=1;
                //echo 'diseno' . $design .' Set' .$design. '';
                $colors = array('blk','col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'sil', 'tur');
                foreach($colors as $color) echo "<div id='d1-".$color."1'><img id='".$color."ballimg1' src='assets/Balls/DESIGN".$design."/design".$design."-".$color."1.png'/></div>";
                foreach($colors as $color) echo "<div id='d1-".$color."2'><img id='".$color."ballimg2' src='assets/Balls/DESIGN".$design."/design".$design."-".$color."2.png'/></div>";
              ?>
            </div>
          </div>
          <?php include 'views/data-forms/ball-color-swatches.php'; ?> <!--  block ball color swatches -->
        </div>
      </div>
    </section>