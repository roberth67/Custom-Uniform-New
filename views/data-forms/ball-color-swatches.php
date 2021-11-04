<?php
//  ball color swatches 

echo "
<div class='col-sm-12 col-md-12 col-lg-6 col-xl-6 ballImageSection' align='left' style='margin:auto' >
    <h1>Design your ball:</h1>";
    $codes = array('000000', '92C1E9', 'FFB81C', '00594F', '009639', 'e5ff36', '79C000', '00205B', 'FF6900', '592C82', 'BA0C2F', '001489', 'A7A8AA', '00B5E2');
    $designCant= array('1', '2');
    $designLabel= array('<br>Primary Color', '<br>Secondary Color');
    for ($i = 0; $i <sizeof($designCant); $i++) {
      echo '<h5>'.$designLabel[$i].'</h5>';
      for ($j = 0; $j <sizeof($colors); $j++) {
        $cadena="MM_showHideLayers(";
        for ($k = 0; $k <sizeof($colors); $k++) {
          if($k+1==$j+1) $cadena.="'".$colors[$k]."ballimg".$designCant[$i]."','','show'";
          else $cadena.="'".$colors[$k]."ballimg".$designCant[$i]."','','hide'";
          if($k+1<sizeof($colors)) $cadena.=",";
        }
        $cadena.=");document.getElementById('ballcolor".$designCant[$i]."').value = '".strtoupper($colors[$j])."'";
        $style="margin:1.84px;margin-top:3px;margin-bottom:3px;background-color: #".$codes[$j].";";
        if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
        echo "<div class='circle' style='{$style}' onClick=\"{$cadena}\"></div>";
      }
    }
    /*echo "<h1><br>UPLOAD YOUR LOGO:</h1>
        <input class='genric-btn primary radius' type='file' name='imgInp1' id='imgInp1'  onchange='changeLogo(this);'/><br/>";*/
echo '</div>';

?>

