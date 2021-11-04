<?php
	//  ball formproc
	//This program is free software published under the terms of the GNU Lesser General Public License.
	//See this page for more info: http://www.html-form-guide.com/contact-form/contact-form-attachment.html
	require_once("./include/fgcontactform.php");
	$formproc = new FGContactForm();
	$formproc->AddRecipient('sales@scoresports.com, rebeka@scoresports.com, webmaster@scoresports.com, diseno15@mesquitamaquiladora.com'); 
	//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
	$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
	$formproc->SetFormType('Ball');
	$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
	if(isset($_POST['submitted'])){
		if($formproc->ProcessForm()){
		  $formproc->RedirectToURL("thank-you.php");
		}
	}

?>