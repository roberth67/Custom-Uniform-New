<?php
//Contact Form from HTML Form Guide
  //This program is free software published under the terms of the GNU Lesser General Public License.
  //See this page for more info: http://www.html-form-guide.com/contact-form/contact-form-attachment.html
  require_once("./include/fgcontactform.php");
  $formproc = new FGContactForm();
  //$formproc->AddRecipient('sales@scoresports.com, REBEKA@scoresports.com, CKIESEWETTER@scoresports.com');
  $formproc->AddRecipient('sales@scoresports.com, rebeka@scoresports.com, webmaster@scoresports.com, diseno15@mesquitamaquiladora.com');
  $formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
  $formproc->SetFormType('Uniform');
  $formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
  if(isset($_POST['submitted'])){
     if($formproc->ProcessForm()){
          $formproc->RedirectToURL("thank-you.php");
     }
  }

?>