<?php
//  pricing starting and 4 easy steps block
echo "
	<div class='col-lg12 single-footer-widget'>
    <h2>Complete the form below to begin your custom ball order process.</h2>
    <br><p>*Required fields</p>
  </div>
  <div><span class='error'>".$formproc->GetErrorMessage()."</span></div>
  <div class='row'>
    <div class='col-lg-6 col-sm-12'>
      <label for='name' ><font color='#6D6E71'>Contact Name*: </font></label>
      <input type='text' name='name' id='name' value='".$formproc->SafeDisplay('name')."' maxlength='50' />
      <span id='contactus_name_errorloc' class='error'></span>
    </div>
    <div class='col-lg-6 col-sm-12'>
      <label for='email' ><font color='#6D6E71'>Organization*:</font></label>
      <input type='text' name='Organization' id='org' value='".$formproc->SafeDisplay('org')."' maxlength='50' />
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
  </div>
  <div class='row'>
    <div class='col-lg-6 col-sm-12'>
      <label for='email' ><font color='#6D6E71'>Email Address*:</font></label>
      <input type='text' name='email' id='email' value='".$formproc->SafeDisplay('email') ."' maxlength='50' />
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
    <div class='col-lg-6 col-sm-12'>
      <label for='email' ><font color='#6D6E71'>Phone*:</font></label>
      <input type='text' name='phone' id='phone' value='".$formproc->SafeDisplay('phone') ."' maxlength='50' />
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
  </div>
  <div class='row'>
    <div class='col-sm-6'>
      <label for='email' ><font color='#6D6E71'>Primary Ball Color*:</font></label>
      <input type='text' name='Primary Ball Color' id='ballcolor1' value='".$formproc->SafeDisplay('ballcolor1') ."' maxlength='50' /><br/>
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
    <div class='col-sm-6'>
      <label for='email' ><font color='#6D6E71'>Secondary Ball Color*:</font></label>
      <input type='text' name='Secondary Ball Color' id='ballcolor2' value='".$formproc->SafeDisplay('ballcolor2')."' maxlength='50' /><br/>
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
  </div>
  <div class='row'>
    <div class='col-sm-6'>
      <br>
    </div>
    <div class='col-sm-6'>
      <label for='photo' ><font color='#6D6E71'>Logo Upload*:</font></label>
      <input class='genric-btn primary radius' type='file' name='photo' id='photo' multiple accept value='".$formproc->SafeDisplay('photo')."' maxlength='50' /><br/>
      <span id='contactus_newupload_errorloc' class='error'></span>
    </div>
  </div>
  <div class='row'>
    <div class='col-sm-6'>
      <label for='email' ><font color='#6D6E71'>Quantity*:</font></label>
      <input type='text' name='Quantity' id='qnt' value='".$formproc->SafeDisplay('qnt') ."' maxlength='50' />
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
    <div class='col-sm-6'>
      <label for='email' ><font color='#6D6E71'>In-Hand Date*:</font></label>
      <input type='text' name='In-Hand Date' id='ndate' value='".$formproc->SafeDisplay('ndate') ."' maxlength='50' />
      <span id='contactus_email_errorloc' class='error'></span>
    </div>
  </div>
  <div>
    <label for='message' ><font color='#6D6E71'>Comment Box:</font></label>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea name='message' id='message'>".$formproc->SafeDisplay('message')."</textarea>
    <label for='message' ><font color='#6D6E71'>*Please have decoration information ready to provide to your sales representative. </font></label>
  </div>
  <div style='align:center;width:auto; margin-top:40px;'><center>
    <input class='genric-btn primary radius' type='submit' name='Submit' value='Submit' /></center>
  </div>
";

?>