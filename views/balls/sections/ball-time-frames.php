<?php
//  pricing starting and 4 easy steps block
echo "
	<section class='prefooter section-gap align-items-center'>
	    <div class='container'>
	      <div class='row'>
	        <div class='col-lg-6 col-md-6 single-footer-widget text-center'>
	          <h2>Pricing starting at</h2>
	          <h1>$10.95</h1>
	            <p>
	              <a href='#time-frames' data-toggle='modal' class='genric-btn primary radius'  role='button'>Order Time Frames</a>
	            </p>
	        </div>
	        <div class='col-lg-6 col-md-6 single-footer-widget'>
	          <h2>4 EASY STEPS</h2>
	            <ul class='text-white mt-10'>
	              <li>1. Submit your design colors and information.</li>
	              <li>2. A SCORE<span style='font-size:10px;'>®</span> representative will contact you to provide exceptional service.</li>
	              <li>3. Please have club logo information ready to provide to your sales representative.</li>
	              <li>4. Place your order.</li>
	            </ul>
	        </div>
	      </div>
	    </div>
	</section>
";


// order time frames modal
echo "
	<div id='time-frames' class='modal fade' tabindex='-1'>
	    <div class='modal-dialog' style='background-color:#FFF'>
	      <div class='modal-header'>
	        <button type='button' class='close glyphicon glyphicon-remove' data-dismiss='modal'></button>
	        <h3>Order Time Frames</h3>
	      </div>
	      <div class='modal-body'>
	        <div><center><img src='img/calendar1.png' width='100%'' alt=''></center></div>
	        <br>
	        <div><center><img src='img/calendar2.png' width='100%'' alt=''></center></div>
	      </div>
	      <div class='modal-footer'>
	        <button class='genric-btn primary radius' data-dismiss='modal'>Close</button>
	      </div>
	    </div>
	</div>  
";

?>