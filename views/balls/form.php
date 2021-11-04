<?php include 'views/balls/sections/ball-time-frames.php'; ?> <!--  block pricing starting and 4 easy steps block-->
<footer class="footer-area section-gap" id="contact">
      <div class="container">
        <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
          <fieldset >
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <div>
              <h2 align="center" style="margin-top:-10px"><input name="Design" id="design1" value="Design 1" type="hidden"/></h2>
            </div>
            <?php include 'views/data-forms/ball-form.php'; ?> <!--  block request fields -->
      
          </fieldset>
        </form>
        <?php include 'views/balls/ball-terms-conditions.php'; ?> <!--  block terms and condiions, button and modal -->
      </div>
    </footer>