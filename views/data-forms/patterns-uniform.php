<?php 
if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
    $pattern=$_GET["a"];
    $design=$_GET["b"];
    $uniformset=$_GET["c"];
}else{
    $pattern='1';
    $design='2';
    $uniformset='1';
}


/*function data($a, $b, $c){
    echo $pattern=$a;
    echo $design=$b;
    echo $uniformset=$c;
}*/
 ?>
 <!--<script>
     function setUniform(a, b, c){
            var result = {
                pat: a,
                des: b,
                set: c
            };
            $.ajax({
                data: result,
                url: "getData.php",
                method: "post",
                success: function(data){

                }
            });
         console.log(result);
         //document.write(result);
    }
 </script>-->